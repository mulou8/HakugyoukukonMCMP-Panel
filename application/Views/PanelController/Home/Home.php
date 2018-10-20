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
                <div class="small-box-container">

                    <div class="small-box">
                        <div class="small-box-title"><strong>用户ID</strong></div>

                        <div class="small-box-body" id="times">
                            <?php echo $id?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><strong>用户名</strong></div>

                        <div class="small-box-body" id="text">
                            <?php echo $username?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><strong>邮箱</strong></div>

                        <div class="small-box-body" id="text">
                            <?php echo $email?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><strong>登录次数</strong></div>

                        <div class="small-box-body" id="times">
                            <?php echo $loginTimes?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><strong>登录失败</strong></div>

                        <div class="small-box-body" id="times">
                            <?php echo $loginFailure?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><strong>Token验证错误</strong></div>

                        <div class="small-box-body" id="times">
                            <?php echo $authenticationFailure?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>