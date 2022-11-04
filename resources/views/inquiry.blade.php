@extends('layouts.app')

@section('section')
    <div class="sung_header">
        <div class="frame"></div>
        <div class="sung_black">
            <h1>상담 신청</h1>
        </div>
    </div>

    <div class="main_width">
        <div class="inquiry_title">온라인 상담</div>
        <div class="inquiry_box">
            <form action="inquiry_save" method="POST" onsubmit="return check()" name="inquiry" >
                {{ csrf_field() }}
                <table>
                    <tr>
                        <td class="title">이름</td>
                        <td class="desc"><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td class="title">전화번호</td>
                        <td class="desc">
                            <select name="phone_front" id="phone_front">
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select>
                            -
                            <input type="text" name="phone1" id="phone1" maxlength="4"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            -
                            <input type="text" name="phone2" id="phone2" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            <input type="hidden" name="phone" id="phone">
                        </td>
                    </tr>
                    <tr>
                        <td class="title">이메일</td>
                        <td class="desc">
                            <input type="text" name="Email1" id="Email1"> @
                            <input type="text" name="Email2" id="Email2">
                            <input type="hidden" name="Email" id="Email">
                            <select name="email_back" id="email_back" onchange="email_selected()">
                                <option value=''>직접입력</option>
                                <option value='naver.com'>naver.com</option>
                                <option value='daum.net'>daum.net</option>
                                <option value='dreamwiz.com'>dreamwiz.com</option>
                                <option value='empal.com'>empal.com</option>
                                <option value='hanmail.net'>hanmail.net</option>
                                <option value='hanmir.com'>hanmir.com</option>
                                <option value='hanafos.com'>hanafos.com</option>
                                <option value='hotmail.com'>hotmail.com</option>
                                <option value='lycos.co.kr'>lycos.co.kr</option>
                                <option value='nate.com'>nate.com</option>
                                <option value='paran.com'>paran.com</option>
                                <option value='nate.com'>nate.com</option>
                                <option value='netian.com'>netian.com</option>
                                <option value='yahoo.co.kr'>yahoo.co.kr</option>
                                <option value='kornet.net'>kornet.net</option>
                                <option value='nownuri.net'>nownuri.net</option>
                                <option value='unitel.co.kr'>unitel.co.kr</option>
                                <option value='freechal.com'>freechal.com</option>
                                <option value='korea.com'>korea.com</option>
                                <option value='orgio.net'>orgio.net</option>
                                <option value='chollian.net'>chollian.net</option>
                                <option value='hitel.net'>hitel.net</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">문의 내용</td>
                        <td class="desc"><textarea name="content" id="inquiry" cols="30" rows="10"></textarea></td>
                    </tr>
                </table>
                <input type="submit" name="" id="submit" value="신청하기">
            </form>
        </div>

        <div class="inquiry_title mt-5">전화 상담</div>
        <div class="inquiry_box">
            <p>목포 본점: 0507-1351-1401</p>
            <p>목포 2호점: 0507-1414-5929</p>
            <p>제주공항점: 0507-1362-1402</p>
        </div>
    </div>



@endsection