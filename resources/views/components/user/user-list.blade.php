<div {{$attributes}} >
    <div class="container">
        @if($type === 'lista')
            <ul class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item">
                        {{$user->name}}
                    </li>
                @endforeach
            </ul>
        @elseif($type === 'card')
            @foreach($users as $user)
                <div class="card mb-2 shadow bg-{{$isSelected($user->id) ? 'info' : $cardClass}}">
                    <div class="card-body">
                        {{$user->name}}
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
