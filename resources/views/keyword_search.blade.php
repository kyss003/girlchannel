@extends('layouts.layout')

@section('title')
    Keyword
@endsection()

@section('body')
<section>
        <div class="container">
            <div class="row">
                <div class="wrap">
                    <div class="main">
                        <div class="topic-list-wrap">
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
                                        <span>Keyword list</span>
                                    </a>
                                </li>
                                <span class="icon-arror_r">
                                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                </span>
                                @foreach( $key_words as $key_word )
                                <li class="breadcrumb current">
                                    <a href="/category">
                                        <span>{{ $key_word->name }}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="topic-list dp_ib">
                                @foreach( $topic_keyword as $topic )
                                <li>
                                    <a href="/topics/{{$topic->id}}">
                                        <img src="{{ asset('public/image/'.$topic->image) }}" class="img">
                                        <div class="info">
                                            <p class="comment">
                                                <span class="icon-comment">
                                                    <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                </span>
                                                <span>
                                                    {{ $topic->comment_count}} comment
                                                </span>
                                                <span class="datetime">
                                                    {{ $topic->created_at->diffForHumans($dt); }}
                                                </span>
                                            </p>
                                        </div>
                                        <p class="title">
                                            {{ $topic->title }}
                                        </p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="d-flex justify-content-center">
                                {{$topic_keyword->appends(request()->all)->links()}}
                            </div>
                        </div>
                    </div>
                    <div class="sub">
                        <a href="/make_topic" class="btn btn-entry-topic mb20">
                            <span class="icon-plus">
                                <img src="https://img.icons8.com/ios-glyphs/20/000000/plus-math.png"/>
                            </span>
                            <font>トピックを投稿する</font>
                        </a>
                        <div class="sub-part sub-topics mb20">
                            <p class="head">
                                <a href="/weekly">Popular topics of the week</a>
                            </p>
                            <ul>
                                @if( count($popular_topic_w) > 0 )
                                    @foreach( $popular_topic_w as $topic_w )
                                    <li>
                                        <a href="/topics/{{$topic_w->id}}">
                                            <div class="img_w">
                                                <img src=" {{ asset('public/image/'.$topic_w->image) }}" width="60" height="60">
                                            </div>
                                            <div class="info">
                                                <p class="title">{{ $topic_w->title }}</p>
                                                <p class="comment">
                                                    <span class="icon-comment">
                                                        <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                    </span>
                                                    <font>{{$topic_w->comment_count}}</font>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                @else
                                    <p></p>
                                @endif
                            </ul>
                            <a href="/weekly" class="show-more">
                                <font>See more</font>
                                <span class="icon-arrow_r">
                                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                </span>
                            </a>
                        </div>
                        <div class="sub-part sub-topics sub-topics-yesterday mb20">
                            <p class="head">
                                <a href="#">Popular topics of the previous day</a>
                            </p>
                            <ul>
                            @foreach( $popular_topic_d as $topic_d )
                                <li>
                                    <a href="/topics/{{$topic_d->id}}">
                                        <div class="img_w">
                                            <img src="{{ asset('public/image/'.$topic_d->image) }}" width="60" height="60">
                                        </div>
                                        <div class="info">
                                            <p class="title">{{ $topic_d->title }}</p>
                                            <p class="comment">
                                                <span class="icon-comment">
                                                    <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                </span>
                                                <font>{{$topic_d->comment_count}}</font>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                            </ul>
                            <a href="#" class="show-more">
                                <font>See more</font>
                                <span class="icon-arrow_r">
                                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                </span>
                            </a>
                        </div>
                        <div class="sub-part sub-trends mb20" >
                            <p class="head">
                                <a href="/key_word">Search trends</a>
                            </p>
                            <ul>
                            @foreach($keywords as $key => $keyword)
                                <li>
                                    @if($key < 9)
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_0{{ $key+1 }}.svg" width="32" height="20">
                                    <a href="topics/keyword/{{ $keyword->id }}">{{ $keyword->name }}</a>
                                    @else
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_{{ $key+1 }}.svg" width="32" height="20">
                                    <a href="topics/keyword/{{ $keyword->id }}">{{ $keyword->name }}</a>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            <a class="show-more" href="/key_word">
                                <font>List of keywords</font>
                                <span class="icon-arrow_r">
                                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                </span>
                            </a>
                        </div>
                        <div class="sub-part sub-categories mb20">
                            
                            <p class="head">
                                <a href="{{ url('category') }}">カテゴリー</a>
                            </p>
                            <ul>
                                @foreach( $categories as $category )
                                <li>
                                    <a href="topics/category/{{ $category->id }}">{{ $category->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <a class="sub-part sub-service-intro mb20" href="#">
                            <img src=" {{ URL::asset('Materials/howtouse_illust.png'); }} " alt="how to use girls channel">
                            <span class="service-intro-link">How to use girls channel</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()