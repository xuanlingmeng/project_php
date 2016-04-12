<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <style type="text/css">
        body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ny4t7GOujQB9Ek9S86hOz1GG"></script>
    <title>城市列表控件</title>
</head>
<body>
<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
    var mp = new BMap.Map("allmap");
    var point = new BMap.Point(116.404, 39.915);
    mp.centerAndZoom(point, 14);
    mp.enableScrollWheelZoom();
    mp.enableInertialDragging();

    mp.enableContinuousZoom();

    var size = new BMap.Size(10, 20);
    mp.addControl(new BMap.CityListControl({
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
</script>