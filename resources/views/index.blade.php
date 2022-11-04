@extends('layouts.app')

@section('section')
<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
<script type="text/javascript" src="/js/slick.js"></script>

<div class="banner_slide">
    <div class="frame"></div>
    <img src="image/123.jpg" alt="">
    <div class="main_width banner_width">
        <div class="banner_txt">
            <div class="txt_desc">전라도 방식으로 만든</div>
            <div class="txt_name">전라도 전통 떡갈비 정식</div>
            <a href="">
                <div class="txt_href">
                    예약하러 가기
                </div>
            </a>
        </div>
    </div>
</div>

<div class="main_width mt-5">
    <div class="content_box1 flex" id="content_box">
        <div class="wd-50">
            <div class="food_box">
                <img src="image/food_image.jpeg" alt="" class="food_img">
            </div>
        </div>
        <div class="wd-50">
            <div class="food_explain">
                <p style="margin-top: 20px; font-size:30px">저희 매장은</p>
                <p style="margin-top: 30px; font-size:30px">오로지 <span style="font-weight: bold">국내산</span>만 취급합니다.</p>  
                <p style="margin-top: 30px; font-size:20px">육류와 밑반찬 모두 국내산입니다.</p>
                <a href="{{Route('menu')}}" class="food_href" >매장보러가기</a>
            </div>
        </div>
    </div>
</div>

<div class="main_width mt-5">
    <div class="content_box2 flex">
        <div class="wd-50">
            <div class="food_explain">
                <p style="margin-top: 20px; font-size:30px"><span style="font-weight: bold">전통 떡갈비</span></p>
                <p style="margin-top: 30px; font-size:30px">  </p>  
                <p style="margin-top: 30px; font-size:20px">갈빗살, 등심, 채끝 등을 섞은 후<br></p>
                <p style="font-size:20px">석쇠에 연탄불을 사용해 조리합니다.</p>
                <a href="{{Route('menu')}}" class="food_href">메뉴보러가기</a>
            </div>
        </div>
        <div class="wd-50">
            <div class="food_box">
                <img src="image/food_image2.jpg" alt="" class="food_img">
            </div>
        </div>
    </div>
</div>


<div class="main_width mt-5">
    <div class="slider-wrap">
        <div class="cont">
            <div class="cont_box">
                <img src="image/slick_image_1.jpg" alt="">
                <div class="slider_desc">
                    테라스 뷰
                </div>
            </div>
        </div>
        <div class="cont">
            <div class="cont_box">
                <img src="image/slick_image_2.jpg" alt="">
                <div class="slider_desc">
                    포토 존
                </div>
            </div>
        </div>
        <div class="cont">
            <div class="cont_box">
                <img src="image/slick_image_3.jpg" alt="">
                <div class="slider_desc">
                    인증된 맛집
                </div>
            </div>
        </div>
        <div class="cont">
            <div class="cont_box">
                <img src="image/slick_image_4.jpg" alt="">
                <div class="slider_desc">
                    푸짐한 양
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main_width mt-5 flex">
    <div class="notice_box wd-50">
        <div class="sub_title" style="text-align: center">공지사항</div>
        <div class="" style="height: 320px;border:1px solid #1F1918;margin-top:20px">
            <div style="text-align: center; display:flex">
                <div class="wd-75 title">제목</div>
                <div class="wd-25 user">작성자</div>
            </div>
            @if (!empty($notice) && $notice -> count())
            
            @foreach ($notice as $key)
            <div style="text-align: center; display:flex">
                <div class="wd-75" class="user_name" style="text-align: start; padding:10px"><a href="{{Route('notice_view', $key -> id)}}">{{$key -> title}}</a></div>
                <div class="wd-25" class="user_title" style="padding:10px">{{$key -> username}}</div>
            </div>
            @endforeach    
            @else
            <div style="margin: 30px;text-align:center">공지 내역이 없습니다.</div>
            @endif
        </div>
    </div>
    <div class="notice_box wd-50" style="height: 400px">
        <div class="sub_title" style="text-align: center">고객 리뷰</div>
        <div class="" style="height: 320px;border:1px solid #1F1918;margin-top:20px">
            <div style="text-align: center; display:flex">
                <div class="wd-75 title">제목</div>
                <div class="wd-25 user">작성자</div>
            </div>
            @if (!empty($review) && $review -> count())
            
            @foreach ($review as $key)
            <div style="text-align: center; display:flex">
                <div class="wd-75" class="user_name" style="text-align: start; padding:10px"><a href="{{Route('review_view', $key -> id)}}">{{$key -> title}}</a></div>
                <div class="wd-25" class="user_title" style="padding:10px">{{$key -> name}}</div>
            </div>
            @endforeach    
            @else
            <div style="margin: 30px;text-align:center">리뷰 내역이 없습니다.</div>
            @endif
        </div>
    </div>
