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

        <form action="/review_update/{{$modify->id}}" method="POST">
            @csrf
            <div class="inquiry_box no_border" style="margin-bottom:30px">
                <table>
                    <tr>
                        <td class="title">제목</td>
                        <td class="desc"><input type="text" name="title" id="title" value="{{$modify ->title}}"></td>
                    </tr>
                    <tr>
                        <td class="title">작성자</td>
                        <td class="desc"><input type="text" name="name" id="name" value="{{$modify ->name}}"></td>
                    </tr>
                    <tr>
                        <td class="title">비밀번호</td>
                        <td class="desc"><input type="password" name="password" id="password"></td>
                    </tr>
                </table>
            </div>
            <textarea name="description" id="summernote" style="margin-top:30px">{!!$modify -> description!!}</textarea> 
            <div class="btn_wrap">
                <input type="submit" value="리뷰쓰기">
                <a href="{{Route('review')}}" onclick="return confirm('작성한 내용은 저장되지 않습니다. 글 목록으로 이동하시겠습니까?')">글목록</a>
            </div>
        </form>
    </div>



    <script>
        $('#summernote').summernote({
            placeholder: '내용을 작성하세요',
              height: 450,
              lang: "ko-KR"
            });
    </script>
@endsection