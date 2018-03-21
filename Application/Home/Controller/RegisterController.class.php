<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/6
 * Time: 16:05
 */

namespace Home\Controller;
//开启输出缓冲区
ob_start();
//开启会话
session_start();
use Think\Controller;


class RegisterController extends Controller
{
    /*功能：用户注册
* 作者：骆静静
* 状态：完成
* */
    public function index(){
        layout(false);

        $this->display();
    }
    public function doregister(){
        $tmp=I('post.');
//        var_dump($tmp);
        if($tmp['users_password']==$tmp['repassword']){
        }else{
            echo "<script> alert('重新输入密码错误');history.go(-1);</script>";
        }

        $find['users_name']=$tmp['users_name'];
        $find2['users_address']=$tmp['users_address'];
        $ifmore=M('users')->where($find)->count();
        $ifmore2=M('users')->where($find2)->count();

        if($ifmore!=0){
            echo "<script> alert('用户名已存在');history.go(-1);</script>";
        }
        elseif($ifmore2!=0){
            echo "<script> alert('您的邮箱已经注册，请直接登录');window.location.href = \"/home/index/login/\";</script>";

        }else{
            $tmp['users_password']=md5($tmp['users_password']);
            $result=M('users')->add($tmp);

            $userID=M('users')->where($find2)->getField('users_id');

            if($result==1){
                session('user_name', $tmp['users_name']);
                session('user_id', $userID);

                echo <<<STR
				<script type="text/javascript">
					alert('注册成功');
                    window.location.href = "/home/index";
				</script>
STR;
            }
        }


    }
}