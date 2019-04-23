<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;
use App\Models\DriverOrder;
use App\Models\Driver;
use App\Models\Gallery;
use App\Models\Order;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
      $order = Order::where('status', 'waiting')->get();
      $orderWaiting = count($order);
      $travel = DriverOrder::all();
      $travel = count($travel);
      return view('admin/welcome')->with('orderWaiting', $orderWaiting)->with('travel', $travel);
    }

    public function notification(){
      $data = Order::with('package')->where('status', 'waiting')->get();
      return $data;
    }

    public function order(){
      if(isset($_GET['filter'])){
        if($_GET['filter'] == 'done'){
          $order = Order::where('status','done')->orderBy('created_at','desc')->get();
        }elseif($_GET['filter'] == 'waiting'){
          $order = Order::where('status','waiting')->orderBy('created_at','desc')->get();
        }
      }else{
        $order = Order::where('status','waiting')->orderBy('created_at','desc')->get();
      }

      $driver = Driver::all();
      return view('admin/order')->with('order', $order)->with('driver', $driver);
    }

    public function takeOrder(Request $request, $id){
      $order = Order::where('id', $id)->first();
      $order->status = "done";
      $order->confirmation_at = Carbon::now()->setTimezone('Asia/Jakarta');
      $order->save();
      DriverOrder::create([
        'id_driver' => $request->driver,
        'id_order' => $id
      ]);

      session()->flash('message', 'Pesanan berhasil diambil!');
      return back();
    }

    public function payment(){
      $data = DriverOrder::orderBy('id_order','desc')->get();
      return view('admin/payment')->with('travel', $data);
    }

    public function printPayment($id){
      $data = DriverOrder::where('id_order', $id)->first();

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

      return view('admin/print_payment')->with('data', $data)->with('myr', $myr)->with('idr', $idr)->with('sgd', $sgd);
    }

    public function driver(){
      $driver = Driver::all();
      return view('admin/driver')->with('driver', $driver);
    }

    public function storeDriver(Request $request){
      $this->validate($request,[
        'name' => 'required',
        'type_car' => 'required',
        'plate_car' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'photo' => 'mimes:jpeg,jpg,png|max:10000'
      ]);

      $driver = Driver::where('phone', $request->phone)->first();

      if(isset($driver)){
        return back()->with('message', 'Driver dengan nomor ini sudah terdaftar!');
      }

      if (isset($request->photo)) {

        $thumbnail      = $request->file('photo');
        $filename      = 'driver_' . str_slug($request->photo).'_'.time() . '.' . $thumbnail->getClientOriginalExtension();
        $small          = 'storage/driver/' . $filename;
        $createSmall   = Image::make($thumbnail)->resize(700, 700)->save($small);
      }else{
        $filename = 'github.png';
      }

      Driver::create([
        'name' => $request->name,
        'type_car' => $request->type_car,
        'plate_car' => $request->plate_car,
        'phone' => $request->phone,
        'email' => $request->email,
        'photo' => $filename
      ]);

      session()->flash('message', 'Berhasil menambah driver!');
      return back();
    }

    public function updateDriver(Request $request, $id){
      $this->validate($request,[
        'name' => 'required',
        'type_car' => 'required',
        'plate_car' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'photo' => 'mimes:jpeg,jpg,png|max:10000'
      ]);

      $driver = Driver::where('id', $id)->first();

      if (isset($request->photo)) {
        if(file_exists(public_path('storage/driver/'. $driver->photo))){
          unlink(public_path('storage/driver/'. $driver->photo));
        }
        $thumbnail      = $request->file('photo');
        $filename      = 'driver_' . str_slug($request->photo).'_'.time() . '.' . $thumbnail->getClientOriginalExtension();
        $small          = 'storage/driver/' . $filename;
        $createSmall   = Image::make($thumbnail)->resize(700, 700)->save($small);
      }else{
        $filename = $driver->photo;
      }

      $driver->name = $request->name;
      $driver->type_car = $request->type_car;
      $driver->plate_car = $request->plate_car;
      $driver->phone = $request->phone;
      $driver->email = $request->email;
      $driver->photo = $filename;
      $driver->save();

      session()->flash('message', 'Berhasil mengubah data driver!');
      return back();
    }

    public function destroyDriver($id){

      Driver::destroy($id);
      session()->flash('message', 'Berhasil menghapus data driver!');
      return back();
    }

    public function travel(){
      $data = DriverOrder::orderBy('id_order','desc')->get();
      return view('admin/travel')->with('travel', $data);
    }

    public function printTravel($id){
      $data = DriverOrder::where('id_order', $id)->first();

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

      return view('admin/print_travel')->with('data', $data)->with('myr', $myr)->with('idr', $idr)->with('sgd', $sgd);
    }

    public function indexGallery(){
      $gallery = Gallery::all();
      return view('admin/gallery')->with('gallery', $gallery);
    }

    public function storeGallery(Request $request){
      $this->validate($request,[
        'title' => 'required',
        'photo' => 'required',
        'editor1' => 'required'
      ]);

      if (isset($request->photo)) {
        $thumbnail      = $request->file('photo');
        $filename      = 'driver_' . str_slug($request->photo).'_'.time() . '.' . $thumbnail->getClientOriginalExtension();
        $small          = 'storage/gallery/' . $filename;
        $createSmall   = Image::make($thumbnail)->resize(800, 600)->save($small);
      }else{
        $filename = 'air.jpg';
      }

      Gallery::create([
        'title' => $request->title,
        'photo' => $filename,
        'description' => $request->editor1
      ]);

      session()->flash('message', 'Berhasil menambah postingan baru!');
      return back();
    }

    public function destroyGallery($id){
      $gallery = Gallery::where('id', $id)->first();
      if(file_exists(public_path('storage/gallery/'. $gallery->photo))){
        unlink(public_path('storage/gallery/'. $gallery->photo));
      }

      Gallery::destroy($id);

      session()->flash('message', 'Berhasil menghapus postingan!');
      return back();
    }

    public function updateGallery(Request $request, $id){
      $editor = 'editor' . $id;
      $gallery = Gallery::where('id', $id)->first();
      $gallery->title = $request->title;
      $gallery->description = $request->$editor;
      $gallery->save();

      session()->flash('message', 'Berhasil mengubah postingan!');
      return back();
    }
}
