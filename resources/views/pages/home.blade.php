@extends('layouts.master')

@section('styles')
    <link rel="stylesheet"
          href="css/mystyles.css">
@endsection

@section('content')
    @include('pages.partials.home-nav-bar')
    @include('pages.partials.home-jumbotron')
@endsection
