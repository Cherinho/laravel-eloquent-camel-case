@extends('layouts.main')
@section('content')
    <div>
        <a href="{{route('posts.index')}}">{{__('List of Posts')}}</a>
    </div>
@endsection
