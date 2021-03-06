<div class="container mx-auto py-16 px-8">
	<div class="mb-4">
		<input type="text" wire:model.lazy="search" placeholder="Search for products">
	</div>
	<table class="table-auto w-full">
		<thead>
			<tr>
				<th class="py-2 px-3 bg-grey-100 border-b-2">ID</th>
				<th class="py-2 px-3 bg-grey-100 border-b-2">Image</th>
				<th class="py-2 px-3 bg-grey-100 border-b-2">Title</th>
				<th class="py-2 px-3 bg-grey-100 border-b-2">Description</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
				<tr>
					<td class="py-2 px-3 border-b-2">{{ $product->id }}</td>
					<td class="py-2 px-3 border-b-2"><img class="w-8" src="{{ $product->image }}"/></td>
					<td class="py-2 px-3 border-b-2">{{ $product->title }}</td>
					<td class="py-2 px-3 border-b-2">{{ $product->description }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $products->links() }}
</div>