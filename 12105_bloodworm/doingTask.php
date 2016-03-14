<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>血吸虫病防治系统</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/font-awesome.css"/>

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="./css/jquery-ui.custom.css" />
    <link rel="stylesheet" href="./css/chosen.css" />
    <link rel="stylesheet" href="./css/datepicker.css" />
    <link rel="stylesheet" href="./css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="./css/daterangepicker.css" />
    <link rel="stylesheet" href="./css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" href="./css/colorpicker.css" />

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

    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true%22%3E%3C/script"></script>
</head>

<div class="no-skin">
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
                                <a href="#">
                                    <i class="ace-icon fa fa-user"></i>
                                    个人中心
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="LoginTest.php">
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

    <!-- /section:basics/navbar.layout -->
    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try{ace.settings.check('main-container' , 'fixed')}catch(e){}
        </script>

        <!-- #section:basics/sidebar -->
        <div id="sidebar" class="sidebar                  responsive">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="ace-icon fa fa-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="ace-icon fa fa-pencil"></i>
                    </button>

                    <!-- #section:basics/sidebar.layout.shortcuts -->
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
            </div><!-- /.sidebar-shortcuts -->

            <ul class="nav nav-list">
                <li class="">
                    <a href="homeTest.php">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> 螺情监控 </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								任务管理
							</span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="nowtask.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                正在进行任务
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                已完成任务
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                待审核任务
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="newtask.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                新建任务
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-list"></i>
                        <span class="menu-text"> 查灭螺信息管理 </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="doingTask.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                查螺历史录入信息
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="nowsnail.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                现场查螺信息
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                灭螺信息
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-pencil-square-o"></i>
                        <span class="menu-text"> 人员管理 </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-caret-right"></i>
                                新建用户
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li>
                                    <a href="PersonRegister.php">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        用户信息完善
                                    </a>
                                    <b class="arrow"></b>
                                </li>
                            </ul>

                        </li>
                    </ul>

                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-list-alt"></i>
                        <span class="menu-text"> 区域管理 </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                多边形围栏
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                中心点围栏
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>



                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text">
								指标体系

								<!-- #section:basics/sidebar.layout.badge -->
								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>

								<!-- /section:basics/sidebar.layout.badge -->
							</span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                钉螺指标
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                感染因素
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-caret-right"></i>
                                影响因素
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>

                </li>


                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-tag"></i>
                        <span class="menu-text">人员列表 </span>

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

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								疫区列表

								<!-- #section:basics/sidebar.layout.badge -->
								<span class="badge badge-primary">5</span>

								<!-- /section:basics/sidebar.layout.badge -->
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
            </ul><!-- /.nav-list --><!-- #section:basics/sidebar.layout.minimize -->
            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>

            <!-- /section:basics/sidebar.layout.minimize -->
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>

        <!-- /section:basics/sidebar -->
        <div class="main-content">
            <div class="main-content-inner">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="homeTest.php">主页</a>
                        </li>

                        <li>
                            <a href="#">查灭螺信息管理</a>
                        </li>
                        <li class="active">历史录入信息</li>
                    </ul><!-- /.breadcrumb -->

                    <!-- #section:basics/content.searchbox -->
                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                        </form>
                    </div><!-- /.nav-search -->

                    <!-- /section:basics/content.searchbox -->
                </div>

                <!-- /section:settings.box -->

                <div class="page-header">
                    <h1>
                        历史录入信息
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            查螺前录入
                        </small>

                        <i class="widget-toolbar no-border invoice-info">
                            <span class="invoice-info-label">Date:</span>
                            <time class="invoice-info-label blue">09/12/2015</time>
                        </i>
                    </h1>
                </div><!-- /.page-header -->

                <div class="">
                    <div id="user-profile-3" class="user-profile row">
                        <div class="col-sm-offset-1 col-sm-10">

                            <form class="form-horizontal">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs padding-16 col-sm-offset-1" id="mytab">
                                        <li class="active"><a data-toggle="tab" href="#beachsit">滩情</a></li>
                                        <li class=""><a data-toggle="tab" href="#change">滩情变化</a></li>
                                        <li class=""><a data-toggle="tab" href="#his">历史螺情</a></li>
                                        <li class=""><a data-toggle="tab" href="#meid">相关疫情</a></li>
                                        <li class=""><a data-toggle="tab" href="#death">暨往灭螺</a></li>
                                    </ul>

                                    <div class="tab-content" id="mytabcontent">
                                        <div id="beachsit" class="tab-pane fade active in">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    <form class="form-horizontal" role="form">
                                                        <!-- #section:elements.form -->

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-bs-1"> 滩块类型 </label>

                                                            <div class="col-sm-2">
                                                                <input type="text" id="form-bs-1" placeholder="Type" class="col-sm-3" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-bs-2"> 滩面高程(m) </label>

                                                            <div class="col-sm-2">
                                                                <input type="text" id="form-bs-2" placeholder="Height" class="col-sm-5"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-bs-3"> 植被种类 </label>

                                                            <div class="col-sm-2">
                                                                <input type="text" id="form-bs-3" placeholder="PlantType" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-bs-4"> 历史最高水位(m) </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-bs-4" placeholder="PlantType" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-bs-5"> 滩面上水时间(月份) </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-bs-5" placeholder="SurfaceWaterStart" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-bs-6"> 滩面退水时间(月份) </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-bs-6" placeholder="SurfaceWaterEnd" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-bs-7"> 水淹时间(天数) </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-bs-7" placeholder="FloodingTime" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label no-padding-right" >滩地面积 </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ba-1"> 计 </label>

                                                            <div class="col-sm-2">
                                                                <input type="text" id="form-ba-1" placeholder="Count" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ba-2"> 垦种 </label>

                                                            <div class="col-sm-2">
                                                                <input type="text" id="form-ba-2" placeholder="CultivatedSpecies" class="col-sm-7"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ba-3"> 养殖 </label>

                                                            <div class="col-sm-2">
                                                                <input type="text" id="form-ba-3" placeholder="Cultivation" class="col-sm-7"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ba-4"> 植树 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-ba-4" placeholder="Planting" class="col-sm-5"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ba-5"> 草滩 </label>

                                                            <div class="col-sm-2">
                                                                <input type="text" id="form-ba-5" placeholder="Marsh" class="col-sm-7"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ba-6"> 芦滩 </label>

                                                            <div class="col-sm-2">
                                                                <input type="text" id="form-ba-6" placeholder="LuBeach" class="col-sm-7" />
                                                            </div>
                                                        </div>


                                                        <div class="clearfix form-actions">
                                                            <div class="col-md-offset-4 col-md-10">
                                                                <button class="btn btn-info" type="button">
                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    确认
                                                                </button>
                                                                &nbsp; &nbsp; &nbsp;
                                                                <button class="btn" type="reset">
                                                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                    重置
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>




                                        <div id="change" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    <form class="form-horizontal" role="form">
                                                        <!-- #section:elements.form -->
                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label no-padding-right" > 吸淤填埋 </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right"> 年份 </label>

                                                            <div class="col-sm-5">
                                                                <select name="Year">
                                                                    <option value="no">/</option>
                                                                    <option value="1">2000</option>
                                                                    <option value="2">2001</option>
                                                                    <option value="3">2002</option>
                                                                    <option value="4">2003</option>
                                                                    <option value="5">2004</option>
                                                                    <option value="6">2005</option>
                                                                    <option value="7">2006</option>
                                                                    <option value="8">2007</option>
                                                                    <option value="9">2008</option>
                                                                    <option value="10">2009</option>
                                                                    <option value="11">2010</option>
                                                                    <option value="12">2011</option>
                                                                    <option value="13">2012</option>
                                                                    <option value="14">2013</option>
                                                                    <option value="15">2014</option>
                                                                    <option value="16">2015</option>
                                                                </select>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ch-2"> 面积 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-ch-2" placeholder="Area" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ch-3"> 深度 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-ch-3" placeholder="Depth" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label no-padding-right" > 建厂占地 </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 年份 </label>

                                                            <div class="col-sm-5">
                                                                <select name="Year">
                                                                    <option value="no">/</option>
                                                                    <option value="1">2000</option>
                                                                    <option value="2">2001</option>
                                                                    <option value="3">2002</option>
                                                                    <option value="4">2003</option>
                                                                    <option value="5">2004</option>
                                                                    <option value="6">2005</option>
                                                                    <option value="7">2006</option>
                                                                    <option value="8">2007</option>
                                                                    <option value="9">2008</option>
                                                                    <option value="10">2009</option>
                                                                    <option value="11">2010</option>
                                                                    <option value="12">2011</option>
                                                                    <option value="13">2012</option>
                                                                    <option value="14">2013</option>
                                                                    <option value="15">2014</option>
                                                                    <option value="16">2015</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ch-5"> 面积 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-ch-5" placeholder="Area" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label no-padding-right" > 港口/码头占地 </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 年份 </label>

                                                            <div class="col-sm-5">
                                                                <select name="Year">
                                                                    <option value="no">/</option>
                                                                    <option value="1">2000</option>
                                                                    <option value="2">2001</option>
                                                                    <option value="3">2002</option>
                                                                    <option value="4">2003</option>
                                                                    <option value="5">2004</option>
                                                                    <option value="6">2005</option>
                                                                    <option value="7">2006</option>
                                                                    <option value="8">2007</option>
                                                                    <option value="9">2008</option>
                                                                    <option value="10">2009</option>
                                                                    <option value="11">2010</option>
                                                                    <option value="12">2011</option>
                                                                    <option value="13">2012</option>
                                                                    <option value="14">2013</option>
                                                                    <option value="15">2014</option>
                                                                    <option value="16">2015</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ch-7"> 面积 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-ch-7" placeholder="Area" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label no-padding-right" > 其他项目占地 </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ch-8"> 名称 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-ch-8" placeholder="Name" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 年份 </label>

                                                            <div class="col-sm-5">
                                                                <select name="Year">
                                                                    <option value="no">/</option>
                                                                    <option value="1">2000</option>
                                                                    <option value="2">2001</option>
                                                                    <option value="3">2002</option>
                                                                    <option value="4">2003</option>
                                                                    <option value="5">2004</option>
                                                                    <option value="6">2005</option>
                                                                    <option value="7">2006</option>
                                                                    <option value="8">2007</option>
                                                                    <option value="9">2008</option>
                                                                    <option value="10">2009</option>
                                                                    <option value="11">2010</option>
                                                                    <option value="12">2011</option>
                                                                    <option value="13">2012</option>
                                                                    <option value="14">2013</option>
                                                                    <option value="15">2014</option>
                                                                    <option value="16">2015</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ch-10"> 面积 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-ch-10" placeholder="Area" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="clearfix form-actions">
                                                            <div class="col-md-offset-4 col-md-10">
                                                                <button class="btn btn-info" type="button">
                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    确认
                                                                </button>
                                                                &nbsp; &nbsp; &nbsp;
                                                                <button class="btn" type="reset">
                                                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                    重置
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <div id="his" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    <form class="form-horizontal" role="form">
                                                        <!-- #section:elements.form -->
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 首次有螺年份 </label>

                                                            <div class="col-sm-5">
                                                                <select name="Year">
                                                                    <option value="no">/</option>
                                                                    <option value="1">1953</option>
                                                                    <option value="2">1954</option>
                                                                    <option value="3">1955</option>
                                                                    <option value="4">1956</option>
                                                                    <option value="5">1957</option>
                                                                    <option value="6">1958</option>
                                                                    <option value="7">1959</option>
                                                                    <option value="8">1960</option>
                                                                    <option value="9">1961</option>
                                                                    <option value="10">1962</option>
                                                                    <option value="11">1963</option>
                                                                    <option value="12">1964</option>
                                                                    <option value="13">1965</option>
                                                                    <option value="14">1966</option>
                                                                    <option value="15">1967</option>
                                                                    <option value="16">1968</option>
                                                                    <option value="17">1969</option>
                                                                    <option value="18">1970</option>
                                                                    <option value="19">1971</option>
                                                                    <option value="20">1972</option>
                                                                    <option value="21">1973</option>
                                                                    <option value="22">1974</option>
                                                                    <option value="23">1975</option>
                                                                    <option value="24">1976</option>
                                                                    <option value="25">1977</option>
                                                                    <option value="26">1978</option>
                                                                    <option value="27">1979</option>
                                                                    <option value="28">1980</option>
                                                                    <option value="29">1981</option>
                                                                    <option value="30">1982</option>
                                                                    <option value="31">1983</option>
                                                                    <option value="32">1984</option>
                                                                    <option value="33">1985</option>
                                                                    <option value="34">1986</option>
                                                                    <option value="35">1987</option>
                                                                    <option value="36">1988</option>
                                                                    <option value="37">1989</option>
                                                                    <option value="38">1990</option>
                                                                    <option value="39">1991</option>
                                                                    <option value="40">1992</option>
                                                                    <option value="41">1993</option>
                                                                    <option value="42">1994</option>
                                                                    <option value="43">1995</option>
                                                                    <option value="44">1996</option>
                                                                    <option value="45">1997</option>
                                                                    <option value="46">1998</option>
                                                                    <option value="47">1999</option>
                                                                    <option value="48">2000</option>
                                                                    <option value="49">2001</option>
                                                                    <option value="50">2002</option>
                                                                    <option value="51">2003</option>
                                                                    <option value="52">2004</option>
                                                                    <option value="53">2005</option>
                                                                    <option value="54">2006</option>
                                                                    <option value="55">2007</option>
                                                                    <option value="56">2008</option>
                                                                    <option value="57">2009</option>
                                                                    <option value="58">2010</option>
                                                                    <option value="59">2011</option>
                                                                    <option value="60">2012</option>
                                                                    <option value="61">2013</option>
                                                                    <option value="62">2014</option>
                                                                    <option value="63">2015</option>
                                                                    <option value="64">2000</option>
                                                                    <option value="65">2001</option>
                                                                    <option value="66">2002</option>
                                                                    <option value="67">2003</option>
                                                                    <option value="68">2004</option>
                                                                    <option value="69">2005</option>
                                                                    <option value="70">2006</option>
                                                                    <option value="71">2007</option>
                                                                    <option value="72">2008</option>
                                                                    <option value="73">2009</option>
                                                                    <option value="74">2010</option>
                                                                    <option value="75">2011</option>
                                                                    <option value="76">2012</option>
                                                                    <option value="77">2013</option>
                                                                    <option value="78">2014</option>
                                                                    <option value="79">2015</option>
                                                                    <option value="80">2016</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 末次有螺年份 </label>

                                                            <div class="col-sm-5">
                                                                <select name="Year">
                                                                    <option value="no">/</option>
                                                                    <option value="1">1953</option>
                                                                    <option value="2">1954</option>
                                                                    <option value="3">1955</option>
                                                                    <option value="4">1956</option>
                                                                    <option value="5">1957</option>
                                                                    <option value="6">1958</option>
                                                                    <option value="7">1959</option>
                                                                    <option value="8">1960</option>
                                                                    <option value="9">1961</option>
                                                                    <option value="10">1962</option>
                                                                    <option value="11">1963</option>
                                                                    <option value="12">1964</option>
                                                                    <option value="13">1965</option>
                                                                    <option value="14">1966</option>
                                                                    <option value="15">1967</option>
                                                                    <option value="16">1968</option>
                                                                    <option value="17">1969</option>
                                                                    <option value="18">1970</option>
                                                                    <option value="19">1971</option>
                                                                    <option value="20">1972</option>
                                                                    <option value="21">1973</option>
                                                                    <option value="22">1974</option>
                                                                    <option value="23">1975</option>
                                                                    <option value="24">1976</option>
                                                                    <option value="25">1977</option>
                                                                    <option value="26">1978</option>
                                                                    <option value="27">1979</option>
                                                                    <option value="28">1980</option>
                                                                    <option value="29">1981</option>
                                                                    <option value="30">1982</option>
                                                                    <option value="31">1983</option>
                                                                    <option value="32">1984</option>
                                                                    <option value="33">1985</option>
                                                                    <option value="34">1986</option>
                                                                    <option value="35">1987</option>
                                                                    <option value="36">1988</option>
                                                                    <option value="37">1989</option>
                                                                    <option value="38">1990</option>
                                                                    <option value="39">1991</option>
                                                                    <option value="40">1992</option>
                                                                    <option value="41">1993</option>
                                                                    <option value="42">1994</option>
                                                                    <option value="43">1995</option>
                                                                    <option value="44">1996</option>
                                                                    <option value="45">1997</option>
                                                                    <option value="46">1998</option>
                                                                    <option value="47">1999</option>
                                                                    <option value="48">2000</option>
                                                                    <option value="49">2001</option>
                                                                    <option value="50">2002</option>
                                                                    <option value="51">2003</option>
                                                                    <option value="52">2004</option>
                                                                    <option value="53">2005</option>
                                                                    <option value="54">2006</option>
                                                                    <option value="55">2007</option>
                                                                    <option value="56">2008</option>
                                                                    <option value="57">2009</option>
                                                                    <option value="58">2010</option>
                                                                    <option value="59">2011</option>
                                                                    <option value="60">2012</option>
                                                                    <option value="61">2013</option>
                                                                    <option value="62">2014</option>
                                                                    <option value="63">2015</option>
                                                                    <option value="64">2000</option>
                                                                    <option value="65">2001</option>
                                                                    <option value="66">2002</option>
                                                                    <option value="67">2003</option>
                                                                    <option value="68">2004</option>
                                                                    <option value="69">2005</option>
                                                                    <option value="70">2006</option>
                                                                    <option value="71">2007</option>
                                                                    <option value="72">2008</option>
                                                                    <option value="73">2009</option>
                                                                    <option value="74">2010</option>
                                                                    <option value="75">2011</option>
                                                                    <option value="76">2012</option>
                                                                    <option value="77">2013</option>
                                                                    <option value="78">2014</option>
                                                                    <option value="79">2015</option>
                                                                    <option value="80">2016</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 有螺年数 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text"  placeholder="HistoryYears" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 历史有螺面积 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text"  placeholder="HistoryArea" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 感染性钉螺面积 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text"  placeholder="SchistosomaArea" class="col-sm-5" />
                                                            </div>
                                                        </div>

                                                        <div class="clearfix form-actions">
                                                            <div class="col-md-offset-4 col-md-10">
                                                                <button class="btn btn-info" type="button">
                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    确认
                                                                </button>
                                                                &nbsp; &nbsp; &nbsp;
                                                                <button class="btn" type="reset">
                                                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                    重置
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="meid" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    <form class="form-horizontal" role="form">
                                                        <!-- #section:elements.form -->
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 有/无家畜放牧 </label>

                                                            <div class="col-sm-5">
                                                                <select name="sheep">
                                                                    <option value="yes">有</option>
                                                                    <option value="no">无</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 家畜放牧种类 </label>

                                                            <div class="col-sm-3">
                                                                <input type="text"  placeholder="Type" class="col-sm-3" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 有无渔船民活动 </label>

                                                            <div class="col-sm-5">
                                                                <select name="sheep">
                                                                    <option value="yes">有</option>
                                                                    <option value="no">无</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" >发生急感年份 </label>

                                                            <div class="col-sm-5">
                                                                <select name="Year">
                                                                    <option value="no">/</option>
                                                                    <option value="1">1953</option>
                                                                    <option value="2">1954</option>
                                                                    <option value="3">1955</option>
                                                                    <option value="4">1956</option>
                                                                    <option value="5">1957</option>
                                                                    <option value="6">1958</option>
                                                                    <option value="7">1959</option>
                                                                    <option value="8">1960</option>
                                                                    <option value="9">1961</option>
                                                                    <option value="10">1962</option>
                                                                    <option value="11">1963</option>
                                                                    <option value="12">1964</option>
                                                                    <option value="13">1965</option>
                                                                    <option value="14">1966</option>
                                                                    <option value="15">1967</option>
                                                                    <option value="16">1968</option>
                                                                    <option value="17">1969</option>
                                                                    <option value="18">1970</option>
                                                                    <option value="19">1971</option>
                                                                    <option value="20">1972</option>
                                                                    <option value="21">1973</option>
                                                                    <option value="22">1974</option>
                                                                    <option value="23">1975</option>
                                                                    <option value="24">1976</option>
                                                                    <option value="25">1977</option>
                                                                    <option value="26">1978</option>
                                                                    <option value="27">1979</option>
                                                                    <option value="28">1980</option>
                                                                    <option value="29">1981</option>
                                                                    <option value="30">1982</option>
                                                                    <option value="31">1983</option>
                                                                    <option value="32">1984</option>
                                                                    <option value="33">1985</option>
                                                                    <option value="34">1986</option>
                                                                    <option value="35">1987</option>
                                                                    <option value="36">1988</option>
                                                                    <option value="37">1989</option>
                                                                    <option value="38">1990</option>
                                                                    <option value="39">1991</option>
                                                                    <option value="40">1992</option>
                                                                    <option value="41">1993</option>
                                                                    <option value="42">1994</option>
                                                                    <option value="43">1995</option>
                                                                    <option value="44">1996</option>
                                                                    <option value="45">1997</option>
                                                                    <option value="46">1998</option>
                                                                    <option value="47">1999</option>
                                                                    <option value="48">2000</option>
                                                                    <option value="49">2001</option>
                                                                    <option value="50">2002</option>
                                                                    <option value="51">2003</option>
                                                                    <option value="52">2004</option>
                                                                    <option value="53">2005</option>
                                                                    <option value="54">2006</option>
                                                                    <option value="55">2007</option>
                                                                    <option value="56">2008</option>
                                                                    <option value="57">2009</option>
                                                                    <option value="58">2010</option>
                                                                    <option value="59">2011</option>
                                                                    <option value="60">2012</option>
                                                                    <option value="61">2013</option>
                                                                    <option value="62">2014</option>
                                                                    <option value="63">2015</option>
                                                                    <option value="64">2000</option>
                                                                    <option value="65">2001</option>
                                                                    <option value="66">2002</option>
                                                                    <option value="67">2003</option>
                                                                    <option value="68">2004</option>
                                                                    <option value="69">2005</option>
                                                                    <option value="70">2006</option>
                                                                    <option value="71">2007</option>
                                                                    <option value="72">2008</option>
                                                                    <option value="73">2009</option>
                                                                    <option value="74">2010</option>
                                                                    <option value="75">2011</option>
                                                                    <option value="76">2012</option>
                                                                    <option value="77">2013</option>
                                                                    <option value="78">2014</option>
                                                                    <option value="79">2015</option>
                                                                    <option value="80">2016</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" >发生急感人数 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text"  placeholder="Number" class="col-sm-4" />
                                                            </div>
                                                        </div>

                                                        <div class="clearfix form-actions">
                                                            <div class="col-md-offset-4 col-md-10">
                                                                <button class="btn btn-info" type="button">
                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    确认
                                                                </button>
                                                                &nbsp; &nbsp; &nbsp;
                                                                <button class="btn" type="reset">
                                                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                    重置
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="death" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    <form class="form-horizontal" role="form">
                                                        <!-- #section:elements.form -->
                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label no-padding-right" >药物灭螺 </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right"> 主要方法 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text"  placeholder="Method" class="col-sm-4" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" > 主要药物 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" placeholder="Medicine" class="col-sm-4" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right"> 灭螺面积 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text"  placeholder="EliminateArea" class="col-sm-4" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label no-padding-right" > 环改 </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right"> 年份 </label>

                                                            <div class="col-sm-5">
                                                                <select name="Year">
                                                                    <option value="no">/</option>
                                                                    <option value="1">1953</option>
                                                                    <option value="2">1954</option>
                                                                    <option value="3">1955</option>
                                                                    <option value="4">1956</option>
                                                                    <option value="5">1957</option>
                                                                    <option value="6">1958</option>
                                                                    <option value="7">1959</option>
                                                                    <option value="8">1960</option>
                                                                    <option value="9">1961</option>
                                                                    <option value="10">1962</option>
                                                                    <option value="11">1963</option>
                                                                    <option value="12">1964</option>
                                                                    <option value="13">1965</option>
                                                                    <option value="14">1966</option>
                                                                    <option value="15">1967</option>
                                                                    <option value="16">1968</option>
                                                                    <option value="17">1969</option>
                                                                    <option value="18">1970</option>
                                                                    <option value="19">1971</option>
                                                                    <option value="20">1972</option>
                                                                    <option value="21">1973</option>
                                                                    <option value="22">1974</option>
                                                                    <option value="23">1975</option>
                                                                    <option value="24">1976</option>
                                                                    <option value="25">1977</option>
                                                                    <option value="26">1978</option>
                                                                    <option value="27">1979</option>
                                                                    <option value="28">1980</option>
                                                                    <option value="29">1981</option>
                                                                    <option value="30">1982</option>
                                                                    <option value="31">1983</option>
                                                                    <option value="32">1984</option>
                                                                    <option value="33">1985</option>
                                                                    <option value="34">1986</option>
                                                                    <option value="35">1987</option>
                                                                    <option value="36">1988</option>
                                                                    <option value="37">1989</option>
                                                                    <option value="38">1990</option>
                                                                    <option value="39">1991</option>
                                                                    <option value="40">1992</option>
                                                                    <option value="41">1993</option>
                                                                    <option value="42">1994</option>
                                                                    <option value="43">1995</option>
                                                                    <option value="44">1996</option>
                                                                    <option value="45">1997</option>
                                                                    <option value="46">1998</option>
                                                                    <option value="47">1999</option>
                                                                    <option value="48">2000</option>
                                                                    <option value="49">2001</option>
                                                                    <option value="50">2002</option>
                                                                    <option value="51">2003</option>
                                                                    <option value="52">2004</option>
                                                                    <option value="53">2005</option>
                                                                    <option value="54">2006</option>
                                                                    <option value="55">2007</option>
                                                                    <option value="56">2008</option>
                                                                    <option value="57">2009</option>
                                                                    <option value="58">2010</option>
                                                                    <option value="59">2011</option>
                                                                    <option value="60">2012</option>
                                                                    <option value="61">2013</option>
                                                                    <option value="62">2014</option>
                                                                    <option value="63">2015</option>
                                                                    <option value="64">2000</option>
                                                                    <option value="65">2001</option>
                                                                    <option value="66">2002</option>
                                                                    <option value="67">2003</option>
                                                                    <option value="68">2004</option>
                                                                    <option value="69">2005</option>
                                                                    <option value="70">2006</option>
                                                                    <option value="71">2007</option>
                                                                    <option value="72">2008</option>
                                                                    <option value="73">2009</option>
                                                                    <option value="74">2010</option>
                                                                    <option value="75">2011</option>
                                                                    <option value="76">2012</option>
                                                                    <option value="77">2013</option>
                                                                    <option value="78">2014</option>
                                                                    <option value="79">2015</option>
                                                                    <option value="80">2016</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right"> 方法 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" placeholder="Method" class="col-sm-4"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right"> 面积 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" placeholder="Area" class="col-sm-4"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label no-padding-right" > 末次灭螺 </label>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right"> 年份 </label>

                                                            <div class="col-sm-5">
                                                                <select name="Year">
                                                                    <option value="no">/</option>
                                                                    <option value="1">1953</option>
                                                                    <option value="2">1954</option>
                                                                    <option value="3">1955</option>
                                                                    <option value="4">1956</option>
                                                                    <option value="5">1957</option>
                                                                    <option value="6">1958</option>
                                                                    <option value="7">1959</option>
                                                                    <option value="8">1960</option>
                                                                    <option value="9">1961</option>
                                                                    <option value="10">1962</option>
                                                                    <option value="11">1963</option>
                                                                    <option value="12">1964</option>
                                                                    <option value="13">1965</option>
                                                                    <option value="14">1966</option>
                                                                    <option value="15">1967</option>
                                                                    <option value="16">1968</option>
                                                                    <option value="17">1969</option>
                                                                    <option value="18">1970</option>
                                                                    <option value="19">1971</option>
                                                                    <option value="20">1972</option>
                                                                    <option value="21">1973</option>
                                                                    <option value="22">1974</option>
                                                                    <option value="23">1975</option>
                                                                    <option value="24">1976</option>
                                                                    <option value="25">1977</option>
                                                                    <option value="26">1978</option>
                                                                    <option value="27">1979</option>
                                                                    <option value="28">1980</option>
                                                                    <option value="29">1981</option>
                                                                    <option value="30">1982</option>
                                                                    <option value="31">1983</option>
                                                                    <option value="32">1984</option>
                                                                    <option value="33">1985</option>
                                                                    <option value="34">1986</option>
                                                                    <option value="35">1987</option>
                                                                    <option value="36">1988</option>
                                                                    <option value="37">1989</option>
                                                                    <option value="38">1990</option>
                                                                    <option value="39">1991</option>
                                                                    <option value="40">1992</option>
                                                                    <option value="41">1993</option>
                                                                    <option value="42">1994</option>
                                                                    <option value="43">1995</option>
                                                                    <option value="44">1996</option>
                                                                    <option value="45">1997</option>
                                                                    <option value="46">1998</option>
                                                                    <option value="47">1999</option>
                                                                    <option value="48">2000</option>
                                                                    <option value="49">2001</option>
                                                                    <option value="50">2002</option>
                                                                    <option value="51">2003</option>
                                                                    <option value="52">2004</option>
                                                                    <option value="53">2005</option>
                                                                    <option value="54">2006</option>
                                                                    <option value="55">2007</option>
                                                                    <option value="56">2008</option>
                                                                    <option value="57">2009</option>
                                                                    <option value="58">2010</option>
                                                                    <option value="59">2011</option>
                                                                    <option value="60">2012</option>
                                                                    <option value="61">2013</option>
                                                                    <option value="62">2014</option>
                                                                    <option value="63">2015</option>
                                                                    <option value="64">2000</option>
                                                                    <option value="65">2001</option>
                                                                    <option value="66">2002</option>
                                                                    <option value="67">2003</option>
                                                                    <option value="68">2004</option>
                                                                    <option value="69">2005</option>
                                                                    <option value="70">2006</option>
                                                                    <option value="71">2007</option>
                                                                    <option value="72">2008</option>
                                                                    <option value="73">2009</option>
                                                                    <option value="74">2010</option>
                                                                    <option value="75">2011</option>
                                                                    <option value="76">2012</option>
                                                                    <option value="77">2013</option>
                                                                    <option value="78">2014</option>
                                                                    <option value="79">2015</option>
                                                                    <option value="80">2016</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right"> 方法 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" placeholder="Method" class="col-sm-4"/>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-ch-7"> 面积 </label>

                                                            <div class="col-sm-5">
                                                                <input type="text" id="form-ch-7" placeholder="Area" class="col-sm-4" />
                                                            </div>
                                                        </div>


                                                        <div class="clearfix form-actions">
                                                            <div class="col-md-offset-4 col-md-10">
                                                                <button class="btn btn-info" type="button">
                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    确认
                                                                </button>

                                                                &nbsp; &nbsp; &nbsp;
                                                                <button class="btn" type="reset">
                                                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                    重置
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- tab-content结束-->

                                </div>

                                <div class="clearfix form-actions">
                                    <div class="col-md-offset-4 col-md-9">
                                        <button class="btn btn-info" type="button">
                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                            确认
                                        </button>

                                        &nbsp; &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                            重置
                                        </button>
                                    </div>
                                </div>

                            </form>
                            <!-- ul的form结束-->
                        </div>
                    </div>
                </div>
                <!-- tab的calss=""结束-->

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
