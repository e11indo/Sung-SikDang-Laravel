{{-- @extends('layouts.app')

@section('section')
    <div class="sung_header">
        <div class="frame"></div>
        <div class="sung_black">
            <h1>공지사항</h1>
        </div>
    </div>

    <div class="main_width inquiry_width" style="max-height: 700px; overflow-y: scroll;">
        <table class="sung_table">
            <thead>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성일자</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($notice) && $notice -> count())
                @foreach ($notice as $key => $value)
                <tr>
                    <td style="text-align: center">{{$key+1 }}</td>
                    <td><a href="{{Route('notice_view', $value -> id)}}">{{$value -> title}}</a></td>
                    <td style="text-align: center">{{$value -> created_at -> format('Y-m-d')}}</td>
                </tr>
                @endforeach    
                @else
                <div style="margin: 30px;text-align:center">공지 내역이 없습니다.</div>
                @endif
            </tbody>
        </table>
    </div>


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
    <div class="btn_wrap">
{{--         <form action="review_search" method="POST">
            @csrf --}}
            <select name="option" id="search_option">
                <option value="title" name="title">제목</option>
                <option value="name" name="name">작성자</option>
            </select>
            <input type="text" name="select" id="select">
            <button type="submit" onclick="search()">검색</button>
        {{-- </form> --}}
    </div>
    <table class="review_table">
        <tr class="review_top">
            <td class="number">번호</td>
            <td class="title" style="text-align: center">제목</td>
            <td class="name">작성자</td>
            <td class="when">날짜</td>
        </tr>
        @if (!empty($notice) && $notice -> count())
        @foreach ($notice as $key => $value)
        <tr>
            <td class="number">{{$key +1}}</td>
            <td class="title"><a href="{{Route('notice_view', $value -> id)}}">{{$value -> title}}</a></td>
            <td class="name">{{$value -> username}}</td>
            <td class="when">{{$value -> created_at -> format('Y-m-d')}}</td>
        </tr>
        @endforeach
        @endif
    </table>


    <div class="test"></div>
</div>





@endsection