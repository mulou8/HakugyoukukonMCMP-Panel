<?php

?>
<html>
	<head>
		<title></title>
		
		
		<meta  http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="renderer" content="ie-stand">
		
		<link rel="stylesheet" href="/static/css/bootstrap.css"/>
		<link rel="stylesheet" href="/static/css/bootstrap-theme.css"/>
		<link rel="stylesheet" href="/static/css/bootbutton.css"/>
		<link rel="stylesheet" href="/static/css/font-awesome.css"/>
		<link rel="stylesheet" href="/static/css/SaigyoujiYuyuko.css"/>
		<link rel="stylesheet" href="/static/css/jquery-ui.css"/>
		<link rel="stylesheet" href="/static/css/Panel/Home.css"/>

        <link rel="shortcut icon" href="/static/png/SaigyoujiYuyuko/yoyoko.jpg"/>
        <link rel="preload" href="/static/fonts/FontAwesome.otf" as="FontAwesome" type="font/otf" crossorigin>
        <link rel="preload" href="/static/fonts/en.ttf" as="en" type="font/ttf" crossorigin>

		<script src="/static/js/jquery-3.2.1.js"></script>
		<script src="/static/js/jquery-ui.js"></script>
		
		<style>
		
			body{
				background-color: #f1f1f1;
				font-family: 'en','FontAwesome',"Arial","Microsoft YaHei","黑体","宋体",sans-serif;
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
                $("li").click(function (e) {
                    var name = $(e.target).attr('id');

                    if (name == "home"){
                        $("iframe").fadeIn(200);
                        $("iframe").attr("src","/Panel/Home");
                        return;
                    }

                    if (name == "systemInfo"){
                        $("iframe").fadeIn(200);
                        $("iframe").attr("src","/Panel/SystemInfo");
                        return;
                    }

                    if (name == "systemSetting"){
                        $("iframe").fadeIn(200);
                        $("iframe").attr("src","/Panel/SystemSetting");
                        return;
                    }

                    if (name == "serverList"){
                        $("iframe").fadeIn(200);
                        $("iframe").attr("src","/Servers/ServerList");
                        return;
                    }

                    if (name == "addServer"){
                        $("iframe").fadeIn(200);
                        $("iframe").attr("src","/Servers/AddServer");
                        return;
                    }

                    if (name == "userManagement"){
                        $("iframe").fadeIn(200);
                        $("iframe").attr("src","/Panel/UserManagement");
                        return;
                    }


                });
            });
        </script>

	</head>