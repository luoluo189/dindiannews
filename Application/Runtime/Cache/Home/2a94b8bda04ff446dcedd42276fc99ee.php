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

<link rel="stylesheet" type="text/css" href="/Public/css/lunbo.css">
<script type="text/javascript" src="/Public/js/jquery.DB_tabMotionBanner.min.js"></script>
<div class="DB_tab25 hidden-xs">
	<ul class="DB_bgSet">
		<li style="display: none; background: rgb(102, 153, 153);"></li>
		<li style="display: none; background: rgb(51, 153, 153);"></li>
		<li style="display: list-item; background: rgb(51, 153, 153);"></li>
	</ul>

	<ul class="DB_imgSet" style="position: relative;">
		<li onclick="javascript:window.location.href=content.html;;" style="position: absolute; display: none;">
			<img class="DB_1_1" src="/Public/images/index2.png" alt="" style="left: 20px; opacity: 1; display: block; top: 120px;">
			<img class="DB_1_2" src="/Public/images/index1.png" alt="" style="left: 20px; opacity: 1; display: block; top: 60px;">
			<img class="DB_1_3" src="/Public/images/bn_01.png" alt="" style="left: 300px; opacity: 1; display: block; top: 0px;">
		</li>

		<li onclick="javascript:window.location.href=content.html;;" style="position: absolute; display: none;">
			<img class="DB_2_1" src="/Public/images/index4.png" alt="" style="top: 60px; opacity: 1; display: block; left: 20px;">
			<img class="DB_2_2" src="/Public/images/index5.png" alt="" style="top: 160px; opacity: 1; display: block; left: 20px;">
			<img class="DB_2_3" src="/Public/images/index6.png" alt="" style="top: 0px; opacity: 1; display: block; left: 540px;">
		</li>
		<li onclick="javascript:window.location.href=content.html;;" style="position: absolute; display: list-item;">
			<img class="DB_4_1" src="/Public/images/bn_04.png" alt="" style="top: 0px; opacity: 1; display: block; left: 120px;">
			<img class="DB_4_2" src="/Public/images/bn32.png" alt="" style="top: 40px; opacity: 1; display: block; left: 540px;">
			<img class="DB_4_3" src="/Public/images/bn33.png" alt="" style="top: 170px; opacity: 1; display: block; left: 640px;">
		</li>
	</ul>

	<div class="DB_menuWrap">
		<ul class="DB_menuSet">
			<li class=""><img src="/Public/images/btn_off.png" alt=""></li>
			<li class=""><img src="/Public/images/btn_off.png" alt=""></li>
			<li class="select"><img src="/Public/images/btn_on.png" alt=""></li>
		</ul>
		<div class="DB_next" style="display: none;"><img src="/Public/images/nextArrow.png" alt="NEXT"></div>
		<div class="DB_prev" style="display: none;"><img src="/Public/images/prevArrow.png" alt="PREV"></div>
	</div>

</div>
<script type="text/javascript">
    $('.DB_tab25').DB_tabMotionBanner({
        key:'b28551dd',
        autoRollingTime:8000,
        bgSpeed:300,
        motion:{
            DB_1_1:{left:-50,opacity:0,speed:1000,delay:500},
            DB_1_2:{left:-50,opacity:0,speed:1000,delay:1000},
            DB_1_3:{left:100,opacity:0,speed:1000,delay:1500},
            DB_2_1:{top:10,opacity:0,speed:1000,delay:500},
            DB_2_2:{top:20,opacity:0,speed:1000,delay:1000},
            DB_2_3:{top:40,opacity:0,speed:1000,delay:1500},
            DB_3_1:{left:-50,opacity:0,speed:1000,delay:500},
            DB_3_2:{top:40,opacity:0,speed:1000,delay:1000},
            DB_3_3:{top:0,opacity:0,speed:1000,delay:1500},
            DB_4_1:{top:40,opacity:0,speed:1000,delay:500},
            DB_4_2:{top:0,opacity:0,speed:1000,delay:1000},
            DB_4_3:{top:240,opacity:0,speed:1000,delay:1500},
            end:null
        }
    })
