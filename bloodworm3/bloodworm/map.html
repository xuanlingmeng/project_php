<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
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
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    map.centerAndZoom(new BMap.Point(119.980569,31.816918), 14);
    map.enableScrollWheelZoom(true);
    map.enableInertialDragging();

    <!--定位坐标校准-->


    <!--校准完毕-->


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

    <!--定位控件-->

    setTimeout(function(){
        var convertor = new BMap.Convertor();
        var pointArr = [];
        pointArr.push(ggPoint);
        convertor.translate(pointArr, 1, 5, translateCallback)
    }, 1000);

    function showInfo(e){
        /*alert(e.point.lng + ", " + e.point.lat);*/
    }

    map.addEventListener("click", showInfo);


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

        translateCallback = function (data){
            if(data.status === 0) {
                for (var i = 0; i < data.address.length; i++) {
                    bm.addOverlay(new BMap.Marker(data.address[i]));
                    bm.setCenter(data.address[i]);
                }
            }
        }
        setTimeout(function(){
            var convertor = new BMap.Convertor();
            convertor.translate(points, 1, 5, translateCallback)
        }, 1000);

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
