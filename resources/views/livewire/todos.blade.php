<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <form wire:submit="add">
        <input type="text" wire:model.live="todo">

        <span>Current todo:{{ $todo }}</span>
        <button type="submit">Add</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
