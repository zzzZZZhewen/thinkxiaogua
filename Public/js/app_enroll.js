$(document).ready(function () {
    var $enroll_name = $('#enroll_name'),
        $enroll_sex = $('input[name="enroll_sex"]'),
        $enroll_age = $('#enroll_age'),
        $enroll_school = $('#enroll_school'),
        $enroll_grade = $('#enroll_grade'),
        $enroll_major = $('#enroll_major'),
        $enroll_tel = $('#enroll_tel'),
        $enroll_qq = $('#enroll_qq'),
        $enroll_hobby = $('#enroll_hobby'),
        $enroll_intro = $('#enroll_intro'),
        $enroll_wechat = $('#enroll_wechat');


    $('#enroll_btn').on('click', function (e) {
        e.preventDefault();


        $.post('',
            {
                //enroll_act: 'qiyueqinglv2015',
                enroll_name: $enroll_name.val(),
                enroll_sex: $enroll_sex.val(),
                enroll_age: $enroll_age.val(),
                enroll_school: $enroll_school.val(),
                enroll_grade: $enroll_grade.val(),
                enroll_major: $enroll_major.val(),
                enroll_tel: $enroll_tel.val(),
                enroll_qq: $enroll_qq.val(),
                enroll_hobby: $enroll_hobby.val(),
                enroll_intro: $enroll_intro.val(),
                enroll_wechat: $enroll_wechat.val(),
                //enroll_jpg:''
            },
            function (data) {
                if (data['res'] == 1) {
                    window.location.href='?status=success';

                } else if (data['res'] == 0) {
                    $('#error_text').text(data['error']);
                    $('#hint').trigger('click');
                }
            });

    });

});