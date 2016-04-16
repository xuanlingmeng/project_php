<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>血吸虫病防治系统</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/font-awesome.css"/>

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="./css/jquery-ui.custom.css" />
    <link rel="stylesheet" href="./css/jquery.gritter.css" />
    <link rel="stylesheet" href="./css/chosen.css" />
    <link rel="stylesheet" href="./css/select2.css" />
    <link rel="stylesheet" href="./css/datepicker.css" />
    <link rel="stylesheet" href="./css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="./css/daterangepicker.css" />
    <link rel="stylesheet" href="./css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" href="./css/colorpicker.css" />
    <link rel="stylesheet" href="./css/bootstrap-editable.css" />

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

    <!-- ace settings handler -->
    <script src="./js/ace-extra.js"></script>

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
                                                            <img src="./avatars/avatar.png"
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
                                                            <img src="./avatars/avatar3.png"
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
        <div id="sidebar" class="sidebar  responsive">
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
                            <a href="donetask.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                已完成任务
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
                            <a href="historymsg.php">
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
                            <a href="eliminate.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                灭螺信息
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
                            <a href="is_lab.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                基本数据录入
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="rate.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                综合风险指数查看
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>

                </li>


                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-tag"></i>
                        <span class="menu-text">人员管理 </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="PersonRegister.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                用户信息完善
                            </a>

                            <b class="arrow"></b>

                        </li>

                        <li>
                            <a href="persontable.php">
                                <i class="menu-icon fa fa-caret-right"></i>
                                人员列表

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
                                    </a>
                                    <b class="arrow"></b>

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
                            <a href="#">人员管理</a>
                        </li>
                        <li>
                            <a href="#">新建用户</a>
                        </li>
                        <li class="active">用户信息完善</li>
                    </ul><!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <i class="widget-toolbar no-border invoice-info">
                            <span class="invoice-info-label">Date:</span>
                            <time class="invoice-info-label blue">09/12/2015</time>
                        </i>
                    </div>

                </div>

                <!-- /section:settings.box -->

                <div class="page-header">
                    <h1>
                        用户信息完善
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            管理
                        </small>
                    </h1>
                </div><!-- /.page-header -->


                <div class="">
                    <div id="user-profile-3" class="user-profile row">
                        <div class="col-sm-offset-1 col-sm-10">
                            <div class="well well-sm">

                                <div class="inline middle blue bigger-110">您的个人资料已完成：70% </div>

                                &nbsp; &nbsp; &nbsp;
                                <div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width:70%"></div>
                                </div>
                            </div><!-- /.well -->

                            <div class="space"></div>

                            <form class="form-horizontal">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs padding-16 col-sm-offset-1">
                                        <li class="active">
                                            <a data-toggle="tab" href="#basic">
                                                <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                                                基本信息
                                            </a>
                                        </li>

                                        <li class="">
                                            <a data-toggle="tab" href="#Privilege">
                                                <i class="purple ace-icon fa fa-cog bigger-125"></i>
                                                权限设置
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="basic" class="tab-pane fade active in">
                                            <h4 class="header blue bolder smaller">基本信息</h4>

                                            <!--<div class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="form-field-username">用户名</label>

                                                        <div class="col-sm-8">
                                                            <input class="col-xs-9 col-sm-6" type="text" id="form-field-username" placeholder="Username"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*必填！</div>
                                                        </div>

                                                    </div>

                                                    <div class="space-4"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label no-padding-right" for="form-field-first">真实姓名</label>

                                                        <div class="col-sm-6">
                                                            <input class="col-sm-5" type="text" id="form-field-first" placeholder="Name"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*必填！</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field">籍贯</label>

                                                        <div class="col-sm-6">
                                                            <input class="col-sm-5" type="text" id="form-field"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*必填！</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field">用户名</label>

                                                <div class="col-sm-6">
                                                    <input class="col-sm-5" type="text" id="form-field-username"/>
                                                    <div class="help-block col-xs-12 col-sm-reset inline red">*必填！</div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field">真实姓名</label>

                                                <div class="col-sm-6">
                                                    <input class="col-sm-5" type="text" id="form-field-first"/>
                                                    <div class="help-block col-xs-12 col-sm-reset inline red">*必填！</div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field">籍贯</label>

                                                <div class="col-sm-6">
                                                    <input class="col-sm-5" type="text" id="form-field"/>
                                                    <div class="help-block col-xs-12 col-sm-reset inline red">*必填！</div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right">性别</label>

                                                <div class="col-sm-9">
                                                    <label class="inline">
                                                        <input name="form-field-radio" type="radio" class="ace" />
                                                        <span class="lbl middle"> 男</span>
                                                    </label>

                                                    &nbsp; &nbsp; &nbsp;
                                                    <label class="inline">
                                                        <input name="form-field-radio" type="radio" class="ace" />
                                                        <span class="lbl middle"> 女</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="space-4"></div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-date">出生年月日</label>

                                                <div class="col-sm-9">
                                                    <div class="input-medium">
                                                        <div class="input-group">
                                                            <input class="input-medium col-sm-3 date-picker" id="form-field-date" type="date" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
																			<span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="space-4"></div>



                                            <div class="form-group"></div>
                                            <h4 class="header blue bolder smaller">联系方式</h4>

                                            <form class="form-horizontal" id="sample-form">

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">手机</label>

                                                    <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-mask-phone" type="text" id="form-field-phone" />
																		<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
																	</span>
                                                        <div class="help-block col-xs-12 col-sm-reset inline red">*必填！</div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-fax">传真</label>

                                                    <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-mask-phone" type="text" id="form-fax" />
																		<i class="ace-icon fa fa-fax fa-flip-horizontal"></i>
																	</span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-email">电子邮箱</label>


                                                    <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="form-field-email" class="width-100" />
																		<i class="ace-icon fa fa-envelope"></i>
																	</span>
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-address">联系地址</label>


                                                    <div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="form-field-address" class="width-100" />
																		<i class="ace-icon fa fa-home"></i>
																	</span>
                                                    </div>
                                                </div>
                                            </form>


                                            <div class="space"></div>
                                            <h4 class="header blue bolder smaller">职位信息</h4>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="form-department">所属部门</label>

                                                <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-mask-phone" type="text" id="form-department" />
																		<i class="ace-icon fa fa-group fa-flip-horizontal"></i>
																	</span>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="form-business">职位</label>

                                                <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-mask-phone" type="text" id="form-business" />
																		<i class="ace-icon fa fa-tasks fa-flip-horizontal"></i>
																	</span>
                                                </div>
                                            </div>

                                        </div>



                                        <div id="Privilege" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    <form class="form-horizontal" role="form">
                                                        <!-- #section:elements.form -->

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-field-first">当前权限等级：</label>

                                                            <div class="col-sm-6">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-first">等级一</label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label no-padding-right" for="form-field-first">权限名称：</label>

                                                            <div class="col-sm-6">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-first">终极管理员</label>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <div class="clearfix form-actions">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-info" type="button">
                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                            保存
                                        </button>

                                        &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                            重置
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.span -->
                    </div><!-- /.user-profile -->
                </div>
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
<!-- /.main-content -->

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
