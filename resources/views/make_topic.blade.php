@extends('layouts.layout')

@section('title')
    Make topic
@endsection()

@section('body')
<div class="wrap">
    <div class="container">
        <div class="row">
                <div class="main">
                    <div class="entry-wrap">
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>Post a topic</h1>
                        <img src="https://static.gc-img.net/img/parts_pc/step1.png" class="step">
                        <form id="form" action="{{ url('make_topic') }}" method="POST" class="form form-topic" enctype="multipart/form-data">
                            @csrf
                            <div class="image">
                                <div class="form-image">
                                    <div id="topicThum">
                                        <!-- <img src=" {{ URL::asset('Materials/noimg@2x.png'); }} " class="img" id="preview image"> -->
                                        <img id="preview-image" src="{{ URL::asset('Materials/noimg@2x.png'); }}" alt="preview image"class="img">
                                    </div>
                                    <div class="add-image">
                                        <div>
                                            <span class="icon-camera">
                                                <img src="https://img.icons8.com/material-outlined/15/000000/camera--v2.png"/>
                                            </span>
                                            <p>Select image</p>
                                            <input type="file" name="image" id="image">
                                        </div>
                                        @error('image')
                                            <p class="help text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="other">
                                <div class="form-head">
                                    <input id="title" type="text" name="title" placeholder="write a title" class="input-title" style="width: 100%" value="{{ old('name') }}">
                                    @error('title')
                                        <p class="help text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="textarea">
                                        <textarea class="preserveLines" id="textarea" name="text" placeholder="write the text" value="{ nl2br(old('name') }) }"></textarea>
                                    </div>
                                    @error('text')
                                        <p class="help text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="add-image mb10">
                                        <div>
                                            <span class="icon-camera">
                                                <img src="https://img.icons8.com/material-outlined/15/000000/camera--v2.png"/>
                                            </span>
                                            <p>Select image</p>
                                            <input type="file" name="image_content" id="image_content">
                                        </div>
                                    </div>
                                    <select class="custom-select mb10" name="category">
                                        <option value="">---Category---</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <p class="help text-danger">{{ $message }}</p>
                                    @enderror
                                    
                                    <select class="custom-select mb10" name="keyword">
                                        <option value = "">---Keyword---</option>
                                        @foreach( $keywords as $keyword )
                                        <option value="{{ $keyword->id }}">{{ $keyword->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('keyword')
                                        <p class="help text-danger">{{ $message }}</p>
                                    @enderror
                                    
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
                                </div>
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
                    </div>
                </div>
                <div class="sub responsive">
                    <div class="sub-part sub-text sub-text-aet mb20">
                        <p class="head">
                            About topic approval system
                        </p>
                        <p class="text">
                            Since the number of topics posted every day is very large, we have an approval system based on the following criteria.
                        </p>
                        <p class="subtitle">
                            <span class="icon-circle">
                                <img src="https://img.icons8.com/material-outlined/15/000000/circled.png"/>
                            </span>
                            <font>Topics that are easy to approve</font>
                        </p>
                        <p class="text">
                            ・ Topics that many women are likely to be interested in </br>
                            ・ Topics that seem to be easy to comment on</br>
                            ・ Topics that seem to be interesting to read
                        </p>
                        <p class="subtitle">
                            <span class="icon-triangle">
                                <img src="https://img.icons8.com/fluency/15/000000/triangle-stroked.png"/>
                            </span>
                            <font>Topics likely to be disapproved</font>
                        </p>
                        <p class="text">
                            ・ Personal trouble consultation,  question<br>
                            ・ Topic that seems to be just a  bad talk<br>
                            ・ Topic that seems to  be few people who can understand<br>
                            ・ Sexual topic from a male point of sight <br>
                            ・ Topic where the intention is difficult to understand<br> 
                            ・ Topic that there is already a similar topic
                        </p>
                    </div>
                    <div class="sub-part sub-text sub-text-eh">
                        <p class="head">
                            Tip for topic posts
                        </p>
                        <p class="subtitle">
                            <span>1</span>
                            <font>Easy-to-understand titles</font>
                        </p>
                        <p class="text">
                            Try to create a title that makes it easy to imagine the content of the topic.
                        </p>
                        <p class="subtitle">
                            <span>2</span>
                            <font>Images that fit your topic</font>
                        </p>
                        <p class="text">
                            UPLOAD AN IMAGE OR ENTER THE URL OF THE IMAGE IN THE BODY. THE IMAGE APPEARS AS THE TOP IMAGE (THUMBNAIL) OF THE TOPIC.
                        </p>
                        <p class="subtitle">
                            <span>3</span>
                            <font>Specifically in the text</font>
                        </p>
                        <p class="text">
                            To make it easier for many people to comment, let's write the text in concretely.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()
@section('scripts')
    <script type="text/javascript">
        $('#image').change(function(){
            
        let reader = new FileReader();
        reader.onload = (e) => { 
        $('#preview-image').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]); 
        });
    </script>
@endsection