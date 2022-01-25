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
                                        <span>カテゴリー一覧</span>
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
                                <ul class="search-options topic-list">
                                    <li>
                                        <div class="search-options-select">
                                            <select id="sortselect" name="sortselect">
                                                <option>
                                                    ---Topic---
                                                </option>
                                                <option value="{{Request::url()}}&sort_by=n">
                                                    most newest
                                                </option>
                                                <option value="{{Request::url()}}&sort_by=c">
                                                    by comment number
                                                </option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search-options-select">
                                            <select id="dateselect" name="dateselect" wire:model="date">
                                                <option>
                                                    ---Date---
                                                </option>
                                                <option value="{{Request::url()}}&date=a">
                                                    all periods
                                                </option>
                                                <option value="{{Request::url()}}&date=y">
                                                    within 1 year
                                                </option>
                                                <option value="{{Request::url()}}&date=m">
                                                    within 1 month
                                                </option>
                                                <option value="{{Request::url()}}&date=w">
                                                    within a week
                                                </option>
                                            </select>
                                        </div>
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
                                {{$topics_categories->appends(request()->all)->links()}}
                            </div>
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
                                <a href="/category">カテゴリー</a>
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