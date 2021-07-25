<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>@yield('page-title')</title>

    <!--[if lt IE 10]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.min.css')}}"> 

    <link rel="stylesheet" href="{{asset('admin/css/waves.min.css')}}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/feather.css')}}">

    {{-- toaster --}}
    <link rel="stylesheet" href="{{asset('/admin/css/toastr.min.css')}}">

    {{-- data-table --}}
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/datatables.bootstrap4.min.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">

    @yield('extra-css')
</head>
