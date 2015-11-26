
@extends('layouts.master')



@section('styles')
    {!! Html::style('css/mystyles.css') !!}
    @endsection


@section('content')
    @include('schools.partials.schoolshome-nav-bar')

    <div class="container heading">

        <div class="row">
            <div class="col-md-12">
                <h1>All Schools From Forster's Gym</h1>
            </div>
        </div>

        <!-- show all the schools using blade syntax -->
        @foreach ($schools as $school)
            {{ $school->schoolname }}
            <br>
            @endforeach



    <div/> <!! end container -->

@endsection

@endsection