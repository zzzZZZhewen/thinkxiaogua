<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="enroll_show">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no,width=device-width,initial-scale=1,maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/thinkxiaogua/Public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/thinkxiaogua/Public/css/style-responsive.css" />
    <title>契约报名者</title>
</head>
<body>
<div class="wrapper">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php if(is_array($enroll)): $i = 0; $__LIST__ = $enroll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class=" text-center">
                                    <img style="width: 100%; border-radius: 0.4em" src="/thinkxiaogua/Uploads/<?php echo ($data["enroll_pic"]); ?>"/>
                                </div>
                                <br/>
                                <ul class="p-info">
                                    <li>
                                        <div class="title">姓名</div>
                                        <div class="desk"><?php echo ($data["enroll_name"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">性别</div>
                                        <div class="desk"><?php echo ($data["enroll_sex"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">手机</div>
                                        <div class="desk"><?php echo ($data["enroll_tel"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">年龄</div>
                                        <div class="desk"><?php echo ($data["enroll_age"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">学校</div>
                                        <div class="desk"><?php echo ($data["enroll_school"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">年级</div>
                                        <div class="desk"><?php echo ($data["enroll_grade"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">专业</div>
                                        <div class="desk"><?php echo ($data["enroll_major"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">QQ</div>
                                        <div class="desk"><?php echo ($data["enroll_qq"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">微信</div>
                                        <div class="desk"><?php echo ($data["enroll_wechat"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">兴趣</div>
                                        <div class="desk"><?php echo ($data["enroll_hobby"]); ?></div>
                                    </li>
                                    <li>
                                        <div class="title">自我介绍</div>
                                        <div class="desk"><?php echo ($data["enroll_intro"]); ?></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="text-center">
                <ul class="pagination blog-pagination">
                    <?php echo ($nav["prev"]); ?>
                    <?php echo ($nav["next"]); ?>
                </ul>

            </div>
        </div>
    </div>

</div>


<script type="text/javascript" src="/thinkxiaogua/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/thinkxiaogua/Public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/thinkxiaogua/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/thinkxiaogua/Public/js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="/thinkxiaogua/Public/js/index.js"></script>


<script type="text/javascript" src="/thinkxiaogua/Public/js/app_enroll.js"></script>
<script>

</script>
</body>

</html>