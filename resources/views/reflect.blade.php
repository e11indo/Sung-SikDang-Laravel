@extends('layouts.app')

@section('section')
    <div class="sung_header">
        <div class="frame"></div>
        <div class="sung_black">
            <h1>매장 정보</h1>
        </div>
    </div>

    <div class="main_width">
        <div class="reflect_box">
            <div class="frame"></div>
            <img src="/image/3월_조상식.jpg" alt="" style="width:100%">
{{--             <div class="vow_box_1">
                궁중에서 임금님이<br> 즐기시던 고급 음식
            </div>
            <div class="vow_box_2">
                <p>떡갈비</p>
                체통을 지켜야하는 왕실 사람들의<br> 영양을 채우기 위해 잘게 다져 먹던 고기로<br>체통없이 갈비를 손으로 들고 뜯어먹을 수 없어<br>잘게 다져 먹었다는 유래도 있다.
            </div> --}}

            <div class="vow_box_1">
                <span>떡갈비</span><br>
                <p class="vow_box_sub">궁중에서 임금님이 즐기시던 고급 음식</p>
                <p class="vow_box_desc">권위를 지켜야하는 왕실 사람들의 영양을 채우기 위해 잘게 다져 먹던 고기로 체통없이 갈비를 손으로 들고 뜯어먹을 수 없어 잘게 다져 먹었다는 유래도 있다.</p>
                <p class="vow_box_desc">650여 년 유배 내려온 노송당 송희경에 의해 잡고기를 섞지 않고 갈빗대에서 떼어낸 고기를 다져 만든 담양식 떡갈비가 전해지기 시작한다.</p>
            </div>
        </div>
    </div>

    <div class="main_width mt-5">
        <div class="reminisce_box">
            원조인 전남 지방에서도 만드는 방식에 따라 2가지의 지역 방식이 존재합니다.
        </div>
    </div>

    <div class="main_width mt-5">
        <div class="vertical_box flex">
            <div class="left_flex">
                <div class="left">
                    <p class="vertical_small">소갈비살만 이용해 뼈를 붙인</p>
                    <p class="vertical_big"><span style="color:#336387">담양</span>식 떡갈비</p><br>
                </div>
                <img src="image/담양 떡갈비.jpg" alt="">
            </div>
            <div class="right_flex">
                <img src="image/송정 떡갈비.jpg" alt="">
                <div class="right">
                    <p class="vertical_small" style="text-align: right">소고기와 돼지고기를 섞은</p>
                    <p class="vertical_big" style="text-align: right"><span style="color:#336387">송정</span>식 떡갈비</p>
                </div>
            </div>
        </div>
    </div>


@endsection