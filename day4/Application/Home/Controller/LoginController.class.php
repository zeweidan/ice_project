<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 12/7/17
 * Time: 13:03
 */

namespace Home\Controller;
use Think\Controller;


class LoginController extends Controller
{
    public function index(){
        $User = M("user"); // 实例化User对象
        // 查找status值为1name值为think的用户数据
        $data = $User->where('id=1')->find();
        //dump($data);
        $this->assign("user",$data);
        $this->display();
    }

    public function check_user(){
        $email = $_GET['email'];
        $password = $_GET['password'];
        //var_dump($email);
        //var_dump($password);

        $User = M("user"); // 实例化User对象
        $condition['email'] = $email;
        $condition['password'] = md5($password);
        $data = $User->where($condition)->find();

        if($data) {
            //var_dump($data);
            //die();
            $ret_data['content'] = '登录成功';
        }
        else{
            $ret_data['content'] = '登录失败';
        }
        $this->ajaxReturn($ret_data['content']);
    }
}