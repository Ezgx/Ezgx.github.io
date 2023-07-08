var posts=[];
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