<div class="text-center space-y-2">
    <h1 class="text-3xl font-bold">{{ $count }}</h1>

    <div class="space-x-4">
        <button wire:click="increment" class="px-4 py-2 bg-green-500 text-white rounded">+</button>
        <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded">-</button>
    </div>
</div>
