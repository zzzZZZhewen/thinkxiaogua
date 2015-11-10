<?php
namespace Home\Controller;

use Think\Controller;

class AppController extends Controller {


    public function index() {
        redirect(U('enroll'));
    }

    public function enroll($act = 'qiyueqinglv') {

        //check
        if (IS_POST) {
            $data = I('post.');
            $Model = D('Enroll');
            // sql
            if (!$Model->create($data)) {
                //failed
                $this->ajaxReturn(array('res' => 0, 'error' => $Model->getError()));

            } else {
                //success
                $this->ajaxReturn(array('res' => 1));
            }

        } else {
            $this->display();

        }
    }

    public function upload() {
        $Model = D('Enroll');

        if (IS_POST) {

            $data = I('post.');
            // check post again
            if (!$Model->create($data)) {
                session('error', $Model->getError());
                redirect(U('enroll_failed'));
            } else {
                // check file existance
                if (empty($_FILES['enroll_pic']['tmp_name'])) {
                    $data['enroll_pic'] = 'default.jpg';
                } else {
                    // file exists
                    $config = array(
                        'maxSize' => 3145728, // 3mb
                        'rootPath' => './Uploads/',
                        'savePath' => '',
                        'saveName' => array('uniqid', ''),
                        'exts' => array('jpg', 'png', 'jpeg', 'pjpeg'),
                        'autoSub' => false,
                    );

                    $upload = new \Think\Upload($config);// 实例化上传类
                    $info = $upload->upload();
                    if (!$info) {
                        // 上传错误提示错误信息
                        session('error', $upload->getError());
                        redirect(U('enroll_failed'));
                    }

                    //上传成功

                    //处理图片

                    $image = new \Think\Image();
                    $image->open('./Uploads/' . $info['enroll_pic']['savename']);
                    $image->thumb(500, 500)->save('./Uploads/' . $info['enroll_pic']['savename']);

                    $data['enroll_pic'] = $info['enroll_pic']['savename'];

                }

                $Model->add($data);
                redirect(U('enroll_success'));
            }
        }
    }

    public function enroll_success() {
        $this->display();
    }

    public function  enroll_failed() {
        $error_text = I('session.error', '出现了奇怪的错误');
        $this->assign('error', $error_text);
        $this->display();
    }

}