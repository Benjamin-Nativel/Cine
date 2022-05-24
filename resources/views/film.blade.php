@extends('layouts.app')
@section('main')
<h1 class="text-center">{{$film['titre']}}</h1>
<h3 class="text-center">
    {{$film['resume']}}
</h3>

<img src="asset('storage/$film->image')" alt="">
@endsection