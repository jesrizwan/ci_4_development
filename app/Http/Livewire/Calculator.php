<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
	public $number_1,$number_2,$operator,$sum;
	public function mount()
	{
		$this->sum=0;
		$this->opt='+';
		$this->number_1=0;
		$this->number_2=0;
	}
	public function calculate()
	{
		$action=$this->operator;
		if($action == '+'){
			$num1=(float)$this->number_1;
			$num2=(float)$this->number_2;
			$this->sum=$num1+$num2;
		}
		else if($action == '-'){
			$num1=(float)$this->number_1;
			$num2=(float)$this->number_2;
			$this->sum=$num1-$num2;
		}
		else if($action == '*'){
			$num1=(float)$this->number_1;
			$num2=(float)$this->number_2;
			$this->sum=$num1*$num2;
		}
		else if($action == '/'){
			$num1=(float)$this->number_1;
			$num2=(float)$this->number_2;
			$this->sum=$num1/$num2;
		}
		else if($action == '%'){
			$num1=(float)$this->number_1;
			$num2=(float)$this->number_2;
			$this->sum=$num1%$num2;
		}
		else{
			
			$this->sum=0;
		}
	}
    public function render()
    {
        return view('livewire.calculator');
    }
}
