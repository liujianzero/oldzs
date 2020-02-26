<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="{{ setting('seo_description') }}"/>
  <meta name="keyword" content="{{ setting('seo_keyword') }}"/>
  <title>@yield('title', setting('site_name'))</title>
  <link href="{{ cdn('favicon.ico') }}" rel="shortcut icon">
  @stack('special-styles')
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  @stack('styles')
</head>
<body>
  <div id="app" class="{{ route_class() }}page" v-cloak>
    @includeWhen(config('view.header'), 'layouts._header')
    <main {{--class="py-4"--}}>@yield('content')</main>
    @includeWhen(config('view.footer'), 'layouts._footer')
  </div>
  @stack('special-scripts')
  <script src="{{ mix('js/app.js') }}"></script>
  @stack('scripts')
</body>
</html>
