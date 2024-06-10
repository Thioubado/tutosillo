<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    @if (session()->has('info'))
        <x-notification : text="session('info')">
    @endif
</div>