{{-- @foreach($posts as $post)
    <h3> {{ $post->title }} </h3>
    <ul>
        @foreach($post->tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach 
    </ul>   
@endforeach --}}

@foreach($tags as $tag)
    <h3> {{ $tag->name }} </h3>
    <ul>
        @foreach($tag->posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach 
    </ul>   
@endforeach