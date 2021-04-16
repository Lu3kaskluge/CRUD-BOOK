<div style="margin:auto" class="shadow md:shadow-md bg-white text-center w-2/12 rounded backdrop-filter backdrop-blur-lg">
    <button wire:click="increment" class="font-semibold cursor-pointer text-white uppercase bg-blue-600 px-3 my-3">+</button>
    <h1>{{ $count }}</h1>
    <button wire:click="decrement" class="font-semibold cursor-pointer text-white uppercase bg-blue-600 px-3 my-3">-</button>
</div>