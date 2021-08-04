@extends('layouts.main')
@section('content')
    <section>
        <a href="{{route('posts.index')}}">{{__('Back to Posts List')}}</a>
        <form action="{{route('posts.create')}}" method="POST">
            @csrf
            <label>
                {{__('Author Name')}}
                <input type="text" name="authorName" value="{{old('authorName')}}">
            </label>
            <br>
            @error('authorName')
            <p>{{$message}}</p>
            @enderror
            <label>
                {{__('Author Sign')}}
                <input type="text" name="authorSign" value="{{old('authorSign')}}">
            </label>
            <br>
            @error('authorSign')
            <p>{{$message}}</p>
            @enderror
            <label>
                {{__('Content')}}
                <textarea name="postContent" cols="70" rows="25">
                    {{old('postContent')}}
                </textarea>
            </label>
            <br>
            @error('postContent')
            <p>{{$message}}</p>
            @enderror
            <button type="submit">{{__('Create')}}</button>
        </form>
    </section>
@endsection
