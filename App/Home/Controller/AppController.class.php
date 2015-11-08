<?php
namespace Home\Controller;

use Think\Controller;

class AppController extends Controller {

    public function index() {
        echo '网站施工中，更多内容请关注npuxiaogua';
    }

    public function enroll() {

        if (I('get.status',0) === 'success'){
            redirect(U('enroll_success'));
        }

        $Model = D('Enroll');
        if (IS_POST) {

            $data['enroll_name'] = I('post.enroll_name', 0);
            $data['enroll_sex'] = I('post.enroll_sex', 0);
            $data['enroll_age'] = I('post.enroll_age', 0);
            $data['enroll_school'] = I('post.enroll_school', 0);
            $data['enroll_grade'] = I('post.enroll_grade', 0);
            $data['enroll_major'] = I('post.enroll_major', 0);
            $data['enroll_tel'] = I('post.enroll_tel', 0);
            $data['enroll_qq'] = I('post.enroll_qq', 0);
            $data['enroll_hobby'] = I('post.enroll_hobby', 0);
            $data['enroll_intro'] = I('post.enroll_intro', 0);
            $data['enroll_wechat'] = I('post.enroll_wechat', 0);
            $data['enroll_pic'] = I('post.enroll_pic', 'default.jpg', 0);


            // sql
            if (!$Model->create($data)) {

                $this->ajaxReturn(array('res' => 0, 'error' => $Model->getError()));

            } else {
                //success
                $Model->add();
                $this->ajaxReturn(array('res' => 1));
            }


        } else {
            $this->display();

        }
    }

    public function enroll_success(){
        $this->display();
    }

}