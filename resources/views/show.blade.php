@extends('layouts.master')


@section('title')
    <title>blogpost {{$post->title}}</title>
@endsection

@section('pageTitle')
    <h1>{{$post->title}}</h1>
@endsection


@section('content')

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <h2>{{$post->title}}</h2>

                    {!! $post->text !!}

                </div>
            </div>
        </div>
    </article>

    <hr>

    @endsection

