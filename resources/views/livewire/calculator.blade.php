<div>
    
<div class="flex items-center rounded-md shadow-sm" role="group">
  <input type="text" wire:model="number_1" class="py-2 px-4 text-lg font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
  <select wire:model="operator" class="block p-2 mb-6 bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option value="">Choose Operator </option>
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">x</option>
  <option value="/">/</option>
  <option value="%">%</option>
  </select>
  <input type="text" wire:model="number_2" class="py-2 px-4 text-xl font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
 
  <button type="button" wire:click="calculate" class="py-2 px-4 text-lg font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
    =
  </button>
</div>
 <div class="d-flex mt-3 text-lg">
   Sum of {{ $number_1 }} && {{ $number_2 }} is {{ $sum }}
   </div>
</div>
