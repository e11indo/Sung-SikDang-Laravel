@extends('layouts.app')

@section('section')
    <div class="sung_header">
        <div class="frame"></div>
        <div class="sung_black">
            <h1>메 뉴</h1>
        </div>
    </div>

    <div class="main_width">
        <div class="food_title"><span>메인 음식</span></div>
        <div class="food_menu flex">
            <li>
                <div class="menu_image" style="background-image:url(/image/전통떡갈비.jpg)" >

                </div>
                <article class="menu_desc">
                    <h3 class="article_top">
                        전라도떡갈비정식
                        <b>33,000원<p>1인분 기준</p></b>
                    </h3>
                    <p class="article_middle">고기를 갈지 않고 갈빗살과 다른 부윗살을 뼈에 붙여 불향을 입힌 떡갈비, 한가득 머금고 있는 육즙을 느껴기 좋습니다. </p>
                    <div class="article_bottom">
                        <div>
                            <b>원산지</b>
                            <p>갈비, 등심, 채끝, 사태, 내장 || 국내산</p>
                        </div>
                    </div>
                </article>
            </li>

            <li>
                <div class="menu_image" style="background-image:url(/image/갈비탕.jpg)" >

                </div>
                <article class="menu_desc">
                    <h3 class="article_top">
                        갈비탕
                        <b>15,000원</b>
                    </h3>
                    <p class="article_middle">푹 고운 찐한 국물과 뭉글뭉글 다져진 고기의 식감을 통해 옛날 그 감성을 느껴보실 수 있습니다.</p>
                    <div class="article_bottom">
                        <div>
                            <b>원산지</b>
                            <p>갈비, 야채 및 채소 || 국내산</p>
                        </div>
                    </div>
                </article>
            </li>
        </div>
    </div>

    <div class="main_width mt-5">
        <div class="food_title"><span>그 외</span></div>
        <div class="food_side">
            <div class="food_side_name"><span>내장탕</span></div>
            <div class="food_side_price"><b>12,000원</b></div>
        </div>
        <div class="food_side">
            <div class="food_side_name"><span>공기밥</span></div>
            <div class="food_side_price"><b>1,000원</b></div>
        </div>
        <div class="food_side">
            <div class="food_side_name"><span>복분자</span></div>
            <div class="food_side_price"><b>15,000원</b></div>
        </div>
        <div class="food_side">
            <div class="food_side_name"><span>소주</span></div>
            <div class="food_side_price"><b>5,000원</b></div>
        </div>
        <div class="food_side">
            <div class="food_side_name"><span>맥주</span></div>
            <div class="food_side_price"><b>5,000원</b></div>
        </div>
        <div class="food_side">
            <div class="food_side_name"><span>막걸리</span></div>
            <div class="food_side_price"><b>4,000원</b></div>
        </div>
        <div class="food_side">
            <div class="food_side_name"><span>음료수</span></div>
            <div class="food_side_price"><b>2,000원</b></div>
        </div>
    </div>


@endsection