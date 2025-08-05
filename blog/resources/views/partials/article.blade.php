@extends('layouts.master')

@section('title')
    <title>Articles</title>

@endsection

@section('content')


    <a href="/article/{{ $article->id }}">
        <h2>{{ $article->title }}</h2>
    </a>
    
@endsection
