<?php

namespace App\Http\Controllers\Saller;

use App\Facades\PayMobFacade;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Plan;
use App\Models\Saller;
use App\Models\Store;
use App\Models\Subscrubtion;
use App\Models\Transactionsubscription;
use App\Notifications\CreateStoreNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function index_login()
    {


        return view('Backend.Saller.login');
    }
    public function create_store()
    {


        return view('Backend.Saller.register');
    }



    public function store(Request $request)
    {


        $store =  $this->createStore($request);


        $this->createSaller($request, $store);

        $admins = Admin::get();
        $store = $this->getStoreWithSaller($store);

        Notification::sendNow($admins, new CreateStoreNotification($store));

        return redirect("saller/register_plan/$store->id");
    }

    public function register_plan($store_id)
    {

        $plans = Plan::all();
        $store_id = $store_id;
        return view('Backend.Saller.register_plan', compact('plans', 'store_id'));
    }




    public function go_to_pay(Request $request,  $store_id, $plan_id)
    {

        //   "type": "Pay With Card"

        $api_key = env('paymob_api_key');


        $plan = Plan::find($plan_id);

        $jsonString_order = '{

                            "delivery_needed": "false",
                            "amount_cents": "' . $plan->price . '",
                            "currency": "EGP",
                            "items": [
                            ]
                            }';
        $jsonString_key = '{
                            "amount_cents": "' . $plan->price . '",
                            "expiration": 3600,
                            "billing_data": {
                            "apartment": "803",
                            "email": "eee@exa.com",
                            "floor": "52",
                            "first_name": "dsf",
                            "street": "ee Laasfand",
                            "building": "asf",
                            "phone_number": "+86(8)9135210487",
                            "shipping_method": "PKG",
                            "postal_code": "01898",
                            "city": "Jaskolskiburgh",
                            "country": "CR",
                            "last_name": "Nicolas",
                            "state": "Utah"
                            },
                            "currency": "EGP",
                            "integration_id": 4599196

                                    }';


        $paymob = PayMobFacade::auth_token($api_key)->create_order($jsonString_order);
        $payment_id = $paymob['order_id'];

        $subscrube =  $this->createSubscrubtion($plan_id);

        $this->updateStoreById($store_id, $plan_id, $subscrube);

        $this->createTransactionsubscription($store_id, $subscrube, $payment_id);

        if ($request->type == 'Pay With Card') {


            return $paymob['object']->create_key($jsonString_key)->Paywith_card();
        }
        return $paymob['object']->create_key($jsonString_key)->Paywith_wallet('01010101010');
    }

    public function store_subscrubtion(Request $request)
    {



        $payment_id = '221101343';
        $tranaction = Transactionsubscription::where('payment_id', $payment_id)->first();

        $this->activeStore($tranaction);
        $this->updateTransactionsubscriptionPay($tranaction);
        return "ok SubScrubtion";
    }


    public function login(Request $request)
    {
        $saller = $this->attemptAuth($request);
        if ($saller == true) {

            $saller = $this->sallerByEmail($request);

            $result = $this->authSaller($saller);

            $sub_domain = $saller->store->sub_domain;

            return redirect()->to("http://$sub_domain." . env('Domain') . "/saller/dashboard");
        } else {

            flash()->addError('Data Not Found To Store');

            return redirect()->back();
        }
    }

    public function logout()
    {

        Auth::guard('saller')->logout();
        return redirect('saller/login');
    }
    private function attemptAuth($request)
    {

        return Auth::guard('saller')->attempt([

            'email' => $request->email,
            'password' => $request->password
        ]);
    }
    private function authSaller($saller)
    {

        Auth::guard('saller')->login($saller);
    }

    private function sallerByEmail($request)
    {

        return Saller::where('email', $request->email)->first();
    }
    private function getTransactionsubscription($payment_id)
    {
        return Transactionsubscription::where('payment_id', $payment_id)->first();
    }
    private function updateTransactionsubscriptionPay($tranaction)
    {

        $tranaction->update([

            'status_pay' => 'pay'
        ]);
    }

    private function activeStore($tranaction)
    {

        Store::find($tranaction->store_id)->update([
            'active' => 1,

        ]);
    }

    private function createStore($request)
    {
        return   Store::create([

            'title' => $request->title,
            'sub_domain' => "$request->sub_domain",
            'active' => 1,


        ]);
    }

    private function createSaller($request, $store)
    {

        Saller::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'store_id' => $store->id

        ]);
    }

    private function getStoreWithSaller($store)
    {

        return $store->with('saller')->first();
    }

    private function createSubscrubtion($plan_id)
    {

        return  Subscrubtion::create([
            'plan_id' => $plan_id,

        ]);
    }
    private function updateStoreById($store_id, $plan_id, $subscrube)
    {

        Store::find($store_id)->update([

            'plan_id' => $plan_id,
            'subscrubtion_id' => $subscrube->id,
            'active' => 0,

        ]);
    }

    private function createTransactionsubscription($store_id, $subscrube, $payment_id)
    {

        return    Transactionsubscription::create([


            'store_id' => $store_id,
            'subscrubtion_id' => $subscrube->id,
            'payment_id' => $payment_id,
        ]);
    }
}
