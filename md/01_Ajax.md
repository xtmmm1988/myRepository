####Ajax
######函数
load(url,[data],[callback])：获取远程HTML代码并插入DOM中;
url:待装入 HTML 网页网址;
data:发送至服务器的 key/value 数据。在jQuery 1.3中也可以接受一个字符串了;
callback:载入成功时回调函数;
案例
```javascript
$("div").load("test.php",username:"tom"},function(response,status,xhr){
	aleert("response");
});
```
get(url,[data],[callback]):通过远程 HTTP GET 请求载入信息。
url:待载入页面的URL地址;
data:待发送 Key/value 参数;
callback:载入成功时回调函数;
type:返回内容格式，xml, html, script, json, text, _default;
案例
```javascript
$.get("test.php", { name: "John", time: "2pm" },function(data){
	alert("Data Loaded: " + data);
});
```
post(url,[data],[callback],[type]):通过远程 HTTP POST 请求载入信息;
url:发送请求地址;			
data:待发送 Key/value 参数;
callback:发送成功时回调函数;
type:返回内容格式，xml, html, script, json, text, _default;
案例
```javascript
$.post({url:"test.php",type:"post",data:id:8},success:function(response,status,xhr){				
	$("div").html(response);				
	}
});
```
ajax(url, [settings]):通过 HTTP 请求加载远程数据;
url: 一个用来包含发送请求的URL字符串;
settings: ajax 请求设置, 所有选项都是可选的;
案例
```javascript
$.ajax({url:"test1.php",type:"post",data:{id:8},
	success:function(response,status,xhr){				
		alert(response);				
	}
});
```
ajaxStart(callback): AJAX 请求开始时执行函数;
案例
```javascript
$(document).ajaxStart(function(){
	$("#sub").show()
});
```
ajaxStart(callback): AJAX 请求结束时执行函数;
案例
```javascript
$(document).ajaxStop(function(){
	$("#sub").hide()
});
```
trim(string): 去掉字符串起始和结尾的空格;
案例
```javascript
$.trim(" hello world ");
```
each(object, [callback]):用于遍历对象和数组；
object:需要遍历的对象或数组；
callback:每个成员/元素执行的回调函数；
案例
```javascript
var arr = new Array(1,2,3,);
$.each(arr,function(key,val){
	alert(key+": "+val);
});
```
grep(array, callback, [invert]):使用过滤函数过滤数组元素;
array:待过滤数组;
callback:此函数将处理数组每个元素;
案例
```javascript
var arr = new Array(1,2,3,);
$.grep(arr, function(val,key){
  return val> 0;
});
```
map(arr,callback):数组中的拼接；
array:待转换数组;
callback: 为每个数组元素调用，而且会给这个转换函数传递一个表示被转换的元素作为参数, 函数可返回任何值;
案例
```javascript
var arr = new Array(1,2,3,);
$.map(arr, function(val,key){
  return val + 5;
});
```
merge(first,second):拼接数组；
first:第一个待处理数组，会改变其中的元素；
second:第二个待处理数组，不会改变其中的元素；
案例
```javascript
var arr = new Array(1,2,3,);
var arr2 = new Array(2,1);
$.merge(arr,arr2);
```
inArray(value,array,[fromIndex]):确定第一个参数在数组中的位置，从0开始计数(如果没有找到则返回 -1 );
value:用于在数组中查找是否存在;
array:待处理数组;
fromIndex:用来搜索数组队列，默认值为0;
案例
```javascript
var arr = new Array(1,2,3,);
$.inArray("1",arr);//0
$.inArray(4);//-1
```
type(obj):检测obj的数据类型;
案例
```javascript
$.type(3);//number
$.type([]);//array
$.type("123");//string
```
isArray(obj):测试对象是否为数组;
案例
```javascript
$.isArray(3);//false
$.isArray([1,2]);//true
```
isNumeric(value):检测一个参数是否是一个数值
案例
```javascript
$.isNumeric(3);//true
$.isNumeric("abc");//false
```

















 








