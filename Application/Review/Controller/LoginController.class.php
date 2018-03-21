<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/12/15
 * Time: 15:00
 */

namespace Review\Controller;

//开启输出缓冲区
ob_start();
//开启会话
session_start();

use Think\Verify;
use Think\Controller;
/*
 * 功能：新闻审核后台 登陆
 * 编写者：骆静静
 * 状态：已完成
 */
class LoginController extends Controller
{


    /*
     * 功能：新闻审核后台 登陆页面
     * 编写者：骆静静
     * 状态：已完成
     */
    public function index()
    {

        layout(false);
        $this->display('login');
    }
    public function login()
    {

        layout(false);
        $this->display();
    }

    /*
     * 功能：新闻审核后台 登陆
     * 编写者：骆静静
     * 状态：已完成
     */

    public function captcha(){
        $captcha = new Verify();//创建验证码对象
        $captcha -> length = 4 ;//验证码长度设置
        $captcha->fontSize = 30;//验证码字体设置
        $captcha->codeSet = '22222222222222222222222222';//验证码
        $captcha -> entry('login');//entry：保存验证码到session
    }

    public function dologin(){
        //校验验证码
        $captcha = new Verify();
        if($captcha->check(I('post.captcha'),'login')){
            //成功
            $condition = array();
            $condition['shroot_name']=I('post.shroot_name');
            $condition['shroot_password']=I('post.shroot_password','','md5');
//            $condition['root_password']=I('post.root_password');


            $user=M('shroots')->where($condition)->find();

            if($user){
                //用户名密码正确
                //把用户名密码写入session
                session('shroot_name',I('post.shroot_name'));
                session('shroot_id',$user['shroot_id']);

                //跳转页面

                $this->redirect('/review/assess/shnews');
            }else{
                //用户名密码错误
                echo "<script> alert('用户名或密码错误，请重新输入');history.go(-1);</script>";
            }
        }else{
            //失败
           echo "<script> alert('验证码错误，请重新输入');history.go(-1);</script>";
        }
    }
    /*
    * 功能：退出新闻审核后台 
    * 编写者：骆静静
    * 状态：已完成
    */
    public function logout(){
        //注销session
        session('shroot_name',null);
        session('shroot_id',null);
        $this->redirect('/review/login/login');
    }


}