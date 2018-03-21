<?php
/*
 * 功能：发帖页整体功能
 * 编写者：田源
 * 状态：已完成
*/

namespace Home\Controller;
//开启输出缓冲区
ob_start();
//开启会话
session_start();

use Think\Controller;
use Think\Upload;

class PostController extends Controller
{
    public function index(){
        //获取标签
        $dbs = M('lables');
        $labels = $dbs->select();
        $this->assign("lab" , $labels);
        // var_dump($labels);
        // exit;
        $this->display();
    }
    public function getMessage()
    {
        //判断是否登录
        if (session('user_id') == NULL) {
            echo "<script> alert('请登录'); window.location.href = '/home/index/login';</script>";

//            $this->error('请登录！', '/home/index/login');
        } else {
            $users_id = session('user_id');
        }

        $time = time();
        $data=I('post.');
        $data['posts_time'] = date('Y-m-d H:i:s', $time);
        $data['users_id'] = $users_id;
//var_dump($data);
//        图片的上传

        $upload = new Upload();
//        dump($upload);
        //设置参数
        $upload->rootPath = './Public';
        $upload->savePath = '/uploads/';
        //上传文件操作
        $info = $upload->upload();
//        dump($upload);

        //上传后处理
        if (!$info) {
            //$this->error('文件上传失败!');
            echo "<script> alert('没有提交帖子图片哟');</script>";
            //易拉罐默认帖子图片
            $data['posts_pic'] = "images/161459zbs85ddtegg88lso.png";
        } else {
            foreach ($info as $file) {
                $saveFileName = $file['savepath'] . $file['savename'];
                $data['posts_pic'] = $saveFileName;
                //dump($data['si_image']);
            }
        }

            // var_dump($data);
            $db = M('posts');
            $result = $db->add($data);
            if ($result) {
                $id = $db->where($data)->getField('posts_id');
                $db_posts = M('users');
                $usersid = session('user_id');
                $result = $db_posts->where("users_id = $usersid")->setInc('users_sum', 1);
            }

            // var_dump($id);
            // exit;
            // session('posts_id',$id);
            //$this->assign("id" , $id);
            //$this->redirect('list/content/');
            echo <<<STR
                <script type="text/javascript">                 
                    window.location.href = "/home/list/content/id/$id";
                </script>
STR;


        }



}