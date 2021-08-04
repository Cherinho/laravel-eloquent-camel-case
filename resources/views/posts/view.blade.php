@extends('layouts.main')
@section('content')
    <section>
        <a href="{{route('posts.index')}}">{{__('Back to Posts List')}}</a>
        <p><b>{{__('Author Name')}}</b></p>
        <p>{{$post->author_name}}</p>
        <hr><br>
        <p><b>{{__('Author Sign')}}</b></p>
        <p>{{$post->author_sign}}</p>
        <hr><br>
        <p><b>{{__('Post Content')}}</b></p>
        <p>{{$post->post_content}}</p>
    </section>
@endsection
