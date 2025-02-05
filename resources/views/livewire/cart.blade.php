<div class="p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold mb-4">Shopping Cart</h2>
    <ul>
        @foreach($cartItems as $id => $item)
            <li class="flex justify-between border-b py-2">
                <span>{{ $item['name'] }} - ${{ $item['price'] }}</span>
                <button wire:click="removeItem({{ $id }})" class="text-red-500">Remove</button>
            </li>
        @endforeach
    </ul>
</div>
