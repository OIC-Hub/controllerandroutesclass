@extends('layouts.app')
@section('title', 'Home Page')
@section('style')
<!-- CSS only -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
@endsection
@section('contents')
@php
 $i = 0;
 $arry = [];
 for($i; $i<12; $i++){
    $arry[] =$i;
 }
 print_r( $arry );
@endphp
@foreach($arry as $arry)
@if($arry == 10)
 @continue
 @endif
 {{$arry}} <br>
@endforeach
<h1>Home Page {!! '<a href="https://facebook.com">Facebook</a>Hello World' !!}</h1>
@endsection