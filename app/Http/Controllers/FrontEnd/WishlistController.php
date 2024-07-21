<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Itemwishe;
use App\Models\User;
use App\Models\Wishe;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function App\Http\Helpers\store;

class WishlistController extends Controller
{


    public function index()
    {

        $store = store();
        $wishe = Wishe::currentuser()->with('itemwishes')->first();

        $wishe_list = [];
        if (isset($wishe)) {
            $wishe_list = $wishe->itemwishes()->with('product')->get();
        }


        return view('Frontend.Templete.wishlist', compact('store', 'wishe_list'));
    }


    public function store($id_product)
    {
        $wishe = $this->getWisheListByAuth();

        if (!isset($wishe)) {

            $wishe = $this->createWishe();
        }

        if ($this->getWisheItemByProduct($wishe, $id_product)) {

            notyf()
                ->position('x', 'center')
                ->position('y', 'top')
                ->addError('Product Already  In Wishlist ');
            return redirect()->back();
        }

        $this->createItemWishe($wishe, $id_product);
        notyf()
            ->position('x', 'center')
            ->position('y', 'top')
            ->addSuccess('Product Aded In Wishlist ');

        return redirect()->back();
    }

    public function delete($id)
    {

        $item = $this->getItemWishe($id);
        $item->delete();
        notyf()
            ->position('x', 'center')
            ->position('y', 'top')
            ->addSuccess('Product Deleted In SuccessFully ');
        return redirect()->back();
    }

    private function getItemWishe($id)
    {

        return Itemwishe::find($id);
    }
    private function createWishe()
    {

        return Wishe::create([

            'store_id' => store()->id,
            'user_id' => Auth::guard('web')->user()->id
        ]);
    }

    private function getWisheItemByProduct($wishe, $id_product)
    {


        return $wishe->itemwishes()->where('product_id', $id_product)->first();
    }

    private function createItemWishe($wishe, $id_product)
    {

        Itemwishe::create([

            'wishe_id' => $wishe->id,
            'product_id' => $id_product
        ]);
    }

    private function getWisheListByAuth()
    {

        return  Wishe::where('user_id', Auth::guard('web')->user()->id)->first();
    }
}
