@extends('layouts.app')

@section('section')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

<div class="sung_header">
    <div class="frame"></div>
    <div class="sung_black">
        <h1>식당 이야기</h1>
    </div>
</div>

<div class="main_width">
    <div class="sung_body">
        <p class="body_title">방문 후기</p>
        <p class="body_sub_title">여러분들의 따끈따끈한 후기를 올려주세요.</p>
    </div>
        <div class="review_box">
            <p class="review_title">{{$review ->title}}</p>
            <div class="review_top">
                <span>{{$review-> name}}&nbsp;&nbsp;|&nbsp;&nbsp;{{$review -> created_at}}</span>
                <div class="float_right"><span>조회수: {{$review -> count}}</span></div>
            </div>
            <div class="review_description">{!!$review -> description!!}</div>
        </div>
        <div class="btn_wrap">
            <a href="{{Route('review_create')}}">새글쓰기</a>
            <a href="{{Route('review')}}">글목록</a>
            <a href="javascript:void(0)" id="modify">수정</a>
            <a href="javascript:void(0)" id="delete">삭제</a>
        </div>

        <div class="modals review_modify hidden">
            <div class="review_modal_box">
                <i class="fa-sharp fa-solid fa-xmark exit3" id="exit"></i>
                <div id="modal_top">
                    <p>비밀번호 입력</p>
                </div>
                <div id="modal_bottom">
                    <div class="bottom_message">비밀번호 입력</div>
                    <div class="bottom_input">
                        <form action="/review_modify/{{$review -> id}}" method="POST">
                            @csrf
                            <input type="password" name="password" id="">
                            <button type="submit">입력</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modals review_delete hidden">
            <div class="review_modal_box">
                <i class="fa-sharp fa-solid fa-xmark exit3" id="exit"></i>
                <div id="modal_top">
                    <p>비밀번호 입력</p>
                </div>
                <div id="modal_bottom">
                    <div class="bottom_message">비밀번호 입력</div>
                    <div class="bottom_input">
                        <form action="/review_delete/{{$review -> id}}" method="POST">
                            @csrf
                            <input type="password" name="password" id="">
                            <button type="submit">입력</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@if(Session::has('jsAlert'))
<script>
    alert('비밀번호가 일치하지 않습니다.');
</script>
@endif

@endsection