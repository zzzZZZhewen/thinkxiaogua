<?php
namespace Home\Controller;

use Think\Controller;

class AppController extends Controller {
    public function index() {
        echo '小瓜官网施工中，更多内容请关注npuxiaogua';
    }

    public function enroll() {
        if (IS_POST) {

        } else {
            $this->display();

        }
    }
}