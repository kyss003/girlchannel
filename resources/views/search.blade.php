@extends('layouts.layout')

@section('title')
    Search
@endsection()

@section('body')
<section>
        <div class="container">
            <div class="row">
                <div class="wrap">
                    <div class="main">
                        <div class="topic-list-wrap">
                            <div class="list-head">
                                <p class="title">"{{ $search_text }}"の検索結果</p>
                                <p class="number">1 - 9 out of 9</p>
                            </div>
                            <form id="seachform">
                                @csrf
                                <ul class="search-options">
                                    <li>
                                        <div class="search-options-select">
                                            <select id="sortselect" name="sortselect">
                                                <option value="{{Request::url()}}?query={{ $search_text }}?sort_by=none">
                                                    most newest
                                                </option>
                                                <option value="{{Request::url()}}?query={{ $search_text }}?sort_by=c">
                                                    by comment number
                                                </option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search-options-select">
                                            <select id="dateselect" name="dateselect" wire:model="date">
                                                <option value="{{Request::url()}}?query={{ $search_text }}?sort_by=none">
                                                    all periods
                                                </option>
                                                <option value="{{Request::url()}}?query={{ $search_text }}?sort_by=y">
                                                    within 1 year
                                                </option>
                                                <option value="{{Request::url()}}?query={{ $search_text }}?sort_by=m">
                                                    within 1 month
                                                </option>
                                                <option value="{{Request::url()}}?query={{ $search_text }}?sort_by=w">
                                                    within a week
                                                </option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                            <ul class="topic-list dp_ib">
                                @if(isset($countries))
                                    @if(count($countries) > 0)
                                        @foreach($countries as $countrie)
                                        <li>
                                            <a href="/topics/{{$countrie->id}}">
                                                <img src="{{ asset('public/image/'.$countrie->image) }}" class="img">
                                                <div class="info">
                                                    <p class="comment">
                                                        <span class="icon-comment">
                                                            <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                        </span>
                                                        <span>
                                                            {{ $countrie->comment_count }}
                                                        </span>
                                                        <span class="datetime">
                                                            {{ $countrie->created_at}}
                                                        </span>
                                                    </p>
                                                </div>
                                                <p class="title">
                                                    {{ $countrie->title }}
                                                </p>
                                            </a>
                                        </li>
                                        @endforeach
                                    @else
                                        <P>No result found</p>
                                    @endif
                                @endif
                                <!-- <li>
                                    <a href="/topics">
                                        <img src="https://up.gc-img.net/post_img_web/2021/12/Wyc2SH27qWydrqZ_21723_s.jpeg" class="img">
                                        <div class="info">
                                            <p class="comment">
                                                <span class="icon-comment">
                                                    <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                </span>
                                                <span>
                                                    1000 comment
                                                </span>
                                                <span class="datetime">
                                                    46 seconds ago
                                                </span>
                                            </p>
                                        </div>
                                        <p class="title">
                                            insurance coverage for infertility treatment, women under 43 years old ministry of health, labour and welfare, fact marriage also to be targeted
                                        </p>
                                    </a>
                                </li> -->
                            </ul>
                            <div class="d-flex justify-content-center">
                                {{$countries->appends(request()->all)->links()}}
                            </div>
                        </div>
                    </div>
                    <div class="sub">
                        <a href="/make_topic" class="btn btn-entry-topic mb20">
                            <span class="icon-plus">
                                <img src="https://img.icons8.com/ios-glyphs/20/000000/plus-math.png"/>
                            </span>
                            <font>Post a topic</font>
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
                                    <a href="#">神田沙也加</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_02.svg" width="32" height="20">
                                    <a href="#">神田</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_03.svg" width="32" height="20">
                                    <a href="#">大阪</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_04.svg" width="32" height="20">
                                    <a href="#">松田聖子</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_05.svg" width="32" height="20">
                                    <a href="#">離婚</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_06.svg" width="32" height="20">
                                    <a href="#">クリスマス</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_07.svg" width="32" height="20">
                                    <a href="#">前澤</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_08.svg" width="32" height="20">
                                    <a href="#">バッグ</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_09.svg" width="32" height="20">
                                    <a href="#">芸能関係者</a>
                                </li>
                                <li>
                                    <img src="https://static.gc-img.net/img/parts_pc/svg/trend_10.svg" width="32" height="20">
                                    <a href="#">SixTONES</a>
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
                            <img src="Materials/howtouse_illust.png" alt="how to use girls channel">
                            <span class="service-intro-link">How to use girls channel</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

    
