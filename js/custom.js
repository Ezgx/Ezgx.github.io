var custom = {
    getTimeState: function() {
        var e = (new Date).getHours()
          , t = "";
        return 0 <= e && e <= 5 ? t = "晚安😴" : 5 < e && e <= 10 ? t = "早上好👋" : 10 < e && e <= 14 ? t = "中午好👋" : 14 < e && e <= 18 ? t = "下午好👋" : 18 < e && e <= 24 && (t = "晚上好👋"),
        t
    },
    sayhi: function() {
        var e = document.getElementById("author-info__sayhi");
        e && (e.innerHTML = custom.getTimeState() + "！我是")
    },
}
custom.sayhi();

// 返回顶部 显示网页阅读进度
window.onscroll = percent; // 执行函数
// 页面百分比
function percent() {
  let a = document.documentElement.scrollTop || window.pageYOffset, // 卷去高度
    b =
      Math.max(
        document.body.scrollHeight,
        document.documentElement.scrollHeight,
        document.body.offsetHeight,
        document.documentElement.offsetHeight,
        document.body.clientHeight,
        document.documentElement.clientHeight
      ) - document.documentElement.clientHeight, // 整个网页高度 减去 可视高度
    result = Math.round((a / b) * 100), // 计算百分比
    btn = document.querySelector("#percent"); // 获取图标
    conbtn = document.querySelector('#buttons.conbtn')
    if (result > 0) {
      conbtn.style.left = 'calc(100% + 7px)'
    } else {
      conbtn.style.left = 'calc(100% - 40px)'
    }
    if (result > 0, result != 100) {
      btn.innerHTML = result;
    } else if (result != 100) {
      btn.innerHTML = result;
    } else if (result = 100) {
      btn.innerHTML = '&#xe62a;';
      btn.style.fontFamily = 'dys'
      btn.style.fontSize = '26px'
    }
}
percent();

function toggleTheme() {
  var currentTheme = document.documentElement.getAttribute("data-theme");
  var targetTheme = currentTheme === "dark" ? "light" : "dark";
  document.documentElement.setAttribute("data-theme", targetTheme);
  new Vue({
    data: function () {
        this.$notify({
            title: "切换成功",
            message: "dark/light",
            position: 'top-left',
            offset: 50,
            showClose: true,
            type: "success",
            duration: 4000
        });
    }
  })
}

function showconsolebtn() {
  var consolebtn = document.getElementById('console-pannel');
  if (consolebtn.style.scale === '1') {
    consolebtn.style.scale = '0';
  } else {
    consolebtn.style.scale = '1'
  }
}

function hideaside() {
  var aside = document.getElementById('aside-content');
  var postmodule = document.getElementsByClassName('maininner')[0];
  if (aside.style.display === 'none') {
    aside.style.display = 'block';
    postmodule.style.width = '74%';
    new Vue({
      data: function () {
          this.$notify({
              title: "设置成功",
              message: "已显示侧边栏",
              position: 'top-left',
              offset: 50,
              showClose: true,
              type: "success",
              duration: 4000
          });
      }
    })
  }
  else {
    aside.style.display = 'none';
    postmodule.style.width = '100%';
    new Vue({
      data: function () {
          this.$notify({
              title: "设置成功",
              message: "已隐藏侧边栏",
              position: 'top-left',
              offset: 50,
              showClose: true,
              type: "success",
              duration: 4000
          });
      }
    })
  }
}

function hidehometop() {
  var hometop = document.getElementsByClassName('hometop')[0];
  var main = document.getElementById('content-inner');
  if (hometop.style.display === 'none') {
    hometop.style.display = 'block';
    main.style.top = '-40px'
    new Vue({
      data: function () {
          this.$notify({
              title: "设置成功",
              message: "已显示顶部",
              position: 'top-left',
              offset: 50,
              showClose: true,
              type: "success",
              duration: 4000
          });
      }
    })
  }
  else {
    hometop.style.display = 'none';
    main.style.top = 'unset'
    new Vue({
      data: function () {
          this.$notify({
              title: "设置成功",
              message: "已隐藏顶部",
              position: 'top-left',
              offset: 50,
              showClose: true,
              type: "success",
              duration: 4000
          });
      }
    })
  }
}
  
//首页顶部推荐文章轮播图
var ark_swiper = new Swiper("#ark-swiper-container", {
  direction: "horizontal", //横向切换
  loop: true,
  grabCursor : true,//鼠标悬停时显示抓手
  updateOnWindowResize: true,
  slidesPerView: 1,
  spaceBetween: 30,
  mousewheel: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: true,
  delay: 2000
});