<?php

?>
<html>
	<head>
		<title>HMCM | 白玉魂MC服务器管理面板</title>
		
		
		<meta  http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="renderer" content="ie-stand">
		
		<link rel="stylesheet" href="/static/css/bootstrap.css"/>
		<link rel="stylesheet" href="/static/css/bootstrap-theme.css"/>
		<link rel="stylesheet" href="/static/css/bootbutton.css"/>
		<link rel="stylesheet" href="/static/css/font-awesome.css"/>
		<link rel="stylesheet" href="/static/css/SaigyoujiYuyuko.css"/>
		<link rel="stylesheet" href="/static/css/jquery-ui.css"/>
		<link rel="stylesheet" href="/static/css/Main/Main.css"/>

        <link rel="shortcut icon" href="/static/png/SaigyoujiYuyuko/yoyoko.jpg"/>
        <link rel="preload" href="/static/fonts/FontAwesome.otf" as="FontAwesome" type="font/otf" crossorigin>
        <link rel="preload" href="/static/fonts/en.ttf" as="en" type="font/ttf" crossorigin>

		<script src="/static/js/jquery-3.2.1.js"></script>
		<script src="/static/js/jquery-ui.js"></script>
		
		<style>
		
			body{
				background-color: #f1f1f1;
				font-family: 'en','FontAwesome';
			}
			
			@font-face{
				font-family: 'FontAwesome';
                font-display:auto;
				src: url('/static/fonts/FontAwesome.otf');
			}

            @font-face{
                font-family: 'en';
                font-display:auto;
                src: url('/static/fonts/en.ttf');
            }

		</style>


        <script>
            $(document).ready(function () {
                $(".err").hide();

                $("#login").click(function () {

                    var username = $("#username").val();
                    var password = $("#password").val();

                    if (username == ""){diverr("用户名不能为空!"); return;}
                    if (password == ""){diverr("密码不能为空!"); return;}

                    $.post(
                        '/User/Login',
                        'username=' + username + "&password=" + password,
                        function (data) {
                            if (data == -1){
                                diverr("用户名或密码错误!");
                                return;
                            }

                            if (data == 0){
                                //alert(data);
                                window.location.href = "/Panel/Main";
                            }
                        }
                    );

                });


                function diverr(msg) {
                    $(".err").html(msg);
                    $(".err").show();

                    // Magic. Do not touch.
                    setTimeout(function () {
                        $(".err").toggle("fade","swing",500);
                    },2000);
                }
            });
        </script>
	</head>