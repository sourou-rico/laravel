@extends('layouts.app')
@section('content')
    <div class="text-2xl font-medium">
        Cliquez sur login pour créer un utilisateur <a href="{{ route('login') }}"
            class="text-gray-900 dark:text-white hover:underline" aria-current="page">Login</a>
    </div>

    @include('layouts.message')

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nom
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rôle
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="px-6 py-4">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ ($user->role) == '1' ? 'User' : 'Admin' }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ url('admin/edit', $user->id) }}">Editer</a>
                            <a href="{{ url('admin/delete', $user->id) }}">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
