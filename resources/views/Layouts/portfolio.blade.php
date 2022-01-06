<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title> @yield('title') </title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Creative Portfolio Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Kross Template v1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/images/favicon.png" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/themify-icons/themify-icons.css">

    <!-- Main Stylesheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

</head>
<body>

@include("Layouts._header")

@yield('content')

@include('Layouts._client')
@include('Layouts._contact')
@include('Layouts._footer')


</body>
</html>
