<?php

namespace Home\Model;

use Think\Model;

class EnrollModel extends Model {

    //array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
    protected $_validate = array(
        array('enroll_name', 'require', '姓名必须填写的呢'),
        array('enroll_name', '1,20', '姓名长度不能超过20个字符', 0, 'length'),
        array('enroll_name', '', '呃，你好像报名过了，改个名字再来过吧少侠', 0, 'unique'),

        array('enroll_sex', 'require', '性别必须选择的呢'),

        array('enroll_tel', 'require', '手机必须填写的呢'),
        array('enroll_tel', 'number', '手机只能是数字吧'),

        array('enroll_age', 'require', '年龄必须填写的呢'),
        array('enroll_age', 'number', '年龄只能是数字吧'),


        array('enroll_school', 'require', '学校必须填写的呢'),
        array('enroll_school', '1,20', '学校长度不能超过20个字符', 0, 'length'),

        array('enroll_grade', 'require', '年级必须填写的呢'),
        array('enroll_grade', '1,20', '年级长度不能超过20个字符', 0, 'length'),

        array('enroll_major', 'require', '专业必须填写的呢'),
        array('enroll_major', '1,20', '专业长度不能超过20个字符', 0, 'length'),


        array('enroll_qq', 'require', 'qq必须填写的呢'),
        array('enroll_qq', 'number', 'qq只能是数字吧'),

        array('enroll_wechat', 'require', '微信号必须填写的呢'),
        array('enroll_wechat', '1,20', '能写个小于40字符的微信号么', 0, 'length'),


        array('enroll_hobby', 'require', '兴趣爱好必须填写的呢'),
        array('enroll_hobby', '1,50', '兴趣爱好多可以，但是不要超过50个字符吧', 0, 'length'),


        array('enroll_intro', '0,100', '自我介绍不要超过100个字符吧', 0, 'length'),


        //        array('user_email', '', '帐号(邮箱)已经存在！', 0, 'unique'),
        //        array('user_password', 'require', '密码不能为空！', 0, 'regex'),
        //        array('user_password_again', 'user_password', '确认密码不正确', 0, 'confirm'), // 验证确认密码是否和密码一致
    );
    //array(填充字段,填充内容,[填充条件,附加规则])
    protected $_auto = array(//        array('password', 'md5', 3, 'function'),
    );

}