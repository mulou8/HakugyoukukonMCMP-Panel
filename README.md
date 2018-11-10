# 序词
这个项目终于做完了~

# HakugyoukukonMCMP
开源 | 跨平台 | 分布式 | 内置 FTP | 支持群组 | 支持 Docker

欢迎使用 HakugyoukukonMCMP，这是一款 Minecraft 服务器管理系统，由 SaigyoujiYuyuko 开发。

![Logo](https://static.saigyoujiyuyuko.top:9000/HGK-MCMP/Logo.png)

### 简介
大家好, 这次是我的第一个大型项目。

HakugyoukukonMCMP 拥有很多强大的功能，具体有哪些亮点呢？我们一起往下看。

### 主要功能
> 1. 完整的 Minecraft 服务器管理功能
> 2. 支持跨平台，Windows 和 Linux 都能运行，甚至可以运行在手机上
> 3. 支持多节点，轻松实现分布式
> 4. 内置 FTP 文件传输功能
> 5. 支持 Docker 容器（通过命令调用方式启动容器 需要修改启动命令）
> 6. 可以运行除了 Minecraft 以外的其他游戏服务器
> 7. 可以运行Shell命令

### 安全性
本次HakugyoukukonMCMP 使用 BCrypt 加密。

HakugyoukukonMCMP 使用Java Daemon 加标准输入输出。

理论上面板可以执行任何命令行，所以建议您不要用于商业出租，或者使用 Docker 容器并拒绝普通用户设置启动命令参数。

### 使用方法
#### 添加用户
> 执行Mysql语句 INSERT INTO \`user\`(\`username\`, \`password\`, \`email\`) VALUES (\"用户名\",\"BCrypt加密后的密码\",\"邮箱\")

#### 如何获取BCrypt加密后的密文
> https://api.saigyoujiyuyuko.top:9000/BCrypt.php?pass=你的密码
> 
密码为123123的密文: https://api.saigyoujiyuyuko.top:9000/BCrypt.php?pass=123123


### 将来更新
> 1.暂无qwq

### 更新日志

#### V1.0.0
> 1. 没什么
> 2. 基本的功能实现

### 后续
> 。。。这个文档是抄Nico的啦  怪麻烦的。。。
