<html>
	<head>
		<title>白玉魂MC服务器管理面板 | 后台</title>
		
		
		<meta  http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="renderer" content="ie-stand">
		
		<link rel="stylesheet" href="/static/css/bootstrap.css"/>
		<link rel="stylesheet" href="/static/css/bootstrap-theme.css"/>
		<link rel="stylesheet" href="/static/css/bootbutton.css"/>
		<link rel="stylesheet" href="/static/css/font-awesome.css"/>
		<link rel="stylesheet" href="/static/css/SaigyoujiYuyuko.css"/>
		<link rel="stylesheet" href="/static/css/jquery-ui.css"/>
		<link rel="stylesheet" href="/static/css/Panel/Main.css"/>

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

            @font-face {
                font-family: 'Nico';
                font-display:auto;
                src: url('/static/fonts/nico.ttf');
            }

		</style>

        <script>
            $(document).ready(function () {
                //tools高度自适应
                var itmes_high = window.innerHeight - document.getElementById("title").scrollHeight - document.getElementsByClassName("com")[0].scrollHeight;
                document.getElementsByClassName("itmes")[0].style.height = itmes_high;

                //头像自适应
                $("ul").css("width",110 + document.getElementById("username").scrollWidth);

                //iframe自适应
                var windows_high = window.innerHeight;
                var windows_width = window.innerWidth;

                //alert(windows_width + "*" + windows_high);
                var iframe_width = document.getElementsByClassName("tools")[0].offsetWidth - $("ul").width(); // 198

                $(".Main-Part").css("height",itmes_high);
                $(".Main-Part").css("width",iframe_width);

                //ifream偏移
                $(".Main-Part").css("left",document.getElementsByClassName("itmes")[0].style.width);

                //alert(document.getElementsByClassName("tools")[0].offsetHeight);

                //页面大小自适应
                window.onresize = function(){
                    //tools高度自适应
                    var itmes_high = window.innerHeight - document.getElementById("title").scrollHeight - document.getElementsByClassName("com")[0].scrollHeight;
                    document.getElementsByClassName("itmes")[0].style.height = itmes_high;

                    //iframe自适应
                    var windows_high = window.innerHeight;
                    var windows_width = window.innerWidth;

                    //alert(windows_width + "*" + windows_high);
                    var iframe_width = document.getElementsByClassName("tools")[0].offsetWidth - $("ul").width(); // 198

                    $(".Main-Part").css("height",itmes_high);
                    $(".Main-Part").css("width",iframe_width);

                    //ifream偏移
                    $(".Main-Part").css("left",document.getElementsByClassName("itmes")[0].style.width);

                    //头像自适应
                    $("ul").css("width",190 + $("#username").offsetWidth);
                }





                $("li").click(function (e) {
                    var name = $(e.target).attr('id');

                    if (name == "home"){
                        $("iframe").attr("src","/Panel/Home");
                        return;
                    }

                    if (name == "systemInfo"){
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

                $("#login-out").click(function () {
                    $.get(
                        "/User/LoginOut",
                        function (data) {
                            document.write(data);
                        }
                    );
                });
            });
        </script>

	</head>