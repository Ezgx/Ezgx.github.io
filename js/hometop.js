//置顶文章横向滚动
topPostScroll: function() {
    if (document.getElementById("home_top")){
      let xscroll = document.getElementById("home_top");
      xscroll.addEventListener("mousewheel", function (e) {
      //计算鼠标滚轮滚动的距离
      let v = -e.wheelDelta / 2;
      xscroll.scrollLeft += v;
      //阻止浏览器默认方法
      if(document.body.clientWidth < 1300){
        e.preventDefault();
      }
      }, false);
    }
}