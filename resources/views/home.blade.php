@extends('layouts.master')

@section('title')
    <title>Stage Prophets Seppe Renty</title>
    @endsection

@section('pageTitle')
    <h1>Stage Prophets Seppe Renty</h1>
    <hr class="small">
    <span class="subheading">Een blog over een stage bij Prophets</span>
    @endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="/post/{{$post->id}}">
                        <h2 class="post-title">
                            {{$post->title}}
                        </h2>
                        <h3 class="post-subtitle">

                            {{  str_limit(  strip_tags($post->text), $limit = 70, $end = '...') }}
                        </h3>
                    </a>
                    <p class="post-meta">created at :  {{$post->created_at}}</p>
                </div>
                <hr>
                @endforeach



            <!-- Pager -->
                {{ $posts->links() }}
            {{--<ul class="pager">--}}
                {{--<li class="next">--}}
                    {{--<a href="#">Older Posts &rarr;</a>--}}
                    {{----}}
                {{--</li>--}}
            {{--</ul>--}}
        </div>
    </div>
</div>

<hr>

@endsection