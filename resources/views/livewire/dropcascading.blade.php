<div>
<div class="flex flex-col gap-6 w-[400px] mx-auto py-16">
	
	<select wire:model="selectedContinent" wire:change="changeContinent">
		<option value="-1">Please select continent</option>
		@foreach($continents as $continent)
			<option value="{{$continent->id }}">{{ $continent->name }}</option>
		@endforeach
	</select>
	
	<div class="flex relative">
	<p wire:loading class="absolute left-0 top-0 bottom-0 z-10 bg-white bg-opacity-98 py-2 px-3">
		Loading...
	</p>
		<select class="flex-1 mt-3">
			<option value="-1">Please select country</option>
			@foreach($countries as $country)
				<option value="{{$country->id}}">{{ $country->cname }}</option>
			@endforeach
		</select>
	</div>
</div>
</div>

