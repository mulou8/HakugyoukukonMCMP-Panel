<body>
<div class="container-info">
    <div class="box" id="web-info">
            <div class="box-head" id="black">
                Web服务器信息
            </div>

            <div class="box-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>WEB 服务器: </td>
                            <td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
                        </tr>

                        <tr>
                            <td>WEB 服务器端口:</td>
                            <td><?php echo $_SERVER['SERVER_PORT'];?></td>
                        </tr>

                        <tr>
                            <td>PHP运行方式: </td>
                            <td><?php echo php_sapi_name();?></td>
                        </tr>

                        <tr>
                            <td>当前客户端IP: </td>
                            <td><?php echo $_SERVER['REMOTE_ADDR'];?></td>
                        </tr>

                        <tr>
                            <td>当前域名: </td>
                            <td><?php echo $_SERVER["HTTP_HOST"];?></td>
                        </tr>

                        <tr>
                            <td>HTTP版本: </td>
                            <td><?php echo getenv('SERVER_PROTOCOL');;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>


    <div class="box" id="system-info">
        <div class="box-head">
            <div class="box-title">系统信息</div>
        </div>

        <div class="box-body">
            <table>
                <tbody>
                    <tr>
                        <td>WEB 服务器: </td>
                        <td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
                    </tr>

                    <tr>
                        <td>PHP版本: </td>
                        <td><?php echo PHP_VERSION;?></td>
                    </tr>

                    <tr>
                        <td>ZEND版本: </td>
                        <td><?php echo zend_version();?></td>
                    </tr>

                    <tr>
                        <td>PHP运行方式: </td>
                        <td><?php echo php_sapi_name();?></td>
                    </tr>

                    <tr>
                        <td>操作系统: </td>
                        <td><?php echo php_uname();?></td>
                    </tr>

                    <tr>
                        <td>PHP当前进程PID: </td>
                        <td><?php echo getmypid();?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>