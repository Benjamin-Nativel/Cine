@extends('layouts.app')
@section('main')

<table class="w-3/4 ml-auto mr-auto px-11">
    @include('components.add')
    <thead>
        <th class="bg-green-200">ID</th>

        <th class="bg-green-200">Titre</th>
        <th class="bg-green-200">Réalisateur</th>
        <th class="bg-green-200">durée</th>
        
        <th class="bg-green-600">Show</th>
        <th class="bg-green-600" >Update</th>
        <th class="bg-green-600">delete</th>

    </thead>
    <tbody>
        @foreach ($film as $film)
            <tr class="text-center pl-4x">
                <td class="pl-4">{{$film->id}}</td>
                <td><a href="/film/{{ $film->id }}">{{$film->titre}}</a></td>
                <td>{{$film->real->nom}} {{$film->real->prenom}}</td>
                <td>{{$film->duree}}</td>
                <td><a href="">Check it!</a></td>
                <td><a href="">Update</a></td>
                <td>
                    {{-- @include('components.delete') --}}
                     </td>

            </tr>
     @endforeach
    </tbody>
@endsection