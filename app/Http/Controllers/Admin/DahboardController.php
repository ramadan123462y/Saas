<?php

namespace App\Http\Controllers\Admin;

use App\Charts\StoresChart;
use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\Transactionsubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DahboardController extends Controller
{
    public function dashboard(StoresChart $chart)
    {
        $stores = $this->getStoresCountByStatus();

        $unactive = 0;
        $active = 0;

        $active = $this->handelStatusStores($stores, 1);
        $unactive = $this->handelStatusStores($stores, 0);

        return view('Backend.Admin.index', ['chart' => $chart->build($unactive, $active), 'active' => $active, 'unactive' => $unactive]);
    }

    private function handelStatusStores($stores, $status)
    {

        if (isset($stores[$status])) {

            $count = $stores[$status]['count'];
        } else {

            $count = 0;
        }
        return $count;
    }

    private function getStoresCountByStatus()
    {


        return Store::select('active', DB::raw('count(*)  as count'))->groupBy('active')->get();
    }

    public function stores()
    {


        $stores = Store::all();
        return view('Backend.Admin.stores', compact('stores'));
    }

    public function transaction_subscrubtion()
    {

        $transactions = Transactionsubscription::all();

        return view('Backend.Admin.tranactions_subacribtion', compact('transactions'));
    }
}
