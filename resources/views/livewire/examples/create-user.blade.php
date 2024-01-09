<div>
    Create User inside the Counter
    <p class="lead">{{$name}}</p>
    <p>{{$email}}</p>
    <p>{{$address}}</p>

    {{-- binding the input values --}}
    {{-- this will update the value of name in php file --}}
    <input type="text" wire:model='name'/>
    {{-- this is reactive it will show the live modification --}}
    <input type="text" wire:model.live='name' />

    @foreach ($users as $user)
    {{-- wire:key is used to keep tack of the component so it cant get confuse --}}
        <div wire:key='{{$user->id}}'>
            <p>
                {{$user->name}}
            </p>
        </div>
    @endforeach
</div>
