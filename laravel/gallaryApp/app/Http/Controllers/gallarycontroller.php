<?php

namespace App\Http\Controllers;

use App\Models\gallary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class gallarycontroller extends Controller
{
   
    
    //--------------------------------------------- 
    public function index()
    {
      
    }

    //------------------------------------------------
    public function create()
    {
        return view('gallerycreate');
    }

    //----------------------------------------------
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'cover'=>'required'
        ]);
        $gallary = new gallary();

        $gallary->title= strip_tags($request->title);
        $gallary->description= strip_tags($request->description);
        $gallary->user_id=Auth::user()->id;

        $cover=$request->file('cover');
        $cover_extention=$cover->getClientOriginalExtension();
        $cover_name=rand('123456','999999') . '.' .$cover_extention;
        $cover_path=public_path('galleries/');
        $cover->move($cover_path,$cover_name);

        $gallary->cover=$cover_name;
        $gallary->save();

        return redirect(route('home'));
       
    }

    //-------------------------------------------------
    public function show( $id)
    {   
        $gallary= gallary::find($id);
        return view('show',compact('gallary'));
    }

    //------------------------------------------------
    public function edit($id)
    {
        $gallary= gallary::find($id);
       return view('edit',compact('gallary')) ;
    }

    //---------------------------------------------------------
    public function update(Request $request,  $id)
    {
       
       
        $gallary=gallary::find($id);


        $gallary->title= strip_tags($request->title);
        $gallary->description= strip_tags($request->description);
        $gallary_cover=$gallary->cover;
        if($request->hasFile('cover'))
        {
            unlink(public_path('galleries/'.$gallary_cover));
            $cover=$request->cover;
            $cover_extention=$cover->getClientOriginalExtension();
            $cover_name=rand('123456','999999') . '.' .$cover_extention;
            $cover_path=public_path('galleries/');
            $cover->move($cover_path,$cover_name);
            $gallary->cover=$cover_name;
        }else{
            $gallary->cover=$request->cover;
        }
        $gallary->save();
       return redirect()->route('gallery.show',$gallary);
    
    }

    //------------------------------------------------------
    public function destroy( $id)
    { 
        $gallary=gallary::find($id);

        $gallary_cover=$gallary->cover;
        unlink(public_path('galleries/'.$gallary_cover));
        $gallary->delete();
        return redirect(route('home'));


    }
}
