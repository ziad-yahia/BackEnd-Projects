<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=DB::table('products')->get();

        return view('index',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        
        $newimagename= $request->file('image')->hashName();
        $request->file('image')->move(public_path('images\products'),$newimagename);
        $data=$request->except('image','_token');
        $data['image']=$newimagename;       
        if(DB::table('products')->insert($data))
        {
            return redirect()->route('dashbord.product.index')->with('success','Product Updated seccessfully');
        }else{
            return redirect()->back()->with('error','FAild to Update'); 
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $Products)
    {
        return view('edit',compact(['Products']));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request,Products $Products)
    {    
       
       
        $data=$request->except('image','_token','_method');
   
        if($request->hasFile('image'))
        {
            $newimagename= $request->file('image')->hashName();
            $request->file('image')->move(public_path('images\products'),$newimagename);
            //insert into database
            $data['image']=$newimagename;
            // Delete old image
            $oldimage=$Products->image;
            $oldimagepath=public_path("images\products\\{$oldimage}");

           if(file_exists($oldimagepath)){
            unlink($oldimagepath);
           }
        }        

        
        //update into database
    if(DB::table('products')->where('id',$Products->id)->update($data))
    {
        return redirect()->route('dashbord.product.index')->with('success','Product Updated seccessfully');
    }else{
        return redirect()->back()->with('error','FAild to Update'); 
    }
    
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $Products)
    {  
       
          // Delete old image
          $oldimage=$Products->image;
          $oldimagepath=public_path("images\products\\{$oldimage}");

         if(file_exists($oldimagepath))
         {
            unlink($oldimagepath);
         }

        DB::table('products')->where('id',$Products->id)->delete();

        return redirect()->back()->with('success','Products Delete successfully');
        
    }
}
