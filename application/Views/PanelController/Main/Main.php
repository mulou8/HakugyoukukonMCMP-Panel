<body id="body">

<div class="container-message">
    <div class="message-box">
        <h2>提示:</h2>
        <p id="message"></p>
    </div>
</div>



<div class="tools">
    <div id="title">
        <div class="bar">
            <p id="login-out"><i class="fa fa-sign-out"></i>退出登录</p>
        </div>
    </div>

    <div class="itmes">
        <ul>
            <li class="image-li">
                <div class="container-image">
                    <img class="image" src="https://www.gravatar.com/avatar/<?php echo $emailMd5?>?s=80">

                    <div class="text">
                        <p id="username"><?php echo $username?></p>
                        <p style="font-family: 'nico'; color: #72d3ff">HGK-MCSMP</p>
                    </div>
                </div>

            </li>

            <li id="home" class="use">
                <p class="fa fa-home"></p>&nbsp;<?php echo $home?>
            </li>

            <li id="systemInfo" class="use">
                <p class="fa fa-dashboard"></p>&nbsp;<?php echo $systemInfo?>
            </li>

            <li id="Cmd" class="use">
                <p class="fa fa-terminal"></p>&nbsp;&nbsp;<?php echo $terminal?>
            </li>

            <li id="Server" class="use">
                <p class="fa fa-server"></p>&nbsp;<?php echo $ServerManagement?>
            </li>

            <li id="Daemon" class="use">
                <p class="fa fa-cubes"></p>&nbsp;<?php echo $DaemonManagement?>
            </li>


            <li id="userManagement" class="use">
                <p class="fa fa-users"></p>&nbsp;<?php echo $userManagement?>
            </li>
        </ul>
    </div>


    <div class="Main-Part">
        <iframe id="iframe" src="/Panel/Home"></iframe>
    </div>

</div>
