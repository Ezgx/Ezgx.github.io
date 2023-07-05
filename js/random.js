var posts=["archives/62872/","archives/36352/","archives/53971/","archives/46392/","archives/870/","archives/65417/","archives/51673/","archives/58214/","archives/18276/","archives/23370/","archives/59158/","archives/2637/","archives/55282/","archives/47635/","archives/56791/","archives/33392/","archives/58490/","archives/43564/","archives/51537/","archives/49841/","archives/16107/","archives/63474/","archives/62395/","archives/61230/","archives/65172/","archives/21521/","archives/64526/","archives/9709/","archives/10141/","archives/54656/","archives/3688/","archives/11066/","archives/40712/","archives/13199/","archives/27391/","archives/32096/","archives/4034/","archives/27831/","archives/50741/","archives/17909/","archives/21428/","archives/52676/","archives/5781/"];
                    function toRandomPost() {
                        window.open('/'+posts[Math.floor(Math.random() * posts.length)],"_self");
                        new Vue({
                            data: function () {
                                this.$notify({
                                    title: "跳转中",
                                    message: "前往随机文章",
                                    position: 'top-left',
                                    offset: 50,
                                    showClose: true,
                                    type: "success",
                                    duration: 4000
                                });
                            }
                        });
                    };