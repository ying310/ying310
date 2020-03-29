<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <title>@yield('title') - Laravel</title>
</head>
<body>
  <header>
    <a href="#">註冊</a>
    <a href="#">登入</a>
  </header>
  <div class="container">
    @yield('content');
  </div>
  <footer>
    <a href="#">聯絡我們</a>
  </footer>
</body>
</html>
