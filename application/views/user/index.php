<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="admin-main">
	<blockquote class="layui-elem-quote">
		<a href="javascript:;" class="layui-btn layui-btn-small" id="add">
			<i class="layui-icon">&#xe608;</i> 添加信息
		</a>
		<a href="#" class="layui-btn layui-btn-small" id="import">
			<i class="layui-icon">&#xe608;</i> 导入信息
		</a>
		<a href="#" class="layui-btn layui-btn-small">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> 导出信息
		</a>
		<a href="javascript:;" class="layui-btn layui-btn-small" id="search">
			<i class="layui-icon">&#xe615;</i> 搜索
		</a>
	</blockquote>
	<fieldset class="layui-elem-field">
		<legend>数据列表</legend>
		<div class="layui-field-box">
			<table class="site-table table-hover">
			</table>
		</div>
	</fieldset>
</div>