<?php
namespace Review\Controller;
//开启输出缓冲区
ob_start();
//开启会话
session_start();
use Think\Controller;
use Think\Model;


class AssessController extends Controller
{
    public function _before_index()
    {
        // 前置操作（执行index之前会自动调用该方法）
        if (session('root_id') == NULL) {
            $this->error('请登录！', '/review/login/login');
        }
    }

    //显示主页
    public function index()
    {

        $this->display(shnews);
    }

    /*
      * 功能：用户黑名单管理
      * 编写者：骆静静
      * 状态：已完成
      */
    public function blackList()
    {
        // layout(false);
        $db = M('users');
        // $blackUser = $db->select();
        $count = $db->where(array('users_ifon' => 1))->count();

        //2.设置（获取）每一页显示的个数
        $pageSize = 6;
        //3.创建分页对象
        $page = new \Think\Page($count, $pageSize);

        $blackUser = $db->where(array('users_ifon' => 1))->limit($page->firstRow . ',' . $page->listRows)->select();
        foreach ($blackUser as $key => $val) {
            $blackUser[$key]["users_ifon"] = "封禁状态";
        }

        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');

        $this->assign('pages', $page->show());

        // var_dump($blackUser);
        $this->assign("black_users", $blackUser);

        // $this->page();
        $this->display();

    }



    /*功能：黑名单用户解除封禁
     作者：骆静静
     状态：完成
      * */
    public function freedeal(){
        $id=I('get.id');
//        var_dump($id);
        $condiction['users_id']=$id;
        $condiction1['users_ifon']=0;
//        var_dump($condiction);
        $result=M('users')->where($condiction)->save($condiction1);

//        var_dump($result);
        if($result==1){
            echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "/review/assess/blackList";
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('操作失败');
                    window.location.href = "/review/assess/blackList";
				</script>
STR;
        }

    }


    /*功能：黑名单用户彻底删除
    作者：骆静静
    状态：完成
     * */
    public function overdeal(){
        $id=I('get.id');
        $condiction['users_id']=$id;
        $result=M('users')->where($condiction)->delete();
        if($result==1){
            echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "/review/assess/blackList";
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('操作失败');
                    window.location.href = "/review/assess/blackList";
				</script>
STR;
        }

    }
    /*
     * 功能：被投诉用户管理
     * 编写者：骆静静
     * 状态：已完成
     */
    public function appeal(){
        // layout(false);
        $db = M('users');
        // $blackUser = $db->select();
        $condiction['users_ifon']=0;
        $condiction['users_charge_num']=array('gt',20);

        $count= $db->where($condiction)->count();

        //2.设置（获取）每一页显示的个数
        $pageSize=6;
        //3.创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $data = $db->where($condiction)->limit($page->firstRow.','.$page->listRows)->select();

        foreach ($data as $key=>$val){
            $data[$key]["users_ifon"] = "自由状态";
        }

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');

        $this->assign('pages',$page->show());
        // var_dump($data);
        $this->assign("free",$data);


        $this->display();
    }
    /*功能：忽略被投诉用户
    作者：骆静静
    状态：完成
     * */
public function nodeal(){
    $id=I('get.id');
    $condiction['users_id']=$id;
    $condiction1['users_ifon']=2;

    $result=M('users')->where($condiction)->save($condiction1);

    if($result==1){
        echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "/review/assess/appeal";
				</script>
STR;
    }else{
        echo <<<STR
				<script type="text/javascript">
					alert('操作失败');
                    window.location.href = "/review/assess/appeal";
				</script>
STR;
    }

}
    /*功能：处理投诉用户
    作者：骆静静
    状态：完成
     * */
    public function deal(){
        $id=I('get.id');
        $condiction['users_id']=$id;

        $condiction1['users_ifon']=1;
//        var_dump($condiction);
        echo "处理被投诉用户";
        $result=M('users')->where($condiction)->save($condiction1);
//        var_dump($result);


        if($result==1){
            echo <<<STR
				<script type="text/javascript">					
                    window.location.href = "/review/assess/appeal";
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('操作失败');
                    window.location.href = "/review/assess/appeal";
				</script>
STR;
        }
    }
    /*功能：精品贴管理
     * 作者：骆静静
     * 状态：完成
     * */

