<form wire:submit="submit">
    <div>
        <input placeholder="Name" wire:model.live='name' />
        @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <input placeholder="Email" wire:model.live='email' />
        @error('email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <input placeholder="Password" wire:model.live='password' type="password" />
        @error('password')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <input placeholder="Password Confirmation" wire:model.live='password_confirmation' type="password" />
    </div>

    <button>Save User
    </button>

    <br />

    <span wire:loading wire:target="submit">Submitting....</span>
    <br />

</form>
