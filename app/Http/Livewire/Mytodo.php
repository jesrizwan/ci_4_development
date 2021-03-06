<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;
class Mytodo extends Component
{
	public $item,$title,$tid,$todo;
	public $lists;
    public function render()
    {
		$this->lists=Todo::all();
        return view('livewire.mytodo');
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
  
        $this->lists=Todo::all();
		$this->title='';
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        $this->tid = $id;
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
  
        $todo = Todo::find($this->tid);
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
		$this->lists=Todo::all();
    }
}
