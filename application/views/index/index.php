<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <body>
    <div class="layui-layout layui-layout-admin">
      <div class="layui-header header header-demo">
        <div class="layui-main">
          <div class="admin-login-box">
            <a class="logo" style="left: 0;" href="http://beginner.zhengjinfan.cn/demo/beginner_admin/">
              <span style="font-size: 22px;">forfree</span>
            </a>
            <!-- <div class="admin-side-toggle">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div> -->
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
                <img src="/public/images/0.jpg" />
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
                  <a href="/login/out"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
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
              <cite>工作台</cite>
            </li>
          </ul>
          <div class="layui-tab-content" style="min-height: 150px; padding: 5px 0 0 0;">
            <div class="layui-tab-item layui-show">
              <iframe >123</iframe>
            </div>
          </div>
        </div>
      </div>