<a href="{{ route('users.show',$user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar">
    <h1>{{ $user->name }}</h1>
</a>