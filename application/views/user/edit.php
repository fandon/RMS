<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>编辑用户</legend>
</fieldset>
<div class="layui-form">
	 <div class="layui-form-item">
    <label class="layui-form-label">账号</label>
    <div class="layui-input-inline">
      <input type="text" id="account" required  lay-verify="required" value="123" placeholder="请输入账号" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">密码框</label>
    <div class="layui-input-inline">
      <input type="password" name="pwd" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">辅助文字</div>
  </div>
	<div class="layui-form-item">
    <div class="layui-input-block">
    	<button id="submit_btn" class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
    	<button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</div>