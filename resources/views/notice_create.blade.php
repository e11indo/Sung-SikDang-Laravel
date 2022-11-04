@extends('layouts.app')

@section('section')
    <div class="sung_header">
        <div class="frame"></div>
        <div class="sung_black">
            <h1>공지사항</h1>
        </div>
    </div>


    <div class="main_width">
        <form action="notice_create" method="POST">
            @csrf
            <table class="sung_table_view">
                <tbody>
                    <tr>
                        <td>작성자</td>
                        <td>성 식당</td>
                        <input type="hidden" name="username" id="" value="성 식당">
                    </tr>
                    <tr>
                        <td>제목</td>
                        <td><input type="text" name="title" id=""></td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td><textarea name="content" id="" cols="30" rows="10"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" name="" id="submit" value="신청하기">
        </form>
    </div>

@endsection