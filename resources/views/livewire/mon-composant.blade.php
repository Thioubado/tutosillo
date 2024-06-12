{{-- <div>
    {{-- The Master doesn't talk, he acts. --}}
    {{-- <p>coucou</p> --}}
{{-- </div> --}}

<div>
    <input type="text" wire:model.live="message"/>
    <p>{{ $message }}</p>
</div>