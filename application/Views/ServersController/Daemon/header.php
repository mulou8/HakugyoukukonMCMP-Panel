<html>
	<head>
		<meta  http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="renderer" content="ie-stand">

        <link rel="stylesheet" href="/static/css/font-awesome.css"/>
        <link rel="stylesheet" href="/static/css/Black.css">
        <link rel="stylesheet" href="/static/css/Servers/Daemon.css">
        <link rel="stylesheet" href="/static/css/bootstrap.css">
        <link rel="stylesheet" href="/static/css/ServerList.css">

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
                $("#add").click(function () {
                    var messageBox = $(window.parent.document).find(".container-message");
                    var message = $(window.parent.document).find("#message");

                    var name = $("#add-name").val();
                    var key  = $("#add-key").val();
                    var fqdn = $("#add-fqdn").val();
                    var ajax = $("#add-ajax").val();
                    var os = document.getElementById("os").options[document.getElementById("os").selectedIndex].value;

                    $.post(
                        "/Servers/DaemonAdd/",
                        "name="+ name +"&key="+ key +"&fqdn="+ fqdn +"&ajax=" + ajax + "&os=" + os,

                        function (data) {
                              if (data == "0"){
                                message.html("添加成功 请刷新本页面");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");

                                    setTimeout(function () {
                                        location.reload();
                                    },420);
                                },600);

                                return;
                              }

                            if (data == "-1"){
                                message.html("禁止空字段 请检查表单");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },600);
                                return;
                            }
                        }
                    );
                });
            });
        </script>
	</head>