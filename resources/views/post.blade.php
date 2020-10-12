@foreach($users as $user)
    <h3> {{ $user->name }} </h3>
        @foreach($user->posts as $post)
            <p>{{ $post->title }}</p>
        @endforeach 
@endforeach


{{-- @foreach($posts as $post)
    <h3> {{ $post->title }} </h3>
    <span>{{ optional($post->user)->name }}</span>
@endforeach --}}
