/* 时间 */
function time() {
    t_div = document.getElementById('runtimeshow');
    var now = new Date()
    var publish_date = (hexo_config(runtimeshow.publish_date))
    setTimeout(time, 1000);
    var dangqian = now.getFullYear() + "-" + (now.getMonth() + 1) + "-" + now.getDate() ;
    t_div.innerHTML=DateDiff(publish_date, dangqian) +" 天";
  }
  /* 计算运行天数的封装函数 */
  function  DateDiff(sDate1,  sDate2){    //sDate1和sDate2是2002-12-18格式  
    var  aDate,  oDate1,  oDate2,  iDays  
    aDate  =  sDate1.split("-")  
    oDate1  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])    //转换为12-18-2002格式  
    aDate  =  sDate2.split("-")  
    oDate2  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])  
    iDays  =  parseInt(Math.abs(oDate1  -  oDate2)  /  1000  /  60  /  60  /24)    //把相差的毫秒数转换为天数  
    return  iDays  
  }