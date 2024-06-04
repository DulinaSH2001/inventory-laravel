<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;

class ItemController extends Controller
{
    protected $task;
    public function __construct(){
        $this->task = new items();
    }
    public function index(){
        $res['tasks'] = $this->task->all();
        return  view('components.index')->with($res);
    }
    public function add(){
        return view('components.addItem');
    }
    public function insert(Request $request){
       $this->task->create($request->all());
       return redirect()->route('index');
    }
    public function delete($id){
        $this->task->destroy($id);
        return redirect()->route('index');
    }
    public function update($id){
        $task = $this->task->find($id);
        return view('components.editItem',['task'=>$task]);
        
    }
    public function edit(Request $request, $id){
        $task = Items::find($id); // Ensure the model name matches
        $task->update($request->all());
        return redirect()->route('index')->with("Task Updated Successfully");
    }

    public function view($id)
    {
        $task = Items::findOrFail($id);
        return view('components.viewItem',['task'=>$task]);
    }
}