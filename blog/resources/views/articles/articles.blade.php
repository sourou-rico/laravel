@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')
    <h1 class="text-2xl font-bold mb-6">Articles</h1>

    @foreach ($articles as $article)
        <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
            <a href="/article/{{ $article->id }}" class="hover:text-blue-600">
                <h2 class="text-xl font-semibold mb-3">{{ $article->title }}</h2>
            </a>
            <p class="text-gray-700 mb-4">{{ $article->body }}</p>
            <p class="text-sm text-gray-600">Auteur : {{ $article->user->name }}</p>
            <p class="text-sm text-gray-600">Publié le : {{ $article->created_at->format('d/m/Y') }}</p>
        </div>
    @endforeach
@endsection
