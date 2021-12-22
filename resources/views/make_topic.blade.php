@extends('layouts.layout')
@section('body')
<div class="wrap">
    <div class="container">
        <div class="row">
                <div class="main">
                    <div class="entry-wrap">
                        <h1>Post a topic</h1>
                        <img src="https://static.gc-img.net/img/parts_pc/step1.png" class="step">
                        <form id="form" class="form form-topic">
                            <div class="image">
                                <div class="form-image">
                                    <div id="topicThum">
                                        <img src=" {{ URL::asset('Materials/noimg@2x.png'); }} " class="img">
                                    </div>
                                    <div class="add-image">
                                        <div>
                                            <span class="icon-camera">
                                                <img src="https://img.icons8.com/material-outlined/15/000000/camera--v2.png"/>
                                            </span>
                                            <p>Select image</p>
                                            <input id="addImage" type="file" name="add_pic">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="other">
                                <div class="form-head">
                                    <input id="title" type="text" placeholder="write a title" class="input-title" style="width: 100%">
                                    <div class="textarea">
                                        <textarea id="textarea" placeholder="write the text"></textarea>
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