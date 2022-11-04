{{-- @extends('layouts.app')

@section('section')
    <div class="sung_header">
        <div class="frame"></div>
        <div class="sung_black">
            <h1>공지사항</h1>
        </div>
    </div>


    <div class="main_width">
        <table class="sung_table_view">
            <tbody>
                <tr>
                    <td>작성자</td>
                    <td>성 식당</td>
                </tr>
                <tr>
                    <td>제목</td>
                    <td>{{$notice -> title}}</td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td>{{$notice -> content}}</td>
                </tr>
            </tbody>
        </table>
        <button onclick="back()" style="margin-top: 15px; float:right" >뒤로가기</button>
    </div>


<script>
    function back(){
        window.history.back();
    }
</script>

@endsection --}}


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
        <p class="body_title">공지사항</p>
    </div>
        <div class="review_box">
            <p class="review_title">{{$notice ->title}}</p>
            <div class="review_top">
                <span>성 식당&nbsp;&nbsp;|&nbsp;&nbsp;{{$notice -> created_at}}</span>
            </div>
            <div class="review_description">{{$notice -> content}}</div>
        </div>
        <div class="btn_wrap">
            <a href="{{Route('notice')}}">글목록</a>
        </div>
</div>


@endsection