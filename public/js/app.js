

$('.main_menu > li').mouseover(function(){

    if(!$(this).hasClass('active')){
        $(this).addClass('selected');
    }
});

$('.main_menu > li').mouseleave(function(){
    $(this).removeClass('selected');
});

$('.main_menu').children().eq(0).mouseover(function(){
    $('.main_menu_Detail_2').removeClass('select');
    $('.main_menu_Detail_1').addClass('select');
})


$('.main_menu').children().eq(0).mouseleave(function(){
    $('.main_menu_Detail_1').mouseleave(function(){
        $('.main_menu_Detail_1').removeClass('select');
    })
})

$('.main_menu').children().eq(2).mouseover(function(){
    $('.main_menu_Detail_1').removeClass('select');
    $('.main_menu_Detail_2').addClass('select');
})
$('.main_menu').children().eq(2).mouseleave(function(){
    $('.main_menu_Detail_2').mouseleave(function(){
        $('.main_menu_Detail_2').removeClass('select');
    })
})


/* 반응형 메뉴 */
$('.navbar_menu').on("click",function(){
    $('.navbar_menu_content').slideToggle();
})

$('.navbar_li').mouseover(function(){
    $(this).children('p').addClass('active');
    $(this).children('.navbar_div').addClass('active');
})
$('.navbar_li').mouseleave(function(){
    $(this).children('p').removeClass('active');
    $(this).children('.navbar_div').removeClass('active')
})







$('.food_menu > li').mouseover(function(){
    $(this).children('.menu_desc').addClass('active');
})
$('.food_menu > li').mouseleave(function(){
    $(this).children('.menu_desc').removeClass('active');
})




/* ajax */


$('#modify').on("click",function(){
    $('.review_modify').removeClass('hidden');
})

$('#delete').on("click",function(){
    $('.review_delete').removeClass('hidden');
})


function email_selected(){
    var email_front = document.getElementById('email_back');
    var selected = email_front.options[email_front.selectedIndex].value;
    var email = document.getElementById('Email2');

    email.value = selected;
}

function review(){
    let review_check = document.review_check;
    var password = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,16}$/;

    if(review_check.title.value == ""){
        alert("제목을 입력하세요.")
        review_check.title.focus()
        return false
    }
    if(review_check.name.value == ""){
        alert("작성자명을 입력하세요.")
        review_check.title.focus()
        return false
    }
    if(review_check.password.value == ""){
        alert("비밀번호를 입력하세요.")
        review_check.title.focus()
        return false
    }
    if(review_check.description.value == ""){
        alert("내용을 입력하세요.")
        review_check.description.focus()
        return false
    }
    if(review_check.title.value.length >20){
        alert("제목은 20글자 내외로 입력해주세요.")
        review_check.title.focus();
        return false;
    }
    if(review_check.name.value.length >6){
        alert("작성자명은 6글자 내외로 입력해주세요.")
        review_check.name.focus();
        return false;
    }
    if(!password.test(review_check.password.value)){
        alert("비밀번호는 영문자+숫자+특수문자 조합으로 8~16자리를 사용해야 합니다.");
        review_check.password.focus();
        return false
    }
}



function check(){
    let check = document.inquiry;
    var phone = document.getElementById('phone');
    var phone_front = document.getElementById('phone_front');
    var phone1 = document.getElementById('phone1');
    var phone2 = document.getElementById('phone2');

    phone.value = phone_front.value + ' - ' + phone1.value + ' - ' + phone2.value;

    var Email = document.getElementById('Email');
    var Email1 = document.getElementById('Email1');
    var Email2 = document.getElementById('Email2');

    Email.value = Email1.value + '@' + Email2.value;

    if(check.name.value == ""){
        alert("이름을 입력하세요.")
        check.name.focus()
        return false
    }
    if(check.phone1.value == "" || check.phone2.value == ""){
        alert("전화번호를 올바르게 입력하세요.")
        check.phone1.focus()
        return false
    }
    if(check.Email1.value == "" || check.Email2.value == ""){
        alert("이메일을 올바르게 입력하세요.")
        check.Email1.focus()
        return false
    }
    if(!confirm("신청하시겠습니까?")){
        return false
    }
    else{
        alert("상담 신청이 완료되었습니다.")
    }
}


function modal1(){
    $('.modal_1').removeClass('hidden');
}
function modal2(){
    $('.modal_2').removeClass('hidden');
}
function modal3(){
    $('.modal_3').removeClass('hidden');
}
$('.exit1').on("click", function(){
    $('.modals').addClass('hidden');
})
$('.exit2').on("click", function(){
    $('.modals').addClass('hidden');
})
$('.exit3').on("click", function(){
    $('.modals').addClass('hidden');
})
$('.exit4').on("click", function(){
    $('.modals').addClass('hidden');
})

