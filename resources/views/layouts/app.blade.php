<!DOCTYPE html>
<html>
  <head>
    <title>Myweb</title>
  </head>
  <body style="margin:0;padding:0;">
      <!-- header -->   
      <div style="padding:10px 50px 10px 50px;border-bottom: 1px solid #eeeeee;">
          <div style="display:inline-block;">
              <a href="{{ route('home') }}"><h2>Myweb</h2></a>
          </div>

          <div style="display:inline-block;margin-left:20px;">
              <a href="{{ route('news') }}"><h2>News</h2></a>
          </div>

          <div style="display:inline-block;margin-left:20px;">
              <a href="{{ route('about') }}"><h2>about</h2></a>
          </div>
      </div> 

      <div style="text-align:center;">
          @yield('content')
      </div>


    <!-- footer -->
      <div style="padding:10px 50px 10px 50px;background-color:gray;">
          <p>contact me : 1234567</p>
      </div> 
  </body>
</html>