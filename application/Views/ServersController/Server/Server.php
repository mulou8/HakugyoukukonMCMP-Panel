<div class="container-main">
        <div class="list-daemon">
            <div class="box">
                <div class="box-head">服务器列表</div>

                <script type="text/javascript">
                    function EditServer(id){
                        var messageBox = $(window.parent.document).find(".container-message");
                        var message = $(window.parent.document).find("#message");

                        message.html("加载中 请稍后");
                        messageBox.fadeIn(200);

                        $.ajax({
                            url: "/Servers/ServerInfo",
                            async: true,
                            processData: false,
                            type: "POST",
                            timeout: 4000,
                            data: "id=" + id,

                            success: function (json_data) {
                                var json = JSON.parse(json_data);

                                var id = json.id;
                                var name = json.name;
                                var max_memory = json.max_memory;
                                var run_cmd = json.run_cmd;
                                var stop_cmd = json.stop_cmd;
                                var jar_name = json.jar_name;
                                var port = json.port;

                                $("#update-id").val(id);
                                $("#update-name").val(name);
                                $("#update-memory").val(max_memory);
                                $("#update-core").val(jar_name);
                                $("#update-start").val(run_cmd);
                                $("#update-stop").val(stop_cmd);
                                $("#update-port").val(port);

                                setTimeout(function () {
                                    messageBox.fadeOut(200,"linear");
                                },200);

                                $("#daemon-info").show();
                            },

                            error: function (err,text) {
                                message.html("<code>AJAX请求错误: " + err.status + "&nbsp;" + text +"</code>");

                                setTimeout(function () {
                                    messageBox.fadeOut(200,"linear");
                                },600);
                            }
                        });
                    }
                </script>

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
                                <input type="hidden" class="form-input" id="update-id">
                                <input type="text" class="form-input" id="update-name" placeholder="MyServer">

                                <p>最大内存(mb)</p>
                                <input type="text" class="form-input" id="update-memory" placeholder="1024">

                                <p>核心文件名字</p>
                                <input type="text" class="form-input" id="update-core" placeholder="Spigot.jar">

                                <p>启动命令</p>
                                <input type="text" class="form-input" id="update-start">

                                <p>停止命令</p>
                                <input type="text" class="form-input" id="update-stop">

                                <p>服务器端口</p>
                                <input type="text" class="form-input" id="update-port" placeholder="25565">

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