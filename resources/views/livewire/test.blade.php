<div>
    <input wire:model.live="search"/>

    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>
</div>
