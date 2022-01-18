@extends('layouts.layout')

@section('title')
    Topic image
@endsection()

@section('body')
<section>
        <div class="container">
            <div class="row">
                <div class="wrap">
                    <div class="main">
                        <div class="topic-wrap">
                            @foreach($topics as $topic)
                            <ul class="breadcrumbs">
                                <li class="breadcrumb">
                                    <a href="/index">
                                        <span class="icon-home">
                                            <img src="https://img.icons8.com/material-rounded/15/000000/home.png"/>
                                        </span>
                                    </a>
                                </li>
                                <li class="breadcrumb">
                                    <span class="icon-arror_r">
                                        <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                    </span>
                                </li>
                                <li class="breadcrumb current">
                                    <a href="#">
                                        <span>質問・雑談</span>
                                    </a>
                                </li>
                                <span class="icon-arror_r">
                                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                </span>
                                <li class="breadcrumb current">
                                    <a href="/category">
                                        <span>{{ $topic->title }}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="head-area">
                                <img src="{{ asset('public/image_content/'.$topic->image_content) }}" class="img">
                                <h1>
                                    <font>いしだ壱{{ $topic->title }}</font>
                                </h1>
                                <p class="comment">
                                    <span class="icon-comment">
                                        <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                    </span>
                                    <font>
                                        <span>{{ $topic->comment_count }}</span>
                                        <span class="datetime">{{ $topic->created_at }}</span>
                                    </font>
                                </p>
                            </div>
                            <div class="body-area body-area-img">
                                <div class="topic-imgs">
                                    <img class="topic-imgs-item" src="{{ asset('public/image_content/'.$topic->image_content) }}" width="60">
                                    @foreach($comments as $comment)
                                    <img class="topic-imgs-item" src="{{ asset('public/image_comment/'.$comment->image) }}" width="60">
                                    @endforeach
                                </div>
                                <!-- <div class="btn btn-moderate see-more">
                                    See more
                                </div> -->
                                <a class="btn btn-positive" href="/topics/{{ $topic->id }}">
                                    Back to previous page
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="sub">
                        <div class="sub-part sub-keywords relate mb20">
                            <p class="head">Related keywords</p>
                            <ul class="flc">
                                @foreach($keywords_name as $keyword_name)
                                    <li>
                                        <a href="keyword/{{ $keyword_name->id }}">
                                            #{{ $keyword_name->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop()