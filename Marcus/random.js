var posts=["posts/22100/","posts/64874/","posts/6854/","posts/83242/","posts/870/","posts/65417/","posts/51673/","posts/55282/","posts/47635/","posts/33392/","posts/48213/","posts/16107/","posts/31415/","posts/48756/","posts/45799/","posts/61230/","posts/65172/","posts/21521/","posts/10453/","posts/55979/","posts/10141/","posts/55920/","posts/65320/","posts/13364/","posts/27391/","posts/32096/","posts/34037/","posts/50741/","posts/27831/","posts/17909/","posts/da0f/"];function toRandomPost(){pjax.loadUrl('/'+posts[Math.floor(Math.random() * posts.length)]);};