<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\BuktiPembayaran;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function add_to_chart()
    {
        return view("add-to-chart", [
            "product" => Product::all()
        ]);
    }

    public function order(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(["message" => "Please login first"], 500);
        }

        $va_number = rand(10000000000, 99999999999);
        foreach ($request->product as $product) {
            Cart::create([
                "user_id" => Auth::user()->id,
                "product_id" => $product["id"],
                "va_number" => $va_number,
            ]);
        }
        return response()->json([], 200);
    }

    public function payment()
    {
        $total_pembayaran = 0;
        foreach (Cart::where("user_id", Auth::user()->id)->get() as $cart) {
            $total_pembayaran += $cart->product->price;
        }
        return view("payment", [
            "cart" => Cart::where("user_id", Auth::user()->id)->get(),
            "total_pembayaran" => $total_pembayaran,
        ]);
    }

    public function payment_confirm(Request $request)
    {
        Mail::to("anugrahrizki96666@gmail.com")->send(new sendEmail($request->img_url));
        Cart::where("user_id", auth()->user()->id)->delete();
        return redirect("/thank-you");
    }

    public function thank_you()
    {
        return view("thank-you");
    }
}
