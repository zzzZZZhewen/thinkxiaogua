<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="enroll">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/thinkxiaogua/Public/css/bootstrap-fileupload.min.css" />
    <link rel="stylesheet" type="text/css" href="/thinkxiaogua/Public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/thinkxiaogua/Public/css/style-responsive.css" />

    <title>契约情侣报名</title>
</head>

<body class="login">

<div class="container">

    <form action="<?php echo U('upload');?>" method="post" id="enroll_form" enctype="multipart/form-data" class="form-signin">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">契约情侣 报名</h1>
            <img src="/thinkxiaogua/Public/pic/res/xiaogualogo-transparent-sm-compressed.png" alt=""/>
            <!--<i style="font-size: 8em;color: #6BC5A4;" class="fa fa-users"></i>-->
        </div>
        <div class="login-wrap">
            <p>输入您必须的重要信息</p>
            <input name="enroll_name" id="enroll_name" type="text" autofocus="" placeholder="姓名" class="form-control">

            <div class="radios">
                <label for="radio-01" class="label_radio col-lg-6 col-xs-6">
                    <input checked="" type="radio" value="男" id="radio-01" name="enroll_sex"> 男
                </label>
                <label for="radio-02" class="label_radio col-lg-6 col-xs-6">
                    <input type="radio" value="女" id="radio-02" name="enroll_sex"> 女
                </label>
            </div>
            <input name="enroll_tel" id="enroll_tel" type="number" placeholder="手机" class="form-control">
            <input name="enroll_age" id="enroll_age" type="number" placeholder="年龄" class="form-control">
            <input name="enroll_school" id="enroll_school" type="text" placeholder="学校" class="form-control">
            <input name="enroll_grade" id="enroll_grade" type="text" placeholder="年级" class="form-control">
            <input name="enroll_major" id="enroll_major" type="text" placeholder="专业" class="form-control">
            <input name="enroll_qq" id="enroll_qq" type="number" placeholder="qq" class="form-control">
            <input name="enroll_wechat" id="enroll_wechat" type="text" placeholder="微信" class="form-control">
            <input name="enroll_hobby" id="enroll_hobby" type="text" placeholder="兴趣爱好（逗号隔开）" class="form-control">

            <p>和您选填的信息</p>
            <input name="enroll_intro" type="text" placeholder="自我介绍（100字以内）" class="form-control">

            <div class="form-group last">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 100%; height: 150px;">
                        <img src="/thinkxiaogua/Public/pic/res/img_upload.png" alt=""/>
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail"
                         style="max-width: 100%; max-height: 150px; line-height: 20px;">
                    </div>
                    <div>
                        <span class="btn btn-default btn-file">
                            <span class="fileupload-new"><i class="fa fa-upload"></i> 上传照片</span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> 换一张</span>
                            <input name="enroll_pic" id="enroll_pic" type="file" class="default"/>
                        </span>
                        <a href="javascript:void(0);" class="btn btn-danger fileupload-exists"
                           data-dismiss="fileupload"><i class="fa fa-trash"></i> 删除</a>
                    </div>
                    <br/>
                    <span class="label label-danger ">NOTE!</span>
                    <span>上传照片功能依赖于浏览器的版本。</span>
                </div>

            </div>
            <button id="enroll_btn" type="submit" class="btn btn-lg btn-login btn-block">
                <i class="fa fa-check"></i>
            </button>

        </div>
        <a id="hint" style="display: none;" data-toggle="modal" href="#hintModal"> </a>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="hintModal"
             class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">输入有误</h4>
                    </div>
                    <div class="modal-body">
                        <p id="error_text"></p>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">知道了</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>


<script type="text/javascript" src="/thinkxiaogua/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/thinkxiaogua/Public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/thinkxiaogua/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/thinkxiaogua/Public/js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="/thinkxiaogua/Public/js/index.js"></script>

<script type="text/javascript" src="/thinkxiaogua/Public/js/bootstrap-fileupload.min.js"></script>

<script type="text/javascript" src="/thinkxiaogua/Public/js/app_enroll.js"></script>
<script>

</script>
</body>

</html>