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
    <table class="review_table">
        <tr class="review_top">
            <td class="title">진행 중인 이벤트: 1개</td>
        </tr>
    </table>
    <div class="event_box">
            <div class="wd-50">
                <a href="{{Route('event_1')}}">
                    <div class="event">
                        <img src="image/Event_banner_1.jpg" alt="">
                        <div class="event_desc">
                            <p>성식당 SNS 인증 시 음료수 증정 이벤트</p>
                            <span>2022.10.01 ~</span>
                            <div class="event_sticker">
                                진행중
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    </div>
</div>





@endsection