@extends('layouts.app')
@section('main')
<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col w-full mb-20 text-center">
        <h1>Listes des films :</h1>
<table class="w-3/4 ml-auto mr-auto px-11 border-2 object-center whitespace-no-wrap table-auto">
    @include('components.add')
    <thead>
        

        <th class="bg-gray-500 ">Titre</th>
        <th class="bg-gray-500">Réalisateur</th>
        <th class="bg-gray-500">durée</th>
        <th class="bg-gray-500">Affiche</th>
        <th class="bg-gray-500">Categories</th>
        <th class="bg-gray-500">Show</th>
        <th class="bg-gray-500" >Update</th>
        <th class="bg-gray-500">delete</th>

    </thead>
    <tbody>
        @foreach ($film as $film)
            <tr class="text-center pl-4x px-4 py-3 text-sm font-medium tracking-wider text-white rounded-b title-font bg-slate-600">
                
                <td class="px-5 py-3 border-2 pl-4"><a href="/film/{{ $film->id }}">{{$film->titre}}</a></td>
                <td class="px-5 py-3 border-2 pl-4">{{$film->real->nom}} {{$film->real->prenom}}</td>
                <td class="px-5 py-3 border-2 pl-4">{{$film->duree}}</td>
                <td class="px-5 py-3 border-2 pl-4"> <img class="w-28" src="{{ Storage::url($film->image)}}" alt=""> </td>
                <td class="px-5 py-3 border-2 pl-4">
                    @foreach ($film->categ as $categorie )
                    {{$categorie->label}}
                    @endforeach
                </td>
                <td class="px-5 py-3 border-2 pl-4"><a href="">Check it!</a></td>
                <td class="px-5 py-3 border-2 pl-4"></td>
                {{-- @include('components.edit') --}}
                <td class="px-5 py-3 border-2 pl-4">
                    {{-- @include('components.delete') --}}
                     </td>

            </tr>
     @endforeach
    </tbody>
</table>
    </div>
</div>
@endsection