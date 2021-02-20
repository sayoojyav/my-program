<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    //
    public function index()
    {
        $datas= Data::latest()->paginate(2);
    	return view('data.index',compact('datas'));

    }
    public function create()
    {
       
    	return view('data.create');
    }
    public function store(Request $request)
    {
    	$this->validate( $request, [
    		'full_name'=>'required|string',
    		'user_login' =>'required',  		
        	'description' => 'required',
        	'number_of_stars' => 'required',
        	'notes'=> 'required|max:100',
        ]);
        Data::create($request->all());
    		return redirect()->route('data.index')->with('sucess','data created successfully');
    }
    public function view(Request $request,$id=false)
    {
     $datas =  Data::findOrFail( $id );
    return view('data.view',['datas'=>$datas]);
   }
}
