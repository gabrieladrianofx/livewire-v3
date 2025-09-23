<div>
    Hello, from component !!
    <br>
    Counter :: {{ $counter }}
    <br>
    <input wire:model.live="counter" />
    <button wire:click="refresh">Refresh</button>
    <br><br>

    <div x-data="">
        <span x-text="$wire.name"></span>
        <button @click="$wire.name = 'jeremias'">test</button>
    </div>

    <br><br>

    Name:: {{ $name }} {{ $lastName }}
    <div>

        <livewire:counter-inline />
    </div>

    <br><br>

    <livewire:user-detail />
</div>
