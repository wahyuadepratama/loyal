<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;
use App\Models\DriverOrder;
use App\Models\Driver;
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
      return view('admin/print_payment')->with('data', $data);
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
        $filename = $driver->photo;
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
      return view('admin/print_travel')->with('data', $data);
    }
}
