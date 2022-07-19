<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use Livewire\WithPagination;
class ProductSearch extends Component
{
	use WithPagination;
	public string $search='';
	protected $queryString=['search'];
    public function render()
    {
		$query=Products::query();
		if($this->search)
		{
			$query->where('title','like',"%{$this->search}%")
				  ->orWhere('description','like',"%{$this->search}%");
		}
        return view('livewire.product-search',['products'=>$query->paginate(5)]);
    }
	public function updated($property)
	{
		if($property =='search')
		{
			$this->resetPage();
		}
	}
}
