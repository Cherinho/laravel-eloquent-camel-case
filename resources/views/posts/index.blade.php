@extends('layouts.main')
@section('content')
    <section>
        <a href="{{route('posts.create')}}">{{__('Create new Post')}}</a>
        <hr>
        <table>
            <thead>
            <tr>
                <th>{{__('ID')}}</th>
                <th>{{__('Author Name')}}</th>
                <th>{{__('Author Sign')}}</th>
                <th>{{__('Content')}}</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->authorName}}</td>
                    <td>{{$post->authorSign}}</td>
                    <td>{{$post->postContent}}</td>
                    <td><a href="{{route('posts.show', $post)}}">{{__('View')}}</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">{{__('You doesn\'t have any posts yet. Create one first')}}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </section>
@endsection
