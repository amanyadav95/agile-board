<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Agile board</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/custome.css" rel="stylesheet">
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">



</head>

<body>

    <div id="wrapper">

<!-- nevbar -->
    @include('layouts.nevbar')
<!-- nevbar end -->
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
<!-- header nev -->
    @include('layouts.header')
<!-- header nev end -->

<!-- main content start -->
    @yield('content')
<!-- main content end -->


    <!-- Mainly scripts -->
    <script src="/js/jquery-2.1.1.js"></script>
    <script src="/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/js/inspinia.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>
    <script src="/js/customagile.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
</body>

</html>
