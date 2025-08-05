@extends('layouts.master')

@section('title')
Créer un article
@endsection

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-blue-600 text-white px-6 py-4">
            <h1 class="text-2xl font-bold">Créer un nouvel article</h1>
        </div>

        <div class="p-6">
            <form method="POST" action="articles/create" enctype="multipart/form-data">
                @csrf

                @include('partials.article-form')

                <div class="flex gap-4 pt-6">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Créer l'article
                    </button>
                    <a href="{{ url('/articles') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

