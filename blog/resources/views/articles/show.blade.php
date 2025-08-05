@extends('layouts.master')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <!-- Article -->
    <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
        <h2 class="text-2xl font-bold mb-4">{{ $article->title }}</h2>
        <p class="text-gray-700 mb-4">{{ $article->body }}</p>
        <p class="text-sm text-gray-600">Auteur : {{ $article->user->name }}</p>
        <p class="text-sm text-gray-600">Publié le : {{ $article->created_at->format('d/m/Y') }}</p>
    </div>

    <!-- Commentaires -->
    <div class="bg-white p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-semibold mb-4">Commentaires</h3>

        @foreach($article->comments as $comment)
            <div class="border-b border-gray-200 pb-4 mb-4 last:border-b-0 last:pb-0 last:mb-0">
                <p class="font-semibold text-gray-900">{{ $comment->user->name }} a réagi :</p>
                <p class="text-gray-700 my-2">{{ $comment->comment }}</p>
                <p class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
            </div>
        @endforeach
    </div>
@endsection
