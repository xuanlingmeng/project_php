<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <style type="text/css">
        body, html{width: 100%;height: 100%;margin:0;}
        #allmap {width: 100%; height:600px; overflow: hidden;}
        #result {width:100%;font-size:12px;}
        dl,dt,dd,ul,li{
            margin:0;
            padding:0;
            list-style:none;
        }
        p{font-size:12px;}
        dt{
            font-size:14px;
            font-weight:bold;
            border-bottom:1px dotted #000;
            padding:5px 0 5px 5px;
            margin:5px 0;
        }
        dd{
            padding:5px 0 0 5px;
        }
        li{
            line-height:28px;
        }
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ny4t7GOujQB9Ek9S86hOz1GG"></script>
    <!--加载鼠标绘制工具-->
    <script type="text/javascript" src="http://api.map.baidu.com/library/DrawingManager/1.4/src/DrawingManager_min.js"></script>
    <link rel="stylesheet" href="http://api.map.baidu.com/library/DrawingManager/1.4/src/DrawingManager_min.css" />
    <!--加载检索信息窗口-->
    <!--<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.4/src/SearchInfoWindow_min.js"></script>-->
    <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.4/src/SearchInfoWindow_min.css" />
    <title>血吸虫病防治系统</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js" type="text/javascript" ></script>
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/font-awesome.css"/>

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="./css/bootstrap-duallistbox.css" />
    <link rel="stylesheet" href="./css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="./css/select2.css" />
    <link rel="stylesheet" href="./css/jquery-ui.custom.css" />
    <link rel="stylesheet" href="./css/chosen.css" />
    <link rel="stylesheet" href="./css/datepicker.css" />
    <link rel="stylesheet" href="./css/daterangepicker.css" />

    <link rel="stylesheet" href="./css/colorpicker.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="./css/ace-fonts.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="./css/ace.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--   [if lte IE 9]>
    <link rel="stylesheet" href="./css/ace-part2.css" class="ace-main-stylesheet"/>
    <![endif]

    [if lte IE 9]>
    <link rel="stylesheet" href="./css/ace-ie.css"/>
    <!--[endif]-->

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
    <?php
   if($_SESSION["name"]==NULL)
       echo "<script>location.href='LoginTest.php';</script>";
    if($_SESSION["privilege"]==1)
    {
        echo "<script>alert('您的权限不够，无法访问');</script>";
        echo "<script>location.href='nowsnail.php';</script>";
    }

    if($_SESSION["privilege"]==3)
    {
        echo "<script>alert('您的权限不够，无法访问');</script>";
        echo "<script>location.href='is_lab.php';</script>";
    }
    ?>



</head>

