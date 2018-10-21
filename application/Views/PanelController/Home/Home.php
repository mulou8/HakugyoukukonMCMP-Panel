<body>
<div class="container-info">
    <div class="SaigyoujiYuyuko_box" id="survey">
        <div class="box-info">
            <div class="box-head">
                <div class="box-title">基础信息</div>
            </div>

            <div class="box-body">
                <div class="small-box-container">

                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-cubes" style="font-size: 30px;"></i><br><strong>Deamon数量</strong></div>

                        <div class="small-box-body" id="times">
                            0
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-server" style="font-size: 30px;"></i><br><strong>MC服务器数量</strong></div>

                        <div class="small-box-body" id="times">
                            0
                        </div>
                    </div>


                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-key" style="font-size: 30px;"></i><br><strong>登陆次数</strong></div>

                        <div class="small-box-body" id="times">
                            <?php echo $loginTimes?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-close" style="font-size: 30px;"></i><br><strong>登录失败</strong></div>

                        <div class="small-box-body" id="times">
                            <?php echo $loginFailureTimes?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-user-times" style="font-size: 30px;"></i><br><strong>Token验证失败</strong></div>

                        <div class="small-box-body" id="times">
                            <?php echo $authenticationFailure?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="SaigyoujiYuyuko_box" id="survey">
        <div class="box-info">
            <div class="box-head">
                <div class="box-title">当前用户信息</div>
            </div>

            <div class="box-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><p>用户ID</p></td>
                            <td><?php echo $id?></td>
                        </tr>

                        <tr>
                            <td><p>用户名</p></td>
                            <td><?php echo $username?></td>
                        </tr>

                        <tr>
                            <td><p>邮箱</p></td>
                            <td><?php echo $email?></td>
                        </tr>

                        <tr>
                            <td><p>登录次数</p></td>
                            <td><?php echo $loginTimes?></td>
                        </tr>

                        <tr>
                            <td><p>登录失败</p></td>
                            <td><?php echo $loginFailure?></td>
                        </tr>

                        <tr>
                            <td><p>Token验证失败</p></td>
                            <td><?php echo $authenticationFailure?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="SaigyoujiYuyuko_box" id="survey">
        <div class="box-info">
            <div class="box-head">
                <div class="box-title">版本信息</div>
            </div>

            <div class="box-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><p>当前版本</p></td>
                            <td>V<?php echo APP_VER?></td>
                        </tr>

                        <tr>
                            <td><p>最新版本</p></td>
                            <td><?php echo $newVersion?></td>
                        </tr>

                        <tr>
                            <td><p>版本类型</p></td>
                            <td><?php echo $type?></td>
                        </tr>

                        <tr>
                            <td><p>发布日期</p></td>
                            <td><?php echo $releaseDate?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>