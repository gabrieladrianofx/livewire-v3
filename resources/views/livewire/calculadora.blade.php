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

    <br />

    <span wire:loading wire:target="calculate">Calculando....</span>
    <br />

    Resultado: {{ $result }}
</form>
