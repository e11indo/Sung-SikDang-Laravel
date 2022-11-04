@extends('layouts.app')

@section('section')

<div class="sung_header">
    <div class="frame"></div>
    <div class="sung_black">
        <h1>식당 이야기</h1>
    </div>
</div>

<div class="main_width">
    <div class="sung_body">
        <p class="body_title">이벤트</p>
        <p class="body_sub_title">다양한 혜택을 놓치지 마세요!</p>
    </div>
    <div class="review_box" style="border-bottom: 0">
        <p class="review_title">성식당 SNS 인증 시 음료수 증정 이벤트</p>
        <div class="review_top">
            <span>기간: 2022.10.01 ~</span>
        </div>
    </div>
    <div class="event_box">
        <img src="/image/Event_banner_1.jpg" alt="">
    </div>
    <div class="btn_wrap">
        <a href="{{Route('event')}}">글목록</a>
    </div>
</div>





@endsection