<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<meta  http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="renderer" content="ie-stand">


        <link rel="stylesheet" href="/static/css/font-awesome.css"/>
		<link rel="stylesheet" href="/static/css/Panel/Home.css"/>
        <link rel="stylesheet" href="/static/css/SaigyoujiYuyuko.css">
        <link rel="stylesheet" href="/static/css/bootstrap.css">

        <script type="text/javascript" src="/static/js/jquery-3.2.1.js"></script>

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

        <script type="text/javascript">
            $(document).ready(function () {
                $("#time_used",window.parent.document).html(<?php echo USED?>);
            });
        </script>
	</head>