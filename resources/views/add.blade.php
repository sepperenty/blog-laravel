@extends('layouts.master')

@section('title')
    <title>Nieuwe blogpost Seppe Renty Prophets</title>
@endsection

@section('pageTitle')
    <h1>Stage Prophets Seppe Renty</h1>
    <hr class="small">
    <span class="subheading">Een nieuwe blogpost toevoegen.</span>
@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

    <form action="/newPost" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control"  type="text" name="title">
        </div>




        <div class="form-group">
            <label for="text">Blog Body</label>
            <textarea name="text" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

    </div>
</div>
</div>

@endsection

@section('specialScripts')
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection