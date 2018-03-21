<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/6/6
 * Time: 16:03
 */

namespace Home\Controller;
//开启输出缓冲区
ob_start();
//开启会话
session_start();

use Think\Controller;
use Think\Upload;


class PersonalController extends Controller
{
    /***
     ** 编码人：张宇晗；
     **功能：前台个人信息动态获取
     *
     ***/
    public function index() {
        //判断是否登录
        //判断是否登录
        if (session('user_id') == NULL) {
            echo "<script> alert('请登录'); window.location.href = '/home/index/login';</script>";

//            $this->error('请登录！', '/home/index/login');
        } else {
            $id = session('user_id');
        }

//        $id=$_SESSION['user_id'];
        $name=$_SESSION['user_name'];
        $condition7['users_id']=$id;
        $level_id=M('users_info')->where($condition7)->getField('level_id');
        if($level_id==null)
        {
            $this->assign('level_id','1');
        }
        else{
            $this->assign('level_id',$level_id);
        }
        $condition['users_id']=$id;
        $users_pic=M('users')->where($condition)->getField('users_pic');
//        dump($users_pic);
        $this->assign('users_pic',$users_pic);
        //从标签数据库里获取数据，显示关注话题
        $lablesTable=M('lables');
        $condition5['users_id']=$id;
        $labels_num=$lablesTable->where($condition5)->field('posts_label_id')->count();
        $labels=$lablesTable->where($condition5)->field('posts_label_id')->select();
        for($i=0;$i<$labels_num;$i++)
        {
            $posts_label_name=$lablesTable->where($labels['i'])->getField('posts_label_name');
            $first=$posts_label_name['i'];
            for($j=0;$j<($labels_num-$i);$j++)
            {
                $posts_label_name2=$lablesTable->where($labels['i+j'])->getField('posts_label_name');
                $second=$posts_label_name2['i+j'];
                if($first!=$second)
                {
                    $label['i']=$first;
            }
            }
        }
        $label_num=count($label);
        if($label_num!=0)
        {
            $this->assign('label_num',$label_num);
            $this->assign('label',$label);
        }
        else{
            $this->assign('label_num','0');
            $this->assign('label','没有关注话题');
        }

        $this->assign('labels_num',$labels_num);
        // dump($lablesTable);
        $lables=$lablesTable->limit(26)->select();
        $this->assign('lables',$lables);
        //显示用户帖子展示到个人信息页
        $postsTable=M('posts');
        $usersTable=M('users');
        $this->assign('user_name',$name);
//        $condition2=$postsTable->where($id)->select();
        //var_dump($condition2);
        $posts_num=$postsTable->field('posts_id')->count();
        $this->assign('posts_num',$posts_num);

        //评论内容显示
        $commentsTable=M('comments');
        $condition4['users_id']=$id;
        //$condition4['charge_num']=0;
        //$condition4['boss_deal']=0;
        //dump($condition4);
        $users_sum=$usersTable->where($condition4)->getField('users_sum');
        $users_comment=$usersTable->where($condition4)->getField('users_comment');
        $users_address=$usersTable->where($condition4)->getField('users_address');

    /*    dump($id);
        dump($users_address);*/

        $date=date('y-m-d h:i:s',time());
        $this->assign('users_sum',$users_sum);
        $this->assign('users_comment',$users_comment);
        $this->assign('users_address',$users_address);

        $this->assign('date',$date);
        //$condition3=$commentsTable->where($condition4)->select();
        //个人评论
        $condition4['users_id']=$id;
        //设置（获取）每一页显示的个数
        $pageSize=3;
        //创建分页对象
        $comments_num=M('users')->where($condition4)->getField('users_comment');
        $posts_num=M('users')->where($condition4)->getField('users_sum');
        $count1=$comments_num;
        $page=new \Think\Page($count1,$pageSize);

        $comments=$commentsTable->limit($page->firstRow.','.$page->listRows)->where($condition4)->order('comments_time DESC')->select();

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $this->assign('pages',$page->show());
        $this->assign('comment',$comments);
        $pageSize2=3;
        $count2=$posts_num;
        $page2=new \Think\Page($count2,$pageSize2);

        $posts=$postsTable->limit($page2->firstRow.','.$page2->listRows)->where($condition)->order('posts_time DESC')->select();
        $page2->setConfig('prev','上一页');
        $page2->setConfig('next','下一页');
        $this->assign('pages2',$page2->show());
        $this->assign('posts',$posts);

        //关注人统计
        $num=M('attention_users')->where($condition)->count();
        $this->assign('num',$num);
        $users2=M('attention_users')->where($condition)->select();
        $this->assign('users2',$users2);

        $this->display();

    }
    public function delete(){
        $id = I('delete');
        $result = M('posts')->delete($id);
        if ($result) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    public function delete2(){
        $id = $_GET['delete'];
        $result = M('comments')->delete($id);
        if ($result) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    /**用户列表功能实现
     * *张宇晗
     */
    public function lists()
    {
        session_start();
        //判断是否登录
        $id=$_SESSION['user_id'];
        $this->assign('id',$id);
        $usersTable=M('users');
        $points=$usersTable->order('users_sum DESC')->limit(10)->select();
        //dump($points);
        $this->assign('points',$points);
        $this->display();
    }
    /* 修改：增加用户更换头像
        骆静静
     * */
    public function changepic(){
        //判断是否登录
        if (session('user_id') == NULL) {
            echo "<script> alert('请登录'); window.location.href = '/home/index/login';</script>";
        } else {
            $users_id = session('user_id');
            $users_name = session('user_name');
        }
        $data=I('post.');
        //上传文件
        $upload=new Upload();
        //设置参数
        $upload->rootPath='./Public';
        $upload->savePath='/uploads/';
        //上传文件操作
        $info=$upload->upload();
        //dump($info);
        //上传后处理
        if(!$info){
            //$this->error('文件上传失败!');
            echo "<script> alert('头像修改失败');history.go(-1);</script>";
        }
        else {

            foreach ($info as $file) {
                $saveFileName = $file['savepath'] . $file['savename'];
//                dump($saveFileName);
                $data['users_pic'] = $saveFileName;
                //dump($data['si_image']);
            }

            // 插入到数据表中
            $dd['users_id']=$users_id;

            $result = M('users')->where($dd)->save($data);
            //dump($result);
            // 善后处理
            if ($result) {
                echo "<script> alert('修改成功！');window.location.href = '/home/personal';</script>";
            } else {
                echo "<script> alert('修改失败！');history.go(-1);</script>";
            }
        }

    }
    public function focus()
    {
        /**用户关注功能实现
         * *张宇晗
         */
        session_start();
        //判断是否登录
        $id=$_SESSION['user_id'];
        $id2=$_GET['id'];
        $condition['users_id']=$id;
        $condition['users_id2']=$id2;
        $re=M('attention_users')->where($condition)->select();
        if($re)
        {
            $re2=M('attention_users')->where($condition)->delete();
            if($re2)
            {
                echo "<script> alert('关注取消');window.location.href = '/home/personal/lists/';</script>";
                echo "<script>window.location.reload();</script>";

            }
            else{
                echo "<script> alert('取消关注失败，请联系管理员');window.location.href = '/home/personal/lists/';</script>";
            }
        }
        else {
            $result = M('attention_users')->add($condition);
            if ($result) {
                echo "<script> alert('关注成功');window.location.href = '/home/personal/lists/';</script>";
                echo "<script>window.location.reload();</script>";
            } else {

                echo "<script> alert('关注失败，请联系管理员');window.location.href = '/home/personal/lists/';</script>";
            }
        }
    }
    public function index2() {
        /**非本人访问个人信息页功能实现
         * *张宇晗
         */
        $id=$_GET['id2'];
        if (session('user_id') == NULL) {
            echo "<script> alert('请登录'); window.location.href = '/home/index/login';</script>";

//            $this->error('请登录！', '/home/index/login');
        } else {
            $theid = session('user_id');

            if($id==$theid){
                echo "<script>window.location.href = '/home/personal/index';</script>";
            }else{

                $condition['users_id']=$id;
                $name=M('users')->where($condition)->getField('users_name');
                //dump($name);
                $this->assign('user_name',$name);
                $condition7['users_id']=$id;
                $level_id=M('users_info')->where($condition7)->getField('level_id');
                if($level_id==null)
                {
                    $this->assign('level_id','1');
                }
                else{
                    $this->assign('level_id',$level_id);
                }
                $condition['users_id']=$id;
                $users_pic=M('users')->where($condition)->getField('users_pic');
//        dump($users_pic);
                $this->assign('users_pic',$users_pic);
                $condition['users_id']=$id;
                //从标签数据库里获取数据，显示关注话题
                $lablesTable=M('lables');
                $condition5['users_id']=$id;
                $labels_num=$lablesTable->where($condition5)->field('posts_label_id')->count();
                $labels=$lablesTable->where($condition5)->field('posts_label_id')->select();
                for($i=0;$i<$labels_num;$i++)
                {
                    $posts_label_name=$lablesTable->where($labels['i'])->getField('posts_label_name');
                    $first=$posts_label_name['i'];
                    for($j=0;$j<($labels_num-$i);$j++)
                    {
                        $posts_label_name2=$lablesTable->where($labels['i+j'])->getField('posts_label_name');
                        $second=$posts_label_name2['i+j'];
                        if($first!=$second)
                        {
                            $label['i']=$first;
                        }
                    }
                }
                $label_num=count($label);
                if($label_num!=0)
                {
                    $this->assign('label_num',$label_num);
                    $this->assign('label',$label);
                }
                else{
                    $this->assign('label_num','0');
                    $this->assign('label','没有关注话题');
                }

                $this->assign('labels_num',$labels_num);
                // dump($lablesTable);
                $lables=$lablesTable->limit(26)->select();
                $this->assign('lables',$lables);
                //显示用户帖子展示到个人信息页
                $postsTable=M('posts');
                $usersTable=M('users');
        //        $condition2=$postsTable->where($id)->select();
                //var_dump($condition2);
                $posts_num=$postsTable->field('posts_id')->count();
                $this->assign('posts_num',$posts_num);
                //评论内容显示
                $commentsTable=M('comments');
                $condition4['users_id']=$id;
                //$condition4['charge_num']=0;
                //$condition4['boss_deal']=0;
                //dump($condition4);
                $users_sum=$usersTable->where($condition4)->getField('users_sum');
                $users_comment=$usersTable->where($condition4)->getField('users_comment');
                $users_address=$usersTable->where($condition4)->getField('users_address');
                $date=date('y-m-d h:i:s',time());
                $this->assign('users_sum',$users_sum);
                $this->assign('users_comment',$users_comment);
                $this->assign('users_address',$users_address);
                $this->assign('date',$date);
                //$condition3=$commentsTable->where($condition4)->select();
                //设置（获取）每一页显示的个数
                $pageSize=3;
                //创建分页对象
                $comments_num=M('users')->where($condition4)->getField('users_comment');
                $posts_num=M('users')->where($condition4)->getField('users_sum');
                $count1=$comments_num;
                $page=new \Think\Page($count1,$pageSize);

                $comments=$commentsTable->limit($page->firstRow.','.$page->listRows)->where($condition4)->order('comments_time DESC')->select();

                $page->setConfig('prev','上一页');
                $page->setConfig('next','下一页');
                $this->assign('pages',$page->show());
                $this->assign('comment',$comments);
                $pageSize2=3;
                $count2=$posts_num;
                $page2=new \Think\Page($count2,$pageSize2);

                $posts=$postsTable->limit($page2->firstRow.','.$page2->listRows)->where($condition)->order('posts_time DESC')->select();
                $page2->setConfig('prev','上一页');
                $page2->setConfig('next','下一页');
                $this->assign('pages2',$page2->show());
                $this->assign('posts',$posts);
                //关注人统计
                $num=M('attention_users')->where($condition)->count();
                $this->assign('num',$num);
                $users2=M('attention_users')->where($condition)->select();
                $this->assign('users2',$users2);
                $this->display();

            }

        }
    }

}