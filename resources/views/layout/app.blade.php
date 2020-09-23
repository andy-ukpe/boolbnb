<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{'css/app.css'}}">
    <link href="/css/master.css">
  </head>
  <body>
    <main>
      @yield('main_section')
    </main>
      @yield('footer_section')
  </body>
</html>
