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

                    var id = $("#update-DaemonID").val();
                    var name = $("#update-name").val();
                    var key  = $("#update-key").val();
                    var fqdn = $("#update-fqdn").val();
                    var ajax = $("#update-ajax").val();
                    var os = document.getElementById("update-select").options[document.getElementById("update-select").selectedIndex].value;

                    $.post(
                        "/Servers/DaemonUpdate/",
                        "name="+ name +"&key="+ key +"&fqdn="+ fqdn +"&ajax=" + ajax + "&os=" + os + "&id=" + id,

                        function (data) {
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

                        }
                    );
                });

                $("#delete").click(function () {
                    var messageBox = $(window.parent.document).find(".container-message");
                    var message = $(window.parent.document).find("#message");

                    var id = $("#update-DaemonID").val();

                    if(confirm("您确定要删除此Daemon吗\n注意: 此操作不可逆")) {
                        $.post(
                            "/Servers/DeleteDaemon",
                            "id=" + id,

                            function (data) {
                                if (data == "0"){
                                    message.html("删除成功 请刷新本页面");

                                    messageBox.fadeIn(400);
                                    setTimeout(function () {
                                        messageBox.fadeOut(400,"linear");

                                        setTimeout(function () {
                                            location.reload();
                                        },420);
                                    },700);

                                    return;
                                }

                                if (data == "-2"){
                                    message.html("此Daemon上搭载着服务器 无法删除");

                                    messageBox.fadeIn(400);
                                    setTimeout(function () {
                                        messageBox.fadeOut(400,"linear");
                                    },600);
                                    return;
                                }

                                if (data == "-1"){
                                    message.html("错误: 无法获取DaemonID 请联系开发者");

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
                            }
                        );
                    }
                });

            });
        </script>
	</head>