<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ env('APP_NAME') }} - Bootstrap Admin Theme</title>

    <link href="{{ secure_url('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ secure_url('admin/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ secure_url('admin/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ secure_url('admin/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
    <link href="{{ secure_url('admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ secure_url('admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper"></div>

    <script src="{{ secure_url('js/app.js') }}"></script>
    <script src="{{ secure_url('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_url('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_url('admin/vendor/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ secure_url('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ secure_url('admin/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ secure_url('admin/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ secure_url('admin/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
