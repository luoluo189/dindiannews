<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="renderer" content="webkit">
    <title>E-logel</title>
    <meta name="keywords" content="">
    <!--<meta name="description" content="">-->
    <meta property="qc:admins" content="1543437157611256216375">
    <meta property="wb:webmaster" content="d550602d19a4cb44">
    <!--<base href="http://www.tabuzhe.com/">--><base href="."><!--[if IE]></base><![endif]-->
    <link href="/Public/images/888.jpg" rel="shortcut icon" type="image/png">

    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/icon.css">

    <link href="/Public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/assets/vendor/skycons/css/skycons.css" rel="stylesheet" />
    <link href="/Public/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <link href="/Public/css/common.css" rel="stylesheet" type="text/css">
    <link href="/Public/css/link.css" rel="stylesheet" type="text/css">
    <link href="/Public/css/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="/Public/css/fox.css">

    <style>
        .logo-a{cursor:pointer;color:#fff;padding-top: 10px;}
        .aw-logo{color: #fff;font-size: 20px;}
    </style>
    <script src="/Public/js/hm.js"></script><script type="text/javascript">
        var _24120EF4033C4401300FB68EF0F70155="";
        var G_POST_HASH=_24120EF4033C4401300FB68EF0F70155;
        var G_INDEX_SCRIPT = "";
        var G_SITE_NAME = "TABUZHE";
        var G_BASE_URL = "http://www.E-logel.com";
        var G_STATIC_URL = "http://www.E-logel/static";
        var G_UPLOAD_URL = "http://www.E-logel/uploads";
        var G_USER_ID = "";
        var G_USER_NAME = "";
        var G_UPLOAD_ENABLE = "N";
        var G_UNREAD_NOTIFICATION = 0;
        var G_NOTIFICATION_INTERVAL = 100000;
        var G_CAN_CREATE_TOPIC = "";
        var G_INDEX_EDITOR = "0";
        var G_ADVANCED_EDITOR_ENABLE = "Y";
        G_USER_ID=G_USER_ID==''?'':parseInt(G_USER_ID);

    </script>
    <script src="/Public/js/jquery.2.js" type="text/javascript"></script>
    <script src="/Public/js/jquery.form.js" type="text/javascript"></script>
    <script src="/Public/js/plug-in_module.js" type="text/javascript"></script>
    <script src="/Public/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="/Public/js/aws.js" type="text/javascript"></script>
    <script src="/Public/js/aw_template.js" type="text/javascript"></script>
    <script src="/Public/js/app.js" type="text/javascript"></script>
    <script src="/Public/js/jquery.lazyload.js" type="text/javascript"></script>

    <script type="text/javascript" src="/Public/js/compatibility.js"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="/Public/js/respond.js"></script>
    <![endif]-->
    <script>
        $(function() {
            //图片延时加载
            $(".shibox img").lazyload({
                placeholder : G_STATIC_URL+"/common/grey.gif",
                effect : "fadeIn"
            });
            $(".aw-article-list img").lazyload({
                placeholder : G_STATIC_URL+"/common/grey.gif",
                effect : "fadeIn"
            });
            $(".markitup-box img").lazyload({
                placeholder : G_STATIC_URL+"/common/grey.gif",
                effect : "fadeIn"
            });
        });
    </script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?7c7828075bb29d18aaf8db35d204d643";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>
<body><noscript unselectable="on" id="noscript">
    &lt;div class="aw-404 aw-404-wrap container"&gt;
    &lt;img src="/Public/images/no-js.jpg"&gt;
    &lt;p&gt;你的浏览器禁用了JavaScript, 请开启后刷新浏览器获得更好的体验!&lt;/p&gt;
    &lt;/div&gt;
</noscript>
<div class="aw-top-menu-wrap">
    <div class="oldsite hidden-xs"><a href="javascript:StranBody()" id="kevin_language" title="點擊以繁體中文方式瀏覽">繁</a></div>
    <div class="container">
        <!-- logo -->
        <div class="aw-logo hidden-xs">
            <a href="/index.php/home/index/index" class="logo-a">E-logel</a>
        </div>
        <!-- end logo -->
        <!-- 搜索框 -->
        <div class="aw-search-box hidden-xs hidden-sm">
            <form class="navbar-search" action="#" id="global_search_form" method="post">
                <input class="form-control search-query" type="text" placeholder="搜索话题、圈子或人" autocomplete="off" name="q" id="aw-search-query">
                <span title="搜索" id="global_search_btns" onclick="$(&#39;#global_search_form&#39;).submit();"><i class="fa fa-search"></i></span>
                <div class="aw-dropdown">
                    <div class="mod-body">
                        <p class="title">输入关键字进行搜索</p>
                        <ul class="aw-dropdown-list hide"></ul>
                        <p class="search"><span>搜索:</span><a onclick="$(&#39;#global_search_form&#39;).submit();"></a></p>
                    </div>
                    <div class="mod-footer">
                        <a href="/index.php/home/post/index" onclick="$(&#39;#header_publish&#39;).click();" class="pull-right btn btn-mini btn-success publish">发起话题</a>
                    </div>
                </div>
            </form>
            <a href="javascript:search(0);" class="search-close">关闭</a>
        </div>
        <script type="text/javascript">
            function search(s){
                if (s == 1){
                    $('#xiaosou').fadeOut();
                    $('.aw-search-box').stop().css({top:-50}).show().animate({top:46},100);
                }else{
                    $('#xiaosou').fadeIn();
                    $('.aw-search-box').stop().fadeOut();
                }
            }
        </script>
        <!-- end 搜索框 -->
        <!-- 导航 -->
        <div class="aw-top-nav navbar">
            <div class="navbar-header">
                <button class="navbar-toggle pull-left">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-fox">
                    <li><a href="/index.php/home/index/index" class=""><i class="fa fa-eye"></i> 发现</a></li>
                    <li>
                        <a> &nbsp&nbsp浏&nbsp&nbsp览</a>
                        <div class="dropdown-list flip pull-right">
                            <ul id="extensions-nav-list">
                                <li><a href="/index.php/home/list/index" class="active">&nbsp话题</a></li>
                                <li><a href="/index.php/home/news/index" class=""> &nbsp阅读</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="/index.php/home/index/index" class=""> &nbsp&nbsp专&nbsp栏</a></li>
                    <li><a href="/index.php/home/index/index"> &nbsp&nbsp圈&nbsp子</a></li>
                    <li><a href="/index.php/home/index/index"> &nbsp&nbsp活&nbsp动</a></li>
                    <li><a href="/index.php/home/post/index"> 发起话题</a></li>
                </ul>
            </nav>
        </div>
        <!-- end 导航 -->
        <!-- 用户栏 -->
        <div class="aw-user-nav">
            <!-- 登陆&注册栏 -->
            <?php if(empty($_SESSION['user_name']) == true): ?><a class="btn-primary btnst" id="foxlogin3" href="/index.php/home/index/login">登录</a> <span class="or">or</span>
                <a class="btn-primary btnst" id="foxlogin4" href="/index.php/home/register">注册</a>
                <?php else: ?>
                <a class="btn-primary btnst" id="foxlogin1" href="/index.php/home/personal"><?php echo ($_SESSION['user_name']); ?></a>
                <span class="or">or</span>
                <a class="btn-primary btnst" id="foxlogin2" href="/index.php/home/index/loginout">退出</a><?php endif; ?>

            <!-- end 登陆&注册栏 -->
        </div>
        <!-- end 用户栏 -->
        <!-- 发起 -->
        <!-- end 发起 -->
    </div>

</div>

<style>
	.list-page{padding:20px 0;text-align:center; size: 16px ;color:black}
	.list-page a{margin:0 5px;padding:2px 7px;border:1px solid #ccc;background:#f3f3f3;}
	.list-page a:hover{background:#e4e4e4;border:1px solid #908f8f;}
	.list-page .current{margin:0 5px;padding:2px 7px;background: #34495e;border:1px solid #34495e;color:#fff;}
	.list-page a:hover {
		background: #e4e4e4;
		border: 1px solid #0f0f0f;
		color: #0f0e0e;
	}
</style>
<div class="aw-container-wrap">
	
	<div class="container">
		<div class="row">
			<div class="aw-content-wrap clearfix">
				<div class="col-sm-12 col-md-9 aw-main-content">
				<div class="ad-all clearfix">
					<div id="carousel-example" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
       <li data-target="#carousel-example" data-slide-to="1" class=""></li>
       <li data-target="#carousel-example" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
           <a href="news_content.html" target="_blank"><img alt="" src="/Public/images/1.jpg"></a>
         </div>
       <div class="item">
            <a href="news_content.html" target="_blank"><img alt="" src="/Public/images/2.jpg"></a>
          </div>
        <div class="item">
             <a href="news_content.html" target="_blank"><img alt="" src="/Public/images/3.jpg"></a>
         </div>
     </div>
    <a class="left carousel-control" href="news_content.html" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" style="font-size:14px;"></span></a>
    <a class="right carousel-control" href="news_content.html" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" style="font-size:14px;"></span></a>
  </div>
 <script>
 $(function(){
 $('.carousel').carousel();
 });
</script>				</div>
				<div class="aw-mod">
					<div class="mod-head">
						<h2 class="lanmubiao hidden-xs"><i class="icon icon-reader"></i>　阅读</h2>
					</div>
					<div class="mod-body">
						<?php if(is_array($posts)): $i = 0; $__LIST__ = $posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><ul class="col-md-12 aw-article-list">
								<div id="article-list_5" style="border: 1px solid #e2e2e2;padding: 10px;border-radius: 3px;display: none;">
									<div class="mod-head" style="background:#f9f9f9;">
										<a class="pull-right" href="javascript:;" onclick="AWS.content_switchers($(&#39;#article-list_5&#39;), $(&#39;#oarticle-list_5&#39;), $(&#39;#article-list-box_5&#39;));return false;"><i class="icon icon-delete text-color-999"></i> 关闭阅读</a>
										<h1><a href="/index.php/home/news/news_content/id/<?php echo ($p["posts_id"]); ?>">【阅读】<?php echo ($p["posts_title"]); ?></a></h1>
									</div>
									<div class="mod-body markitup-box zhankai" id="article-list-box_5" style="display:inline;">
										<p>
											<?php echo ($p["posts_content"]); ?>
										</p>
									</div>
									<div class="mod-footer" style="height:30px;margin:10px 0 0 0;">
										<span class="pull-right more-operate text-color-999 hidden-xs">   
											<a class="text-color-999" href="http://www.tabuzhe.com/#" onclick="AWS.content_switchers($(&#39;#article-list_5&#39;), $(&#39;#oarticle-list_5&#39;), $(&#39;#article-list-box_5&#39;));return false;"><i class="icon icon-delete text-color-999"></i> 关闭阅读</a>
										</span>
										<span class="pull-left more-operate text-color-999 fcontribute">
											<i class="pull-left kr"><a class="aw-user-name hidden-xs" data-id="4" href="#" rel="nofollow"><img src="/Public<?php
 $usersid=$p[users_id]; $tmp['users_id']=$usersid; $usersName=M('users')->where($tmp)->field('users_pic')->find(); echo $usersName['users_pic']; ?>" alt="" original="http://www.tabuzhe.com/uploads/avatar/000/00/00/04_avatar_mid.jpg"></a></i>
											<a href="/home/list/index" class="aw-user-name"><?php
 $tabid=$p[posts_label_id]; $tmp['posts_label_id']=$tabid; $tabName=M('lables')->where($tmp)->field('posts_label_name')->find(); echo "【".$tabName['posts_label_name']."】"; ?></a> 发表于 : <?php echo ($p["posts_time"]); ?>&nbsp;&nbsp;
										&nbsp;&nbsp;
											<a class="text-color-999" href="http://www.tabuzhe.com/article/5#!answer_form"> 评论 (<?php
 $postsid=$p['posts_id']; $tmp['posts_id']=$postsid; $num=M('comments')->where($tmp)->count(); echo $num; ?>)</a>
										</span>
									</div>	
								</div>
								<li id="oarticle-list_5">
																			<div class="aw-article-text col-md-4">
																						<a href="#" target="_blank" data-fancybox-group="thumb" rel="lightbox">
											<img class="img-polaroid kltu" src="/Public/<?php echo ($p["posts_pic"]); ?>" style="opacity: 1;">
											</a>
										</div>
																				<div class="col-md-8 foxo">
											<h1>
																						<span class="spanb_b">热</span>																						<a href="/index.php/home/news/news_content/id/<?php echo ($p["posts_id"]); ?>">【阅读】<?php echo ($p["posts_title"]); ?></a>
											</h1>
											<span id="detail_5">
											<a class="text-colors-999" href="news_content.html">
											 <?php echo ($p["posts_intr"]); ?>...													</a>
											</span>
										</div>          
										<div class="mod-body col-md-12 clearfix kl">
											 <div class="mod-footer">
												<span class="pull-right more-operate text-color-999 hidden-xs">   
													<a href="/index.php/home/news/news_content/id/<?php echo ($p["posts_id"]); ?>" target="_blank" class="aw-icon-thank-tips text-color-999" data-original-title="新窗口阅读" data-toggle="tooltip" title="" data-placement="left"><i class="icon icon-share"></i> 阅读</a>
													&nbsp;&nbsp;<a href="/index.php/home/news/news_content/id/<?php echo ($p["posts_id"]); ?>" onclick="AWS.content_switcher($(&#39;#oarticle-list_5&#39;), $(&#39;#article-list_5&#39;));AWS.article_read(&#39;#article-list-box_5&#39;, 5);$(&#39;#overDiv&#39;).attr(&#39;onclick&#39;, &#39;AWS.content_switcherst(5);return false;&#39;); return false;" class="aw-icon-thank-tips text-color-999" data-original-title="直接展开阅读" data-toggle="tooltip" title="" data-placement="left"><i class="icon icon-comment"></i> 展开</a>
												</span>
												<span class="pull-left more-operate text-color-999 fcontribute">
													<i class="pull-left kr ptop15"><a class="aw-user-name hidden-xs" data-id="4" href="http://www.tabuzhe.com/people/yuer" rel="nofollow"><img src="/Public/<?php
 $usersid=$p[users_id]; $tmp['users_id']=$usersid; $usersName=M('users')->where($tmp)->field('users_pic')->find(); echo $usersName['users_pic']; ?>" alt=""></a></i>
													<a href="/index.php/home/list/index" class="aw-user-name"><?php
 $tabid=$p[posts_label_id]; $tmp['posts_label_id']=$tabid; $tabName=M('lables')->where($tmp)->field('posts_label_name')->find(); echo "【".$tabName['posts_label_name']."】"; ?></a> 发表于 : <?php echo ($p["posts_time"]); ?>&nbsp;&nbsp;
													&nbsp;
													<a class="text-color-999" href="/index.php/home/news/news_content/id/<?php echo ($p["posts_id"]); ?>"> 评论 (<?php
 $postsid=$p['posts_id']; $tmp['posts_id']=$postsid; $num=M('comments')->where($tmp)->count(); echo $num; ?>)</a>
													&nbsp;&nbsp;来自
													[<a class="text-color-999" href="/index.php/home/list/index" target="_blank"><?php
 $usersid=$p[users_id]; $tmp['users_id']=$usersid; $usersName=M('users')->where($tmp)->field('users_name')->find(); echo $usersName['users_name']; ?></a>]
																									</span>
											</div>	
										</div>										
								</li>								   
							</ul><?php endforeach; endif; else: echo "" ;endif; ?>
						<div class="list-page"><?php echo ($pages); ?></div>

												</div>
						<div class="mod-body col-md-12 clearfix">
						<div class="mod-footer pull-right">
													</div>
						</div>
										</div>
				<!-- end 文章列表 -->
				</div>
				<!-- 侧边栏 -->
				<div class="col-sm-3 col-md-3 aw-side-bar hidden-xs hidden-sm">
					<!-- 热门文章 -->
					<div class="aw-mod aw-text-align-justify">
						<div class="mod-head">
							<h3>热门文章</h3>
						</div>
						<div class="mod-body">
							<ul>
															</ul>
						</div>
					</div>
					<!-- end 热门文章 -->
					<div class="aw-mod aw-text-align-justify">
	<div class="mod-head">
		<a href="/index.php/home/list/index" class="pull-right">更多 &gt;</a>
		<h3>热门圈子</h3>
	</div>
	<div class="mod-body">
							</div>
</div>
					<div id="tabuzhead" class="hidden-xs hidden-sm">
	<div class="tabuzheadboxs">
		<a href="#" target="_blank"><img src="/Public/images/AD1.jpg"></a>
	</div>
	<!--<div class="tabuzheadbox"></div>-->
</div>
<script type="text/javascript">
$(function() {
var fixfox="fixedff";
var rollSet = $('#tabuzhead');// 检查对象，#sidebar-tab是要随滚动条固定的ID，可根据需要更改
var offset = rollSet.offset();
$(window).scroll(function () {
// 检查对象的顶部是否在游览器可见的范围内
var scrollTop = $(window).scrollTop();
if(offset.top < scrollTop){
rollSet.addClass(fixfox);
}else{
rollSet.removeClass(fixfox);
}
});
});
</script>				</div>

</div>
</div>
</div>
</div>
<div class="SW_footer">
    <div class="ft layout clearfix hidden-xs">
        <div class="slogan"><a href="http://www.E-logel.com/"></a></div>
        <div class="ft_item">
            <h4 class="a1">关于我们</h4>
            <ul>
                <li><a target="_blank">本 站 介 绍</a></li>
                <li><a target="_blank" rel="nofollow">联 系 我 们</a></li>
                <li><a target="_blank" rel="nofollow">用 户 协 议</a></li>
                <li><a target="_blank">内 容 订 阅</a></li>
            </ul>
        </div>
        <div class="ft_item">
            <h4 class="a2">站 内 导 航</h4>
            <ul>
                <li><a>记 事 本</a></li>
                <li><a>听 音 乐</a></li>
                <li><a>热 评 论</a></li>
            </ul>
        </div>
        <div class="ft_item">
            <h4 class="a3">合 作 赞 助</h4>
            <ul>
                <li><a target="_blank">空 间 赞 助</a></li>
                <li><a target="_blank">广 告 支 持</a></li>
                <li><a target="_blank">欢 迎 加 入</a></li>
            </ul>
        </div>
        <div class="ft_item">
            <h4 class="a4">常 用 链 接</h4>
            <ul>
                <li><a target="_blank">本 站 QQ 群</a></li>
                <li><a>建 议 提 交</a></li>
                <li><a>管 理 申 请</a></li>
            </ul>
        </div>
        <div class="ft_item hidden-xs hidden-sm">
            <h4 class="a5">网 址 二 维 码</h4>
            <img src="/Public/images/QR.png" width="100" height="100" alt="E-logel">
        </div>
    </div>
    <div class="cp"><span class="hidden-xs"> 冀ICP备10237096号 | 冀公网安备 32050902100008号, All Rights Reserved</span> www.E-logel.com  Powered By W e C e n t e r <script src="/Public/css/z_stat.php" language="JavaScript"></script>
        <script src="/Public/css/core.php" charset="utf-8" type="text/javascript"></script>
        <a href="#" target="_blank" title="站长统计">站长统计</a></div>
    <div class="clearfix hidden-xs hidden-sm" id="trans_news">
        <ul id="contain">
            <li>欢迎注册成为本站会员结交更多朋友分享学习经验</li>
        </ul>
    </div>
</div>

<a href="javascript:;" id="gotoTop" class="show hidden-xs" style="right: 114.5px; display: none;"><i></i></a>
<!-- <a class="aw-back-top hidden-xs" href="javascript:;" onclick="$.scrollTo(1, 600, {queue:true});"><i class="icon icon-up"></i></a>-->



<!-- DO NOT REMOVE -->
<!--<div id="aw-ajax-box" class="aw-ajax-box hidden-xs"><div id="aw-card-tips" class="aw-card-tips aw-card-tips-user" style="left: 205.5px; top: 445px; display: block; opacity: 0.0961000000000001;"><div class="aw-mod"><div class="mod-head"><a href="http://www.tabuzhe.com/people/aifeiertieta20161203" class="img"><img src="/Public/images/03_avatar_mid.jpg" alt=""></a><p class="title clearfix"><a href="http://www.tabuzhe.com/people/aifeiertieta20161203" class="name pull-left" data-id="3">埃菲尔铁塔</a><i class="icon-v pull-left" title="个人认证"></i></p><p class="aw-user-center-follow-meta"><span>威望: <em class="aw-text-color-green">0</em></span><span>赞同: <em class="aw-text-color-orange">0</em></span></p></div><div class="mod-body"><p></p></div><div class="mod-footer clearfix" style="display: none;"><span><a class="text-color-999" onclick="AWS.dialog(&#39;inbox&#39;, &#39;埃菲尔铁塔&#39;);"><i class="icon icon-inbox"></i> 私信</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="text-color-999" onclick="AWS.dialog(&#39;publish&#39;, {category_enable:0, ask_user_id:3, ask_user_name:&#39;埃菲尔铁塔&#39; });"><i class="icon icon-at"></i> 问Ta</a></span><a class="btn btn-normal btn-success follow  pull-right" onclick="AWS.User.follow($(this), &#39;user&#39;, 3);"><span>关注</span> <em>|</em> <b>0</b></a></div></div></div></div>-->
<script type="text/javascript" language="javascript"> var Default_isFT = 0 </script>
<script language="Javascript" src="/Public/js/fox_language.js"></script>
<div style="display:none;" id="__crond"><img src="/Public/images/1495434409" width="1" height="1"></div>

<!-- Escape time: 0.132610082626 --><!-- / DO NOT REMOVE -->




</body></html>