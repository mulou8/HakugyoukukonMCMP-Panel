<div class="container-main">
        <div class="list-daemon">
            <div class="box">
                <div class="box-head">Daemon列表</div>

                <div class="box-body">
                    <?php echo $DaemonList?>
                </div>
            </div>

            <div class="container-edit">

                <div class="Modify-daemon">
                    <div class="box">
                        <div class="box-head">修改Daemon</div>

                        <div class="box-body">
                            <p>选择一个Daemon来进行修改</p>

                            <div class="daemon-info">
                                <p>Daemon 名称</p>
                                <input type="text" class="form-input" id="name">

                                <p>连接密码</p>
                                <input type="text" class="form-input" id="name">

                                <p>IP/域名</p>
                                <input type="text" class="form-input" id="name">

                                <p>Ajax 地址</p>
                                <input type="text" class="form-input" id="name">

                                <p>系统类型</p>
                                <select class="form-input">
                                    <option value="Linux">Linux x64/84</option>
                                    <option value="Windows">Windows x64/84</option>
                                </select>

                                <div id="right">
                                    <button type="button" id="delete" class="btn btn-danger" style="margin-right: 6px;">删除Daemom</button>
                                    <button type="button" id="update" class="btn btn-primary">更新Daemom</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add-daemon">
                    <div class="box">
                        <div class="box-head">添加Daemon</div>

                        <div class="box-body">

                            <div class="daemon-info">
                                <p>Daemon 名称</p>
                                <input type="text" class="form-input" id="add-name">

                                <p>连接密码</p>
                                <input type="text" class="form-input" id="add-key">

                                <p>IP/域名</p>
                                <input type="text" class="form-input" id="add-fqdn">

                                <p>Ajax 地址</p>
                                <input type="text" class="form-input" id="add-ajax">

                                <p>系统类型</p>
                                <select class="form-input" id="os">
                                    <option value="Linux">Linux x64/84</option>
                                    <option value="Windows">Windows x64/84</option>
                                </select>

                                <div id="right">
                                    <button type="button" id="add" class="btn btn-success">添加Daemom</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>