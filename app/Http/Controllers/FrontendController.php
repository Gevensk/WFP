<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function home()
    {
        $datas = Food::all();
        return view("home", compact("datas"));
    }

    public function detail(Request $request, Food $food)
    {
        $this->authorize('detail-permission', Auth::user());
        $data = $food;
        return view("detail", compact("data"));
    }

    public function putCart(Request $request, Food $food){
        // load report array
        $cart = $request->session()->get("cart");
        // create a new array if there are no reports yet
        if (!$cart) {
            $cart = array();
        }
        // determine if this is an insert or update operation
        // by finding if the place's id is already in the array
        $idx = -1;
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]["id"] == $food->id) {
            $idx = $i;
            }
        }
        if ($idx < 0) {
             // add new report
            $cart[] = ["id" => $food->id, "quantity" => $request->quantity];
        } else {
            // update existing report
            $cart[$idx]["quantity"] = $request->quantity;
        }
        // save the report array to session
        $request->session()->put("cart", $cart);
        dd( $request->session()->get("cart")); //remove after this trial
        // redirect to submit page
        return redirect("/cart")->with("status", "Sukses menambah Menu yang dibeli");
    }

    public function cart(Request $request){
        // load report array
        $cart = $request->session()->get("cart");
        // create a new array if there are no reports yet
        if (!$cart) {
            $cart = array();
        }
        // load data for each report
        for ($i = 0; $i < count($cart); $i++) {
            $cart[$i]["food"] = Food::find($cart[$i]["id"]);
        }
        // render submit page with all pending cart
        return view("cart", compact("cart"));
    }

    public function deleteCart(Request $request, Food $food){
        // load cart array
        $cart = $request->session()->get("cart");
        // create a new array if there are no cart yet
        if (!$cart) {
            $cart = array();
        }
        // find if the data's id is already in the array
        $idx = -1;
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]["id"] == $food->id) {
            $idx = $i;
            }
        }
        // delete the report
        if ($idx >= 0) {
            array_splice($cart, $idx, 1);
        }
        // save the new array to the session
        $request->session()->put("cart", $cart);
        // redirect to cart page
        return redirect("/cart")->with("status", "Sukses menghapus data");
    }

}
