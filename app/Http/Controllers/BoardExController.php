<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoardEx;
use App\Http\Requests\BoardExRequest;

class BoardExController extends Controller
{
    private $BoardEx;


    
    public function __construct(BoardEx $BoardEx){

        $this->BoardEx = $BoardEx;
    }


    public function index(){

        $BoardList = $this->BoardEx->latest()->paginate(5);
        //dd($BoardList);

        return view('BoardEx.index', compact('BoardList'));

    }


    public function create(){
        return view('BoardEx.create');
    }

    public function store(BoardExRequest $request){
    
        $validated = $request->validated();
      
        $this->BoardEx->create($validated);
        return redirect()->route('BoardEx.index');


    }



    public function show($id){
        $boardEx = BoardEx::findOrFail($id);
        return view('BoardEx.show',compact('boardEx'));

    }




    public function edit($id){

        $boardEx = BoardEx::findOrFail($id);

        return view('BoardEx.edit', compact('boardEx'));
    }

    public function update(Request $request, BoardEx $boardEx){
    #public function update(Request $request, $id){
         #$boardEx = BoardEx::findOrFail($id);

        $validatedData  = $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);
  

        $boardEx->update($validatedData);
        
        return redirect()->route('BoardEx.index');
    }



    public function destroy(BoardEx $boardEx){
        $boardEx->delete();
        return redirect()->route('BoardEx.index');

    }


}
