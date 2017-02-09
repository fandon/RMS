<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>添加用户</legend>
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
<script type="text/javascript">
  layui.use(['jquery','layer'],function(){
    var $ = layui.jquery;
    layer = layui.layer;
    $("#submit_btn").on('click',function(){
      var acc = $("#account").val();
      var pwd = $("#pwd").val();
      $.post("/user/add_user",{account:acc,pwd:pwd},function(data,status){
        if(data.status==1){
          layer.open({
            type:0,
            icon:1,
            content:"添加用户成功！",
            yes: function(){
              window.location.reload();
            }
          });
        }else{
          layer.open({
            type:0,
            icon:2,
            content:"添加用户失败！",
            yes: function(){
              window.location.reload();
            }
          });
        }
      }
        );
    });
  });
</script>