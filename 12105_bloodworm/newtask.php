<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
                        <a href="#">任务管理</a>
                    </li>
                    <li class="active">新建任务</li>
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
                    新建任务
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        任务
                    </small>

                    <i class="widget-toolbar no-border invoice-info">
                        <span class="invoice-info-label">Date:</span>
                        <time class="invoice-info-label blue">09/12/2015</time>
                    </i>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form class="form-horizontal" role="form">
                        <!-- #section:elements.form -->

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 任务编号 </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Task_Id" class="col-sm-2"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 环境名称 </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-2" placeholder="BeachName" class="col-sm-2"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> 环境编号 </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-3" placeholder="Beach_Id" class="col-sm-2"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right">是否需要查螺</label>

                            <div class="col-sm-9">
                                <label class="inline">
                                    <input name="form-field-radio" type="radio" class="ace" />
                                    <span class="lbl middle"> 需要</span>
                                </label>

                                &nbsp; &nbsp; &nbsp;
                                <label class="inline">
                                    <input name="form-field-radio" type="radio" class="ace" />
                                    <span class="lbl middle"> 不需要</span>
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" > 围栏类型 </label>

                            <div class="col-sm-9">
                                <select name="wltype"><option value="many">多边形围栏</option><option value="one">中心点围栏</option></select>
                                <div class="help-block col-xs-12 col-sm-reset inline red"><a href="WL.php">圈定围栏</a></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field"> 围栏信息 </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field" placeholder="(119.980569,31.816918),10" class="col-xs-10 col-sm-5" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-9"> 查螺负责人员 </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-9" placeholder="BeachName" cols="5" />
                                <div class="help-block col-xs-12 col-sm-reset inline red"><a href="#">选取</a></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" > 任务紧急程度 </label>

                            <div class="col-sm-9">
                                <select name="wltype"><option value="many">高紧急</option><option value="one">中紧急</option><option value="middle">低紧急</option></select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" > 任务建立时间 </label>

                            <div class="col-sm-9">
                                <input class="col-sm-3 date-picker" id="id-date-picker-1" type="date" data-date-format="dd-mm-yyyy" />
                            </div>
                        </div>

                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="button">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    <a href="doingTask.php">
                                        <span class="bigger-110 white">确认，录入历史信息</span></a>
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                    重置
                                </button>
                            </div>
                        </div>




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
</div>
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
