#####UI插件
this:DOM对象，代表当前对象；
案例
```javascript
$("button").click(function(){
	$(this).text("hello world");
	//this代表当前对象：button
});
```
hover([over,]out)：一个模仿悬停事件（鼠标移动到一个对象上面及移出这个对象）的方法;
over:鼠标移到元素上要触发的函数
out:鼠标移出元素要触发的函数
案例
```javascript
$("p").hover(function(){
	//当鼠标悬停在对象p上时，样式被修改
	$("p").css("color","pink");
},function(){
	//当鼠标离开对象p时，样式被修改
	$("p").css("color","green");
});
```
自定义插件
extend($.fn, {
自定义函数的名称：function(){
	自定义函数的处理程序
}
$.fn：可选可不选，选了就是局部函数，不选就是全局函数
案例
```javascript
(function($){
	$.extend({
		nav:function(colors){
			$(".nav").css({
					display:"none",
					listStyleType:"none",
					color:colors
					});			
			$(".nav").parent().hover(function(){
				$(this).find(".nav").slideDown();
			},function(){				
				$(this).find(".nav").slideUp();
			});			
		}
	});
}(jQuery));
//引入插件文件后调用
$.nav("green");//全局函数
```
悬浮框
dialog({
 //属性
 title:“属性名称”，
 width:宽度(只需要给值，不需要单位，默认是300)
 height:高度（只需要给值，不需要单位，默认是自适应）
 autoOpen：true/false (只初始化，不调用)
 maxHeight：最大可以拖拽的高度
 maxWidth：最大可以拖拽的宽度
 position：浮层初始化的位置（center） left top
 draggable：是否可以拖拽
 resizable：是否可以改变大小 
 //回调函数
 beforeClose：function(){
	  //关闭之前调用的回调函数
 }，focus: {
	 // 关闭之后，调用的回调函数
 });
通过dialog()函数调用，初始化浮层。
属性：
title：标题
tooltip();
提示工具
可以改变提示内容位置,提示input中的title中的内容
position:{
my:"left top" 横向和纵向值
}
datepicker()
弹出日期浮层
dateFormate:修改日期格式（yy四位年，mm月份 dd日）
dayNames：星期
prevText：向前一个月
nextText：下一月
dayNamesMin:短格式的周
monthNamesShort:简写的月份
自动补全
autocomplete()
如果自动完成浮层不显示，可以改样式表：
(#ui-id-1{
	z-index:9999;
}
source:自动完成的源
autoFocus:true/false 默认是false是自动完成不选择任何 提示，true选择第一个提示
delay：提示出现的延迟时间
minLength：最小开始出现提示的输入字符数
position：提示框出现的位置
 案例
```javascript
$(function(){
	$("span").click(function(){
		$(".login").dialog({
			title:"用户注册表单",
			width:350,

		});
	});
	$("#username").tooltip({
		position:{
			my: "left top",
			at: "right top",
			collision: "flipfit flip"
		}
	});
	$("#pwd").tooltip({
		position:{
			my: "left top",
			at: "right top",
			collision: "flipfit flip"
		}
	});
	$("#email").tooltip({
		position:{
			my: "left top",
			at: "right top",
			collision: "flipfit flip"
		}
	});
	$("#birthday").datepicker({
		deteFormat:"yy-mm-dd",
		prevText:"上一月",
		nextText:"上一月",
		monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", 
		"八月", "九月", "十月", "十一月", "十二月"], 
		dayNamesMin: ["日","一","二","三","四","五","六"],
		defaultDate:-1
	});
});
```




