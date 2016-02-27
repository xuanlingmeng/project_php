<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
        #allmap {height:550px; width: 100%;}
        #control{width:100%;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ny4t7GOujQB9Ek9S86hOz1GG"></script>
    <title>血吸虫病防治系统</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/font-awesome.css"/>

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="./css/ace-fonts.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="./css/ace.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="./css/ace-part2.css" class="ace-main-stylesheet"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="./css/ace-ie.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="/js/ace-extra.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="./js/html5shiv.js"></script>
    <script src="./js/respond.js"></script>
    <![endif]-->

    <style type="text/css">
        html,body{margin:0;padding:0}
        .iw_poi_title{color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right: 13px;white-space: nowrap}
        .iw_poi_content{font: 12px arial,sans-serif;overflow: visible;padding-top: 4px;white-space: -moz-pre-wrap;word-wrap:break-word}
    </style>

</head>

<body class="no-skin">
<!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="#" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    血吸虫病防治系统
                </small>
            </a>

            <!-- /section:basics/navbar.layout.brand -->

            <!-- #section:basics/navbar.toggle --><!--登录人员显示(右上方）-->
            <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button"
                    data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                <span class="sr-only">Toggle user menu</span>

                <img src="/avatars/user.jpg" alt="Jason's Photo"/>
            </button>

            <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse"
                    data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <!-- /section:basics/navbar.toggle -->
        </div>

        <!-- #section:basics/navbar.dropdown -->
        <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
            <ul class="nav ace-nav">
                <li class="transparent">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                    </a>

                    <div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#navbar-tasks">
                                        任务
                                        <span class="badge badge-danger">4</span>
                                    </a>
                                </li>

                                <li>
                                    <a data-toggle="tab" href="#navbar-messages">
                                        消息
                                        <span class="badge badge-danger">5</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .nav-tabs -->
                            <!--消息进度提醒-->
                            <div class="tab-content">
                                <div id="navbar-tasks" class="tab-pane in active">
                                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                        <li class="dropdown-content">
                                            <ul class="dropdown-menu dropdown-navbar">
                                                <li>
                                                    <a href="#">
                                                        <div class="clearfix">
                                                            <span class="pull-left">灭螺任务1</span>
                                                            <span class="pull-right">65%</span>
                                                        </div>

                                                        <div class="progress progress-mini">
                                                            <div style="width:65%" class="progress-bar"></div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <div class="clearfix">
                                                            <span class="pull-left">灭螺任务2</span>
                                                            <span class="pull-right">35%</span>
                                                        </div>

                                                        <div class="progress progress-mini">
                                                            <div style="width:35%"
                                                                 class="progress-bar progress-bar-danger"></div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <div class="clearfix">
                                                            <span class="pull-left">查螺任务1</span>
                                                            <span class="pull-right">15%</span>
                                                        </div>

                                                        <div class="progress progress-mini">
                                                            <div style="width:15%"
                                                                 class="progress-bar progress-bar-warning"></div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <div class="clearfix">
                                                            <span class="pull-left">查螺任务2</span>
                                                            <span class="pull-right">90%</span>
                                                        </div>

                                                        <div class="progress progress-mini progress-striped active">
                                                            <div style="width:90%"
                                                                 class="progress-bar progress-bar-success"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-footer">
                                            <a href="#">
                                                查看任务详情
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.tab-pane -->

                                <div id="navbar-messages" class="tab-pane">
                                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
                                        <li class="dropdown-content">
                                            <ul class="dropdown-menu dropdown-navbar">
                                                <li>
                                                    <a href="#">
                                                        <img src="/avatars/avatar.png"
                                                             class="msg-photo"
                                                             alt="Alex's Avatar"/>
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">叶老师:</span>
                                                                        下午两点会议室开会
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>十分钟前</span>
																	</span>
																</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <img src="/avatars/avatar3.png"
                                                             class="msg-photo"
                                                             alt="Susan's Avatar"/>
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">大师姐:</span>
                                                                        尽快汇报灭螺进展!
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>2天前</span>
																	</span>
																</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <img src="./avatars/avatar4.png"
                                                             class="msg-photo"
                                                             alt="Bob's Avatar"/>
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">小崔哥哥:</span>
                                                                        狮子座今日运势佳!
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>下午 3:15</span>
																	</span>
																</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <img src="./avatars/avatar2.png"
                                                             class="msg-photo"
                                                             alt="Kate's Avatar"/>
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">女神:</span>
                                                                        "港囧"很好看!推荐!
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>下午 10:33</span>
																	</span>
																</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <img src="./avatars/avatar5.png"
                                                             class="msg-photo"
                                                             alt="Fred's Avatar"/>
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">小灰:</span>
                                                                        啥时候吃饭啊!
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>上午 10:09</span>
																	</span>
																</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-footer">
                                            <a href="#">
                                                查看所有消息
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.tabbable -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>

                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue user-min">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="./avatars/user.jpg" alt="Jason's Photo"/>
								<span class="user-info">
									<small>欢迎,</small>
                                    技术渣Howard
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                设置
                            </a>
                        </li>

                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                个人中心
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="LoginTest.html">
                                <i class="ace-icon fa fa-power-off"></i>
                                退出登录
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>

        <!-- /section:basics/navbar.dropdown -->
        <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
            <!-- #section:basics/navbar.nav -->
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">
                        <i class="ace-icon fa fa-envelope"></i>
                        消息
                        <span class="badge badge-warning">5</span>
                    </a>
                </li>
            </ul>

            <!-- /section:basics/navbar.nav -->

            <!-- #section:basics/navbar.form -->
            <form class="navbar-form navbar-left form-search" role="search">
                <div class="form-group">
                    <input type="text" placeholder="搜索"/>
                </div>

                <button type="button" class="btn btn-xs btn-info2">
                    <i class="ace-icon fa fa-search icon-only bigger-110"></i>
                </button>
            </form>

            <!-- /section:basics/navbar.form -->
        </nav>
    </div>
    <!-- /.navbar-container -->