</script><div class="aw-container-wrap aw-container-wrap">
	<div class="container">
		<div class="row">
			<div class="aw-content-wrap clearfix">
				<div class="col-sm-12 col-md-9 aw-main-content">

					<!-- 新消息通知 -->
					<div class="aw-mod aw-notification-box hide" id="index_notification">
						<div class="mod-head common-head">
							<h2>
								<span class="pull-right"><a href="http://www.tabuzhe.com/account/setting/privacy/#notifications" class="text-color-999"> 通知设置</a></span>
								新通知<em class="badge badge-important" name="notification_unread_num"></em>
							</h2>
						</div>
						<div class="mod-body">
							<ul id="notification_list"></ul>
						</div>
						<div class="mod-footer clearfix">
							<a href="javascript:;" onclick="AWS.Message.read_notification(false, 0, false);" class="pull-left btn btn-mini btn-gray">我知道了</a>
							<a href="http://www.tabuzhe.com/notifications/" class="pull-right btn btn-mini btn-success">查看所有</a>
						</div>
					</div>
					<!-- end 新消息通知 -->
					<div class="ad-all clearfix hidden-xs hidden-sm">
						<div id="qiandao">
							<div class="pull-right" style="color:#999;">
								<b>站内统计</b>
								<span style="padding:0 0 0 10px;">会员：<?php echo ($users_num); ?> / 激活：<?php echo ($users_num); ?></span>
								<span style="padding:0 0 0 10px;">话题：<?php echo ($labels_num); ?></span>
								<span style="padding:0 0 0 10px;">文章：<?php echo ($posts_num); ?></span>
							</div>
							<h2 class="hidden-xs">热门话题 </h2>
							<div>
								<?php if(is_array($lables)): $i = 0; $__LIST__ = $lables;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd style="float: left;">
										<a href="/index.php/home/list/getlist/id/<?php echo ($vo["posts_label_id"]); ?>" style="width: auto;height: auto;margin-left:30px;"><?php echo ($vo["posts_label_name"]); ?></a>
									</dd><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</div>
					</div>
					<script type="text/javascript">
                        $(document).ready(function()
                        {
                            $('.xboxs').hover(function()
                            {
                                $(this).find(".aw-user-name img").css("background","red");
                                $(this).find('img').animate({width:54, marginTop:-5, marginLeft:-2}, 500);
                            }, function()
                            {
                                $(this).find(".aw-user-name img").css("background","");
                                $(this).find('img').animate({width:50, marginTop:0, marginLeft:0},300);
                            });
                        });
					</script>					<!-- tab切换 -->
					<ul class="nav nav-tabs aw-nav-tabs active hidden-xs">
						<li class="active"><a href="">热门</a></li>
					</ul>
					<!-- end tab切换 -->


					<div class="aw-mod aw-explore-list">
						<div class="mod-body">
							<div class="aw-common-list">
								<?php if(is_array($posts)): $i = 0; $__LIST__ = $posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="aw-item" id="aw-item_0">
										<div class="aw-user-imgs">
											<a class="aw-user-name aw-user-name-o hidden-xs" data-id="3" href="/index.php/home/personal/index2/id2/<?php echo ($vo["users_id"]); ?>" rel="nofollow"><img src="/Public<?php
 $tabid=$vo[users_id]; $tmp['users_id']=$tabid; $tabName=M('users')->where($tmp)->field('users_pic')->find(); echo $tabName['users_pic']; ?>" alt="">
												<br/><?php
 $tabid=$vo[users_id]; $tmp['users_id']=$tabid; $tabName=M('users')->where($tmp)->field('users_name')->find(); echo $tabName['users_name']; ?>

											</a>
											<div class="userline hidden-xs" id="userline_0"></div>
										</div>
										<div class="aw-question-content" id="aw-question-content_0">
											<div class="pull-right">
											</div>
											<p>
			<span class="text-color-999">
				发起
				<?php echo ($vo["posts_time"]); ?>

			</span>
												<span class="spanb_b">热</span>
											</p>
											<h4>
												<a class="listlink" href="/index.php/home/list/getlist/id/<?php echo ($vo["posts_label_id"]); ?>">
													<?php
 $tabid=$vo[posts_label_id]; $tmp['posts_label_id']=$tabid; $tabName=M('lables')->where($tmp)->field('posts_label_name')->find(); echo "【".$tabName['posts_label_name']."】"; ?>
												</a>
												<a  href="/index.php/home/list/content/id/<?php echo ($vo["posts_id"]); ?>"><?php echo ($vo["posts_title"]); ?></a>
												<a class="aw-question-topics" href="/index.php/home/list/getlist/id/<?php echo ($vo["posts_label_id"]); ?>"><?php
 $tabid=$vo[posts_label_id]; $tmp['posts_label_id']=$tabid; $tabName=M('lables')->where($tmp)->field('posts_label_name')->find(); echo $tabName['posts_label_name']; ?></a>
											</h4>

											<div class="inner clearfix">
												<p class="question-text" style=" color: #666; font-size:13px;">
													<?php echo ($vo["posts_intr"]); ?>
												</p>
												<div class="inners clearfix">
													<div class="row">
														<div class="shibox shiboximg col-xs-4 col-sm-4 col-md-4">
															<a href="/Public/<?php echo ($vo["posts_pic"]); ?>" target="_blank" data-fancybox-group="thumb" rel="lightbox">
																<img class="img-polaroidst img-responsive" src="/Public/<?php echo ($vo["posts_pic"]); ?>" alt="" original="" style="display: block;">
															</a>
														</div>
													</div>
												</div>
												<div class="awfo-box">
													<a href="/index.php/home/personal/index2/id2/<?php echo ($vo["users_id"]); ?>" class="aw-user-name">
														<?php
 $tabid=$vo[users_id]; $tmp['users_id']=$tabid; $tabName=M('users')->where($tmp)->field('users_name')->find(); echo "【".$tabName['users_name']."】"; ?>
													</a>
													<span class="text-color-9999 idown">发起了话题
					&nbsp;&nbsp;&nbsp;  <?php
 $postsid=$p['posts_id']; $tmp['posts_id']=$postsid; $num=M('comments')->where($tmp)->count(); echo $num; ?> 个评论 o
				</span>
													<span class="pull-right hidden-xs contribute">
				<a href="/index.php/home/list/content/id/<?php echo ($vo["posts_id"]); ?>" class="pull-right text-color-999">评论</a>
				</span>
												</div>

											</div>

										</div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>


								<script>
                                    $(document).ready(function(){
                                        var foxh;
                                        $('.shibox img').hover(function() {
                                            foxh=$(this).height()-150;
                                            $(this).css({"transition":"1s","-webkit-transform":"translateY(-"+foxh+"px)"});
                                        }, function() {
                                            $(this).css("-webkit-transform","translateY(0)");
                                        });
                                    });
								</script>

							</div>
						</div>

						<div class="mod-footer">
						</div>
					</div>
				</div>

				<!-- 侧边栏 -->
				<div class="col-sm-12 col-md-3 aw-side-bar hidden-xs hidden-sm">
					<div class="user-qiandaobox clearfix">
						<ul class="qian-box">
							<dt class="act"><a href="javascript:;" onclick="AWS.ajax_request(G_BASE_URL + &#39;/points/ajax/send_qiandao/&#39;, &#39;uid=&#39;);">签到</a></dt>
							<dd>
								<p>2017年05月18日</p>
								<p>漏签<span>0</span>天</p>
							</dd>
						</ul>
					</div>					<div class="aw-mod user-home clearfix">
					<div class="mod-head">
						<!--<h2>您还没有登录！</h2>-->
					</div>
					<ul>
						<li class="user-bg-img">
							<!--<img src="/Public/images/avatar-max-img.png" alt="未登录" title="未登录">-->
						</li>
						<li>
							<p class="text-color-999" style="text-align:left;text-indent:2em">E-logel是一个分享学习信息的网站,通过它您可以分享你的学习经验帮助其他人,也可以及时了解最新的信息帮助你的学习	</p>
						</li>
						<!--<li>
                        <ul class="user-home-question clearfix">
                            <li><a href="http://www.tabuzhe.com/m/login/" class="btn btn-mini btn-primary btn-normal">登录</a></li>
                            <li></li>
                        </ul>
                        </li>-->
					</ul>
				</div>



					<div class="aw-mod aw-text-align-justify">
						<div class="mod-head">
							<a href="/index.php/home/personal/lists/" class="pull-right">更多 &gt;</a>
							<h3>热门用户</h3>
						</div>
						<div class="mod-body">
							<?php if(is_array($points)): $i = 0; $__LIST__ = $points;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="aw-item">
									<p class="text-color-999 title">

										<a href="/index.php/home/personal/index2/id2/<?php echo ($vo["users_id"]); ?>" class="aw-user-name"><?php echo ($vo["users_name"]); ?></a>
									</p>
									<p class="text-color-999 signature"></p>
									<div class="meta">
									<span><i class="icon icon-prestige"></i>威望 <b><?php
 $tmp=$vo[users_sum]*3+$vo[comments_num]*2; echo $tmp; ?>
									</b></span>

										<a href="/index.php/home/personal/focus/id/<?php echo ($vo["users_id"]); ?>" onclick="refresh()" style="margin-right: 20px;" class="pull-right aw-icon-thank-tips text-color-999" data-original-title="" data-toggle="tooltip" title="<?php
 $tabid=$vo[users_id]; $tmp1['users_id2']=$tabid; $tmp1['users_id']=$id; $tabName=M('attention_users')->where($tmp1)->select(); if($tabName) { echo '取消关注'; } else{ echo '关注'; } ?>" data-placement="bottom">
											<?php
 $tabid=$vo[users_id]; $tmp2['users_id2']=$tabid; $tmp2['users_id']=$id; $tabName=M('attention_users')->where($tmp2)->select(); if($tabName) { echo "取消关注"; } else{ echo "关注"; } ?>
										</a>

										<!--<span><i class="icon icon-beat"></i>签到 <b>0</b></span>-->
									</div>


								</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
					<div class="aw-mod aw-text-align-justify fixedffs" id="saybox"></div>
					<script type="text/javascript">
						$(function(){
							var scrtime;
							$("#quotation").hover(function(){
								clearInterval(scrtime);

							},function(){

								scrtime = setInterval(function(){
									var obj = $('#quotation ul li').last();
									obj.hide();
									$('#quotation ul').prepend(obj);
									$('#quotation ul li').first().slideDown(500);
								},5000);

							}).trigger("mouseleave");

							var fixfox="fixedffs";
							var rollSet = $('#saybox');// 检查对象，#sidebar-tab是要随滚动条固定的ID，可根据需要更改
							var offset = rollSet.offset();
							$(window).scroll(function () {
// 检查对象的顶部是否在游览器可见的范围内
								var scrollTop = $(window).scrollTop();
								if(offset.top < scrollTop && $(document).scrollTop() + $(window).height() < $(document).height()){
									rollSet.addClass(fixfox);
								}else{
									rollSet.removeClass(fixfox);
								}
							});
						});
					</script>
					<div id="tabuzhead" class="hidden-xs hidden-sm fixedff">
						<!--<div class="tabuzheadbox"></div>-->
					</div>
					<script type="text/javascript">
						$(function() {
							var fixfox="fixedff";
							var rollSet = $('#');// 检查对象，#sidebar-tab是要随滚动条固定的ID，可根据需要更改
							var offset = rollSet.offset();
							$(window).scroll(function () {
// 检查对象的顶部是否在游览器可见的范围内
								var scrollTop = $(window).scrollTop();
								if(offset.top < scrollTop + 380){
									rollSet.addClass(fixfox);
								}else{
									rollSet.removeClass(fixfox);
								}
							});
						});
					</script>
					<script>
						function refresh(){
							window.location.reload();
						}
					</script>
				</div></div></div></div></div>
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