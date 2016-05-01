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

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/font-awesome.css"/>

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="./css/chosen.css" />
    <link rel="stylesheet" href="./css/select2.css" />
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
    if($_SESSION["privilege"]==1)
    {
        echo "<script>alert('您的权限不够，无法访问');</script>";
        echo "<script>location.href='nowsnail.php';</script>";
    }
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
                                <a href="session_request.php">
                                    <i class="ace-icon fa fa-cog"></i>
                                    申请消息
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
                            <a href="#">指标体系</a>
                        </li>
                        <li class="active">基本数据录入</li>
                    </ul><!-- /.breadcrumb -->

                    <!-- #section:basics/content.searchbox -->
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
                        指标体系基本数据填写
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            实验室得出
                        </small>

                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <form class="form-horizontal" role="form" name="lab" action="is_lab_deal.php" method="POST" >
                            <!-- #section:elements.form -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1" > 任务编号 </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" name="taskid" class="col-sm-3"/>
                                </div>
                            </div>

                            <h4 class="header smaller lighter purple col-sm-9 col-lg-7 col-lg-offset-3" >
                                钉螺指标
                            </h4>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="long">感染螺数</label>

                                <div class="col-sm-9">
                                    <input type="text" id="long" class="col-sm-2" name="InfectionSnail"/>
                            </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> 感染螺框数 </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-3" name="InfectionBox" class="col-sm-2"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> 感染螺面积 </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-4" name="InfectionArea"  class="col-sm-2"/>
                                </div>
                            </div>

                            <h4 class="header smaller lighter purple col-sm-9 col-lg-7 col-lg-offset-3" >
                                感染因素
                            </h4>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-5"> 野粪总份数 </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-5"  name="StoolSum" class="col-sm-2"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-7"> 野粪中检测出阳性毛蚴或血吸虫卵数 </label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-7" name="StoolSnail" class="col-sm-2"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">急性感染</label>

                                <div class="col-sm-6">
                                    <select name="AcuteInfections" class="col-sm-4">
                                        <option value="0">/</option>
                                        <option value="1">当年发生急感</option>
                                        <option value="2">隔年发生急感</option>
                                        <option value="3">隔2年发生急感</option>
                                        <option value="4">隔3年发生急感</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">疫水测定</label>

                                <div class="col-sm-6">
                                    <select name="DeterminationOfContaminatedWater" class="col-sm-4">
                                        <option value="0">/</option>
                                        <option value="1">当年疫水阳性</option>
                                        <option value="2">隔年疫水阳性</option>
                                        <option value="3">隔2年疫水阳性</option>
                                        <option value="4">隔3年疫水阳性</option>
                                    </select>
                                </div>
                            </div>

                            <h4 class="header smaller lighter purple col-sm-9 col-lg-7 col-lg-offset-3" >
                                影响因素
                            </h4>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">人群活动</label>

                                <div class="col-sm-6">
                                    <select name="CrowdActivities" class="col-sm-6">
                                        <option value="0">/</option>
                                        <option value="1">涉水作业（水利、采沙、修建码头等）</option>
                                        <option value="2">抗洪救灾</option>
                                        <option value="3">捕鱼摸虾、打粽叶、挖野菜</option>
                                        <option value="4">游泳洗澡</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">风险项目</label>

                                <div class="col-sm-6">
                                    <select name="RiskProject" class="col-sm-6">
                                        <option value="0">/</option>
                                        <option value="1">有农家乐休闲旅游</option>
                                        <option value="2">有渔船民集散地</option>
                                        <option value="3">有家畜放牧</option>
                                        <option value="4">其他（在有螺滩或水域的群体活动）</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" > 长江汛情 </label>

                                <div class="col-sm-6">
                                    <select name="RiverFlood" class="col-sm-2">
                                        <option value="1">枯水位</option>
                                        <option value="2">常水位</option>
                                        <option value="3">丰水位</option>
                                        <option value="4">洪水位</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" > 当地气温（℃） </label>

                                <div class="col-sm-6">
                                    <select name="LocalTemperature" class="col-sm-2">
                                        <option value="1">＜28</option>
                                        <option value="2">≥28</option>
                                        <option value="3">≥35</option>
                                        <option value="4">≥38</option>
                                    </select>

                                </div>
                            </div>
                            <div class="">
                                <div class="col-md-offset-3 col-md-9">
                                    <button class="btn btn-info" type="submit">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        <a href="is_lab_deal.php">
                                            <span class="bigger-110 white">提交</span></a>
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

<!-- inline scripts related to this page -->


</body>
</html>
