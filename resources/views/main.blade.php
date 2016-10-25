<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap Css-->
    <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('style/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Load Bootstrap RTL theme from RawGit -->
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">

  </head>
  <body>
      <!-- Start Nav Bar -->
      <nav class="navbar navbar-default" role="navigation">
        <ul class="nav navbar-nav hover" id="go">
          <li><a href="/">صالة التحرير</a></li>
          <li class="hover"><a href="/about/">عن الموقع</a></li>
          <li><a href="/contact/">إتصل بنا</a></li>
        </ul>
        <!-- Start Dropdown Mnue -->
        <ul class="nav navbar-nav navbar-left">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">حسابي<span class="caret"></span></a>
            <ul class="dropdown-menu pull-right">
              <li><a href="#">رابط 1</a></li>
              <li><a href="#">رابط 2</a></li>
              <li><a href="#">رابط 3</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">رابط منفصل</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Nav Bar -->

      <!-- Start Header -->
        <div class="container">
          <div class="jumbotron">
            <img src="{{ asset('images/') }}" alt="صورة مؤقتة">
            <p>نحاول التمسك بالمهنية والاقتراب من الحيادية التامة لنحلل الاحداث السياسية والاقتصادية بشكل إحترافي بعيد عن الأهواء.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">الموضوعات الأكثر قرائة</a></p>
          </div>
        </div>
      <!-- End Header -->

      <!-- Start Nav Bar 2 -->
      <nav class="navbar navbar-default" role="navigation">
        <ul class="nav navbar-nav hover" id="go">
          <li><a href="/" style="background-color: #2dbfff;">الرئيسية</a></li>
          <li><a href="/">تيكنولوجيا وعلوم</a></li>
          <li><a href="/articles">المقالات</a></li>
        </ul>

        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="ضع كلمات البحث هنا ...">
          </div>
          <button type="submit" class="btn btn-default">بحث</button>
        </form>
      </nav>
      <!-- End Nav Bar 2 -->

      <!-- Start Content -->
          @yield('content')
      <!-- End Content -->

      <!-- Start Footer -->
      <div class="site-footer">
        <div class="container">
          <div class="row">
            <address>
              <h4>عنوان بريد الجريدة:</h4>
              هاتف: 0201201140560 <br>
              عنوان: جريدة صالة التحرير 4 شارع العروبة القاهرة مصر <br>
            </address>
          </div>
          <div class="bottom-row">
            <div class="col-md-5">
              &copy; جميع الحقوق محفوظة لموقع صالة التحرير 2016
            </div>
            <div class="col-md-7">
              <ul class="footer-nav">
                <li><a href="/">الرئيسية</a></li>
                <li><a href="/about/">عن الموقع</a></li>
                <li><a href="/contact/">إتصل بنا</a></li>
                <li class="hover"><a href="/about/">عن الموقع</a></li>
                <li><a href="/contact/">إتصل بنا</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{ asset('style/jquery/jquery-3.1.1.min.js') }}"></script>

      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
  </body>
</html>