!function(){"use strict";document.addEventListener("DOMContentLoaded",function(){var n=Joomla.getOptions("system.keepalive"),e=n.uri?n.uri.replace(/&amp;/g,"&"):window.location.pathname,o=n.interval?n.interval:45e3;window.setInterval(function(){Joomla.request({url:e,onSuccess:function(){},onError:function(){}})},o)})}(window,document,Joomla);