</div>


<div class="contact mt-5">
    <div class="main_width flex align-items-center " style="height: 100%">
        <div class="wd-50 fc-white flex  justify-content-center">
            <div class="contact_desc">
                <p style="font-size: 22px">예약 문의</p>
                <p>예약 및 궁금한 점은 아래 전화번호로 연락주세요</p>
                <p><i class="fa-solid fa-phone"></i> 0507-1362-1402</p>
            </div>
        </div>
        <div class="wd-50 fc-white flex align-items-center justify-content-center">
            <div class="contact_desc">
                <p style="font-size: 22px">찾아오시는 길</p>
                <p><i class="fa-solid fa-location-dot"></i> 제주 제주시 월성로4길 80 2층 성식당 제주점</p>
            </div>
        </div>
    </div>
</div>





<script>
    $('.slider-wrap').slick({
  slide: 'div',        //슬라이드 되어야 할 태그
  infinite : true,     //무한 반복 옵션     
  slidesToShow : 3,        // 한 화면에 보여질 컨텐츠 개수
  slidesToScroll : 1,        //스크롤 한번에 움직일 컨텐츠 개수
  speed : 500,     // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
  arrows : true,         // 옆으로 이동하는 화살표 표시 여부
  dots : true,         // 스크롤바 아래 점으로 페이지네이션 여부
  autoplay : true,            // 자동 스크롤 사용 여부
  autoplaySpeed : 5000,         // 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
  pauseOnHover : true,        // 슬라이드 이동    시 마우스 호버하면 슬라이더 멈추게 설정
  vertical : false,        // 세로 방향 슬라이드 옵션
  prevArrow : "<button type='button' class='slick-prev'></button>",
  nextArrow : "<button type='button' class='slick-next'></button>",
  draggable : true,     //드래그 가능 여부 
  responsive: [ // 반응형 웹 구현 옵션
    { 
      breakpoint: 758, //화면 사이즈 768px
      settings: {    
        slidesToShow: 2
      } 
    }
  ]

});
</script>

<style>
    @keyframes content_box_fadeIn{
        from{
            opacity: 0;
            transform: translate3d(0, 10%, 0);
        }
        to{
            opacity: 1;
            transform: translateZ(0);
        }
    }
    @keyframes content_box_fadeOut{
        from{
            opacity: 1;
            transform: translateZ(0);
        }
        to{
            opacity: 0;
            transform: translate3d(0, 10%, 0);
        }
    }


    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translate3d(-50%, -70%, 0);
        }
        to {
            opacity: 1;
            transform: translate3d(-50%, -50%, 0);
        }
    }
 
    .banner_txt {
        animation: fadeInUp 0.7s;
        color: white;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
        text-align: center;
    }
</style>

<script>
    window.addEventListener("scroll",function(){
    let Y = window.scrollY;
    var content_box = document.getElementById('content_box');
    var offset = content_box.offsetTop;
    var test = window.screen.height;

    if(Y > offset - test){
        this.document.querySelector(".content_box1").style.animation = 'content_box_fadeIn 1s ease-out forwards';
        this.document.querySelector(".content_box2").style.animation = 'content_box_fadeIn 1s ease-out forwards';
    }

    else{
        this.document.querySelector(".content_box1").style.animation = 'content_box_fadeOut 1s ease-out forwards';
        this.document.querySelector(".content_box2").style.animation = 'content_box_fadeOut 1s ease-out forwards';
    }
})
</script>

@stop