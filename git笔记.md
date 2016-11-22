
git
 
一、了解git与svn
 git:是分布式版本控制工具
 svn:集中式版本控制工具 


git与github关系




cmder

github客户端软件：https://desktop.github.com/
mysysgit:https://git-for-windows.github.io/

二、dos常用命令
cd 目录  进入某级目录
cls 清屏
dir 查看文件或目录
md 创建目录
rd 删除目录

三、git常用命令： 
  

  git init   git初始化,目的让git可识别跟踪咱们的项目文件
  git status  查看文件状态
  git add 文件  添加文件
  git commit  -m '文字说明' 提交版本
  查看提交日志： git log --pretty=oneline

   其中：--pretty=oneline 在一行显示，清晰简洁

  时间穿越:git reset --hard 提交id

   回到过去：


git代码托管平台：

  github
  gitlab
  Bitbucket


  如果要忽略一些文件（包括敏感文件，配置文件等），可以添加到.gitignore文件中

四、如果将本地代码推送到代码托管平台，例如：github


    第一步：github帐号

    第二步：在本地配置用户名和邮箱

配置用户名：
git config --global user.name "1412fe.c"
配置邮箱：
git config --global user.email "1412fe@126.com"

查看配置列表：
git config --list

    第三步：生成ssh公钥和密钥对



具体生成方法： 
https://help.github.com/articles/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent/


例如： ssh-keygen -t rsa  -C "1412fe@126.com"

会在C:\Users\Administrator\.ssh目录生成两个文件，其中将id_rsa.pub添加到远程settings的ssh选项中

  第四步：创建远程仓库

  测试与github是否联通

  远程连接：
     git remote add origin git@github.com:w3cteching/weixintest.git

   开始推送:

    git push -u origin master

   注意：如果远程仓库的文件本地没有，则应先拉取，再推送

     拉取：git pull origin master


   不用终端（命令行），可以用GUI(图形界面)

   git与各种编辑器(brackets,sublime,hbuilder,webstorm)集成
   

  git分支管理
  解决文件冲突
  tag管理
  多人协作

  

    
 







