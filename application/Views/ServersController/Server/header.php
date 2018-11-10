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
                $("#time_used",window.parent.document).html(<?php echo USED?>);

                $("#daemon-info").hide();

                $("#add").click(function () {
                    var messageBox = $(window.parent.document).find(".container-message");
                    var message = $(window.parent.document).find("#message");

                    var name = $("#server-name").val();
                    var memory = $("#server-memory").val();
                    var core = $("#core-name").val();
                    var start = $("#start-cmd").val();
                    var stop = $("#stop-cmd").val();
                    var port = $("#server-port").val();
                    var pass = $("#ftp-pass").val();
                    var daemon = document.getElementById("daemon").options[document.getElementById("daemon").selectedIndex].id;

                    $.post(
                        "/Servers/ServerAdd/",
                        "name="+ name +"&memory="+ memory +"&core="+ core +"&start=" + start + "&stop=" + stop + "&port=" + port + "&pass=" + pass + "&daemon=" + daemon,

                        function (data) {
                              if (data == "0"){
                                message.html("添加成功 请刷新本页面");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");

                                    setTimeout(function () {
                                        location.reload();
                                    },420);
                                },500);

                                return;
                              }

                            if (data == "-1"){
                                message.html("禁止空字段 请检查表单");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);
                                return;
                            }

                            if (data == "-2"){
                                message.html("最大内存 或 端口 必须为数字");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);
                                return;
                            }

                            if (data == "-3"){
                                message.html("相同 daemon+端口 的服务器已存在");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);
                                return;
                            }

                            if (data == "10"){
                                message.html("无法连接目标daemon服务器 服务器创建失败");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);
                                return;
                            }

                            if (data == "-4"){
                                message.html("服务器端口必须 大于1 小于65534");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);
                                return;
                            }

                            message.html("未知错误: " + data + " 请联系开发者");
                            messageBox.fadeIn(400);
                            setTimeout(function () {
                                messageBox.fadeOut(400,"linear");
                            },1000);
                        }
                    );
                });

                
                $("#update").click(function () {
                    var messageBox = $(window.parent.document).find(".container-message");
                    var message = $(window.parent.document).find("#message");

                    var id = $("#update-id").val();
                    var name = $("#update-name").val();
                    var memory = $("#update-memory").val();
                    var core = $("#update-core").val();
                    var start = $("#update-start").val();
                    var stop = $("#update-stop").val();
                    var port = $("#update-port").val();

                    $.ajax({
                        url: "/Servers/ServerUpdate",
                        async: true,
                        processData: false,
                        type: "POST",
                        timeout: 4000,
                        data: "id=" + id +"&name="+ name +"&memory="+ memory +"&core="+ core +"&start=" + start + "&stop=" + stop + "&port=" + port,
                        
                        success: function (data) {
                            if (data == "0"){
                                message.html("更新成功 请刷新本页面");

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

                            if (data == "-2"){
                                message.html("最大内存 或 端口 必须为数字");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);
                                return;
                            }

                            if (data == "-3"){
                                message.html("相同 daemon+端口 的服务器已存在");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);
                                return;
                            }

                            if (data == "-4"){
                                message.html("服务器端口必须 大于1 小于65534");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);
                                return;
                            }

                            message.html("未知错误:" + data);

                            messageBox.fadeIn(400);
                            setTimeout(function () {
                                messageBox.fadeOut(400,"linear");
                            },800);
                            return;
                        },
                        
                        error: function (err,text) {
                            message.html("<code>AJAX请求错误: " + err.status + "&nbsp;" + text +"</code>");

                            setTimeout(function () {
                                messageBox.fadeOut(200,"linear");
                            },600);
                        }
                    });
                });

                $("#delete").click(function () {
                    var messageBox = $(window.parent.document).find(".container-message");
                    var message = $(window.parent.document).find("#message");

                    var id = $("#update-id").val();

                    if(confirm("您确定要删除此服务器吗\n注意: 此操作不可逆")) {
                        $.ajax({
                            url: "/Servers/DeleteServer",
                            async: true,
                            processData: false,
                            type: "POST",
                            timeout: 4000,
                            data: "id=" + id,

                            success: function (data) {
                                if (data == "0"){
                                    message.html("删除成功 请刷新本页面");

                                    messageBox.fadeIn(400);
                                    setTimeout(function () {
                                        messageBox.fadeOut(400,"linear");

                                        setTimeout(function () {
                                            location.reload();
                                        },420);
                                    },600);

                                    return;
                                }

                                if (data == "10"){
                                    message.html("删除失败 无法连接到daemon<br>请尝试停止服务器后删除");

                                    messageBox.fadeIn(400);
                                    setTimeout(function () {
                                        messageBox.fadeOut(400,"linear");

                                        setTimeout(function () {
                                            location.reload();
                                        },420);
                                    },800);

                                    return;
                                }

                                if (data == "-1"){
                                    message.html("错误: 无法获取服务器ID 请联系开发者");

                                    messageBox.fadeIn(400);
                                    setTimeout(function () {
                                        messageBox.fadeOut(400,"linear");
                                    },800);
                                    return;
                                }

                                message.html("未知错误<br>" + data);

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);
                            },

                            error: function (err,text) {
                                message.html("<code>AJAX请求错误: " + err.status + "&nbsp;" + text +"</code>");

                                setTimeout(function () {
                                    messageBox.fadeOut(200,"linear");
                                },600);
                            }
                        });
                    }
                });

            });
        </script>
	</head>