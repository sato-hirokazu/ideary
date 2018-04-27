@section('header')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>{{{isset($title) ? $title : 'Hello'}}}</title>
    <link href="{{{asset('/css/app.css')}}}" rel="stylesheet">
    @yield('addCss')
</head>
@stop
