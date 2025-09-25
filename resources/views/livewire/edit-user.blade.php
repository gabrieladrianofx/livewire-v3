<form wire:submit="submit">
    <div>
        <input placeholder="Name" wire:model.live='form.name' />
        <div wire:dirty wire:target="form.name">Alterou e nao salvou heim ...</div>
        @error('form.name')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <input placeholder="Email" wire:model.live='form.email' />
        @error('form.email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <input placeholder="Password" wire:model.live='form.password' type="password" />
        @error('form.password')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <input placeholder="Password Confirmation" wire:model.live='form.password_confirmation' type="password" />
    </div>

    <button>Updated User</button>

    <br />

    <span wire:loading wire:target="submit">Submitting....</span>
    <br />

</form>
