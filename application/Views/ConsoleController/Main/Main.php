<div class="main-container">
    <div class="col-lg-12">
        <div class="box" id="console">
            <div class="box-head">服务器控制台</div>

            <div class="box-body">
                <div class="contain-output">
                    <div class="output">
                        <code id="out-content" style="background-color: transparent; color: white">
                            欢迎使用HGK-MCSMP<br>
                            白玉魂MC服务器管理面板<br><br>
                            Github项目地址:<br>
                            Panel: https://github.com/SaigyoujiYuyuko233/HakugyoukukonMCMP-Panel<br>
                            Daemon: https://github.com/SaigyoujiYuyuko233/HakugyoukukonMCMP-Daemon<br><br>
                            请在下方选择一个服务器
                        </code>
                    </div>
                    <input type="text" class="form-input" placeholder="在此输入命令，Enter提交" id="cmd">
                </div>
            </div>
        </div>
    </div>

    <div class="tools-contain">
        <div class="col-lg-7">
            <div class="box" id="tool">
                <div class="box-head">服务器控制台</div>

                <div class="box-body">
                    <div class="online-player">
                        <p id="online">0</p><p>/</p><p id="max">0</p>
                    </div>

                    <div class="ping">
                        <p style="display: inline-block">当前延时:&nbsp;</p><p id="ping-value" style="display: inline-block">Unknown</p><p style="display: inline-block">&nbsp;ms</p>
                    </div>

                    <div class="server-info">
                        <div id="checkbox" style="margin-bottom: 6px;">
                            <input type="checkbox" id="bar" style="margin-top: 4px;display: inline-block;" checked="checked">&nbsp;
                            <p style="vertical-align: top; display: inline-block; margin: 0;">保持输出滚动</p>
                        </div>

                    </div>

                    <div class="btn-block">
                        <button class="btn btn-success" id="start"><i class="fa fa-play"></i>&nbsp;启动</button>&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-warning" id="restart"><i class="fa fa-retweet"></i>&nbsp;重启</button>&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-danger" id="stop"><i class="fa fa-stop"></i>&nbsp;关闭</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="box" id="chose-server">
                <div class="box-head">选择服务器</div>

                <script>
                    var messageBox = $(window.parent.document).find(".container-message");
                    var message = $(window.parent.document).find("#message");

                    var isChose = false;
                    var uuid = "";
                    var ajax_host = "";
                    var key = "";
                    var send = true;
                    var runcmd ="";
                    var stop ="";

                    //Chose Server
                    function chose(id) {
                        ajax("/Console/GetServerInfo","POST","id=" + id,4000,function (data) {
                            isChose = true;
                            send = true;

                            var json = JSON.parse(data);

                            uuid = json.uuid;
                            ajax_host = json.ajax;
                            key = json.key;
                            runcmd = json.runcmd;
                            stop = json.stop;
                        });
                    }

                    setInterval(function () {

                        if (isChose == true && send == true) {
                            //输出
                            ajax(ajax_host + "/ServerConsole/Output?uuid=" + uuid + "&key=" + key,"GET","",4000,function (data) {
                                $("#out-content").html(data);
                            },function (err,text) {
                                message.html("<code>与daemon的连接已断开: " + err.status + "&nbsp;" + text +"</code>");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);

                                send = false;
                                isChose = false;
                            });

                            //在线人数
                            ajax(ajax_host + "/GetInfo?uuid=" + uuid + "&key=" + key,"GET","",4000,function (data) {
                                var json = JSON.parse(data);

                                $("#max").html(json.max);
                                $("#online").html(json.online);
                            });

                            //Ping
                            ajax("/Console/Ping","POST","id=" + uuid,4000,function (data) {
                                $("#ping-value").html(data);
                            });
                        }

                    },1000);

                    //send
                    $("#cmd").keydown(function (event) {
                        if(event.keyCode == 13){

                            if (isChose == false){
                                message.html("<code>请先选择服务器</code>");

                                messageBox.fadeIn(400);
                                setTimeout(function () {
                                    messageBox.fadeOut(400,"linear");
                                },800);

                                return;
                            }

                            ajax(ajax_host + "/ServerConsole/Input?uuid=" + uuid + "&key=" + key + "&cmd=" + $("#cmd").val(),"GET","",4000,function () {
                                $("#cmd").val("");
                            });
                        }
                    });

                    //启动
                    $("#start").click(function () {
                        $.post(ajax_host + "/ServerConsole/Input?uuid=" + uuid + "&key=" + key + "&cmd=" + runcmd);
                    });

                    //启动
                    $("#stop").click(function () {
                        $.post(ajax_host + "/ServerConsole/Input?uuid=" + uuid + "&key=" + key + "&cmd=" + stop);
                    });

                    //启动
                    $("#restart").click(function () {
                        $.post(ajax_host + "/ServerConsole/Input?uuid=" + uuid + "&key=" + key + "&cmd=" + stop);

                        setTimeout(function () {
                            $.post(ajax_host + "/ServerConsole/Input?uuid=" + uuid + "&key=" + key + "&cmd=" + runcmd)
                        },4000);
                    });
                </script>

                <div class="box-body" id="server-list">

                </div>
            </div>
        </div>

    </div>

</div>
