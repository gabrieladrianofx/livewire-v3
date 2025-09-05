<div>
    Hello, from component !!
    <br>
    Counter :: {{ $counter }}
    <br>
    <input wire:model="counter" />
    <button wire:click="refresh">Refresh</button>
    <br><br>

    Name:: {{ $name }} {{ $lastName }}
    <div>

        <livewire:counter-inline />
    </div>
</div>
