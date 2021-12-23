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
                                <p class="title">results for "sayaka kanda"</p>
                                <p class="number">1 - 9 out of 9</p>
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
                                </ul>
                            </form>
                            <ul class="topic-list">
                                <li>
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
                                </li>
                                <li>
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
                                </li>
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
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
                                <a href="/category">Category</a>
                            </p>
                            <ul>
                                <li>
                                    <a href="#">Love and marriage</a>
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
                            <img src="Materials/howtouse_illust.png" alt="how to use girls channel">
                            <span class="service-intro-link">How to use girls channel</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()