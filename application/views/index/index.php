<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <title>后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="<?php echo base_url()?>public/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url()?>public/css/global.css" media="all">
    <link rel="stylesheet" href="<?php echo base_url()?>public/font-awesome/css/font-awesome.min.css">

  </head>

  <body>
    <div class="layui-layout layui-layout-admin">
      <div class="layui-header header header-demo">
        <div class="layui-main">
          <div class="admin-login-box">
            <a class="logo" style="left: 0;" href="http://beginner.zhengjinfan.cn/demo/beginner_admin/">
              <span style="font-size: 22px;">BeginnerAdmin</span>
            </a>
            <div class="admin-side-toggle">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
          </div>
          <ul class="layui-nav admin-header-item">
            <li class="layui-nav-item">
              <a href="javascript:;">清除缓存</a>
            </li>
            <li class="layui-nav-item">
              <a href="javascript:;">浏览网站</a>
            </li>
            <li class="layui-nav-item">
              <a href="javascript:;" class="admin-header-user">
                <img src="images/0.jpg" />
                <span>beginner</span>
              </a>
              <dl class="layui-nav-child">
                <dd>
                  <a href="javascript:;"><i class="fa fa-user-circle" aria-hidden="true"></i> 个人信息</a>
                </dd>
                <dd>
                  <a href="javascript:;"><i class="fa fa-gear" aria-hidden="true"></i> 设置</a>
                </dd>
                <dd>
                  <a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
                </dd>
              </dl>
            </li>
          </ul>
          <ul class="layui-nav admin-header-item-mobile">
            <li class="layui-nav-item">
              <a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="layui-side layui-bg-black" id="admin-side">
        <div class="layui-side-scroll" id="admin-navbar-side" lay-filter="side">
        </div>
      </div>
      <div class="layui-body" style="bottom: 0;border-left: solid 2px #1AA094;" id="admin-body">
        <div class="layui-tab admin-nav-card layui-tab-brief" lay-filter="admin-tab">
          <ul class="layui-tab-title">
            <li class="layui-this">
              <i class="fa fa-dashboard" aria-hidden="true"></i>
              <cite>控制面板</cite>
            </li>
          </ul>
          <div class="layui-tab-content" style="min-height: 150px; padding: 5px 0 0 0;">
            <div class="layui-tab-item layui-show">
              <iframe >123</iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="layui-footer footer footer-demo" id="admin-footer">
        <div class="layui-main">
          <p>2016 &copy;
            <a href="">123</a>
          </p>
        </div>
      </div>
      <div class="site-tree-mobile layui-hide">
        <i class="layui-icon">&#xe602;</i>
      </div>
      <div class="site-mobile-shade"></div>
      
      <script type="text/javascript" src="<?php echo base_url()?>public/layui/layui.js"></script>
      <script type="text/javascript">
          var navs = [{
      "title": "基本元素",
      "icon": "fa-cubes",
      "spread": true,
      "children": [{
        "title": "按钮",
        "icon": "&#xe641;",
        "href": "button.html"
      }, {
        "title": "表单",
        "icon": "&#xe63c;",
        "href": "form.html"
      }, {
        "title": "表格",
        "icon": "&#xe63c;",
        "href": "table.html"
      }, {
        "title": "导航",
        "icon": "&#xe609;",
        "href": "nav.html"
      }, {
        "title": "Tab选项卡",
        "icon": "&#xe62a;",
        "href": "tab.html"
      }, {
        "title": "辅助性元素",
        "icon": "&#xe60c;",
        "href": "auxiliar.html"
      }]
    }, {
      "title": "组件",
      "icon": "fa-cogs",
      "spread": false,
      "children": [{
        "title": "Datatable",
        "icon": "fa-table",
        "href": "begtable.html"
      }, {
        "title": "Navbar组件",
        "icon": "fa-navicon",
        "href": "navbar.html"
      }]
    }, {
      "title": "第三方组件",
      "icon": "&#x1002;",
      "spread": false,
      "children": [{
        "title": "iCheck组件",
        "icon": "fa-check-square-o",
        "href": "icheck.html"
      }]
    }, {
      "title": "地址本",
      "icon": "fa-address-book",
      "href": "",
      "spread": true,
      "children": [{
        "title": "Github",
        "icon": "fa-github",
        "href": "https://www.github.com/"
      }, {
        "title": "QQ",
        "icon": "fa-qq",
        "href": "http://www.qq.com/"
      }, {
        "title": "Fly社区",
        "icon": "&#xe609;",
        "href": "http://fly.layui.com/"
      }, {
        "title": "新浪微博",
        "icon": "fa-weibo",
        "href": "http://weibo.com/"
      }]
    }, {
      "title": "这是一级导航",
      "icon": "fa-stop-circle",
      "href": "https://www.baidu.com",
      "spread": false
    }];
    </script>
      <script src="<?php echo base_url()?>public/js/index.js"></script>
    </div>
    
  </body>

</html>