</div>
<!-- /section:basics/navbar.layout -->

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <!-- #section:basics/sidebar.horizontal -->
    <div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse">
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'fixed')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>


                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>

                <!-- /section:basics/sidebar.layout.shortcuts -->
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div>
        <!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active open hover">
                <a href="#">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> 螺情监控 </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="#" target="_blank" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
                                任务管理
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">

                    <li class="hover">
                        <a href="nowtask.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            正在进行任务
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            已完成任务
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            待审核任务
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="newtask.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            新建任务
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="hover">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> 查灭螺进度 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu">

                    <li class="hover">
                        <a href="doingTask.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            查螺历史录入信息
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="nowsnail.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            现场查螺信息
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            灭螺信息
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="hover">
                <a href="#">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 人员管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>
                <ul class="submenu">

                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            新建用户
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="hover">
                <a href="#">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> 区域管理 </span>
                </a>

                <b class="arrow"></b>
                <ul class="submenu">

                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            多边形围栏
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            中心点围栏
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>

            </li>


            <li class="hover">
                <a href="#">
                    <i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								指标体系

                                <!-- #section:basics/sidebar.layout.badge -->
								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>

                                <!-- /section:basics/sidebar.layout.badge -->
							</span>
                </a>

                <b class="arrow"></b>
                <ul class="submenu">

                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            钉螺指标
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            感染因素
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-caret-right"></i>
                            影响因素
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>

            </li>

        </ul>
        <!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->

        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'collapsed')
            } catch (e) {
            }
        </script>
    </div>

    <!-- /section:basics/sidebar.horizontal横侧边栏 -->
    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                <!-- #section:settings.box -->
                <!-- /section:settings.box -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="hidden">
                            <div id="sidebar2" class="sidebar responsive">
                                <ul class="nav nav-list">
                                    <li>
                                        <a class="dropdown-toggle" href="#">
                                            <i class="menu-icon fa fa-tag"></i>
                                            <span class="menu-text"> 人员列表 </span>

                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>

                                        <ul class="submenu">
                                            <li>
                                                <a href="#" class="dropdown-toggle">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    江苏省
                                                    <b class="arrow fa fa-angle-down"></b>
                                                </a>

                                                <b class="arrow"></b>

                                                <ul class="submenu">
                                                    <li>
                                                        <a href="#">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            南京市
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            苏州市
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            无锡市
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="dropdown-toggle">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            常州市
                                                            <b class="arrow fa fa-angle-down"></b>
                                                        </a>
                                                        <b class="arrow"></b>

                                                        <ul class="submenu">
                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    杨争辉
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    匡琳琳
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    崔洪博
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    曾睿
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    陈超
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    刘浩波
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    王仁
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    浙江省
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    上海市
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="dropdown-toggle" href="#">
                                            <i class="menu-icon fa fa-file-o"></i>

													<span class="menu-text">
                                                        疫区列表
													</span>

                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>

                                        <ul class="submenu">
                                            <li>
                                                <a href="#" class="dropdown-toggle">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    江苏省
                                                    <b class="arrow fa fa-angle-down"></b>
                                                </a>

                                                <b class="arrow"></b>

                                                <ul class="submenu">
                                                    <li>
                                                        <a href="#">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            南京市
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            苏州市
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            无锡市
                                                        </a>
                                                        <b class="arrow"></b>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="dropdown-toggle">
                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                            常州市
                                                            <b class="arrow fa fa-angle-down"></b>
                                                        </a>
                                                        <b class="arrow"></b>

                                                        <ul class="submenu">
                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    新北区
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    钟楼区
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    武进区
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    戚墅堰
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                    天宁区
                                                                </a>
                                                                <b class="arrow"></b>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    浙江省
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                    上海市
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav-list -->

                                <div class="sidebar-toggle sidebar-collapse">
                                    <i class="ace-icon fa fa-angle-double-left"
                                       data-icon1="ace-icon fa fa-angle-double-left"
                                       data-icon2="ace-icon fa fa-angle-double-right"></i>
                                </div>
                            </div>
                            <!-- .sidebar -->
                        </div>


                        <div class="row">
                            <div class="">
                                <!-- PAGE CONTENT BEGINS -->
                                <form class="form-horizontal" role="form">
                                    <!-- #section:elements.form -->
                                    <div id="allmap"></div>
                                    <script type="text/javascript">
                                        // 百度地图API功能
                                        var map = new BMap.Map("allmap");
                                        map.centerAndZoom(new BMap.Point(119.980569,31.816918), 14);
                                        map.enableScrollWheelZoom(true);
                                        map.enableInertialDragging();

                                        //城市列表控件
                                        map.enableContinuousZoom();
                                        var size = new BMap.Size(70,20);
                                        map.addControl(new BMap.CityListControl({
                                            anchor: BMAP_ANCHOR_TOP_LEFT,
                                            offset: size,
                                            // 切换城市之间事件
                                            // onChangeBefore: function(){
                                            //    alert('before');
                                            // },
                                            // 切换城市之后事件
                                            // onChangeAfter:function(){
                                            //   alert('after');
                                            // }
                                        }));
                                        /*鼠标点击后获取坐标
                                         function showInfo(e){
                                         alert(e.point.lng + ", " + e.point.lat);
                                         }
                                         map.addEventListener("click", showInfo);
                                         */

                                        var navigationControl = new BMap.NavigationControl({
                                            // 靠左上角位置
                                            anchor: BMAP_ANCHOR_TOP_LEFT,
                                            // LARGE类型
                                            type: BMAP_NAVIGATION_CONTROL_LARGE,
                                            // 启用显示定位
                                            enableGeolocation: true
                                        });
                                        map.addControl(navigationControl);
                                        // 添加定位控件
                                        var geolocationControl = new BMap.GeolocationControl();
                                        geolocationControl.addEventListener("locationSuccess", function(e){
                                            // 定位成功事件
                                            var address = '';
                                            address += e.addressComponent.province;
                                            address += e.addressComponent.city;
                                            address += e.addressComponent.district;
                                            address += e.addressComponent.street;
                                            address += e.addressComponent.streetNumber;
                                            window.alert("当前定位地址为：" + address);
                                        });
                                        geolocationControl.addEventListener("locationError",function(e){
                                            // 定位失败事件
                                            alert(e.message);
                                        });
                                        map.addControl(geolocationControl);





                                        //显示围栏区域

                                        var polygon = new BMap.Polygon([
                                            new BMap.Point(119.939175,31.84232),
                                            new BMap.Point(119.93127,31.823422),
                                            new BMap.Point(119.973958,31.832135),
                                            new BMap.Point(120.00026,31.846369),
                                            new BMap.Point(119.961884,31.842565)
                                        ], {strokeColor:"blue", strokeWeight:6, strokeOpacity:0.5});  //创建多边形
                                        map.addOverlay(polygon);   //增加多边形
                                        polygon.addEventListener("click",overlay_style);

                                        var polygon2 = new BMap.Polygon([
                                            new BMap.Point(119.945212,31.811272),
                                            new BMap.Point(119.943487,31.800225),
                                            new BMap.Point(119.952686,31.803171),
                                            new BMap.Point(119.951392,31.80538)
                                        ], {strokeColor:"green", strokeWeight:6, strokeOpacity:0.5});  //创建多边形
                                        map.addOverlay(polygon2);   //增加多边形
                                        polygon2.addEventListener("click",overlay_style);

                                        var polyline = new BMap.Polyline([
                                            new BMap.Point(119.981,31.816795),
                                            new BMap.Point(119.995948,31.833117),
                                            new BMap.Point(120.011902,31.798261)
                                        ], {strokeColor:"red", strokeWeight:6, strokeOpacity:0.5});   //创建折线
                                        map.addOverlay(polyline);          //增加折线
                                        polyline.addEventListener("click",overlay_style);

                                        var circle = new BMap.Circle(new BMap.Point(119.904536,31.825386),500,{strokeColor:"blue", strokeWeight:6, strokeOpacity:0.5}); //创建圆
                                        map.addOverlay(circle);            //增加圆
                                        circle.addEventListener("click",overlay_style);

                                        function overlay_style(e){
                                            var p = e.target;
                                            if(p instanceof BMap.Marker){
                                                alert("该覆盖物是点，点的坐标是：" + p.getPosition().lng + "," + p.getPosition().lat);
                                            }else if(p instanceof BMap.Circle){
                                                alert("该覆盖物是圆，圆的半径是：" + p.getRadius() + "，圆的中心点坐标是：" + p.getCenter().lng + "," + p.getCenter().lat);
                                            }else if(p instanceof BMap.Polyline){
                                                alert("该覆盖物是折线，所画点的个数是：" + p.getPath().length);
                                            }else if(p instanceof BMap.Polygon){
                                                alert("该覆盖物是多边形，所画点的个数是：" + p.getPath().length);
                                            }else if(p instanceof BMap.Polygon2){
                                                alert("该覆盖物是多边形，所画点的个数是：" + p.getPath().length);
                                            }else{
                                                alert("无法获知该覆盖物类型");
                                            }
                                        }

                                    </script>


                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.main-content -->
                    <!-- PAGE CONTENT ENDS -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="footer" >
                <div class="footer-inner">
                    <!-- #section:basics/footer -->
                    <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">血吸虫病</span>
							防治系统 &copy; 2015-2016
						</span>
                    </div>
                    <!-- /section:basics/footer -->
                </div>
            </div>

        </div>
        <!-- /.page-content -->
    </div>
