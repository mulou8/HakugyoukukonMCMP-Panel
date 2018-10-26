<body>

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

            <li id="addServer" class="use">
                <p class="fa fa-plus"></p>&nbsp;&nbsp;<?php echo $addServer?>
            </li>

            <li id="serverList" class="use">
                <p class="fa fa-server"></p>&nbsp;<?php echo $serverList?>
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
