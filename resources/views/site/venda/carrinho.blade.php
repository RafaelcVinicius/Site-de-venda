<link rel="stylesheet" href="{{asset('css/site/carrinho.css')}}">
@extends('layouts.site.site')
@section('corpo')
<h3>session</h3>
 {{dd(session('vendas'))}}
@endsection