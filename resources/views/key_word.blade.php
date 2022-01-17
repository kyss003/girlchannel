@extends('layouts.layout')

@section('title')
    Key word
@endsection()

@section('body')
<div class="wrap">
        <div class="container">
            <div class="row">
                <div class="main column-1">
                    <ul class="breadcrumbs">
                        <li class="breadcrumb">
                            <a href="/index">
                                <span class="icon-home">
                                    <img src="https://img.icons8.com/material-rounded/15/000000/home.png"/>
                                </span>
                            </a>
                            <span class="icon-arror_r">
                                <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                            </span>
                        </li>
                        <li class="breadcrumb current">
                            <a href="/keyword" class="current">
                                <span>List of keywords</span>
                            </a>
                        </li>
                    </ul>
                    <header class="category-header">
                        <h2 class="category-heading">List of keywords</h2>
                    </header>
                    <ul class="wordList">
                        @foreach($key_words as $key_word)
                            <li class="wordList-items">
                                <a href="topics/keyword/{{ $key_word->id }}" class="wordList-link">{{ $key_word->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
@stop()