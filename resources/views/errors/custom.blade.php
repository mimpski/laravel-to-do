@extends('layouts.master')

@section('page-header')
    <header class="intro-header" style="background-image: url('{{ page_image(null) }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Error</h1>
                        <h2 class="subheading">The page you are requested has caused an error. Please check the message for more details.</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               Your Article was not found on this Site.
            </div>

        </div>
    </div>
@stop
