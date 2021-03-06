<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Continents;
use App\Models\Countries;
class Dropcascading extends Component
{
	public $continents=[];
	public $countries=[];
	public $selectedContinent=0;
	public function changeContinent()
	{
		if($this->selectedContinent != '-1'){
			
			$this->countries=Countries::where('cid',$this->selectedContinent)->get();
		}
	}
	public function mount()
	{
		$this->continents=Continents::all();
	}
    public function render()
    {
        return view('livewire.dropcascading');
    }
}
