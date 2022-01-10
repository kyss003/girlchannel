@extends('layouts.layout')

@section('title')
    Topics
@endsection()

@section('body')
<section>
        <div class="container">
            <div class="row">
                <div class="wrap">
                    <div class="main">
                        <div class="topic-wrap">
                            @foreach( $topics as $topic )
                            <ul class="breadcrumbs">
                                <li class="breadcrumb">
                                    <a href="/">
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
                                        <span>Real condition</span>
                                    </a>
                                </li>
                                <span class="icon-arror_r">
                                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                </span>
                                <li class="breadcrumb current">
                                    <a href="/category">
                                        <span>{{ $topic->title }}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="head-area">
                                <img src="{{ asset('public/image/'.$topic->image) }}" width="100" height="100" class="img">
                                <h1>
                                    <font> 
                                        {{ $topic->title }}
                                    </font>
                                </h1>
                                <p class="comment">
                                    <span class="icon-comment">
                                        <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                    </span>
                                    <font>
                                        <span>3000 comment</span>
                                        <span class="datetime">{{ $topic->updated_at }}</span>
                                    </font>
                                </p>
                                <div class="head-area-btns">
                                    <a href="#" class="btn btn-positive" id="btnComment">post a comment</a>
                                    <a class="btn btn-moderate" href="/topic_image">
                                        <span class="icon-image_mode">
                                            <img src="https://img.icons8.com/ios-filled/15/000000/windows-11.png"/>
                                        </span>
                                        <p>Image</p>
                                    </a>
                                </div>
                            </div>
                            <div class="pager-area">
                                <ul class="pager pager-topic">
                                    <li class="prev">
                                        <span class="icon-arrow_l">
                                            <img src="https://img.icons8.com/ios-glyphs/15/000000/back.png"/>
                                        </span>
                                    </li>
                                    <li class="current">1</li>
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
                            <div class="body-area">
                                <ul class="topic-comment">
                                    <li class="comment-item" id="comment1">
                                        <p class="info">
                                            <font>
                                                1.anonymous
                                                <a href="#">
                                                    {{ $topic->created_at }}
                                                </a>
                                            </font>
                                        </p>
                                        <div class="body">
                                            <!-- <div class="comment-url">
                                                <div class="comment-url-head">
                                                    <img src="https://up.gc-img.net/post_img_web/2021/12/2553b13b609ad8979eded0defd52b759_356.jpeg" width="80">
                                                    <div class="comment-url-title">
                                                        <a href="#">
                                                            ISHIDA KAZUNARI "JUNICHI OVER" 3RD DIVORCE "ME AND MY FATHER ARE MISSING SOMETHING" NEWS POST SEVEN
                                                        </a>
                                                        <p>
                                                            it has been revealed that kazunari ishida, 47, has divorced actress takako iimura, 23. "i wrote my divorce papers on december 7th of my birthday, and my wife told me to write this because i took it. it was like writing quickly while the child was playing in the back room. the submission is submitted by my wife the next day. this is my third divorce."
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <br> -->
                                            <font>
                                                {{ $topic->content }}
                                            </font>
                                            <div class="comment-img">
                                                <img src=" {{ asset('public/image/'.$topic->image) }} " width="400">
                                            </div><br>
                                        </div>
                                        <div class="res-count">
                                            <a href="#" class="res-count-btn">
                                                <span class="icon-comment_fill">
                                                    <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                </span>
                                                <font>179 replies</font>
                                            </a>
                                        </div>
                                        <div class="topic-rate">
                                            <div class="icon-rate-wrap icon-rate-wrap-plus">
                                                <div class="counter">
                                                    <p>{{ $topic->likes() }}</p>
                                                </div>
                                                <div class="icon-rate icon-plus-btn">
                                                    <div class="btn-rate">
                                                        <span class="btn" title="Likes" id="saveLikeDislike" data-type="like" data-post="{{ $topic->id}}" >
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="width: 321px;" class="gage">
                                                <div style="width: 98.5%;" class="plus">

                                                </div>
                                                <div style="width: 1.5%;" class="minus">

                                                </div>
                                            </div>
                                            <div class="icon-rate-wrap icon-rate-wrap-minus">
                                                <div class="counter">
                                                    <p>{{ $topic->dislikes() }}</p>
                                                </div>
                                                <div class="icon-rate icon-minus-btn" state>
                                                    <div class="btn-rate">
                                                        <span class="btn" title="Dislikes" id="saveLikeDislike" data-type="dislike" data-type="dislike" data-post="{{ $topic->id}}" >
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    @foreach( $comments as $comment )
                                    <li class="comment-item" id="comment1">
                                        <p class="info">
                                            <font>
                                                2.anonymous
                                                <a href="#">
                                                    {{ $comment->created_at }}
                                                </a>
                                            </font>
                                        </p>
                                        <div class="body">
                                            <font>
                                                {{ $comment->content }}
                                            </font>
                                        </div>
                                        <div class="res-count">
                                            <a href="#" class="res-count-btn">
                                                <span class="icon-comment_fill">
                                                    <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                </span>
                                                <font>179 replies</font>
                                            </a>
                                        </div>
                                        <div class="topic-rate">
                                            <div class="icon-rate-wrap icon-rate-wrap-plus">
                                                <div class="counter">
                                                    <p>{{ $comment->likes() }}</p>
                                                </div>
                                                <div class="icon-rate icon-plus-btn">
                                                    <div class="btn-rate" >
                                                        <span class="btn" title="Likes" id="saveLikeDislikeComment" data-type="like" data-post="{{ $comment->id}}" >
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="width: 321px;" class="gage">
                                                <div style="width: 98.5%;" class="plus">

                                                </div>
                                                <div style="width: 1.5%;" class="minus">

                                                </div>
                                            </div>
                                            <div class="icon-rate-wrap icon-rate-wrap-minus">
                                                <div class="counter" >
                                                    <p>{{ $comment->dislikes() }}</p>
                                                </div>
                                                <div class="icon-rate icon-minus-btn" state>
                                                    <div class="btn-rate">
                                                        <span class="btn" title="Dislikes" id="saveLikeDislikeComment" data-type="dislike" data-post="{{ $comment->id}}" >
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            <div class="pager-area">
                                <ul class="pager pager-topic">
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
                            <div class="form-area">
                                @foreach($topics as $topic)
                                <form action="{{ $topic->id }}" method="POST" class="form-comment">
                                    @csrf
                                    <p class="title">Post a comment</p>
                                    <div class="textarea mb10">
                                        <textarea id="textarea" name="text" placeholder="write a comment"></textarea>
                                        <p id="btnUrl" class="add-link">
                                            <span class="icon-link">
                                            <img src="https://img.icons8.com/material-outlined/20/000000/link--v1.png"/>
                                            </span>
                                            <font>
                                                quote articles and images
                                            </font>
                                        </p>
                                    </div>
                                    <div class="add-image">
                                        <div class="wrap">
                                            <span class="icon-camera">
                                                <img src="https://img.icons8.com/material-outlined/15/000000/camera--v2.png"/>
                                            </span>
                                            <p class="text normal">
                                                select image
                                            </p>
                                            <input id="addImage" type="file">
                                        </div>
                                    </div>
                                    <div class="form-checks">
                                        <input id="anonymous" type="checkbox">
                                        <label for="anonymous" class="checkbox">
                                            Post anonymously
                                        </label>
                                        <input id="showId" type="checkbox">
                                        <label for="showId" class="checkbox">
                                            View ID to prevent spoofing
                                        </label>
                                    </div>
                                    <input id="submit" type="submit" value="Post a topic" class="btn btn-positive">
                                    <div id="modalUrl" class="modal-bk" show="off" style="height: 1480px">
                                        <div class="modal-wrap modal-url">
                                            <p class="title">
                                                Quote an article or image
                                            </p>
                                            <p class="desc">
                                            WHEN YOU INSERT A URL, IT WILL LOOK LIKE THIS IN THE ACTUAL BODY.
                                            </p>
                                            <img src="https://static.gc-img.net/img/parts_pc/image_sample.png" width="100%">
                                            <div id="inputUrls" class="input-urls">
                                                <input type="url" placeholder="ENTER URL">
                                            </div>
                                            <div id="addUrl" class="add-url" style="display: block">
                                                <span class="icon-plus">
                                                    <img src="https://img.icons8.com/android/15/000000/plus.png"/>
                                                </span>
                                                <span>
                                                    ADD URL
                                                </span>
                                            </div>
                                            <div id="insertUrl" class="btn btn-positive">
                                                INSERT URL
                                            </div>
                                            <p class="close">
                                                <span>
                                                    <img src="https://img.icons8.com/material-outlined/15/000000/delete-sign.png"/>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                            <div class="topic-list-wrap">
                                <h2 class="related">
                                    Related topic
                                </h2>
                                <ul id="relatedTopic" class="topic-list">
                                    <li class="js-related">
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
                                                        sat 18 jul 2020 05:39
                                                    </span>
                                                </p>
                                            </div>
                                            <p class="title">
                                                insurance coverage for infertility treatment, women under 43 years old ministry of health, labour and welfare, fact marriage also to be targeted
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="rank">
                                    Popular topic
                                </h2>
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
                                                        sat 18 jul 2020 05:39
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
                    </div>
                    <div class="sub">
                        <div class="ob-widget ob-one-column-layout SB_1">
                            <div class="ob-widget-section ob-first">
                                <div class="ob-widget-header">
                                    Featured topics
                                </div>
                                <ul class="ob-widget-items-container">
                                    <li class="ob-dynamic-rec-container ob-recIdx-0 ob-o">
                                        <a class="ob-dynamic-rec-link" href="https://girlschannel.net/topics/3726182/?obOrigUrl=true">
                                        </a>
                                        <span class="ob-unit ob-rec-image-container">
                                            <div class="ob-image-ratio"></div>
                                            <img class="ob-rec-image ob-show" src="https://images.outbrainimg.com/transform/v3/eyJpdSI6IjhkYjA5NzJmZmJlOWY0NWM3MzlmNDIzNWM2MjRjOThkYTA0YWQ2M2U4MDUwYjRmMWY5Y2I4NzRmNjQxNTRhYzkiLCJ3Ijo2MCwiaCI6NjAsImQiOjEuNSwiY3MiOjAsImYiOjB9.jpg">
                                        </span>
                                        <span class="ob-unit ob-rec-text">
                                            kou shibasaki echoes the "short hair" of the cut "cool and wonderful" "beautiful person stands out"
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
        

    </section>
