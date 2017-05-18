<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Notebook;
use Illuminate\Http\Request;


class NotebooksController extends Controller
{
    //takes to the view
    public function index(){
    	//model

    	$user= Auth::user();
    	$notebooks= $user->notebooks;
    	//$notebooks= Notebook::all();
    	
    	return view('notebooks.index', compact('notebooks'));
    }
    				//leads to view containing form to create notebook
    public function create(){
 		return view('notebooks.create');
    }

    public function show($id){
    	$notebook= Notebook::findOrfail($id);
    	$notes=$notebook->notes;        
    	return view('notes.index',compact('notes','notebook'));
    }

    public function store(Request $request){
    		$dataInput= $request->all();
    		//Notebook::create($dataInput);
    		$user= Auth::user();
    		$user->notebooks()->create($dataInput);

    		return redirect('/notebooks');

    		//return $request->all(); //imports from form
    }
    	
    public function edit($id){
    	$notebook = Notebook::find($id);
    	
    	return view('notebooks.edit')->with('notebook',$notebook);
    }

    public function update(Request $request, $id){
    	$user= Auth::user();
    	$notebook= $user->notebooks()->find($id);
    	$notebook->update($request->all());
    	return redirect('/notebooks');
    }

    public function destroy($id){    	
    	$user= Auth::user();
    	$notebook= $user->notebooks()->find($id);
    	$notebook->delete();
    	return redirect('/notebooks');
    }




}
