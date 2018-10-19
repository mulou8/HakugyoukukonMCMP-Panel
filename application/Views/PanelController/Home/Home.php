<body>
<div class="container-info">
    <div class="SaigyoujiYuyuko_box" id="survey">
        <div class="box-info">
            <div class="box-head">
                <div class="box-title">用户信息</div>
            </div>

            <div class="box-body">
                <div class="small-box-container">

                    <div class="small-box">
                        <div class="small-box-title">登陆次数</div>

                        <div class="small-box-body" id="times">
                            <?php echo $loginTimes?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title">登录失败</div>

                        <div class="small-box-body" id="times">
                            <?php echo $loginFailureTimes?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title">Token验证失败</div>

                        <div class="small-box-body" id="times">
                            10
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



</div>