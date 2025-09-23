<div>
    <input placeholder="primeiro numero" wire:model='num1' />
    <select wire:model="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input placeholder="segundo numero" wire:model='num2' />

    <button wire:click="calculate">Calcular</button>

    <br />

    Resultado: {{ $result }}
</div>
