@extends('layouts.layout')

@section('title')
    Category
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
                            <a href="/category">
                                <span>Category list</span>
                            </a>
                        </li>
                    </ul>
                    <header class="category-header">
                        <h2 class="category-heading">Category list</h2>
                    </header>
                    <ul class="wordList">

                        @foreach($categories as $category)
                            <li class="wordList-items">
                                <a href="topics/category/{{ $category->id }}" class="wordList-link">{{ $category->name }}</a>
                            </li>
                        @endforeach
                        
                        <!-- @foreach($categories as $category)
                            <li class="wordList-items">
                                <a href="{{ URL::to('/category_search/'.$category->id) }}" class="wordList-link">{{ $category->name }}</a>
                            </li>
                        @endforeach -->
                        <!-- <li class="wordList-items">
                            <a href="/category_search" class="wordList-link">love and marriage</a>
                        </li>
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">beauty & cosmetics</a>
                        </li>
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">fashion</a>
                        </li>
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">hairdo</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">adult</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">performer</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">food and food</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">diet</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">family and child rearing</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">medical care and health</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">life</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">work</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">real condition</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">TV AND COMMERCIALS</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">dramas &/ movies</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">manga, anime and books</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">music</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">image</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">news</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">politics and economics</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">sport</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">IT AND THE INTERNET</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">dogs, cats, animals</a>
                        </li>                        
                        <li class="wordList-items">
                            <a href="#" class="wordList-link">questions and chats</a>
                        </li> -->
                                                                                     
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
@stop