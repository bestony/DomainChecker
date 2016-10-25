<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domain Checker</title>

  <link rel="stylesheet" href="{{ asset('/css/pure-min.css') }}">

  <!--[if lte IE 8]>
    
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

<![endif]-->
  <!--[if gt IE 8]><!-->

  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

  <!--<![endif]-->

<!--[if lte IE 8]>
    <link rel="stylesheet" href="{{ asset('/css/blog-old-ie.css') }}">
<![endif]-->
  <!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="{{ asset('/css/blog.css') }}">
  <!--<![endif]-->


</head>

<body>




  <div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
      <div class="header">
        <h1 class="brand-title">Domain Checker</h1>
        <h2 class="brand-tagline">域名注册查询工具</h2>

        <nav class="nav">
          <ul class="nav-list">
            <li class="nav-item">
              <a class="pure-button" href="https://github.com/bestony/DomainChecker">Github</a>
            </li>
            <li class="nav-item">
              <a class="pure-button" href="/request">新增域名</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
      <div>
        <!-- A wrapper for all the blog posts -->
        @yield('content')
        <div class="footer">
          <div class="pure-menu pure-menu-horizontal">
            <ul>
              <li class="pure-menu-item"><a href="https://github.com/bestony" class="pure-menu-link">About Me</a></li>
              <li class="pure-menu-item"><a href="https://github.com/bestony/DomainChecker" class="pure-menu-link">GitHub</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>