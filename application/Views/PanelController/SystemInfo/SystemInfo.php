<body>
<div class="container-info">
    <div class="SaigyoujiYuyuko_box" id="web-info">
        <div class="box-info">

            <div class="box-head">
                <div class="box-title">Web服务器信息</div>
            </div>

            <div class="box-body">
                <p>WEB 服务器: <?php echo $_SERVER['SERVER_SOFTWARE'];?></p>
                <p>WEB 服务器端口: <?php echo $_SERVER['SERVER_PORT'];?></p>
                <p>PHP运行方式: <?php echo php_sapi_name();?></p>
                <p>当前客户端IP: <?php echo $_SERVER['REMOTE_ADDR'];?></p>
                <p>当前域名: <?php echo $_SERVER["HTTP_HOST"];?></p>
                <p>HTTP版本: <?php echo getenv('SERVER_PROTOCOL');;?></p>
            </div>

        </div>
    </div>

    <div class="SaigyoujiYuyuko_box" id="system-info">
        <div class="box-info">

            <div class="box-head">
                <div class="box-title">系统信息</div>
            </div>

            <div class="box-body">
                <p>WEB 服务器: <?php echo $_SERVER['SERVER_SOFTWARE'];?></p>
                <p>PHP版本: <?php echo PHP_VERSION;?></p>
                <p>ZEND版本: <?php echo zend_version();?></p>
                <p>PHP运行方式: <?php echo php_sapi_name();?></p>
                <p>操作系统: <?php echo php_uname();?></p>
                <p>PHP当前进程ID: <?php echo getmypid();?></p>
            </div>

        </div>
    </div>

</div>

<div class="SaigyoujiYuyuko_box" id="system-usage">
    <div class="box-info">

        <div class="box-head">
            <div class="box-title">面板信息</div>
        </div>

        <div class="box-body">
            <div class="small-box-container">

                <div class="small-box">
                    <div class="small-box-title"><strong>当前版本</strong></div>

                    <div class="small-box-body" id="times">
                        <?php echo APP_VER?>
                    </div>
                </div>

                <div class="small-box">
                    <div class="small-box-title"><strong>最新版本</strong></div>

                    <div class="small-box-body" id="times">
                        <?php echo APP_VER?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>