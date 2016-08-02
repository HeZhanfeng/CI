
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
    <link rel="stylesheet" type="text/css" href="welcome.css"/>
    <link rel="stylesheet" href="bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap-datetimepicker.js"></script>
    <script src="bootstrap-datetimepicker.fr.js"></script>
    <style type="text/css">
        /*
         * Globals
         */

        /* Links */
        a,
        a:focus,
        a:hover {
          color: #fff;
        }

        /* Custom default button */
        .btn-default,
        .btn-default:hover,
        .btn-default:focus {
          color: #333;
          text-shadow: none; /* Prevent inheritence from `body` */
          background-color: #fff;
          border: 1px solid #fff;
        }


        /*
         * Base structure
         */

        html,
        body {
          height: 100%;
          background-color: #333;
        }
        body {
          color: #fff;
          text-align: center;
          text-shadow: 0 1px 3px rgba(0,0,0,.5);
        }

        /* Extra markup and styles for table-esque vertical and horizontal centering */
        .site-wrapper {
          display: table;
          width: 100%;
          height: 100%; /* For at least Firefox */
          min-height: 100%;
          -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
                  box-shadow: inset 0 0 100px rgba(0,0,0,.5);
        }
        .site-wrapper-inner {
          display: table-cell;
          vertical-align: top;
        }
        .cover-container {
          margin-right: auto;
          margin-left: auto;
        }

        /* Padding for spacing */
        .inner {
          padding: 30px;
        }


        /*
         * Header
         */
        .masthead-brand {
          margin-top: 10px;
          margin-bottom: 10px;
        }

        .masthead-nav > li {
          display: inline-block;
        }
        .masthead-nav > li + li {
          margin-left: 20px;
        }
        .masthead-nav > li > a {
          padding-right: 0;
          padding-left: 0;
          font-size: 16px;
          font-weight: bold;
          color: #fff; /* IE8 proofing */
          color: rgba(255,255,255,.75);
          border-bottom: 2px solid transparent;
        }
        .masthead-nav > li > a:hover,
        .masthead-nav > li > a:focus {
          background-color: transparent;
          border-bottom-color: #a9a9a9;
          border-bottom-color: rgba(255,255,255,.25);
        }
        .masthead-nav > .active > a,
        .masthead-nav > .active > a:hover,
        .masthead-nav > .active > a:focus {
          color: #fff;
          border-bottom-color: #fff;
        }

        @media (min-width: 768px) {
          .masthead-brand {
            float: left;
          }
          .masthead-nav {
            float: right;
          }
        }


        /*
         * Cover
         */

        .cover {
          padding: 0 20px;
        }
        .cover .btn-lg {
          padding: 10px 20px;
          font-weight: bold;
        }


        /*
         * Footer
         */

        .mastfoot {
          color: #999; /* IE8 proofing */
          color: rgba(255,255,255,.5);
        }


        /*
         * Affix and center
         */

        @media (min-width: 768px) {
          /* Pull out the header and footer */
          .masthead {
            position: fixed;
            top: 0;
          }
          .mastfoot {
            position: fixed;
            bottom: 0;
          }
          /* Start the vertical centering */
          .site-wrapper-inner {
            vertical-align: middle;
          }
          /* Handle the widths */
          .masthead,
          .mastfoot,
          .cover-container {
            width: 100%; /* Must be percentage or pixels for horizontal alignment */
          }
        }

        @media (min-width: 992px) {
          .masthead,
          .mastfoot,
          .cover-container {
            width: 700px;
          }
        }
 
    </style>
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">KCN</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">首页</a></li>
                  <li><a href="/ci2/blog/about">关于</a></li>
                  <li><a href="#">退出</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">欢迎来到KCN的博客</h1>
            <p class="lead">在这里我将跟大家分享乐趣,充实生活,点燃希望！</p>
            <p class="lead">
              <a href="/ci2/blog/get" class="btn btn-lg btn-default">进入</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>KCN的博客 for <a href="http://getbootstrap.com">KCN </a>, by <a href="https://twitter.com/mdo">993134187@qq.com</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

  </body>
</html>
