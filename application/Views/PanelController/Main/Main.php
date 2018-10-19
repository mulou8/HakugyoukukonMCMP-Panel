<body>

<div class="tools">
    <p id="title">
        <?php echo $title?>
    </p>

    <div class="itmes">
        <ul>

            <li id="home">
                <p class="fa fa-home"></p>&nbsp;<?php echo $home?>
            </li>

            <li id="systemInfo">
                <p class="fa fa-dashboard"></p>&nbsp;<?php echo $systemInfo?>
            </li>

            <li id="systemSetting">
                <p class="fa fa-cog"></p>&nbsp;&nbsp;<?php echo $systemSetting?>
            </li>

            <li id="serverList">
                <p class="fa fa-server"></p>&nbsp;<?php echo $serverList?>
            </li>

            <li id="addServer">
                <p class="fa fa-plus"></p>&nbsp;&nbsp;<?php echo $addServer?>
            </li>

            <li id="userManagement">
                <p class="fa fa-users"></p>&nbsp;<?php echo $userManagement?>
            </li>

        </ul>
    </div>


    <div class="Main-Part">
        <iframe id="iframe" src="/Panel/Home"></iframe>
    </div>

</div>
