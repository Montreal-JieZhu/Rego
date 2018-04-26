@extends('layouts.admin')

@section('content')
    @foreach($restaurants as $r)
<h1>{{$r->name}}</h1><br />
    @endforeach
@endsection