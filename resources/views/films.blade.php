@extends('layouts.app')

@section('main')
<table class="ml-auto mr-auto w-3/4 px-11">
    {{-- @include('components.add') --}}
    <thead>
        <th class="bg-green-200">ID</th>

        <th class="bg-green-200">Titre</th>
        <th class="bg-green-200">Auteur</th>
        <th>Update</th>
        <th>delete</th>

    </thead>
    <tbody>
        {{-- @foreach ($livres as $livre) --}}
            <tr class="pl-4x text-center">
                <td class="pl-4"></td>
                <td class="pl-4">
                    <a href=""></a>
                </td>


                <td class="pl-4"> <a href="/auteurs/"></a></td>
                <td><a href="">Update</a></td>
                <td>
                    {{-- @include('components.delete') --}}
                     </td>

            </tr>
     {{-- @endforeach --}}
    </tbody>
@endsection