<body class="no-skin">
<!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default  navbar-collapse   h-navbar">
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
                                    <!--技术渣Howard-->
                                    <?php
                                    // session_start();
                                    //echo $_SESSION['Username'];

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
                            <a href="session_request.php">
                                <i class="ace-icon fa fa-cog"></i>
                                申请消息
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
    <div id="sidebar" class="sidebar   responsive">
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
                        <a href="#">任务管理</a>
                    </li>
                    <li class="active">新建任务</li>
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
            </div>

            <!-- /section:settings.box -->

            <div class="page-header">
                <h1>
                    新建任务
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        任务
                    </small>

                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                   <!-- <form class="form-horizontal" role="form" name="new" action="newtaskdeal.php" method="POST" >-->
                        <form class="form-horizontal" role="form" name="new" action="newtaskdeal.php" method="POST" >
                        <!-- #section:elements.form -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="haoma"> 任务编号 </label>

                            <div class="col-sm-9">
                                <input type="text" id="haoma" class="col-sm-2" name="haoma"/>
                                <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                            </div>

                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="hjID"> 环境编号 </label>

                            <div class="col-sm-9">
                                <input type="text" id="hjID"  class="col-sm-2" name="hjID"/>
                                <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right">是否需要查螺</label>

                            <div class="col-sm-9">
                                <label >
                                    <input type="radio" name="need" checked="checked" class="ace" id="need" value="0"/>
                                    <span class="lbl middle"> 需要</span>
                                </label>

                                &nbsp; &nbsp; &nbsp;
                                <label class="inline">
                                    <input type="radio" name="need"  class="ace" id="noneed" value="1"/>
                                    <span class="lbl middle"> 不需要</span>
                                </label>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" > 围栏类型 </label>

                            <div class="col-sm-9">
                                <select name="wltype"><option value="1">多边形围栏</option><option value="0">中心点围栏</option></select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field"> 圈定围栏 </label>

                            <div class="col-sm-9">
                                <textarea  id="form-field" name="form-field" cols="60" rows="3" data-toggle="modal" data-target="#WL"></textarea>
                                <div class="help-block col-xs-12 col-sm-reset inline red">*</div>

                                <!-- Modal -->
                                <div  style="margin-left:-800px" class="modal fade" id="WL" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="width: 1400px;height: 700px">
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="widget-box widget-color-blue2">
                                                            <div class="widget-header">
                                                                <h4 class="widget-title lighter smaller">圈定围栏</h4>
                                                            </div>

                                                            <div class="widget-body">
                                                                <!-- #section:elements.form -->
                                                                <div id="allmap" style="overflow:hidden;zoom:1;position:relative;">
                                                                    <div id="map" style="height:100%;-webkit-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out;"></div>
                                                                </div>
                                                                <div id="result">
                                                                    <input type="button" value="获取绘制的覆盖物个数" onclick="alert(overlays.length)"/>
                                                                    <input type="button" value="清除所有覆盖物" onclick="clearAll()"/>
                                                                </div>
                                                                <script type="text/javascript">
                                                                //引入javascript代码
                                                                    // 百度地图API功能

                                                                //创建map实例
                                                                    var map = new BMap.Map('map');
                                                                    var poi = new BMap.Point(119.980569,31.816918);
                                                                    map.centerAndZoom(poi, 16);

                                                                //添加鼠标滚动缩放
                                                                    map.enableScrollWheelZoom();
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

                                                                    //将坐标点赋值于textarea中
                                                                    var data;
                                                                    function showInfo(e){
                                                                        data = e.point.lng + ", " + e.point.lat;
                                                                        //显示坐标点
                                                                        $("#form-field")[0].value += data + ' |';

                                                                    }
                                                                    map.addEventListener("click", showInfo);//点击获取坐标


                                                                    /*       $('#yes').click(function(){
                                                                     $("#form-field").val(data.join('|'));
                                                                     })*/

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

                                                                    var overlays = [];
                                                                    var overlaycomplete = function(e){
                                                                        overlays.push(e.overlay);
                                                                        //alert(e.overlay); //显示添加的类型
                                                                    };
                                                                    var styleOptions = {
                                                                        strokeColor:"red",    //边线颜色。
                                                                        fillColor:"red",      //填充颜色。当参数为空时，圆形将没有填充效果。
                                                                        strokeWeight: 3,       //边线的宽度，以像素为单位。
                                                                        strokeOpacity: 0.8,	   //边线透明度，取值范围0 - 1。
                                                                        fillOpacity: 0.6,      //填充的透明度，取值范围0 - 1。
                                                                        strokeStyle: 'solid' //边线的样式，solid或dashed。
                                                                    };
                                                                    //实例化鼠标绘制工具
                                                                    var drawingManager = new BMapLib.DrawingManager(map, {
                                                                        isOpen: false, //是否开启绘制模式
                                                                        enableDrawingTool: true, //是否显示工具栏
                                                                        drawingToolOptions: {
                                                                            anchor: BMAP_ANCHOR_TOP_RIGHT, //位置
                                                                            offset: new BMap.Size(5, 5), //偏离值
                                                                        },
                                                                        circleOptions: styleOptions, //圆的样式
                                                                        polylineOptions: styleOptions, //线的样式
                                                                        polygonOptions: styleOptions, //多边形的样式
                                                                        rectangleOptions: styleOptions //矩形的样式
                                                                    });
                                                                    //添加鼠标绘制工具监听事件，用于获取绘制结果
                                                                    drawingManager.addEventListener('overlaycomplete', overlaycomplete);
                                                                    function clearAll() {
                                                                        for(var i = 0; i < overlays.length; i++){
                                                                            map.removeOverlay(overlays[i]);
                                                                        }
                                                                        overlays.length = 0
                                                                    }
                                                                </script>

                                                                <!-- <script type="text/javascript">
                                                                     alert(document.getElementById('form-field').innerHTML);
                                                                 </script>-->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal" id="yes">确定</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9">
                                <button id="math" class="col-lg-offset-4" type="button">计算半径(m)</button>
                                <!--<input type="button" value="计算半径" id="math" class="col-lg-offset-4"/>
                                <input type="text" id="circle" name="radius"/>-->
                                <input type="text" id="circle" name="circle"/>
                                <button id="area" class="col-lg-push-1" type="button">计算面积(m²)</button>
                               <input type="text" id="mianji" name="mianji"/>


                            </div>



                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-9"> 查/灭螺负责人员 </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-9" name="form-field-9" data-toggle="modal" data-target="#myModal" />
                                <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                                <!-- page trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="widget-box widget-color-blue2">
                                                            <div class="widget-header">
                                                                <h4 class="widget-title lighter smaller">人员列表</h4>
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
                                                <button type="button" class="btn btn-default" data-dismiss="modal" >关闭</button>

                                                <script type="text/javascript">
                                                    $("#save").click(function(){
                                                        //$("#form-field-9").val($("#tree1").find(".tree-selected .tree-label").html());
                                                        var item=[];
                                                        $.each($("#tree1").find(".tree-selected .tree-label"),function(){
                                                            item.push(this.innerHTML);
                                                        });
                                                        $("#form-field-9").val(item.join('、'));
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
                                                'jiangsu' : {text: '江苏省', type: 'folder'}	,
                                                'zhejiang' : {text: '浙江省', type: 'folder'}	,
                                                'shanghai' : {text: '上海市', type: 'folder'}	,
                                                'hunan' : {text: '湖南省', type: 'folder'}	,
                                                'hubei' : {text: '湖北省', type: 'folder'}	,
                                                'jiangxi' : {text: '江西省', type: 'folder'}	,
                                                'anhui' : {text: '安徽省', type: 'folder'}	,
                                                'fujian' : {text: '福建省', type: 'folder'}
                                            };
                                            tree_data['jiangsu']['additionalParameters'] = {
                                                'children' : {
                                                    'appliances' : {text: 'Appliances', type: 'item'},
                                                    'arts-crafts' : {text: 'Arts & Crafts', type: 'item'},
                                                    'clothing' : {text: 'Clothing', type: 'item'}
                                                }
                                            };
                                            tree_data['zhejiang']['additionalParameters'] = {
                                                'children' : {
                                                    'ningbo' : {text: '宁波市', type: 'folder'},
                                                    'motorcycles' : {text: 'Motorcycles', type: 'item'}
                                                }
                                            };
                                            tree_data['zhejiang']['additionalParameters']['children']['ningbo']['additionalParameters'] = {
                                                'children' : {
                                                    'classics' : {text: 'Classics', type: 'item'},
                                                    'convertibles' : {text: 'Convertibles', type: 'item'}

                                                }
                                            };

                                            tree_data['shanghai']['additionalParameters'] = {
                                                'children' : {
                                                    'apartments-rentals' : {text: 'Apartments', type: 'item'},
                                                    'office-space-rentals' : {text: 'Office Space', type: 'item'}
                                                }
                                            };
                                            tree_data['hunan']['additionalParameters'] = {
                                                'children' : {
                                                    'apartments' : {text: 'Apartments', type: 'item'},
                                                    'villas' : {text: 'Villas', type: 'item'}
                                                }
                                            };
                                            tree_data['hubei']['additionalParameters'] = {
                                                'children' : {
                                                    'cats' : {text: 'Cats', type: 'item'},
                                                    'dogs' : {text: 'Dogs', type: 'item'}
                                                }
                                            };
                                            tree_data['jiangxi']['additionalParameters'] = {
                                                'children' : {
                                                    'cats' : {text: 'Cats', type: 'item'},
                                                    'dogs' : {text: 'Dogs', type: 'item'}
                                                }
                                            };
                                            tree_data['anhui']['additionalParameters'] = {
                                                'children' : {
                                                    'cats' : {text: 'Cats', type: 'item'},
                                                    'dogs' : {text: 'Dogs', type: 'item'}
                                                }
                                            };
                                            tree_data['fujian']['additionalParameters'] = {
                                                'children' : {
                                                    'cats' : {text: 'Cats', type: 'item'},
                                                    'dogs' : {text: 'Dogs', type: 'item'}
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
                            <label class="col-sm-3 control-label no-padding-right" > 任务紧急程度 </label>

                            <div class="col-sm-9">
                                <select name="enmer"><option value="1">高紧急</option><option value="2">中紧急</option><option value="3">低紧急</option></select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" > 任务建立时间 </label>

                            <div class="col-sm-9">
                                <input class="col-sm-3 date-picker" id="id-date-picker-1" name="id-date-picker-1" type="date" data-date-format="dd-mm-yyyy" />
                                <div class="help-block col-xs-12 col-sm-reset inline red">*</div>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" id="ok" type="submit">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    <a href="historymsg.php">
                                        <span class="bigger-110 white">确认</span></a>
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
                <!-- /.page-content -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.main-content-inner -->
    </div>
    <!-- /.main-content -->

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

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='./js/jquery1x.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='./js/jquery.mobile.custom.js'>" + "<" + "/script>");
</script>


<!-- page specific plugin scripts -->
<script src="./js/jquery.bootstrap-duallistbox.js"></script>
<script src="./js/jquery.raty.js"></script>
<script src="./js/bootstrap-multiselect.js"></script>
<script src="./js/select2.js"></script>
<script src="./js/typeahead.jquery.js"></script>
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

<script type="text/javascript">
    $("#math").click(function(){
        var pointarea=(document.getElementById('form-field').value);
        var pointa=pointarea.split("|");


        if (pointa.length == 3){
            var center=pointa[0].split(", ");
            var radius=pointa[1].split(", ");
            var R=6370996.81;
            var pi=3.1415926535898;
            var distance=R*Math.acos(Math.cos(center[1]*pi/180 )*Math.cos(radius[1]*pi/180)*Math.cos(center[0]*pi/180 -radius[0]*pi/180)+Math.sin(center[1]*pi/180 )*Math.sin(radius[1]*pi/180));

            $("#circle").val("R="+distance);}

        else {
            alert("围栏不为中心点围栏！不可计算半径！")
        }

        return false;

//                                    console.log(center);
//                                    console.log(radius);
//                                    console.log(distance);
    });
</script>

<!--//围栏面积计算-->
<script type="text/javascript">
    //定义数学参数
    var earthRadiusMeters=6371000.0;
    var metersPerDegree=2.0*Math.PI*earthRadiusMeters/360.0;
    var radiansPerDegree=Math.PI/180.0;
    var degreesPerRadian=180.0/Math.PI;

    function Bearing(from,to){
        var lat1=from[1];
        var lon1=from[0];
        var lat2=to[1];
        var lon2=to[0];
        var angle=-Math.atan2(Math.sin(lon1-lon2)*Math.cos(lat2) , Math.cos(lat1)*Math.sin(lat2)-
            Math.sin(lat1)*Math.cos(lat2)*Math.cos(lon1-lon2));
        if (angle< 0.0) angle+=Math.PI*2.0;
        angle=angle*degreesPerRadian;
        return{
            getValue:function(){
                return angle;
            }
        };
    }


    function Angle(p1,p2,p3){
        var bearing21=Bearing(p2,p1).getValue();
        var bearing23=Bearing(p2,p3).getValue();
        var angle=bearing21-bearing23;
        if (angle<0.0) angle+=360.0;
        return{
            getValue:function(){
                return angle;
            }
        };
    }


    function SphericalPolygonAreaMeters2(points){
        var totalAngle=0;
        for (var i=0;i < (points.length-1); ++i){
            var j=(i+1)%(points.length-1);
            var k=(i+2)%(points.length-1);
            totalAngle +=Angle(points[i],points[j],points[k]).getValue();//返回一个角度
        }

        var planarTotalAngle=(points.length-3)*180.0;
        var sphericalExcess=totalAngle-planarTotalAngle;

        if (sphericalExcess>420.0){
            totalAngle=(points.length-1)*360.0-totalAngle;
            sphericalExcess=totalAngle-planarTotalAngle;
        }
        else if (sphericalExcess>300.0 && sphericalExcess<420.0){
            sphericalExcess=Math.abs(360.0-sphericalExcess);
        }
        var M=sphericalExcess*radiansPerDegree*earthRadiusMeters*earthRadiusMeters;

        return{
            getValue:function(){
                return M;
            }
        };
    }



    function PlanarPolygonAreaMeters2(pointa){
        var a=0.0;
        for (var i=0;i<(pointa.length-1);++i){
            var j=(i+1)%(pointa.length-1);
            var pointi=pointa[i].split(", ");//第i个坐标点
            var pointj=pointa[j].split(", ");//第j个坐标点

            var xi=pointi[0]*metersPerDegree*Math.cos(pointi[1]*radiansPerDegree);
            var yi=pointi[1]*metersPerDegree;
            var xj=pointj[0]*metersPerDegree*Math.cos(pointj[1]*radiansPerDegree);
            var yj=pointj[1]*metersPerDegree;
            a +=xi*yj-xj*yi;
        }
        var b=Math.abs(a/2.0);
        return{
            getValue:function(){
                return b;
            }
        };
    }

    $("#area").click(function(){

        var pointarea=(document.getElementById('form-field').value);
        var pointa=pointarea.split("|");
        debugger;
        if (pointa.length > 3){
            //多边形面积计算，运用三角形规则
            var areaMeter2=PlanarPolygonAreaMeters2(pointa).getValue();
            console.log(areaMeter2);
            if (areaMeter2 > 1000000.0) areaMeter2=SphericalPolygonAreaMeters2(pointa).getValue();
            $("#mianji").val(areaMeter2);

        }
        else if (pointa.length == 3){
            //中心点面积计算
            var center=pointa[0].split(", ");
            var radius=pointa[1].split(", ");
            var R=6370996.81;
            var pi=3.1415926535898;
            var distance=R*Math.acos(Math.cos(center[1]*pi/180 )*Math.cos(radius[1]*pi/180)*Math.cos(center[0]*pi/180 -radius[0]*pi/180)+Math.sin(center[1]*pi/180 )*Math.sin(radius[1]*pi/180));
            var area=3.14*distance*distance;
            $("#mianji").val(area);
        }

        return false;


    })

</script>





<script type="text/javascript">
    $("#ok").click(function(){
        if (document.getElementById("haoma").value.trim()=="")
        {
            alert("请填写任务编号！");
            document.getElementById("haoma").value="";
            document.getElementById("haoma").focus();
            return false;}
        else {
            return true;
        }
    });

    $("#ok").click(function(){
        if (document.getElementById("hjID").value.trim()=="")
        {
            alert("请填写环境编号！");
            document.getElementById("hjID").value="";
            document.getElementById("hjID").focus();
            return false;}
        else {
            return true;
        }
    });

    $("#ok").click(function(){
        if (document.getElementById("form-field").value.trim()=="")
        {
            alert("请圈定围栏！");
            document.getElementById("form-field").value="";
            document.getElementById("form-field").focus();
            return false;}
        else {
            return true;
        }
    });

    $("#ok").click(function(){
        if (document.getElementById("id-date-picker-1").value.trim()=="")
        {
            alert("请选择任务建立时间！");
            document.getElementById("id-date-picker-1").value="";
            document.getElementById("id-date-picker-1").focus();
            return false;}
        else {
            return true;
        }
    })


</script>



</body>
</html>
