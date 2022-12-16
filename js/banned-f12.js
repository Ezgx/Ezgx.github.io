window.onkeydown = window.onkeyup = window.onkeypress = function (event) {  
  // 判断是否按下F12，F12键码为123  
  if (event.keyCode = 123) {  
      event.preventDefault() // 阻止默认事件行为  
      window.event.returnValue = false  
      alert("f12被禁用");
  }  
}
let threshold = 160 // 打开控制台的宽或高阈值  
window.setInterval(function() {  
    if (window.outerWidth - window.innerWidth > threshold ||   
    window.outerHeight - window.innerHeight > threshold) {  
        // 如果打开控制台，则刷新页面  
        window.location.reload()  
    }  
}, 1000)