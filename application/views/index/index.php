<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <title>RMS</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/layui/css/layui.css">
  <script type="text/javascript" src="<?php echo base_url()?>public/layui/layui.js"></script>
  <style type="text/css">
    #header-title{
      font-size: 24px;
      color: #FFF;
      margin-left: 20px;
      line-height: 50px;
      width: 30%;
    }
    .header-right{
      float: right;
    }
    .header-right img {
      width: 50px;
    }
  </style>
</head>
<body>
  <div class="layui-layout-admin">
    <div class="layui-header layui-bg-black">
      <div clas="layui-main" >
        <span id="header-title">管理系统</span>
        <span class="header-right">
          <img src="<?php echo base_url()?>public/images/f.png">
        </span>
      </div>
    </div>
    <div class="layui-side layui-bg-black">
      <ul class="layui-nav layui-nav-tree">
        <li class="layui-nav-item layui-nav-itemed">
          <a href="javascript:void(0);">系统管理</a>
          <dl class="layui-nav-child">
            <dd><a href="<?php echo site_url('')?>">选项一</a></dd>
            <dd><a href="javascript:;">选项二</a></dd>
            <dd><a href="javascript:;">选项三</a></dd>
            <dd><a href="">跳转项</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">解决方案</a>
          <dl class="layui-nav-child">
            <dd><a href="">移动模块</a></dd>
            <dd><a href="">后台模版</a></dd>
            <dd><a href="">电商平台</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item"><a href="">云市场</a></li>
        <li class="layui-nav-item"><a href="">社区</a></li>
      </ul>
    </div>
    <div class="layui-body">
      
    </div>
  </div>
  <script>
    layui.use('element', function(){
      var element = layui.element(); //导航的hover效果、二级菜单等功能，需要依赖element模块
      
      //监听导航点击
      element.on('nav(demo)', function(elem){
        //console.log(elem)
        layer.msg(elem.text());
      });
    });
  </script>
</body>
</html>