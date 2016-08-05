<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>欢迎来到KCN的博客</title>
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style type="text/css">
        /*
         * Globals
         */

        body {
          font-family: Georgia, "Times New Roman", Times, serif;
          color: #555;
        }

        h1, .h1,
        h2, .h2,
        h3, .h3,
        h4, .h4,
        h5, .h5,
        h6, .h6 {
          margin-top: 0;
          font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
          font-weight: normal;
          color: #333;
        }


        /*
         * Override Bootstrap's default container.
         */

        @media (min-width: 1200px) {
          .container {
            width: 970px;
          }
        }


        /*
         * Masthead for nav
         */

        .blog-masthead {
          background-color: #428bca;
          -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
                  box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
        }

        /* Nav links */
        .blog-nav-item {
          position: relative;
          display: inline-block;
          padding: 10px;
          font-weight: 500;
          color: #cdddeb;
        }
        .blog-nav-item:hover,
        .blog-nav-item:focus {
          color: #fff;
          text-decoration: none;
        }

        /* Active state gets a caret at the bottom */
        .blog-nav .active {
          color: #fff;
        }
        .blog-nav .active:after {
          position: absolute;
          bottom: 0;
          left: 50%;
          width: 0;
          height: 0;
          margin-left: -5px;
          vertical-align: middle;
          content: " ";
          border-right: 5px solid transparent;
          border-bottom: 5px solid;
          border-left: 5px solid transparent;
        }


        /*
         * Blog name and description
         */

        .blog-header {
          padding-top: 20px;
          padding-bottom: 20px;
        }
        .blog-title {
          margin-top: 30px;
          margin-bottom: 0;
          font-size: 60px;
          font-weight: normal;
        }
        .blog-description {
          font-size: 20px;
          color: #999;
        }


        /*
         * Main column and sidebar layout
         */

        .blog-main {
          font-size: 18px;
          line-height: 1.5;
        }

        /* Sidebar modules for boxing content */
        .sidebar-module {
          padding: 15px;
          margin: 0 -15px 15px;
        }
        .sidebar-module-inset {
          padding: 15px;
          background-color: #f5f5f5;
          border-radius: 4px;
        }
        .sidebar-module-inset p:last-child,
        .sidebar-module-inset ul:last-child,
        .sidebar-module-inset ol:last-child {
          margin-bottom: 0;
        }


        /* Pagination */
        .pager {
          margin-bottom: 60px;
          text-align: left;
        }
        .pager > li > a {
          width: 140px;
          padding: 10px 20px;
          text-align: center;
          border-radius: 30px;
        }


        /*
         * Blog posts
         */

        .blog-post {
          margin-bottom: 60px;
        }
        .blog-post-title {
          margin-bottom: 5px;
          font-size: 40px;
        }
        .blog-post-meta {
          margin-bottom: 20px;
          color: #999;
        }


        /*
         * Footer
         */

        .blog-footer {
          padding: 40px 0;
          color: #999;
          text-align: center;
          background-color: #f9f9f9;
          border-top: 1px solid #e5e5e5;
        }
        .blog-footer p:last-child {
          margin-bottom: 0;
        }
        #login{
          padding-left: 700px;
        }

    </style>
  </head>

  <body>
  
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/ci2/blog/get">博客美文</a>
          <a class="blog-nav-item" href="/ci2/blog/create">写博客</a>
          <a href="/ci2/blog/login" class="blog-nav-item" id="login">登录</a>
          <a href="" class="blog-nav-item" id="quit">退出</a>
        </nav>
        
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The KCN Blog</h1>
        <p class="lead blog-description">在这里我将跟大家分享乐趣,充实生活,点燃希望！</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
           
            <?php foreach ($blog as $blog_item): ?>

            <h3><?php echo $blog_item['title']; ?></h3>
            <h4><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作者/".$blog_item['writer']; ?></h4>
            <div class="main">
                <?php echo "<pre>".$blog_item['text']."</pre>"; ?>
            </div>
            <?php echo $blog_item['time']; ?>

            <?php endforeach; ?>
          </div><!-- /.blog-post -->

          
          <nav>
            <ul class="pager">
              <li><a href="#">上一页</a></li>
              <li><a href="#">下一页</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>关于</h4>
            <p>KCN 于2014年9月10号进入西安工业大学北信学院计算机系就读于软件工程专业。 在2016年的暑假创建了该个人博客。</p>
          </div>
          <div class="sidebar-module">
            <h4>博文</h4>
            <ol class="list-unstyled">
              <li><a href="#">2016-12</a></li>
              <li><a href="#">2016-11</a></li>
              <li><a href="#">2016-10</a></li>
              <li><a href="#">2016-09</a></li>
              <li><a href="#">2016-08</a></li>
              <li><a href="#">2016-07</a></li>
              <li><a href="#">2016-06</a></li>
              <li><a href="#">2016-05</a></li>
              <li><a href="#">2016-04</a></li>
              <li><a href="#">2016-03</a></li>
              <li><a href="#">2016-02</a></li>
              <li><a href="#">2016-01</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>博主的：</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>KCN的博客 for <a href="http://getbootstrap.com">KCN </a>, by <a href="https://twitter.com/mdo">993134187@qq.com</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
  </body>
</html>
