@extends('layouts.layout')

@section('title')
    Girls Channel
@endsection()

@section('body')
<section>
        <div class="container">
            <div class="row">
                <div class="wrap">
                    <div class="main">
                        <div class="topic-list-wrap">
                            <div class="tab-wrap">
                                <div class="tab tab-rank on">
                                    <a href="#">
                                        <span class="icon-rank"><img src="https://img.icons8.com/material-outlined/24/000000/crown.png"/></span>
                                        <span>Today's popular topics</span>
                                    </a>
                                </div>
                                <div class="tab tab-new">
                                    <a href="#">
                                        <span class="icon-new"><img src="https://img.icons8.com/material-outlined/24/000000/clock--v1.png"/></span>
                                        <span>What's new topics</span>
                                    </a>
                                </div>
                            </div>
                            <div class="topic-list-header">
                                <span class="prev">
                                    <span class="icon-arrow_1"></span>
                                    <font>next day</font>
                                </span>
                                    <h2>{{ $dt }}</h2>
                                <span class="next">
                                    <a href="#" rel="next">
                                        day
                                        <span class="icon-arrow_r"></span>
                                    </a>
                                </span>
                            </div>
                            <ul class="topic-list">
                                @foreach( $topics as $topic )
                                <li>
                                    <a href="/topics/{{$topic->id}}">
                                        <img src=" {{ asset('public/image/'.$topic->image) }} " class="img">
                                        <div class="info">
                                            <!-- <div class="tag-wrap rank3">
                                                <span class="icon-tag">

                                                </span>
                                                <p class="rank">
                                                    <span>1st</span>
                                                </p>
                                            </div> -->
                                            <p class="comment">
                                                <span class="icon-comment">
                                                    <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                </span>
                                                <span>
                                                    {{ $topic->comment_count }}
                                                </span>
                                                <span class="datetime">
                                                    {{ $topic->created_at }}
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
                                {{$topics->appends(request()->all)->links()}}
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
                                <!-- <li>
                                    <a href="/topics">
                                        <div class="img_w">
                                            <img src="https://up.gc-img.net/post_img_web/2021/12/5cmqyJUFhQ16X1A_s.png" width="60" height="60">
                                        </div>
                                        <div class="info">
                                            <p class="title">【Chat】Topi Part 8 to talk casually like a friend</p>
                                            <p class="comment">
                                                <span class="icon-comment">
                                                    <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                </span>
                                                <font>17067 comment</font>
                                            </p>
                                        </div>
                                    </a>
                                </li> -->
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
                                    <a href="/topics/{{$topic_w->id}}">
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
                                <!-- <li>
                                    <a href="/topics">
                                        <div class="img_w">
                                            <img src="https://up.gc-img.net/post_img_web/2021/12/5cmqyJUFhQ16X1A_s.png" width="60" height="60">
                                        </div>
                                        <div class="info">
                                            <p class="title">【Chat】Topi Part 8 to talk casually like a friend</p>
                                            <p class="comment">
                                                <span class="icon-comment">
                                                    <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                </span>
                                                <font>17067 comment</font>
                                            </p>
                                        </div>
                                    </a>
                                </li> -->
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
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_01.svg" width="32" height="20">
                                    <a href="/search">神田沙也加</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_02.svg" width="32" height="20">
                                    <a href="/search">神田</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_03.svg" width="32" height="20">
                                    <a href="/search">大阪</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_04.svg" width="32" height="20">
                                    <a href="/search">松田聖子</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_05.svg" width="32" height="20">
                                    <a href="/search">離婚</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_06.svg" width="32" height="20">
                                    <a href="/search">クリスマス</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_07.svg" width="32" height="20">
                                    <a href="/search">前澤</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_08.svg" width="32" height="20">
                                    <a href="/search">バッグ</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_09.svg" width="32" height="20">
                                    <a href="/search">芸能関係者</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_10.svg" width="32" height="20">
                                    <a href="/search">SixTONES</a>
                                </li>
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