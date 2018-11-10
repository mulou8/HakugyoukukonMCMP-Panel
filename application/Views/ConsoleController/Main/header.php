<html>
	<head>
		<meta  http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="renderer" content="ie-stand">

        <link rel="stylesheet" href="/static/css/font-awesome.css"/>
        <link rel="stylesheet" href="/static/css/Black.css">
        <link rel="stylesheet" href="/static/css/bootstrap.css">
        <link rel="stylesheet" href="/static/css/ServerList.css">
        <link rel="stylesheet" href="/static/css/Console/Main.css">
        <link rel="stylesheet" href="/static/css/layer.css">

        <script src="/static/js/jquery-3.2.1.js"></script>

        <style type="text/css">
            body{
                font-family: 'FontAwesome';
            }

            @font-face{
                font-family: 'FontAwesome';
                font-display:auto;
                src: url('/static/fonts/FontAwesome.otf');
            }
        </style>

        <script>
            $(document).ready(function () {
                $("#time_used",window.parent.document).html(<?php echo USED?>);

                //test

                $.ajax({
                    url: "http://192.168.31.128:6060/ServerAdd",
                    async: true,
                    processData: false,
                    type: "GET",
                    timeout: 4000,
                    data: "qwq=aaa&test=tqq",
                    crossDomain: true,

                    success: function (data) {
                        $("#out-content").html(data);
                    }
                });

            });
        </script>
	</head>
    <body>