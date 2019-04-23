<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Order;
use App\Models\Gallery;
use Carbon\Carbon;

class GuestController extends Controller
{
    public function trip(){
      $trip = Package::where('name', 'trip')->get();

      $endpoint = 'latest';
      $access_key = 'ccc21146f20bc34afd9f6c4a939129df';

      // Initialize CURL:
      $ch = curl_init('http://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      // Store the data:
      $json = curl_exec($ch);
      curl_close($ch);

      // Decode JSON response:
      $exchangeRates = json_decode($json, true);

      // Access the exchange rate values, e.g. GBP:
      $eur = 1/$exchangeRates['rates']['USD'];
      $sgd = $eur * $exchangeRates['rates']['SGD'];
      $myr = $eur * $exchangeRates['rates']['MYR'];
      $idr = $eur * $exchangeRates['rates']['IDR'];

      return view('guest/trip')->with('trip', $trip)->with('myr', $myr)->with('idr', $idr)->with('sgd', $sgd);
    }

    public function orderTrip($ray, $id){
      $trip = Package::where('id', $id)->first();
      return view('guest/trip_order')->with('trip', $trip)->with('ray', $ray);
    }

    public function saveOrderTrip(Request $request, $ray, $id){
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'date' => 'date'
      ]);

      $date = Carbon::parse($request->date)->format('Y-m-d');

      $order = Order::create([
        'id_package' => $id,
        'ray' => $ray,
        'customer' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'date' => $date,
        'created_at' => Carbon::now()->setTimezone('Asia/Jakarta')
      ]);

      return redirect('order-success/'. $order->id);
    }

    public function orderSuccess($id){
      $order = Order::where('id', $id)->first();
      return view('guest/order_success')->with('order', $order);
    }

    public function private(){
      $rental = Package::where('name', 'rental')->get();

      $endpoint = 'latest';
      $access_key = 'ccc21146f20bc34afd9f6c4a939129df';

      // Initialize CURL:
      $ch = curl_init('http://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      // Store the data:
      $json = curl_exec($ch);
      curl_close($ch);

      // Decode JSON response:
      $exchangeRates = json_decode($json, true);

      // Access the exchange rate values, e.g. GBP:
      $eur = 1/$exchangeRates['rates']['USD'];
      $sgd = $eur * $exchangeRates['rates']['SGD'];
      $myr = $eur * $exchangeRates['rates']['MYR'];
      $idr = $eur * $exchangeRates['rates']['IDR'];

      return view('guest/private')->with('rental', $rental)->with('myr', $myr)->with('idr', $idr)->with('sgd', $sgd);
    }

    public function orderPrivate($ray, $id){
      $trip = Package::where('id', $id)->first();
      return view('guest/private_order')->with('trip', $trip)->with('ray', $ray);
    }

    public function saveOrderPrivate(Request $request, $ray, $id){
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
      ]);

      $date = Carbon::parse($request->date)->format('Y-m-d');

      $order = Order::create([
        'id_package' => $id,
        'ray' => $ray,
        'customer' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'date' => $date,
        'created_at' => Carbon::now()->setTimezone('Asia/Jakarta')
      ]);

      return redirect('order-success/'. $order->id);
    }

    public function gallery(){
      $gallery = Gallery::all();
      return view('guest/gallery')->with('gallery', $gallery);
    }
}
