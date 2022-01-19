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
                                        <span>ニュース</span>
                                    </a>
                                </li>
                                <span class="icon-arror_r">
                                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/10/000000/external-right-arrow-arrows-dreamstale-lineal-dreamstale-2.png"/>
                                </span>
                                <li class="breadcrumb current">
                                    <a href="/topics/{{$topic->id}}">
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
                                        <span>{{ $topic->comment_count }}コメント</span>
                                        <span class="datetime">{{ $topic->created_at }}</span>
                                    </font>
                                </p>
                            </div>
                            
                            @endforeach
                            <div class="body-area">
                                <ul class="topic-comment">
                                    @foreach( $comments as $comment )
                                    <li class="comment-item" id="comment1">
                                        <p class="info">
                                            <font>
                                                匿名
                                                <a href="#">
                                                    {{ $comment->created_at }}
                                                </a>
                                            </font>
                                        </p>
                                        <div class="body">
                                            <font>
                                                {!! nl2br($comment->content) !!}
                                            </font>
                                        </div>
                                        @if($comment->image)
                                            <div class="comment-img">
                                                <img src=" {{ asset('public/image_comment/'.$comment->image) }} " width="400">
                                            </div><br>
                                        @else
                                            <p></p>
                                        @endif
                                        <!-- <div class="res-count">
                                            <a href="#" class="res-count-btn">
                                                <span class="icon-comment_fill">
                                                    <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                </span>
                                                <font>179 replies</font>
                                            </a>
                                        </div> -->
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
                                    @endforeach
                                </ul>
                            <!-- </div> -->
                            <div class="form-area">
                                @foreach($topics as $topic)
                                @foreach($comments as $comment)
                                <form action="{{$comment->id}}" method="POST" class="form-comment" enctype="multipart/form-data">
                                    @csrf
                                    <p class="title">匿名 さんに返信する</p>
                                    <div class="textarea mb10">
                                        <textarea id="textarea" name="text" placeholder="write a comment" class="form-control"></textarea>
                                        <!-- <p id="btnUrl" class="add-link">
                                            <span class="icon-link">
                                            <img src="https://img.icons8.com/material-outlined/20/000000/link--v1.png"/>
                                            </span>
                                            <font>
                                                quote articles and images
                                            </font>
                                        </p> -->
                                    </div>
                                    <div class="add-image">
                                        <div class="wrap">
                                            <span class="icon-camera">
                                                <img src="https://img.icons8.com/material-outlined/15/000000/camera--v2.png"/>
                                            </span>
                                            <p class="text normal">
                                                select image
                                            </p>
                                            <input type="file" name="addimage" id="addimage">
                                        </div>
                                    </div>
                                    <!-- <div class="form-checks">
                                        <input id="anonymous" type="checkbox">
                                        <label for="anonymous" class="checkbox">
                                            Post anonymously
                                        </label>
                                        <input id="showId" type="checkbox">
                                        <label for="showId" class="checkbox">
                                            View ID to prevent spoofing
                                        </label>
                                    </div> -->
                                    <input id="submit" type="submit" value="Post a topic" class="btn btn-positive post_comment">
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
                                    <div class="body-area">
                                        <ul class="topic-comment">
                                            @foreach( $comments_rely as $comment_rely )
                                            <li class="comment-item" id="comment1">
                                                <p class="info">
                                                    <font>
                                                        匿名
                                                        <a href="#">
                                                            {{ $comment_rely->created_at }}
                                                        </a>
                                                    </font>
                                                </p>
                                                <div class="body">
                                                    <font>
                                                        {!! nl2br($comment_rely->content) !!}
                                                    </font>
                                                </div>
                                                @if($comment_rely->image)
                                                    <div class="comment-img">
                                                        <img src=" {{ asset('public/image_comment/'.$comment_rely->image) }} " width="400">
                                                    </div><br>
                                                @else
                                                    <p></p>
                                                @endif
                                                <!-- <div class="res-count">
                                                    <a href="#" class="res-count-btn">
                                                        <span class="icon-comment_fill">
                                                            <img src="https://img.icons8.com/ios-filled/15/000000/topic.png"/>
                                                        </span>
                                                        <font>179 replies</font>
                                                    </a>
                                                </div> -->
                                                <div class="topic-rate">
                                                    <div class="icon-rate-wrap icon-rate-wrap-plus">
                                                        <div class="counter">
                                                            <p>{{ $comment_rely->likes() }}</p>
                                                        </div>
                                                        <div class="icon-rate icon-plus-btn">
                                                            <div class="btn-rate" >
                                                                <span class="btn" title="Likes" id="saveLikeDislikeComment_rely" data-type="like" data-post="{{ $comment->id}}" >
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
                                                            <p>{{ $comment_rely->dislikes() }}</p>
                                                        </div>
                                                        <div class="icon-rate icon-minus-btn" state>
                                                            <div class="btn-rate">
                                                                <span class="btn" title="Dislikes" id="saveLikeDislikeComment_rely" data-type="dislike" data-post="{{ $comment->id}}" >
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
                                        </ul>
                                    </div>
                                </form>
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub">
                    <div class="ob-widget ob-one-column-layout SB_1">
                        <div class="ob-widget-section ob-first">
                            <div class="sub-part sub-keywords relate mb20">
                                <p class="head">関連キーワード</p>
                                <ul class="flc">
                                    @foreach($keywords_name as $keyword_name)
                                    <li>
                                        <a href="keyword/{{ $keyword_name->id }}">
                                            #{{ $keyword_name->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
@section('scripts')
    <script type="text/javascript">
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

        //comment_rely
        $(document).on('click','#saveLikeDislikeComment_rely',function(){
            var _post=$(this).data('post');
            var _type=$(this).data('type');
            var vm=$(this);
            // Run Ajax
            $.ajax({
                url:"{{ url('save-likedislike-comment-rely') }}",
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