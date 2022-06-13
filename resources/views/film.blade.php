@extends('layouts.app')
@section('main')
<h1 class="text-center">{{$film['titre']}}</h1>
<h3 class="text-center">
    {{$film['resume']}}
</h3>

<img src="{{ Storage::url($film->image)}}" alt="testt">
@endsection