<html lang="nl">
<head>
    <title>BDRLaravel Project</title>
    <link rel="stylesheet" href="/css/uikit.min.css" />
    <script src="/js/jquery.min.js"></script>
    <script src="/js/uikit.min.js"></script>
    <script src="/js/uikit-icons.min.js"></script>
</head>
<body>
@include('nav.navbar')
@yield('header')
@yield('content')
@yield('article')
@yield('footer')
</body>
</html>
