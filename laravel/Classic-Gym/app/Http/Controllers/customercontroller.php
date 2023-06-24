<?php

namespace App\Http\Controllers;

use App\Http\Requests\customerrequest;
use App\Models\customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class customercontroller extends Controller
{

    public function __construct()
    {
         $this->middleware('owner')->only(['show','edit','destroy']);
    }

    public function expire(){
        $customer= customer::get();

        // $today=Carbon::today();
      
        return view('expiredate',compact(['customer']));
    }
    
    public function index()
    {
        $customer= customer::get();
        return view('allcustomer',compact('customer'));
    }

   
    public function create()
    {
        return view('components.create');
    }

   
    public function store(customerrequest $request)
    {

    // $customer = new customer;
    // $customer->name = $request->name;
    // $customer->phone = $request->phone;
    // $customer->price = $request->price;
    // $customer->subscribe = $request->subscribe;
    // $customer->statue = $request->statue;
    // $customer->expiredate = $request->expiredate;
    // $customer->save();

    $customer = customer::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'price' => $request->price,
        'subscribe' => $request->subscribe,
        'statue' => $request->statue,
        'user_id'=> auth()->user()->id,
        'expiredate' => $request->expiredate,
    ]);
    return redirect(route('customer.index'));
   
    
    }

   
    public function show(customer $customer)
    {
        return view('allcustomer',compact('customer'));
    }

   
    public function edit(customer $customer)
    {
        return view('components.Edite',compact(['customer']));
    }

   
    public function update(customerrequest $request, customer $customer)
    {
    //     customer::where('id',$customer)->update([
    //         'name' => $request->name,
    //         'phone' => $request->phone,
    //         'price' => $request->price,
    //         'subscribe' => $request->subscribe,
    //         'statue' => $request->statue,
    //         'user_id'=>auth()->user()->id,
    //         'expiredate' => $request->expiredate,
    //    ]);
    
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->price = $request->price;
        $customer->subscribe = $request->subscribe;
        $customer->statue = $request->statue;
        $customer->expiredate = $request->expiredate;
        $customer->update();   
        return redirect()->route('customer.index');
    }

    
    public function destroy(customer $customer)
    {
        $customer->delete();
        return redirect(route('customer.index'));
        
    }
}