@endsection()
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script type="text/javascript">
        //topic
        $(document).on('click','#saveLikeDislike',function(){
            var _post=$(this).data('post');
            var _type=$(this).data('type');
            var vm=$(this);
            // Run Ajax
            $.ajax({
                url:"{{ url('save-likedislike') }}",
                type:"post",
                dataType:'json',
                data:{
                    post:_post,
                    type:_type,
                    _token:"{{ csrf_token() }}"
                },
                beforeSend:function(){
                    vm.addClass('disabled');
                },
                success:function(res){
                    if(res.bool==true){
                        vm.removeClass('disabled').addClass('active');
                        vm.removeAttr('id');
                        var _prevCount=$("."+_type+"-count").text();
                        _prevCount++;
                        $("."+_type+"-count").text(_prevCount);
                    }
                }   
            });
        });
        //comment
        $(document).on('click','#saveLikeDislikeComment',function(){
            var _post=$(this).data('post');
            var _type=$(this).data('type');
            var vm=$(this);
            // Run Ajax
            $.ajax({
                url:"{{ url('save-likedislike-comment') }}",
                type:"post",
                dataType:'json',
                data:{
                    post:_post,
                    type:_type,
                    _token:"{{ csrf_token() }}"
                },
                beforeSend:function(){
                    vm.addClass('disabled');
                },
                success:function(res){
                    if(res.bool==true){
                        vm.removeClass('disabled').addClass('active');
                        vm.removeAttr('id');
                        var _prevCount=$("."+_type+"-count").text();
                        _prevCount++;
                        $("."+_type+"-count").text(_prevCount);
                    }
                }   
            });
        });
    </script>
@endsection