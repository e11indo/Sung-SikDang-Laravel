@extends('layouts.app')

@section('section')

    <div class="sung_header">
        <div class="frame"></div>
        <div class="sung_black">
            <h1>매장 정보</h1>
        </div>
    </div>

    <div class="main_width">
        <div class="flex">
            <div class="wd-50">
                <img src="/image/매장정보1.png" alt="">
            </div>
            <div class="wd-50">
                <p class="title">전라도 전통의 맛 그대로</p>
                <p class="description"><span class="fw-bold" style="color: #336387;">1961년</span>부터 전해져온 식당 전통의 맛은 누구나 쉽게 따라할 수 없다는 것을 수 십년동안 찾아주신 손님들이 증거합니다. <br></p>
                <p class="description">많은 공중파가 극찬한 맛집 성 식당, 오늘도 식당을 찾아주신 손님들을 위해 음식을 준비합니다.<br></p>
                <p class="description" style="margin-top: 30px">음식 하나하나에 정성을 넣어 드시는 손님들에게 최상의 만족감을 느낄 수 있도록 늘 근면, 성실, 친절을 바탕으로 서비스를 제공하겠습니다.<br></p>
            </div>
        </div>
    </div>
    <div class="main_width mt-5">
        <div class="flex">
            <div class="wd-50">
                <p class="title">인증된 맛집</p>
                <p class="description">백종원의 골목식당, 생방송 투데이, 오늘저녁, 허영만의 백반기행 등 다양한 방송을 통해 목포 떡갈비집은 우리 성 식당이 생각날 정도로 인증이 된 맛입니다.</p>
                <p class="description" style="margin-top:30px">갈빗대와 다른 부위살을 합쳐 직접 다진 떡갈비를 뼈와 결합한 후 석쇠와 함께 연탄불에 구워 만들기에 일반 떡갈비와 다른 불향과 감칠맛을 느끼실 수 있으리라 보장합니다.</p>
            </div>
            <div class="wd-50">
                <img src="/image/매장정보2.png" alt="">
            </div>
        </div>
    </div>
    <div class="mt-5" style="border-top: rgba(0,0,0,0.1) 1px solid;">
        <div class="main_width mt-5">
            <div style="height: 150px; display:flex">
                <div class="flex_1 text-center info_bottom" style="position: relative">
                    <div class="round">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <p>맛에 대한 연구</p>
                </div>
                <div class="flex_1 text-center info_bottom" style="position: relative">
                    <div class="round">
                        <i class="fa-solid fa-truck-field"></i>
                    </div>
                    <p>신선한 재료 공급
                    </p>
                </div>
                <div class="flex_1 text-center info_bottom" style="position: relative">
                    <div class="round">
                        <i class="fa-regular fa-face-smile"></i>
                    </div>
                    <p>친절한 서비스</p>
                </div>
                <div class="flex_1 text-center info_bottom" style="position: relative">
                    <div class="round">
                        <i class="fa-solid fa-phone-flip"></i>
                    </div>
                    <p>실시간 예약 가능</p>
                </div>
            </div>
        </div>
    </div>


    </div>
@endsection