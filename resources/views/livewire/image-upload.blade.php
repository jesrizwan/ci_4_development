<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
	<form wire:submit.prevent="save" class="flex flex-col w-[300px] mx-auto py-16">
		@if($image)
			preview:
			<div class="flex flex-wrap justify-center gap-6">
				@foreach($image as $im)
					<img src="{{ $im->temporaryUrl() }}" class="w-[110px] h-[90px] object-cover"/>
				@endforeach
			</div>	
		@endif
		<input type="file" wire:model="image" class="mb-4" multiple/>
		@error('image') <span class="error">{{ $message }} </span> @enderror
		<button type="submit" class="py-2 px-4 bg-indigo-500">Save Photo</button>
	</form>
	<div class="flex flex-wrap gap-7">
		@foreach($images as $image)
			<img src="{{ $image }}" class="w-[110px] h-[90px] object-cover"/>
		@endforeach
	</div>
</div>
