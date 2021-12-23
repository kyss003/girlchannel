@extends('layouts.layout')

@section('title')
    Weekly
@endsection()

@section('body')
<section>
        <div class="container">
            <div class="row">
                <div class="wrap">
                    <div class="main">
                        <div class="topic-list-wrap">
                            <div class="topic-list-header mb20">
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
                                            <span>Popular topics of the week</span>
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="topic-list-header-head">
                                    Popular topics of the week
                                </h2>
                            </div>
                            <ul class="topic-list">
                                <li>
                                    <a href="/topics">
                                        <img src="https://up.gc-img.net/post_img_web/2021/12/Wyc2SH27qWydrqZ_21723_s.jpeg" class="img">
                                        <div class="info">
                                            <div class="tag-wrap rank3">
                                                <span class="icon-tag">

                                                </span>
                                                <p class="rank">
                                                    <span>1st</span>
                                                </p>
                                            </div>
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
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sub">
                        <a href="/make_topic" class="btn btn-entry-topic mb20">
                            <span class="icon-plus">
                                <img src="https://img.icons8.com/ios-glyphs/20/000000/plus-math.png"/>
                            </span>
                            <font>post a topic</font>
                        </a>
                        <div class="sub-part sub-trends mb20" >
                            <p class="head">
                                <a href="#">search trends</a>
                            </p>
                            <a class="show-more" href="/key_word">
                                <font>list of keywords</font>
                                <span class="icon-arrow_r">
                                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                </span>
                            </a>
                        </div>
                        <div class="sub-part sub-categories mb20">
                            <p class="head">
                                <a href="/category">category</a>
                            </p>
                            <ul>
                                <li>
                                    <a href="#">love and marriage</a>
                                </li>
                                <li>
                                    <a href="#">beauty & cosmetics</a>
                                </li>
                                <li>
                                    <a href="#">fashion</a>
                                </li>
                                <li>
                                    <a href="#">hairdo</a>
                                </li>
                                <li>
                                    <a href="#">adult</a>
                                </li>
                                <li>
                                    <a href="#">performer</a>
                                </li>
                                <li>
                                    <a href="#">food and food</a>
                                </li>
                                <li>
                                    <a href="#">diet</a>
                                </li>
                                <li>
                                    <a href="#">family and child rearing</a>
                                </li>
                                <li>
                                    <a href="#">medical care and health</a>
                                </li>
                                <li>
                                    <a href="#">life</a>
                                </li>
                                <li>
                                    <a href="#">work</a>
                                </li>
                                <li>
                                    <a href="#">real condition</a>
                                </li>
                                <li>
                                    <a href="#">TV AND COMMERCIALS</a>
                                </li>
                                <li>
                                    <a href="#">dramas &/ movies</a>
                                </li>
                                <li>
                                    <a href="#">manga, anime and books</a>
                                </li>
                                <li>
                                    <a href="#">music</a>
                                </li>
                                <li>
                                    <a href="#">image</a>
                                </li>
                                <li>
                                    <a href="#">news</a>
                                </li>
                                <li>
                                    <a href="#">politics and economics</a>
                                </li>
                                <li>
                                    <a href="#">sport</a>
                                </li>
                                <li>
                                    <a href="#">IT AND THE INTERNET</a>
                                </li>
                                <li>
                                    <a href="#">dogs, cats, animals</a>
                                </li>
                                <li>
                                    <a href="#">questions and chats</a>
                                </li>
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
@stop()