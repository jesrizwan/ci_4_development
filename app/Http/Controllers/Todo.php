<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class Todo extends Controller
{
	public $title,$id;$todo;
    public function index()
	{
		return view('todolist');
	}
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required'
        ]);
  
        Todo::create($validatedDate);
  
        session()->flash('message', 'Todo Created Successfully.');
  
        
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        $this->id = $id;
        $this->title = $todo->title;
  
        
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
       
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required'
        ]);
  
        $todo = Todo::find($this->id);
        $todo->update([
            'title' => $this->title
        ]);
  
        
        session()->flash('message', 'Todo Updated Successfully.');
        
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Todo::find($id)->delete();
        session()->flash('message', 'Todo Deleted Successfully.');
    }
}
