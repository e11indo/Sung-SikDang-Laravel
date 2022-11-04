@extends('layouts.app')

@section('section')
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=21f46d7ee905fc0991de0178a5eabbda"></script>
        
<style>
    @import url('https://fonts.googleapis.com/css2?family=Song+Myung&display=swap');
</style>
    <div class="sung_header">
        <div class="frame"></div>
        <div class="sung_black">
            <h1>매장 정보</h1>
        </div>
    </div>

    <div class="main_width">
        <div class="food_title"><span>목포 본점</span></div>
        주소: 전남 목포시 수강로4번길 6
        <div class="" style="height: 500px; width:100%; margin-bottom:50px">
            <div id="mokpo_1" style="height: 100%; margin-top:20px; border:1px solid #1F1918;"></div>
        </div>
        <div class="food_title"><span>목포 2호점</span></div>
        주소: 전남 목포시 수강로 16
        <div class="" style="height: 500px; width:100%; margin-bottom:50px">
            <div id="mokpo_2" style="height: 100%; margin-top:20px; border:1px solid #1F1918;"></div>
        </div>
        <div class="food_title"><span>제주공항점</span></div>
        주소: 제주 제주시 월성로4길 80 2층 성식당 제주점
        <div class="" style="height: 500px; width:100%">
            <div id="jeju" style="height: 100%; margin-top:20px; border:1px solid #1F1918;"></div>
        </div>
    </div>

<script>
    /* 카카오 API 맵 */

//제주 공항점
var container_jeju = document.getElementById('jeju');
var options_jeju = {
    center: new kakao.maps.LatLng(33.498350962151584, 126.49793367358669),
    level: 2
};

var map_jeju = new kakao.maps.Map(container_jeju, options_jeju);
var markerPosition_jeju  = new kakao.maps.LatLng(33.498350962151584, 126.49793367358669); 
var marker_jeju = new kakao.maps.Marker({
    position: markerPosition_jeju
});
marker_jeju.setMap(map_jeju);

//목포 본점
var container_mokpo1 = document.getElementById('mokpo_1');
var options_mokpo1 = {
    center: new kakao.maps.LatLng(34.785593112714366, 126.38648430925672),
    level: 2
};

var map_mokpo1 = new kakao.maps.Map(container_mokpo1, options_mokpo1);
var markerPosition_mokpo1  = new kakao.maps.LatLng(34.785593112714366, 126.38648430925672); 
var marker_mokpo1 = new kakao.maps.Marker({
    position: markerPosition_mokpo1
});
marker_mokpo1.setMap(map_mokpo1);

//목포 2호점
var container_mokpo2 = document.getElementById('mokpo_2');
var options_mokpo2 = {
    center: new kakao.maps.LatLng(34.786163480607975, 126.38519084686524),
    level: 2
};

var map_mokpo2 = new kakao.maps.Map(container_mokpo2, options_mokpo2);
var markerPosition_mokpo2  = new kakao.maps.LatLng(34.786163480607975, 126.38519084686524); 
var marker_mokpo2 = new kakao.maps.Marker({
    position: markerPosition_mokpo2
});
marker_mokpo2.setMap(map_mokpo2);
</script>

@endsection