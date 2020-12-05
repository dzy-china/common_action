<?php
// 功能:获取不带域名的引用页网址
//注:只有经过网站中的页面链接或ajax请求，才能在http的请求协议中存在referer引用页。
//用法:hs_get_referer_url();
  //返回值:/test.php?name=dzy&age=10
function hs_get_referer_url(){
 		return parse_url($_SERVER['HTTP_REFERER'])['path'];
 }
 
 // 功能:获取引用页域名(不带端口)
 //注:只有经过网站中的页面链接或ajax请求，才能在http的请求协议中存在referer引用页。
 //用法:hs_get_referer_host();
   //返回值:test.com
 function hs_get_referer_host(){
  		return parse_url($_SERVER['HTTP_REFERER'])['host'];
  }
 
 // 功能:获取不带域名的请求网址
 //用法:hs_get_request_url();
   //返回值:/test.php?name=dzy&age=10
 function hs_get_request_url(){
  		return $_SERVER["REQUEST_URI"];
  }
  
  // 功能:获取当前请求文件的物理目录
  //用法:hs_get_file_root_dir();
  //返回值:D:/phpStudy/WWW/test/
  function hs_get_request_file_root_dir(){
   		return $_SERVER["DOCUMENT_ROOT"];
   }
   
  // 功能:获取访问者ip
  //用法:hs_get_request_id();
  //返回值:192.168.1.210
  function hs_get_request_id(){
   		return $_SERVER['REMOTE_ADDR'];
   }
   
  // 功能:获取访问者域名(不带端口)
  //注:$port设为true可返回带端口的域名(前提是存在非默认的80端口)
  //用法:hs_get_request_host();
  //返回值:test.com
  function hs_get_request_host($port=false){
	  if(isset(parse_url($_SERVER["HTTP_HOST"])['host'])){
		  if($port){
			   return $_SERVER["HTTP_HOST"];
		  }else{
			 return  parse_url($_SERVER["HTTP_HOST"])['host'];
		  }
	  }else{
		  return $_SERVER["HTTP_HOST"];
	  }
   }