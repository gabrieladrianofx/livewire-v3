<form wire:submit="submit">
    <div>
        <input placeholder="Name" wire:model='name' />
        @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <input placeholder="Email" wire:model='email' />
        @error('email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <input placeholder="Password" wire:model='password' type="password" />
        @error('password')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <input placeholder="Password Confirmation" wire:model='password_confirmation' type="password" />
    </div>

    <button>Save User
    </button>

    <br />

    <span wire:loading wire:target="submit">Submitting....</span>
    <br />

</form>
