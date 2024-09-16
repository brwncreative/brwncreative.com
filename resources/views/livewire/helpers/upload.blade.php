<div>
    @if ($methods)
        @foreach ($methods as $method)
            <p>{{ $method }}</p>
        @endforeach
    @endif

    <img src="{{ $image ? $image->temporaryUrl() : '' }}" alt="Image">
    <input wire:model='image' type="file"><button wire:click='test'>Test</button>
</div>
