
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>登录</title>
   <link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style type="text/css">
      
      body {

        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #eee;
      }

      .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
        
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin .checkbox {
        font-weight: normal;
      }
      .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
      #inputEmail{
        margin-bottom:10px 
      }
      

      /*
         * Footer
         */

        .blog-footer {
          padding: 40px 0;
          color: #999;
          text-align: center;
          background-color: #eee;
          border-top: 1px solid #e5e5e5;

        }
        .blog-footer p:last-child {
          margin-bottom: 0px;
        }
        .container{
          padding-bottom: 270px;
        }
    </style>
  </head>

  <body>

    <div class="container">
        <div class="blog-post form-signin">
          
            <?php echo validation_errors(); ?>

            <?php echo form_open('blog/login'); ?>

            <h2 class="form-signin-heading">请登录</h2>
            <label for="username" class="sr-only">user</label>
            <input type="input" id="inputEmail" class="form-control" name="username" placeholder="用户名" required autofocus>
            <label for="password" class="sr-only">密码</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="密码" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> 记住密码？
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
          </form>
        </div>
    </div>    

    <footer class="blog-footer">
      <p>KCN的博客 for <a href="http://getbootstrap.com">KCN </a>, by <a href="https://twitter.com/mdo">993134187@qq.com</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
  </body>
</html>
