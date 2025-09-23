<div>
    ois
    @foreach ($this->users as $user)
        <li>{{ $user->name }} || {{ $user->email }}</li>
    @endforeach

    {{ $this->users->links() }}
</div>
