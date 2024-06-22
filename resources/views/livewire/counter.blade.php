<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <button wire:click="decrement(2)">-</button>

    count : {{ $count }}
    <button wire:click="increment(2)">+</button>
</div>
