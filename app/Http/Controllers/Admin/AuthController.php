<?php

namespace App\Http\Controllers\Admin;

use App\Charts\StoresChart;
use App\Events\Vertification;
use App\Http\Controllers\Controller;
use App\Jobs\Sendmail;
use App\Models\Admin;
use App\Models\Store;
use App\Models\User;
use App\Notifications\Verificationcode;
use App\Services\ThirdPartyApi\Whatsapp;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function index_login()
    {

        return view('Backend.Admin.login');
    }

    public function login(Request $request)
    {

        $this->validationLoginRequest($request);

        if (!$this->attemptLogin($request)) {

            flash()->addError('Data Not Found To Admin');
            return redirect()->back();
        }

        $admin = $this->getAdminByEmail($request);
        $code_rand = $this->generateVertificationCode($admin);

        event(new Vertification($admin, $code_rand));

        return redirect('admin/verificationcode')->with('admin_id_to_code', $admin->id);
    }



    public function verificationcode()
    {
        $admin_id_to_code = Session::get('admin_id_to_code');

        return view('Backend.Admin.verificationcode', compact('admin_id_to_code'));
    }

    public function checkVertificationCode(Request $request)
    {
        $code = $this->extractCodeFromRequest($request);

        $admin = $this->getAuthAdmin();

        $verificationcode = $this->getLatestVertificationCode($admin);

        if (!$this->isCodeValid($code, $verificationcode)) {
            flash()->addError('Your OTP is not correct');
            return redirect()->back();
        }
        $this->invalidDateVertificationCode($verificationcode);

        return redirect('admin/dashboard');
    }


    // login with socail
    public function redirect($driver)
    {

        return Socialite::driver("$driver")->redirect();
    }

    public function callback($driver)
    {

        $user = Socialite::driver($driver)->user();

        $admin = $this->findAdminByEmail($user);

        if (!isset($admin)) {
            flash()->addError('Data Not Found To Admin');
            return redirect('admin/login');
        }

        $this->loginAdmin($admin);

        return redirect('admin/dashboard');
    }

    private function loginAdmin($admin)
    {
        Auth::guard('admin')->login($admin);
    }

    private function findAdminByEmail($user)
    {

        return Admin::where('email', $user->email)->first();
    }

    public function logout()
    {

        $this->logoutAdmin();
        flash()->addSuccess('Logout SucessFully');
        return redirect('admin/login');
    }

    private function logoutAdmin()
    {

        Auth::guard('admin')->logout();
    }


    private function invalidDateVertificationCode($verificationcode)
    {

        $verificationcode->update([

            'otp' => null
        ]);
    }


    private function isCodeValid($code, $verificationcode)
    {

        return $code == $verificationcode->otp;
    }

    private function getLatestVertificationCode($admin)
    {
        return  $admin->verificationcode()->latest()->first();
    }

    private function getAuthAdmin()
    {

        $admin = Admin::find(Auth::guard('admin')->user()->id);
        return $admin;
    }

    private function extractCodeFromRequest($request)
    {

        if (isset($request->code)) {

            $code = $request->code;
        } else {

            $code = implode('', $request->number);
        }
        return $code;
    }


    private function generateVertificationCode($admin)
    {

        $code_rand = rand(1000, 9999);
        $admin->verificationcode()->updateOrCreate([

            'admin_id'   => $admin->id,
        ], [

            'otp' => $code_rand,
            'expire_at' => Carbon::now()->addMinutes(10),
        ]);

        return $code_rand;
    }

    private function getAdminByEmail($request)
    {

        return Admin::where('email', $request->email)->first();
    }

    private function validationLoginRequest($request)
    {

        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);
    }

    private function attemptLogin($request)
    {

        return Auth::guard('admin')->attempt([

            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
}
