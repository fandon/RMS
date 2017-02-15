<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>添加菜单</legend>
</fieldset>
<div class="layui-form">
	<div class="layui-form-item">
    	<label class="layui-form-label">上级菜单</label>
	    <div class="layui-input-inline">
	      <select name="city">
	        <option value=""></option>
	        <option value="0">北京</option>
	        <option value="1">上海</option>
	        <option value="2">广州</option>
	        <option value="3">深圳</option>
	        <option value="4">杭州</option>
	      </select>
		</div>
	</div>
  	<div class="layui-form-item">
    	<label class="layui-form-label">菜单名称</label>
    	<div class="layui-input-inline">
        	<input type="password" name="pwd" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
    	</div>
    </div>
    <div class="layui-form-item">
    	<label class="layui-form-label">菜单地址</label>
    	<div class="layui-input-inline">
        	<input type="password" name="pwd" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
    	</div>
    </div>
    <div class="layui-form-item">
    	<label class="layui-form-label">菜单图标</label>
    	<div class="layui-input-inline">
        	<input id="icon" type="text" name="icon" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
    	</div>
    </div>
	<div class="layui-form-item">
    <div class="layui-input-block">
    	<button id="submit_btn" class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
    	<button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div> 
</div>
<div class="icons" style="display: none;">
	<i class='layui-icon'>&#xe611;</i>
	<i class='layui-icon'>&#xe614;</i>
	<i class='layui-icon'>&#xe60f;</i>
	<i class='layui-icon'>&#xe615;</i>
	<i class='layui-icon'>&#xe641;</i>
	<i class='layui-icon'>&#xe620;</i>
	<i class='layui-icon'>&#xe628;</i>
	<i class='layui-icon'>&#x1006;</i>
	<i class='layui-icon'>&#x1007;</i>
	<i class='layui-icon'>&#xe629;</i>
	<i class='layui-icon'>&#xe600;</i>
	<i class='layui-icon'>&#xe617;</i>
	<i class='layui-icon'>&#xe606;</i>
	<i class='layui-icon'>&#xe609;</i>
	<i class='layui-icon'>&#xe60a;</i>
	<i class='layui-icon'>&#xe62c;</i>
	<i class='layui-icon'>&#x1005;</i>
	<i class='layui-icon'>&#xe61b;</i>
	<i class='layui-icon'>&#xe610;</i>
	<i class='layui-icon'>&#xe62d;</i>
	<i class='layui-icon'>&#xe63d;</i>
	<i class='layui-icon'>&#xe602;</i>
	<i class='layui-icon'>&#xe603;</i>
	<i class='layui-icon'>&#xe62e;</i>
	<i class='layui-icon'>&#xe62f;</i>
	<i class='layui-icon'>&#xe61f;</i>
	<i class='layui-icon'>&#xe601;</i>
	<i class='layui-icon'>&#xe630;</i>
	<i class='layui-icon'>&#xe631;</i>
	<i class='layui-icon'>&#xe642;</i>
	<i class='layui-icon'>&#xe61a;</i>
	<i class='layui-icon'>&#xe621;</i>
	<i class='layui-icon'>&#xe632;</i>
	<i class='layui-icon'>&#xe618;</i>
	<i class='layui-icon'>&#xe608;</i>
	<i class='layui-icon'>&#xe633;</i>
	<i class='layui-icon'>&#xe61c;</i>
	<i class='layui-icon'>&#xe634;</i>
	<i class='layui-icon'>&#xe607;</i>
	<i class='layui-icon'>&#xe635;</i>
	<i class='layui-icon'>&#xe636;</i>
	<i class='layui-icon'>&#xe60b;</i>
	<i class='layui-icon'>&#xe619;</i>
	<i class='layui-icon'>&#xe637;</i>
	<i class='layui-icon'>&#xe61d;</i>
	<i class='layui-icon'>&#xe640;</i>
	<i class='layui-icon'>&#xe604;</i>
	<i class='layui-icon'>&#xe612;</i>
	<i class='layui-icon'>&#xe605;</i>
	<i class='layui-icon'>&#xe638;</i>
	<i class='layui-icon'>&#xe60c;</i>
	<i class='layui-icon'>&#xe616;</i>
	<i class='layui-icon'>&#xe613;</i>
	<i class='layui-icon'>&#xe61e;</i>
	<i class='layui-icon'>&#xe60d;</i>
	<i class='layui-icon'>&#xe64c;</i>
	<i class='layui-icon'>&#xe60e;</i>
	<i class='layui-icon'>&#xe622;</i>
	<i class='layui-icon'>&#xe64f;</i>
	<i class='layui-icon'>&#xe64d;</i>
	<i class='layui-icon'>&#xe639;</i>
	<i class='layui-icon'>&#xe623;</i>
	<i class='layui-icon'>&#xe63f;</i>
	<i class='layui-icon'>&#xe643;</i>
	<i class='layui-icon'>&#xe647;</i>
	<i class='layui-icon'>&#xe648;</i>
	<i class='layui-icon'>&#xe649;</i>
	<i class='layui-icon'>&#xe626;</i>
	<i class='layui-icon'>&#xe627;</i>
	<i class='layui-icon'>&#xe62b;</i>
	<i class='layui-icon'>&#xe63a;</i>
	<i class='layui-icon'>&#xe624;</i>
	<i class='layui-icon'>&#xe63b;</i>
	<i class='layui-icon'>&#xe650;</i>
	<i class='layui-icon'>&#xe64b;</i>
	<i class='layui-icon'>&#xe63c;</i>
	<i class='layui-icon'>&#xe62a;</i>
	<i class='layui-icon'>&#xe64e;</i>
	<i class='layui-icon'>&#xe646;</i>
	<i class='layui-icon'>&#xe625;</i>
	<i class='layui-icon'>&#xe64a;</i>
	<i class='layui-icon'>&#xe644;</i>
</div>
<script type="text/javascript">
  layui.use(['jquery','layer','form'],function(){
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
        });
    });
    $(".layui-icon").on('click',function(){

    });
    $("#icon").focus(function(){
    	
    	$(".icons").display('block');
    });
  });
</script> 