@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.layout')
@section('addCss')
<link href="{{{asset('/css/app.css')}}}" rel="stylesheet">
@stop

@include('layouts.header')

@section('content')
<body>
    <h1>Hello</h1>
    <div>コンテンツ</div>
@stop

@section('addJs')
<script type="text/javascript" src="{{{asset('/js/app.js')}}}"></script>
@stop
@include('layouts.footer')
