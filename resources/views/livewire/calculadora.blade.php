<form wire:submit="calculate">
    <input placeholder="primeiro numero" wire:model='num1' wire:keydown.y="naoQueroY" />
    <select wire:model="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input placeholder="segundo numero" wire:model='num2' />

    <button type="submit">
        <span wire:loading.class="hidden" wire:target="calculate">Calcular</span>
        <span wire:loading wire:target="calculate">Calculando....</span>
    </button>

    <button type="button" wire:click="add10('num1')">
        Add 10 num 1
    </button>

    <button type="button" wire:click="add10('num2')">
        Add 10 num 2
    </button>

    <br />

    <span wire:loading wire:target="calculate">Calculando....</span>
    <br />

    Resultado: {{ $result }}
</form>
