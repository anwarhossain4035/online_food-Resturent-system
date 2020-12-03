<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{setting_by_key('title')}} | Dashboard </title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script>
        window.Laravel = <?php echo json_encode(
            [
            'csrfToken'  => csrf_token(),
            'siteUrlApi' => url('api'),
            'tokenApi'
            ]
        ); ?>
    </script>
    <script src="{{asset('assets/jquery-1.11.1.min.js')}}"></script>
   

</head>
