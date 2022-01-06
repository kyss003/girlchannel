@extends('layouts.layout')

@section('title')
    Category search
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
                                        <span>Category list</span>
                                    </a>
                                </li>
                                <span class="icon-arror_r">
                                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                </span>
                                @foreach( $categories_name as $category_name )
                                <li class="breadcrumb current">
                                    <a href="/category">
                                        <span>{{ $category_name->name }}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="category-header">
                                <h2 class="category-heading">{{ $category_name->name }}</h2>
                                <p>{{ $category_name->title }}</p>
                            </div>
                            <form id="seachform">
                                <ul class="search-options">
                                    <li>
                                        <div class="search-options-select">
                                            <select>
                                                <option>
                                                    most newest
                                                </option>
                                                <option>
                                                    by comment number
                                                </option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search-options-select">
                                            <select>
                                                <option>
                                                    all periods
                                                </option>
                                                <option>
                                                    within 1 year
                                                </option>
                                                <option>
                                                    within 1 month
                                                </option>
                                                <option>
                                                    within a week
                                                </option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="number">
                                        <p class="search-options-number">1 - 50 of 4754</p>
                                    </li>
                                </ul>
                            </form>
                            <ul class="topic-list dp_ib">
                                @foreach( $topics_categories as $topic )
                                <li>
                                    <a href="/topics/{{$topic->id}}">
                                        <img src="{{ asset('public/image/'.$topic->image) }}" class="img">
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
                                            {{ $topic->title }}
                                        </p>
                                    </a>
                                </li>
                                @endforeach
                                
                                <!-- <li>
                                    <a href="/topics">
                                        <img src="https://up.gc-img.net/post_img_web/2021/12/oxSAkiyGPMUA8Cb_s.jpeg" class="img">
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
                                            【実況・感想】真犯人フラグ #10
                                        </p>
                                    </a>
                                </li> -->
                            </ul>
                            <ul class="pager">
                                <li class="prev">
                                    <span class="icon-arrow_l">
                                        <img src="https://img.icons8.com/ios-glyphs/15/000000/back.png"/>
                                    </span>
                                </li>
                                <li class="current">
                                    1
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li class="next">
                                    <a href="#">
                                        <span class="icon-arrow_r">
                                            <img src="https://img.icons8.com/external-becris-lineal-becris/15/000000/external-next-mintab-for-ios-becris-lineal-becris.png"/>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sub">
                        <div class="sub-part sub-keywords relate mb20">
                            <p class="head">Related keywords</p>
                            <ul class="flc">
                                <li>
                                    <a href="#">
                                        # ishida kazunari
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        # zero
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        # balance
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        # divorce
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        # deposits
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sub-part sub-categories mb20">
                            <p class="head">
                                <a href="/category">Category</a>
                            </p>
                            <ul>
                                @foreach( $categories as $category )
                                <li>
                                    <a href="{{ $category->id }}">{{ $category->name }}</a>
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