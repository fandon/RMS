<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="admin-main">
	<blockquote class="layui-elem-quote">
		<a href="javascript:;" target="_blank" class="layui-btn layui-btn-small" id="add">
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
			<table class="layui-table">
			<tr>
				<td>id</td>
				<td>账号</td>
				<td>密码</td>
				<td>手机</td>
				<td>操作</td>
			</tr>
			<tbody class="user_data">
				
			</tbody>
			</table>
		</div>
	</fieldset>	
	<div class="admin-table-page">
		<div id="page" class="page"></div>
	</div>
</div>
<script type="text/javascript">
	layui.use(['laypage','jquery','layer'],function(){
		$ = layui.jquery;
		laypage = layui.laypage;
		layer = layui.layer;
		function add_data(curr){
			$.ajax({
				url:'/user/getusers',
				type:'POST',
				data:{pagecurr:curr},
				dataType:'json',
				success:function(data){
					var str = '';
					var users = data.users;
					//console.log(users);
					for(var i = 0;i<users.length;i++){
						str += "<tr><td>"+users[i].id+"</td><td>"+users[i].account+"</td><td>"+users[i].pwd+"</td><td>"+users[i].phone+"</td><td><button id='edit_btn' class='layui-btn layui-btn-mini' onclick='edit("+users[i].id+")'>编辑</button><button class='layui-btn layui-btn-danger layui-btn-mini' onclick='del_user("+users[i].id+")'>删除</button></td></tr>";
					}
					$('.user_data').children().remove();
					$('.user_data').append(str);
					layui.laypage({
						cont:'page',
						pages:data.total,
						curr: curr,
						groups:6,
						jump:function(obj, first){
							if(!first){
								add_data(obj.curr);
							}
						}
					})
				}
			});		
		}
	add_data(1);
	$("#add").on('click',function(){
		$.get('/user/add',null,function(form){
			layer.open({
				type:1,
				title:'添加用户',
				content:form,
				area: ['600px', '400px']
			});
		});
	});
	});

	function edit(id)
	{
		$.get('/user/edit',{id:id},function(form){
			layer.open({
				type:1,
				title:'添加用户',
				content:form,
				area: ['600px', '400px']
			});
		});
	}
	function del_user(id)
	{
		layer.confirm('确认要删除吗？', {
  		btn: ['确定','取消'] //按钮
		}, function(){

			$.post('/user/delete',{id:id},function(data,status){
				if(data.status==1){
		            layer.open({
		            type:0,
		            icon:1,
		            content:"删除用户成功！",
		            yes: function(){
		              window.location.reload();
		            }
		          });
		        }else{
		          layer.open({
		            type:0,
		            icon:2,
		            content:"删除用户失败！",
		            yes: function(){
		              window.location.reload();
		            }
		          });
		        }
			});
		},function(){});
	}
</script>
