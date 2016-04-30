<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>血吸虫病防治系统</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- 模态框 -->
    <script src="./js/jquery.js"></script>
    <!--<script src="./js/bootstrap.min.js" type="text/javascript" ></script>-->
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
    <?php
    if($_SESSION["name"]==NULL)
        echo "<script>location.href='LoginTest.php';</script>";
    ?>
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
                                    <?php
                                    echo $_SESSION["name"];    //输出 登记的用户名为：nostop
                                    ?>
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
                                <a href="session.php">
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
                        <li>
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
                            <a href="#">查灭螺信息管理</a>
                        </li>
                        <li class="active">历史录入信息</li>
                    </ul><!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <i class="widget-toolbar no-border invoice-info">
                            <span class="invoice-info-label">日期:</span>
                            <label class="invoice-info-label blue" id="nowtime"></label>
                        </i>

                        <script type="text/javascript">
                            var now = new Date();
                            document.getElementById("nowtime").innerHTML = now.toLocaleDateString();
                        </script>

                    </div>
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
                    </h1>
                </div><!-- /.page-header -->

                <div class="">
                    <div id="user-profile-3" class="user-profile row">
                        <div class="col-sm-offset-1 col-sm-10">
                            <form class="form-horizontal" name="his" action="historymsg_sum.php"method="POST" >
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
                                                    <!-- #section:elements.form -->

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="envirID"> 环境编号 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" name="envirID" class="col-sm-5" id="envirID"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="envirName"> 环境名称 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="envirName" class="col-sm-5" name="envirName"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 环境类型 </label>

                                                        <div class="col-sm-5">
                                                            <select name="envirType" class="col-sm-4">
                                                                <option value="1">沟渠</option>
                                                                <option value="2">塘堰</option>
                                                                <option value="3">水田</option>
                                                                <option value="4">旱地</option>
                                                                <option value="5">滩地</option>
                                                                <option value="6">其它</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="addressBel"> 所属县、乡（镇、街道）、村 </label>

                                                        <div class="col-sm-7">
                                                            <input type="text" id="addressBel"  class="col-sm-10" name="addressBel"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 植被种类 </label>

                                                        <div class="col-sm-5">
                                                            <select name="planttype" class="col-sm-4">
                                                                <option value="1">杂草</option>
                                                                <option value="2">芦苇</option>
                                                                <option value="3">树林</option>
                                                                <option value="4">水稻</option>
                                                                <option value="5">旱地作物</option>
                                                                <option value="6">其它</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="beachHeight"> 滩面高程(m) </label>

                                                        <div class="col-sm-2">
                                                            <input type="text" id="beachHeight" class="col-sm-5" name="beachHeight"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="historyHeight"> 历史最高水位(m) </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="historyHeight" class="col-sm-5" name="historyHeight"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="upStreamMonth"> 滩面上水时间(月份) </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="upStreamMonth" class="col-sm-5" name="upStreamMonth"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="downStreamMonth"> 滩面退水时间(月份) </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="downStreamMonth" class="col-sm-5" name="downStreamMonth"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="waterDay"> 水淹时间(天数) </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="waterDay" class="col-sm-5" name="waterDay"/>
                                                            <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label no-padding-right" >滩地面积 </label>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="beachArea"> 计 </label>

                                                        <div class="col-sm-2">
                                                            <input type="text" id="beachArea" class="col-sm-5" name="beachArea"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="kenzhong"> 垦种 </label>

                                                        <div class="col-sm-2">
                                                            <input type="text" id="kenzhong" class="col-sm-7" name="kenzhong"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="yangzhi"> 养殖 </label>

                                                        <div class="col-sm-2">
                                                            <input type="text" id="yangzhi" class="col-sm-7" name="yangzhi"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="zhishu"> 植树 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="zhishu" class="col-sm-5" name="zhishu"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="caotan"> 草滩 </label>

                                                        <div class="col-sm-2">
                                                            <input type="text" id="caotan" class="col-sm-7" name="caotan"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="lutan"> 芦滩 </label>

                                                        <div class="col-sm-2">
                                                            <input type="text" id="lutan"  class="col-sm-7" name="lutan"/>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>




                                        <div id="change" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->

                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label no-padding-right" > 吸淤填埋 </label>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 年份 </label>

                                                        <div class="col-sm-5">
                                                            <select name="xiyuYear">
                                                                <option value="0">/</option>
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
                                                                <option value="81">2017</option>
                                                                <option value="82">2018</option>
                                                                <option value="83">2019</option>
                                                                <option value="84">2020</option>
                                                                <option value="85">2021</option>
                                                                <option value="86">2022</option>
                                                                <option value="87">2023</option>
                                                                <option value="88">2024</option>
                                                                <option value="89">2025</option>
                                                                <option value="90">2026</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="xiyuArea"> 面积 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="xiyuArea"  class="col-sm-5" name="xiyuArea"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="xiyuDepth"> 深度(m) </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="xiyuDepth" class="col-sm-5" name="xiyuDepth"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label no-padding-right" > 建厂占地 </label>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 年份 </label>

                                                        <div class="col-sm-5">
                                                            <select name="jianchangYear">
                                                                <option value="0">/</option>
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
                                                                <option value="81">2017</option>
                                                                <option value="82">2018</option>
                                                                <option value="83">2019</option>
                                                                <option value="84">2020</option>
                                                                <option value="85">2021</option>
                                                                <option value="86">2022</option>
                                                                <option value="87">2023</option>
                                                                <option value="88">2024</option>
                                                                <option value="89">2025</option>
                                                                <option value="90">2026</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="jianchangArea"> 面积 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="jianchangArea" class="col-sm-5" name="jianchangArea"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label no-padding-right" > 港口/码头占地 </label>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 年份 </label>

                                                        <div class="col-sm-5">
                                                            <select name="portYear">
                                                                <option value="0">/</option>
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
                                                                <option value="81">2017</option>
                                                                <option value="82">2018</option>
                                                                <option value="83">2019</option>
                                                                <option value="84">2020</option>
                                                                <option value="85">2021</option>
                                                                <option value="86">2022</option>
                                                                <option value="87">2023</option>
                                                                <option value="88">2024</option>
                                                                <option value="89">2025</option>
                                                                <option value="90">2026</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="portArea"> 面积 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="portArea"  class="col-sm-5" name="portArea"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label no-padding-right" > 其他项目占地 </label>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="otherName"> 名称 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="otherName"  class="col-sm-5" name="otherName"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 年份 </label>

                                                        <div class="col-sm-5">
                                                            <select name="otherYear">
                                                                <option value="0">/</option>
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
                                                                <option value="81">2017</option>
                                                                <option value="82">2018</option>
                                                                <option value="83">2019</option>
                                                                <option value="84">2020</option>
                                                                <option value="85">2021</option>
                                                                <option value="86">2022</option>
                                                                <option value="87">2023</option>
                                                                <option value="88">2024</option>
                                                                <option value="89">2025</option>
                                                                <option value="90">2026</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" for="otherArea"> 面积 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" id="otherArea"  class="col-sm-5" name="otherArea"/>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div id="his" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 首次有螺年份 </label>

                                                        <div class="col-sm-5">
                                                            <select name="firstluoYear">
                                                                <option value="0">/</option>
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
                                                                <option value="81">2017</option>
                                                                <option value="82">2018</option>
                                                                <option value="83">2019</option>
                                                                <option value="84">2020</option>
                                                                <option value="85">2021</option>
                                                                <option value="86">2022</option>
                                                                <option value="87">2023</option>
                                                                <option value="88">2024</option>
                                                                <option value="89">2025</option>
                                                                <option value="90">2026</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 末次有螺年份 </label>

                                                        <div class="col-sm-5">
                                                            <select name="lastluoYear">
                                                                <option value="0">/</option>
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
                                                                <option value="81">2017</option>
                                                                <option value="82">2018</option>
                                                                <option value="83">2019</option>
                                                                <option value="84">2020</option>
                                                                <option value="85">2021</option>
                                                                <option value="86">2022</option>
                                                                <option value="87">2023</option>
                                                                <option value="88">2024</option>
                                                                <option value="89">2025</option>
                                                                <option value="90">2026</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 有螺年数 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text"  class="col-sm-5" id="luoYears" name="luoYears"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 历史有螺面积 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text"   class="col-sm-5" id="luoArea" name="luoArea"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 感染性钉螺面积 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" class="col-sm-5" id="luoEffectedArea" name="luoEffectedArea"/>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div id="meid" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 有/无家畜放牧 </label>

                                                        <div class="col-sm-5">
                                                            <label class="inline">
                                                                <input name="hasLivestock" type="radio" class="ace" checked="checked" value="1"/>
                                                                <span class="lbl middle"> 有</span>
                                                            </label>

                                                            &nbsp; &nbsp; &nbsp;
                                                            <label class="inline">
                                                                <input name="hasLivestock" type="radio" class="ace" value="0"/>
                                                                <span class="lbl middle"> 无</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 家畜放牧种类 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text"  class="col-sm-4" name="LiveType"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" > 有无渔船民活动 </label>

                                                        <div class="col-sm-5">
                                                            <label class="inline">
                                                                <input name="hasFisherAction" type="radio" class="ace" checked="checked" value="1"/>
                                                                <span class="lbl middle"> 有</span>
                                                            </label>

                                                            &nbsp; &nbsp; &nbsp;
                                                            <label class="inline">
                                                                <input name="hasFisherAction" type="radio" class="ace" value="0"/>
                                                                <span class="lbl middle"> 无</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" >发生急感年份 </label>

                                                        <div class="col-sm-5">
                                                            <select name="urgentYear">
                                                                <option value="0">/</option>
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
                                                                <option value="81">2017</option>
                                                                <option value="82">2018</option>
                                                                <option value="83">2019</option>
                                                                <option value="84">2020</option>
                                                                <option value="85">2021</option>
                                                                <option value="86">2022</option>
                                                                <option value="87">2023</option>
                                                                <option value="88">2024</option>
                                                                <option value="89">2025</option>
                                                                <option value="90">2026</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right" >发生急感人数 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" class="col-sm-4" name="urgentPeople"/>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div id="death" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->

                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label no-padding-right" >药物灭螺 </label>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 主要方法 </label>

                                                        <div class="col-sm-5">
                                                            <select name="yaowuMethod" class="col-sm-5">
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
                                                        <label class="col-sm-4 control-label no-padding-right" > 主要药物 </label>

                                                        <div class="col-sm-6">
                                                            <select name="yaowuMedicine" class="col-sm-7">
                                                                <option value="1">50%氯硝柳胺乙醇胺盐可湿性粉剂</option>
                                                                <option value="2">4%氯硝柳胺乙醇胺盐粉剂</option>
                                                                <option value="3">25%氯硝柳胺悬浮剂</option>
                                                                <option value="4">其它国家批准的杀螺药物</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 灭螺面积 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text"  class="col-sm-4" name="yaowuArea"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label no-padding-right" > 环改 </label>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 年份 </label>

                                                        <div class="col-sm-5">
                                                            <select name="huangaiYear">
                                                                <option value="0">/</option>
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
                                                                <option value="81">2017</option>
                                                                <option value="82">2018</option>
                                                                <option value="83">2019</option>
                                                                <option value="84">2020</option>
                                                                <option value="85">2021</option>
                                                                <option value="86">2022</option>
                                                                <option value="87">2023</option>
                                                                <option value="88">2024</option>
                                                                <option value="89">2025</option>
                                                                <option value="90">2026</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 方法 </label>

                                                        <div class="col-sm-5">
                                                            <!-- page trigger modal -->
                                                            <input type="text" id="huangaiMethod" name="huangaiMethod" class="col-sm-4" data-toggle="modal" data-target="#myModal" />

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
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">确定</button>
                                                                            <button type="reset" class="btn btn-default" data-dismiss="modal" >关闭</button>

                                                                            <script type="text/javascript">
                                                                                $("#save").click(function(){
                                                                                    //$("#form-field-9").val($("#tree1").find(".tree-selected .tree-label").php());
                                                                                    var item=[];
                                                                                    $.each($("#tree1").find(".tree-selected .tree-label"),function(){
                                                                                        item.push(this.innerphp);
                                                                                    });
                                                                                    $("#huangaiMethod").val(item.join('、'));
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
                                                                            //checkout examples/treeview.php and examples/treeview.js for more info
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
                                                                            //checkout examples/treeview.php and examples/treeview.js for more info
                                                                        };


                                                                        return {'dataSource1': dataSource1 , 'dataSource2' : dataSource2}
                                                                    }

                                                                });
                                                            </script>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 面积 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" class="col-sm-4" name="huangaiArea"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label no-padding-right" > 末次灭螺 </label>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 年份 </label>

                                                        <div class="col-sm-5">
                                                            <select name="lastclearYear">
                                                                <option value="0">/</option>
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
                                                                <option value="81">2017</option>
                                                                <option value="82">2018</option>
                                                                <option value="83">2019</option>
                                                                <option value="84">2020</option>
                                                                <option value="85">2021</option>
                                                                <option value="86">2022</option>
                                                                <option value="87">2023</option>
                                                                <option value="88">2024</option>
                                                                <option value="89">2025</option>
                                                                <option value="90">2026</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 方法 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text"  class="col-sm-4" name="lastclearMethod"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label no-padding-right"> 面积 </label>

                                                        <div class="col-sm-5">
                                                            <input type="text" name="lastclearArea" class="col-sm-4" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- tab-content结束-->

                                </div>

                                <div class="clearfix form-actions">
                                    <div class="col-md-offset-4 col-md-9">
                                        <button class="btn btn-info" id="ook">
                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                            <span class="bigger-110 white">确认</span>
                                        </button>

                                        &nbsp; &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                            重置
                                        </button>
                                    </div>

                                    <script type="text/javascript">
                                        $("#ook").click(function(){
                                            if (document.getElementById("envirID").value.trim()=="")
                                            {
                                                alert("请填写环境编号！");
                                                document.getElementById("envirID").value="";
                                                document.getElementById("envirID").focus();
                                                return false;}
                                            else {
                                                return true;
                                            }
                                        })

                                    </script>
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
