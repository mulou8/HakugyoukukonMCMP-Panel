<div class="container-main">
        <div class="list-daemon">
            <div class="box">
                <div class="box-head">服务器列表</div>

                <div class="box-body">
                    <?php echo $ServerList?>
                </div>
            </div>

            <div class="container-edit">

                <div class="Modify-daemon">
                    <div class="box">
                        <div class="box-head">修改服务器信息</div>

                        <div class="box-body">
                            <p>选择一个服务器来进行修改</p>

                            <div class="daemon-info" id="daemon-info">
                                <p>服务器名称</p>
                                <input type="hidden" id="update-DaemonID">
                                <input type="text" class="form-input" id="update-name">

                                <div id="right">
                                    <button type="button" id="delete" class="btn btn-danger" style="margin-right: 6px;">删除服务器</button>
                                    <button type="button" id="update" class="btn btn-primary">更新服务器</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="add-daemon">
                    <div class="box">
                        <div class="box-head">添加服务器</div>

                        <div class="box-body">

                            <div class="daemon-info">
                                <p>服务器名称</p>
                                <input type="text" class="form-input" id="server-name" placeholder="MyServer">

                                <p>选择 Daemon</p>
                                <select class="form-input" id="daemon">
                                    <?php echo $daemon?>
                                </select>

                                <p>最大内存(mb)</p>
                                <input type="text" class="form-input" id="server-memory" placeholder="1024">

                                <p>核心文件名字</p>
                                <input type="text" class="form-input" id="core-name" placeholder="Spigot.jar">

                                <p>启动命令</p>
                                <input type="text" class="form-input" id="start-cmd" value="java -Xmx{maxram}M -Xms128M -jar {jar}">

                                <p>停止命令</p>
                                <input type="text" class="form-input" id="stop-cmd" value="stop">

                                <p>服务器端口</p>
                                <input type="text" class="form-input" id="server-port" placeholder="25565">

                                <p>服务器 FTP 密码</p>
                                <input type="text" class="form-input" id="ftp-pass" placeholder="123123">

                                <div id="right">
                                    <button type="button" id="add" class="btn btn-success">添加服务器</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>