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


<div class="aw-container-wrap">
    <div class="container">
        <div class="row">
            <div class="aw-content-wrap clearfix">
                <div class="col-sm-12 col-md-9 aw-main-content">
                    <!-- 圈子推荐bar -->
                    <!-- 圈子推荐bar -->
                    <!-- 圈子bar -->
                    <div class="aw-mod aw-topic-bar" id="question_topic_editor" data-type="question" data-id="3">
                        <div class="tag-bar clearfix">
                            <a id="fontsize" class="pull-left">A+</a>
                        </div>
                    </div>
                    <!-- end 圈子bar -->
                    <div class="aw-mod aw-question-detail aw-item">
                        <div class="mod-head">
                            <div class="biaoboxs pull-right hidden-xs">
                            </div>
                            <h1>
                                <span class="font24">【阅读】<?php echo ($content["posts_title"]); ?></span>
                            </h1>

                        </div>
                        <div class="mod-body">
                            <!--<link href="./鬼吹灯之精绝古城全集1080ped2k百度云网盘解压密码 - TABUZHE_files/prettify.css" rel="stylesheet" type="text/css">-->
                            <script src="/Public/js/prettify.js" type="text/javascript"></script>
                            <div id="content-fox" class="content markitup-box font18 line-bigs">
                                <?php echo ($content["posts_intr"]); ?> <br>
                                <br>
                                <div class="aw-upload-img-list active">
                                    <a href="/Public/images/4e8ddc4be6f41e08f6141f8a25d43580.jpg" target="_blank" data-fancybox-group="thumb" rel="lightbox"><img src="/Public/images/161459zbs85ddtegg88lso.png" class="img-polaroid" title="6316f93a-5c12-4d3e-a5ba-405ec33295d3.jpg" alt="6316f93a-5c12-4d3e-a5ba-405ec33295d3.jpg" original="http://www.tabuzhe.com/uploads/questions/20161224/4e8ddc4be6f41e08f6141f8a25d43580.jpg"></a>
                                </div>
                                <br>
                                <br>
                                <?php echo ($content["posts_content"]); ?>
                                <div class="aw-upload-img-list">
                                </div>
                            </div>
                            <div class="aw-mod aw-upload-file-list">
                                <!-- <div class="mod-head">
                                    <h3><i class="icon icon-attach"></i> 附件 :</h3>
                                </div> -->
                                <div class="mod-body">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mod-footer">
                            <div class="meta">
                                <span class="text-color-999"><?php echo ($content["posts_time"]); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 侧边栏 -->
                <div class="col-md-3 aw-side-bar hidden-xs hidden-sm">
                    <!-- 发起人 -->
                    <div class="aw-mod">
                        <div class="mod-head">
                            <h3>发起人</h3>
                        </div>
                        <div class="mod-body">
                            <dl>
                                <dt class="pull-left aw-border-radius-5">
                                    <a href="/index.php/home/persona/index"><img alt="埃菲尔铁塔" src="/Public/images/03_avatar_mid.jpg"></a>
                                </dt>
                                <dd class="pull-left">
                                    <a class="aw-user-name" href="/index.php/home/persona/index"><?php
 $usersid=$content[users_id]; $tmp['users_id']=$usersid; $usersName=M('users')->where($tmp)->field('users_name')->find(); echo $usersName['users_name']; ?></a>

                                    <p></p>
                                </dd>
                            </dl>
                            <ul style="font-size:12px;">
                                <li> 发帖数量 : <em class="aw-text-color-orange"><?php
 $usersid=$content[users_id]; $tmp['users_id']=$usersid; $usersSum=M('users')->where($tmp)->field('users_sum')->find(); echo $usersSum['users_sum']; ?></em></li>
                                <li> 评论数量 : <em class="aw-text-color-orange"><?php
 $usersid=$content[users_id]; $tmp['users_id']=$usersid; $usersComment=M('users')->where($tmp)->field('users_comment')->find(); echo $usersComment['users_comment']; ?></em></li>
                                <li> 积分 : <em class="aw-text-color-orange"><?php
 $usersid=$content[users_id]; $tmp['users_id']=$usersid; $usersComment=M('users')->where($tmp)->field('users_comment')->find(); echo $usersComment['users_comment']; ?></em></li>
                                <li> 粉丝 : <em class="aw-text-color-orange">0</em></li>
                                <li> 签到 : <em class="aw-text-color-orange">3</em></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end 发起人 -->
                    <!-- 问题状态 -->
                    <div class="aw-mod question-status">
                        <div class="mod-head">
                            <h3>话题状态</h3>
                        </div>
                        <div class="mod-body">
                            <ul>
                                <li>最新活动: <span class="aw-text-color-blue">2016-12-24 10:45</span></li>
                                <li>浏览: <span class="aw-text-color-blue">1531</span></li>
                                <li>关注: <span class="aw-text-color-blue">1</span> 人</li>

                                <li class="aw-border-radius-5" id="focus_users"><a href="http://www.tabuzhe.com/people/aifeiertieta20161203"><img src="/Public/images/03_avatar_mid.jpg" class="aw-user-name" data-id="3" alt="埃菲尔铁塔"></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end 问题状态 -->




                </div>

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