</div>
<!-- /.main-content -->

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
<!-- /.main-container -->
<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='./js/jquery.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{ asset('/js/jquery1x.js') }}'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='./js/jquery.mobile.custom.js'>" + "<" + "/script>");
</script>
<script src="./js/bootstrap.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="./js/ace/elements.scroller.js"></script>
<script src="./js/ace/elements.colorpicker.js"></script>
<script src="./js/ace/elements.fileinput.js"></script>
<script src="./js/ace/elements.typeahead.js"></script>
<script src="./js/ace/elements.wysiwyg.js"></script>
<script src="./js/ace/elements.spinner.js"></script>
<script src="./js/ace/elements.treeview.js"></script>
<script src="./js/ace/elements.wizard.js"></script>
<script src="./js/ace/elements.aside.js"></script>
<script src="./js/ace/ace.js"></script>
<script src="./js/ace/ace.ajax-content.js"></script>
<script src="./js/ace/ace.touch-drag.js"></script>
<script src="./js/ace/ace.sidebar.js"></script>
<script src="./js/ace/ace.sidebar-scroll-1.js"></script>
<script src="./js/ace/ace.submenu-hover.js"></script>
<script src="./js/ace/ace.widget-box.js"></script>
<script src="./js/ace/ace.settings.js"></script>
<script src="./js/ace/ace.settings-rtl.js"></script>
<script src="./js/ace/ace.settings-skin.js"></script>
<script src="./js/ace/ace.widget-on-reload.js"></script>
<script src="./js/ace/ace.searchbox-autocomplete.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function ($) {
        $('#sidebar2').insertBefore('.page-content').ace_sidebar('collapse', false);
        $('#navbar').addClass('h-navbar');
        $('.footer').insertAfter('.page-content');

        $('.page-content').addClass('main-content');

        $('.menu-toggler[data-target="#sidebar2"]').insertBefore('.navbar-brand');


        $(document).on('settings.ace.two_menu', function (e, event_name, event_val) {
            if (event_name == 'sidebar_fixed') {
                if ($('#sidebar').hasClass('sidebar-fixed')) $('#sidebar2').addClass('sidebar-fixed')
                else $('#sidebar2').removeClass('sidebar-fixed')
            }
        }).triggerHandler('settings.ace.two_menu', ['sidebar_fixed', $('#sidebar').hasClass('sidebar-fixed')]);

        $('#sidebar2[data-sidebar-hover=true]').ace_sidebar_hover('reset');
        $('#sidebar2[data-sidebar-scroll=true]').ace_sidebar_scroll('reset', true);
    })
</script>
</body>
</html>
