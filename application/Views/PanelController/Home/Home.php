<body>
<div class="container-info">
    <div class="SaigyoujiYuyuko_box" id="survey">
        <div class="box-info">
            <div class="box-head">
                <div class="box-title"><?php echo $MainInfoTitle?></div>
            </div>

            <div class="box-body">
                <div class="small-box-container">

                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-cubes" style="font-size: 30px;"></i><br><strong><?php echo $DeamonNumber?></strong></div>

                        <div class="small-box-body" id="times">
                            0
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-server" style="font-size: 30px;"></i><br><strong><?php echo $McServerNumber?></strong></div>

                        <div class="small-box-body" id="times">
                            0
                        </div>
                    </div>


                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-key" style="font-size: 30px;"></i><br><strong><?php echo $LoginTimes?></strong></div>

                        <div class="small-box-body" id="times">
                            <?php echo $loginTimes?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-close" style="font-size: 30px;"></i><br><strong><?php echo $FailureTimes?></strong></div>

                        <div class="small-box-body" id="times">
                            <?php echo $loginFailureTimes?>
                        </div>
                    </div>

                    <div class="small-box">
                        <div class="small-box-title"><i class="fa fa-user-times" style="font-size: 30px;"></i><br><strong><?php echo $TokenFailureTimes?></strong></div>

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
                <div class="box-title"><?php echo $UserTitle?></div>
            </div>

            <div class="box-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><p><?php echo $UserID?></p></td>
                            <td><?php echo $id?></td>
                        </tr>

                        <tr>
                            <td><p><?php echo $Username?></p></td>
                            <td><?php echo $username?></td>
                        </tr>

                        <tr>
                            <td><p><?php echo $mail?></p></td>
                            <td><?php echo $email?></td>
                        </tr>

                        <tr>
                            <td><p><?php echo $LoginTimes?></p></td>
                            <td><?php echo $loginTimes?></td>
                        </tr>

                        <tr>
                            <td><p><?php echo $FailureTimes?></p></td>
                            <td><?php echo $loginFailure?></td>
                        </tr>

                        <tr>
                            <td><p><?php echo $TokenFailureTimes?></p></td>
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
                <div class="box-title"><?php echo $VerTitle?></div>
            </div>

            <div class="box-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td><p><?php echo $NowVer?></p></td>
                            <td>V<?php echo APP_VER?></td>
                        </tr>

                        <tr>
                            <td><p><?php echo $NewVer?></p></td>
                            <td>V<?php echo $newVersion?></td>
                        </tr>

                        <tr>
                            <td><p><?php echo $VerType?></p></td>
                            <td><?php echo $type?></td>
                        </tr>

                        <tr>
                            <td><p><?php echo $ReleaseDate?></p></td>
                            <td><?php echo $releaseDate?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>