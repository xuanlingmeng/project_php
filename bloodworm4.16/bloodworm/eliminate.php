<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>血吸虫病防治系统</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js" type="text/javascript" ></script>
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

    <!-- ace settings handler -->
    <script src="./js/ace-extra.js"></script>

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
                        <a href="elinimate.php">
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
                    <!--<li>
                        <a href="PersonRegister.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            用户信息完善
                        </a>

                        <b class="arrow"></b>
                    </li>-->

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
                        <a href="#">查灭螺信息管理</a>
                    </li>
                    <li class="active">灭螺信息</li>
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
                    灭螺信息填写
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        必须于现场GPS认证后才可填写
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form class="form-horizontal"  name="eliminate" action="eliminatedeal.php" method="POST">
                        <!-- #section:elements.form -->

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="taskid"> 任务编号 </label>

                            <div class="col-sm-6">
                                <input class="col-sm-3" id="taskid" name="taskid" type="text" />
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" > 工程地点 </label>

                            <div class="col-sm-6">
                                <input class="col-sm-3" id="location" name="location" type="text" />
                              <!--  <label id="location" class="control-label no-padding-right">春江乡录安洲村</label>-->
                            </div>
                        </div>




                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 环境名称 </label>

                            <div class="col-sm-9">
                                <input class="col-sm-3" id="envirName" name="envirName" type="text" />
                                <!--  <label id="location" class="control-label no-padding-right">春江乡录安洲村</label>-->
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="snailarea"> 有螺面积 </label>

                            <div class="col-sm-6">
                                <input class="col-sm-3" id="area" name="area" type="text" />
                                <!--  <label id="location" class="control-label no-padding-right">春江乡录安洲村</label>-->
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right"> 任务起始日期 </label>

                            <div class="col-sm-5">
                                <input class="col-sm-4 date-picker" id="datepicker1" name="datepicker1" type="date" data-date-format="dd-mm-yyyy" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right"> 任务终止日期 </label>

                            <div class="col-sm-5">
                                <input class="col-sm-4 date-picker" id="datepicker2" name="datepicker2" type="date" data-date-format="dd-mm-yyyy" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right"> 任务完成次数 </label>

                            <div class="col-sm-4">
                                <input type="text" class="col-sm-3" name="times"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right">灭螺方法</label>

                            <div class="col-sm-5">
                                <select name="method" class="col-sm-4">
                                    <option value="1">药物灭螺</option>
                                    <option value="2">环改灭螺</option>
                                    <option value="3">药物及环改灭螺</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right"> 工程实际支出费用(万元) </label>

                            <div class="col-sm-5">
                                <input type="text" class="col-sm-4" id="money" name="money"/>
                                <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                            </div>
                        </div>

                        <div class="no-padding-right col-sm-6 col-lg-7 col-lg-offset-2">
                            <div class="widget-box">
                                <div class="widget-header">
                                    <h4 class="smaller">
                                        工程完成情况
                                    </h4>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">

                                        <h4 class="header smaller lighter purple">
                                            工程范围
                                        </h4>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="long">长(m)</label>

                                            <div class="col-sm-5">
                                                <input type="text" id="long" class="col-sm-4" name="long"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="bread">宽(m)</label>

                                            <div class="col-sm-5">
                                                <input type="text" id="bread" class="col-sm-4" name="bread"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="area">面积(m²)</label>

                                            <div class="col-sm-5">
                                                <input type="text" id="area" class="col-sm-5" name="area"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="areatu">土方(m²)</label>

                                            <div class="col-sm-5">
                                                <input type="text" id="areatu" class="col-sm-5" name="areatu"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="areashi">石方(m³)</label>

                                            <div class="col-sm-5">
                                                <input type="text" id="areashi" class="col-sm-5" name="areashi"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" >滩面是否有护坡</label>

                                            <div class="col-sm-4">
                                                <select name="wltype"><option value="1">是</option><option value="0">否</option></select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="hupo">护坡长度(m)</label>

                                            <div class="col-sm-5">
                                                <input type="text" id="hupo" class="col-sm-5" name="hupo"/>
                                            </div>
                                        </div>

                                        <h4 class="header smaller lighter purple">
                                            药物灭螺
                                        </h4>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right">药物灭螺方法</label>

                                            <div class="col-sm-9">
                                                <select name="medway" class="col-sm-5">
                                                    <option value="1">铲草皮沿边药浸法</option>
                                                    <option value="2">筑圩药浸法</option>
                                                    <option value="3">引潮药浸法</option>
                                                    <option value="4">稻田浸杀法</option>
                                                    <option value="5">沟渠浸杀法</option>
                                                    <option value="6">缓释剂浸杀法</option>
                                                    <option value="7">喷洒法</option>
                                                    <option value="8">喷（撒）粉法</option>
                                                    <option value="9">其他</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right">药物名称</label>

                                            <div class="col-sm-9">
                                                <select name="medname" class="col-sm-6">
                                                    <option value="1">50%氯硝柳胺乙醇胺盐可湿性粉剂</option>
                                                    <option value="2">4%氯硝柳胺乙醇胺盐粉剂</option>
                                                    <option value="3">25%氯硝柳胺悬浮剂</option>
                                                    <option value="4">其它国家批准的杀螺药物</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right">使用剂量</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="col-sm-5" name="dose"/>
                                            </div>
                                        </div>

                                        <h4 class="header smaller lighter purple">
                                            环改灭螺
                                        </h4>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right" for="hg"> 环改灭螺方法 </label>

                                            <div class="col-sm-9">
                                                <!-- page trigger modal -->
                                                <input type="text" id="hg" name="hg" class="col-sm-10" data-toggle="modal" data-target="#myModal" />



                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="widget-box widget-color-blue2">
                                                                            <div class="widget-header">
                                                                                <h4 class="widget-title lighter smaller">江苏省重点灭螺工程灭螺方法及灭螺药物(环改)</h4>
                                                                            </div>

                                                                            <div class="widget-body">
                                                                                <div class="widget-main padding-8">
                                                                                    <ul id="tree1"></ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- /section:plugins/fuelux.treeview -->
                                                                <script type="text/javascript">
                                                                    var $assets = "../assets";//this will be used in fuelux.tree-sampledata.js
                                                                </script>

                                                            </div>
                                                           <<div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">确定</button>
                                                                <button type="reset" class="btn btn-default" data-dismiss="modal" >关闭</button>

                                                                <script type="text/javascript">
                                                                    $("#save").click(function(){
                                                                        //$("#form-field-9").val($("#tree1").find(".tree-selected .tree-label").php());
                                                                        var item=[];
                                                                        $.each($("#tree1").find(".tree-selected .tree-label"),function(){
                                                                            item.push(this.innerphp);
                                                                        });
                                                                        $("#hg").val(item.join('、'));
                                                                    });

                                                                </script>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- inline scripts related to this page -->
                                                <script src="./js/fuelux/fuelux.tree.js"></script>
                                                <script type="text/javascript">
                                                    jQuery(function($){
                                                        var sampleData = initiateDemoData();//see below


                                                        $('#tree1').ace_tree({
                                                            dataSource: sampleData['dataSource1'],
                                                            multiSelect: true,
                                                            cacheItems: true,
                                                            'open-icon' : 'ace-icon tree-minus',
                                                            'close-icon' : 'ace-icon tree-plus',
                                                            'selectable' : true,
                                                            'selected-icon' : 'ace-icon fa fa-check',
                                                            'unselected-icon' : 'ace-icon fa fa-times',
                                                            loadingphp : '<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>'
                                                        });



                                                        function initiateDemoData(){
                                                            var tree_data = {
                                                                'kenzhong' : {text: '垦种灭螺', type: 'folder'},
                                                                'yangzhi' : {text: '养殖水淹灭螺', type: 'folder'},
                                                                'tumai' : {text: '土埋灭螺', type: 'folder'},
                                                                'shuini' : {text: '水泥硬化', type: 'folder'},
                                                                'fangluo' : {text: '防螺工程', type: 'folder'},
                                                                'shuigai' : {text: '水改旱灭螺', type: 'item'},
                                                                'mingqu' : {text: '明渠改暗渠', type: 'item'},
                                                                'suliao' : {text: '塑料膜覆盖（或包裹）灭螺', type: 'item'},
                                                                'liuyu' : {text: '小流域综合治理灭螺', type: 'item'}
                                                            };
                                                            tree_data['kenzhong']['additionalParameters'] = {
                                                                'children' : {
                                                                    'classics' : {text: '矮围垦种', type: 'item'},
                                                                    'convertibles' : {text: '不围垦种', type: 'item'},
                                                                    'coupes' : {text: '堵湖汊垦种', type: 'item'},
                                                                    'hatchbacks' : {text: '高围垦种', type: 'item'},
                                                                    'hybrids' : {text: '修“台田”种植', type: 'item'}
                                                                }
                                                            };
                                                            tree_data['yangzhi']['additionalParameters'] = {
                                                                'children' : {
                                                                    'classics' : {text: '堵湖汊蓄水养殖', type: 'item'},
                                                                    'convertibles' : {text: '修建山塘、水库', type: 'item'},
                                                                    'coupes' : {text: '开挖鱼池', type: 'item'},
                                                                    'hatchbacks' : {text: '高围蓄水养殖', type: 'item'},
                                                                    'hybrids' : {text: '矮围高网养殖', type: 'item'},
                                                                    'daotian' : {text: '稻田养殖', type: 'item'}
                                                                }
                                                            };
                                                            tree_data['tumai']['additionalParameters'] = {
                                                                'children' : {
                                                                    'classics' : {text: '开新填旧', type: 'item'},
                                                                    'convertibles' : {text: '移沟土埋', type: 'item'},
                                                                    'coupes' : {text: '挑土填埋', type: 'item'},
                                                                    'hatchbacks' : {text: '开沟平壑', type: 'item'},
                                                                    'hybrids' : {text: '抽槽土埋', type: 'item'},
                                                                    'daotian' : {text: '卷滩土埋', type: 'item'},
                                                                    'shamai' : {text: '沙埋', type: 'item'},
                                                                    'xiyu' : {text: '吸淤填埋', type: 'item'},
                                                                    'shujun' : {text: '疏浚填埋', type: 'item'},
                                                                    'kaigou' : {text: '开沟引洪导淤填埋', type: 'item'},
                                                                    'feizha' : {text: '废渣填埋', type: 'item'},
                                                                    'peitian' : {text: '培田埂', type: 'item'},
                                                                    'jiaozi' : {text: '“包饺子”土埋', type: 'item'},
                                                                    'jiamo' : {text: '加膜（塑料膜）土埋', type: 'item'}
                                                                }
                                                            };
                                                            tree_data['shuini']['additionalParameters'] = {
                                                                'children' : {
                                                                    'classics' : {text: '渠道水泥硬化（包括水泥板勾缝等）', type: 'item'},
                                                                    'convertibles' : {text: '河岸块石护坡（水泥勾缝）', type: 'item'},
                                                                    'coupes' : {text: '河岸砼护坡', type: 'item'}
                                                                }
                                                            };
                                                            tree_data['fangluo']['additionalParameters'] = {
                                                                'children' : {
                                                                    'classics' : {text: '中层取水', type: 'item'},
                                                                    'convertibles' : {text: '沉螺池', type: 'item'},
                                                                    'coupes' : {text: '滚水坝', type: 'item'},
                                                                    'lanwang' : {text: '拦网', type: 'item'}
                                                                }
                                                            };


                                                            var dataSource1 = function(options, callback){
                                                                var $data = null;
                                                                if(!("text" in options) && !("type" in options)){
                                                                    $data = tree_data;//the root tree
                                                                    callback({ data: $data });
                                                                    return;
                                                                }
                                                                else if("type" in options && options.type == "folder") {
                                                                    if("additionalParameters" in options && "children" in options.additionalParameters)
                                                                        $data = options.additionalParameters.children;
                                                                    else $data = {};//no data
                                                                }

                                                                if($data != null)//this setTimeout is only for mimicking some random delay
                                                                    setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);

                                                                //we have used static data here
                                                                //but you can retrieve your data dynamically from a server using ajax call
                                                                //checkout examples/treeview.html and examples/treeview.js for more info
                                                            };


                                                            var dataSource2 = function(options, callback){
                                                                var $data = null;
                                                                if(!("text" in options) && !("type" in options)){
                                                                    $data = tree_data_2;//the root tree
                                                                    callback({ data: $data });
                                                                    return;
                                                                }
                                                                else if("type" in options && options.type == "folder") {
                                                                    if("additionalParameters" in options && "children" in options.additionalParameters)
                                                                        $data = options.additionalParameters.children;
                                                                    else $data = {};//no data
                                                                }

                                                                if($data != null)//this setTimeout is only for mimicking some random delay
                                                                    setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);

                                                                //we have used static data here
                                                                //but you can retrieve your data dynamically from a server using ajax call
                                                                //checkout examples/treeview.html and examples/treeview.js for more info
                                                            };


                                                            return {'dataSource1': dataSource1 , 'dataSource2' : dataSource2}
                                                        }

                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <h4 class="header smaller lighter purple">
                                            硬化情况
                                        </h4>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right">长度(m)</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="col-sm-5" name="hlength"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right">面积(m²)</label>

                                            <div class="col-sm-5">
                                                <input type="text" class="col-sm-5" name="harea"/>
                                            </div>
                                        </div>

                                        <h4 class="header smaller lighter purple">
                                            其它
                                        </h4>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right">投入人工</label>

                                            <div class="col-sm-9">
                                                <input type="text" class="col-sm-8" name="Manpower"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label no-padding-right">其它改善项目</label>

                                            <div class="col-sm-9">
                                                <textarea  cols="60" rows="3" name="others"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">

                        </div>

                        <div class="">
                            <div class="col-md-offset-4 col-md-12">
                                <button class="btn btn-info" id="ok" type="submit">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                   <!-- <a href="eliminatedeal.php">-->
                                        <span class="bigger-110 white">确认</span></a>
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                    重置
                                </button>
                            </div>

                            <script type="text/javascript">
                                $("#ok").click(function(){
                                    if (document.getElementById("money").value.trim()=="")
                                    {
                                        alert("请填写工程实际支出费用！");
                                        document.getElementById("money").value="";
                                        document.getElementById("money").focus();
                                        return false;}
                                    else {
                                        return true;
                                    }
                                });
                            </script>

                        </div>



                    </form>
                </div>
                <!-- /.page-content -->
            </div>
        </div>
        <!-- /.main-content inner-->
    </div>
    <!-- /.main-content-->
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
<!-- /.main-container -->
<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='./js/jquery.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='./js/jquery1x.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='./js/jquery.mobile.custom.js'>" + "<" + "/script>");
</script>


<!-- page specific plugin scripts -->

<!-- ace scripts-->

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


</body>
</html>
