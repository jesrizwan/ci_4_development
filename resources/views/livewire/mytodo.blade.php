<div>
  <div class="d-flex rounded-md shadow-sm mb-3">
	@if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>  
<div class="flex items-center rounded-md shadow-sm" role="group">
<form>
  <input type="text" placeholder="Enter title" wire:model="title" class="py-2 px-4 text-xl font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
  <button type="submit" wire:click.prevent="store()" class="py-2 px-4 text-lg font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
    Add
  </button>
  @error('title') <span class="text-danger">{{ $message }}</span>@enderror
  </form>
</div>
 <div class="d-flex mt-3 text-lg">
 <ul class="ml-4 list-disc dark:text-gray-400">
	 @foreach($lists as $l)
	 <li>{{ $l->title }} <a wire:click="delete({{ $l->id }})" href="#" class="ml-4 text-red-600 float-right">Delete</a></li>
	 @endforeach
 </ul>
   </div>
</div>
