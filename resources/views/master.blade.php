<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
<style>
    #menu {
        background-color:#eeeeee;
        padding:10px;
        border-bottom:1px solid black;
    }
    #menu ul  li {
        display:inline-block;
        list-style-type:none;
        width:18%;
        text-align:center;
    }
    #menu ul li a:link {
        text-decoration:none;
        text-transform:uppercase;
    }
    #content {
        font-size:1.2em;
        letter-spacing:1px;
        line-height:125%;
    }
    #content p {
        text-align:justify;
        padding:5px 10px;
    }
    #footer {
        border-top:1px solid black;
        padding-top:10px;
        font-size:0.8em;
    }
</style>
</head>
<body>
    <div id="menu">
        @yield('menu')
    </div>
    <div id="banner">
        @yield('banner')
    </div>
    <div id="content">
        @yield('content')
    </div>
    <div id="footer">
        @yield('footer')
    </div>
</body>
</html>