    public function shnews(){
//        layout(false);
 /*       $map['up_num'] = array('gt',20);
        $map['if_show'] = 1;
        $count= M('news')->where($map)->count();

        //2.设置（获取）每一页显示的个数
        $pageSize=6;
        //3.创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $posts=M('posts')->where($map)->limit($page->firstRow.','.$page->listRows)->select();

        $this->assign('posts',$posts);

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');

        $this->assign('pages',$page->show());*/


        $map['news_stateid']=1;
        $count= M('news')->where($map)->count();

        //2.设置（获取）每一页显示的个数
        $pageSize=6;
        //3.创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $news=M('news')->where($map)->limit($page->firstRow.','.$page->listRows)->getField('news_id,news_type,news_tab,news_title');

        $this->assign('news',$news);
//dump($news);

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');

        $this->assign('pages',$page->show());

        $this->display();

    }
    /*功能：upup推送
        作者：骆静静getFieldgetField
        状态：完成
     * */
    public function upup(){
        $id=I('get.id');
        $condiction['news_id']=$id;
        $condiction['news_state_shrootid']=$_SESSION['shroot_id'];

       /* dump($condiction['news_state_shrootid']);*/
        $condiction['news_stateid']=2;

         $condiction['news_shtime']=date("Y.m.d h:i:s");
         $result=M('news')->save($condiction);

        if($result==1){
            echo <<<STR
				<script type="text/javascript">
					alert('新闻.$id.审核成功！');
                    window.location.href=document.referrer;
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('新闻.$id.审核失败');
                    window.location.href=document.referrer;
				</script>
STR;
        }


    }
    /*功能：取消推送
      作者：骆静静
      状态：完成
   * */
    public function cancelup(){
        $id=I('get.id');
        $condiction['news_id']=$id;
        $condiction['news_stateid']=3;
        $condiction['news_state_shrootid']=$_SESSION['shroot_id'];
        $condiction['news_shtime']=date("Y.m.d h:i:s");

        $result=M('news')->save($condiction);

        if($result==1){
            echo <<<STR
				<script type="text/javascript">
					alert('新闻.$id.拒绝通过成功！');
                    window.location.href=document.referrer;
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('新闻.$id.拒绝通过失败');
                     window.location.href=document.referrer;
				</script>
STR;
        }

    }

    /*
     * 功能：审核编辑无法决定推送至管理员
     * 编写者：骆静静
     * 状态：已完成
     */
    public function notcontrol(){
        $id=I('get.id');
        $condiction['news_id']=$id;
        $condiction['news_stateid']=5;
        $condiction['news_state_shrootid']=$_SESSION['shroot_id'];
        $condiction['news_shtime']=date("Y.m.d h:i:s");

        $result=M('news')->save($condiction);

        if($result==1){
            echo <<<STR
				<script type="text/javascript">
					alert('新闻.$id.推送至管理员成功！');
                    window.location.href=document.referrer;
				</script>
STR;
        }else{
            echo <<<STR
				<script type="text/javascript">
					alert('新闻.$id.推送至管理员失败');
                     window.location.href=document.referrer;
				</script>
STR;
        }
    }

/*
 * 未通过新闻进行复核审请
 * */
    public function notreview(){
        $map['news_stateid']=6;
        $condiction['news_state_shrootid']=$_SESSION['shroot_id'];
        $condiction['news_shtime']=date("Y.m.d h:i:s");
        $count= M('news')->where($map)->count();

        //2.设置（获取）每一页显示的个数
        $pageSize=6;
        //3.创建分页对象
        $page=new \Think\Page($count,$pageSize);

        $news=M('news')->where($map)->limit($page->firstRow.','.$page->listRows)->getField('news_id,news_type,news_tab,news_title');

        $this->assign('news',$news);
//dump($news);

        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');

        $this->assign('pages',$page->show());

        $this->display();

    }
/*
 * 图集新闻
 * */
    public function picnews(){
        $news_id=I('get.id');
        $condiction['pic_news_id']=$news_id;

    }
    /*
     * 文字新闻
     * */

    public function wordnews(){
        $news_id=I('get.id');
       $condiction['word_news_id']=$news_id;

    }


    /*
     * 图文新闻
     *
     * */
    public function tuwennews(){
        $news_id=I('get.id');
        $condiction['tuwen_news_id']=$news_id;

    }

    /*
     * 视频新闻
     * */

    public function videonews(){
        $news_id=I('get.id');
        $condiction['video_news_id']=$news_id;

    }
/*
 * 其他新闻
 * */
    public function elsenews(){

        echo <<<STR
        <script> alert('新闻种类错误，建议推送至管理员');history.go(-1);</script>;
STR;

    }

    /*
     * 功能：帖子删除
     * 编写者：骆静静
     * 状态：已完成
     * 修改：骆静静
     */
    public function delete()
    {
        $id = I('get.id');
        // var_dump($id);
        $db = M('posts');
        $condiction['posts_id'] = $id;
        $condiction['if_show'] = 0;
        $result = $db->save($condiction);
        // $result = $db->where("posts_id = $id")->setField('if_show',1);
        if ($result == 1) {
            echo <<<STR
				<script type="text/javascript">
					alert('删除成功！');
                    window.location.href = "/review/assess/getPost";
				</script>
STR;
        } else {
            echo <<<STR
				<script type="text/javascript">
					alert('删除失败');
                    window.location.href = "/review/assess/getPost";
				</script>
STR;
        }
    }
    /*
     * 功能：帖子忽略
     * 编写者：骆静静
     * 状态：已完成
     *  修改：骆静静
     */
    public function postsIgnore(){
        $id=I('get.id');
        // var_dump($id);
        $db = M('posts');
        $condiction['posts_id']=$id;
        $condiction1['boss_deal']=2;
        $result = $db->where($condiction)->save($condiction1);
        if ($result == 1) {
            echo <<<STR
				<script type="text/javascript">
					alert('忽略成功！');
                    window.location.href = "/review/assess/getPost";
				</script>
STR;
        } else {
            echo <<<STR
				<script type="text/javascript">
					alert('忽略失败');
                    window.location.href = "/review/assess/getPost";
				</script>
STR;
        }
    }

}