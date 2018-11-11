<html>
	<head>
		<meta  http-equiv="content-type" content="text/html; charset=gbk"/>
		<meta name="renderer" content="ie-stand">

        <link rel="stylesheet" href="/static/css/font-awesome.css"/>
        <link rel="stylesheet" href="/static/css/Black.css">
        <link rel="stylesheet" href="/static/css/bootstrap.css">
        <link rel="stylesheet" href="/static/css/ServerList.css">
        <link rel="stylesheet" href="/static/css/Console/Main.css">
        <link rel="stylesheet" href="/static/css/layer.css">

        <script src="/static/js/jquery-3.2.1.js"></script>
        <script src="/static/js/ajax.js"></script>

        <style type="text/css">
            body{
                font-family: 'FontAwesome';
            }

            @font-face{
                font-family: 'FontAwesome';
                font-display:auto;
                src: url('/static/fonts/FontAwesome.otf');
            }

            @font-face{
                font-family: 'Nico';
                font-display:auto;
                src: url('/static/fonts/nico.ttf');
            }
        </style>

        <script>
            //Get info
            $(document).ready(function () {
                $("#time_used", window.parent.document).html(<?php echo USED?>);

                //Server list
                ajax("/Servers/GetServerList","GET","",4000,function (data) {
                    $("#server-list").html(data);
                },function (err,text) {
                    message.html("<code>AJAX请求错误: " + err.status + "&nbsp;" + text +"</code>");

                    messageBox.fadeIn(400)
                    setTimeout(function () {
                        messageBox.fadeOut(200,"linear");
                    },600);
                });

                setInterval(function () {
                    if ($("#bar").is(':checked') == true){
                        document.getElementsByClassName("output")[0].scrollTop = document.getElementsByClassName("output")[0].scrollHeight;
                    }
                },500);
            });
        </script>
	</head>
    <body>