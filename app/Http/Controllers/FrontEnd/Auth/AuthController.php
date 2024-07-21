<?php

namespace App\Http\Controllers\FrontEnd\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function App\Http\Helpers\store;

class AuthController extends Controller
{
    public function index_register()
    {
        $store = store();

        return view('Frontend.Templete.Register', compact('store'));
    }
    private function attemptUser($request)
    {


        return  Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
    }

    private function createUser($request)
    {


        return User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    private function authUser($user)
    {
        Auth::guard('web')->login($user);
    }


    private function getUser($email, $password)
    {
        return User::where('password', $password)->where('email', $email)->first();
    }

    private function validateUserInStore($user)
    {


        return store()->users()->where('user_id', $user->id)->first();
    }
    private function assignUserToStore($user)
    {

        store()->users()->attach($user);
    }


    private function getUserByEmail($email)
    {

        return  User::where('email', $email)->first();
    }
    public function store(Request $request)
    {


        if (!$this->attemptUser(($request))) {
            $user = $this->createUser($request);
            $this->assignUserToStore($user);
            $this->authUser($user);
            notyf()
                ->position('x', 'center')
                ->position('y', 'top')
                ->addSuccess('Register SucessFully');
            return redirect('/');
        }
        $user = $this->getUser($request->email, $request->password);

        if ($this->validateUserInStore($user)) {
            return redirect()->back()->withErrors('Already Register');
            $this->authUser($user);
        }
        $this->assignUserToStore($user);
        $this->authUser($user);

        notyf()
            ->position('x', 'center')
            ->position('y', 'top')
            ->addSuccess('Register SucessFully');
        return redirect('/');
    }

    public function index_login()
    {


        return view('Frontend.Templete.Login');
    }

    public function login(Request $request)
    {


        if (!$$this->attemptUser()) {
            return redirect()->back()->withErrors("User Not Found ");
        }
        $user = $this->getUserByEmail($request->email);

        if (!($this->validateUserInStore($user))) {
            return redirect()->back()->withErrors('please Check Data Not Correct In store ');
        }

        $this->authUser($user);
        notyf()
            ->position('x', 'center')
            ->position('y', 'top')
            ->addSuccess('Login SucessFully');
        return redirect('/');
    }




    public function logout()
    {

        Auth::guard('web')->logout();
        return redirect()->back();
    }
}
