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
        <p class="body_title">방문 후기</p>
        <p class="body_sub_title">여러분들의 따끈따끈한 후기를 올려주세요.</p>
    </div>
    <div class="btn_wrap">
{{--         <form action="review_search" method="POST">
            @csrf --}}
            <select name="option" id="search_option" style="height: 30px">
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
        @if (!empty($reviews) && $reviews -> count())
        @foreach ($reviews as $review => $value)
        <tr class="review_bottom">
            <td class="number">{{$review +1}}</td>
            <td class="title"><a href="{{Route('review_view', $value -> id)}}">{{$value -> title}}</a></td>
            <td class="name">{{$value -> name}}</td>
            <td class="when">{{$value -> created_at -> format('Y-m-d')}}</td>
        </tr>
        @endforeach
        @endif
    </table>
    <div class="page">
        {{ $reviews->links() }}
    </div>
    <div class="btn_wrap">
        <a href="{{Route('review_create')}}">글쓰기</a>
    </div>

    <div class="test"></div>
</div>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});    
function search(){
    var option = document.getElementById('search_option');
    var select = option.options[option.selectedIndex].value;
    var input = document.getElementById('select').value;

    $.ajax({
        method: "post",
        url: '/review_search',
        data: {"select" : select, "input" : input},
        success: function(response){
            /* console.log(response[0].title); */
            search_show(response);
        },
        error: function(response){
            $('.test').html("연결안됨");
        }
    })
}

function search_show(result){
    $('.review_table').html("");

    var review_top = "";

    review_top += '<tr class="review_top">';
    review_top += '<td class="number">번호</td>';
    review_top += '<td class="title" style="text-align: center">제목</td>';
    review_top += '<td class="name">작성자</td>';
    review_top +=  '<td class="when">날짜</td>';
    review_top += '</td>';

    $('.review_table').append(review_top);


    var review_bottom ="";

    if(result){
        for( $i=1;$i < result.length+1;$i++){
        created_at = result[$i-1].created_at.split('T')

        review_bottom += '<tr class="review_bottom">';
        review_bottom += '<td class="number">'+ $i +'</td>';  
        review_bottom += '<td class="title"> <a href="review_view/'+ result[$i-1].id +'">' + result[$i-1].title  +'</a></td>'; 
        review_bottom += '<td class="name">'+ result[$i-1].name+'</td>';
        review_bottom += '<td class="when">'+ created_at[0] +'</td>';
        review_bottom += '</td>';
        }
    }

    $('.review_table').append(review_bottom);
}

</script>



@endsection