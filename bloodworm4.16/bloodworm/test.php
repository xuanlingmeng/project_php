<!DOCTYPE HTML>
<html>
<head>
    <meta charset="gb2312" />
    <title></title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <style>

    </style>
</head>
<body>

<script>


        $.ajax({
            url: "donetaskajax.php",
            type: "POST",
           // data:{trans_data:my_data,trans_data1:my_data1,trans_data2:my_data2},
            dataType: "json",
            error: function(){
                alert('Error loading XML document');
            },
            success: function(data){//如果调用php成功
                alert(data.Task_Time[0]);
            }
        });


</script>
</body>
</html>


