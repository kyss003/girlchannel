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
                            <div class="topic-list-header mb20">
                                <span class="prev">
                                    <span class="icon-arrow_1"></span>
                                    <font>next day</font>
                                </span>
                                    <h2>monday, december 13, 2021</h2>
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
                                            <img src="
                                                {{ $topic->image }}
                                            " class="img">
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
                                            {{ $topic->title }}
                                        </p>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="/topics">
                                        <img src="https://up.gc-img.net/post_img_web/2021/12/oxSAkiyGPMUA8Cb_s.jpeg" class="img">
                                        <div class="info">
                                            <div class="tag-wrap rank3">
                                                <span class="icon-tag">

                                                </span>
                                                <p class="rank">
                                                    <span>2st</span>
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
                                            【実況・感想】真犯人フラグ #10
                                        </p>
                                    </a>
                                </li> -->
                                @endforeach
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
                                <li>
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
                                </li>
                                <li>
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
                                </li>
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
                                <li>
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
                                </li>
                                <li>
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
                                </li>
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
                                <a href="/category">Category</a>
                            </p>
                            <ul>
                                <li>
                                    <a href="/category_search">Love and marriage</a>
                                </li>
                                <li>
                                    <a href="#">Beauty & cosmetics</a>
                                </li>
                                <li>
                                    <a href="#">Fashion</a>
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
                            <img src=" {{ URL::asset('Materials/howtouse_illust.png'); }} " alt="how to use girls channel">
                            <span class="service-intro-link">How to use girls channel</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()