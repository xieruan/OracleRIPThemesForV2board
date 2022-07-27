<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>{{$title}}</title>
    <script type="module" crossorigin src="/theme/{{$theme}}/assets/index.af7450cd.js?v={{$version}}"></script>
    <link rel="modulepreload" href="/theme/{{$theme}}/assets/vendor.cc981c55.js?v={{$version}}">
    <link rel="stylesheet" href="/theme/{{$theme}}/assets/index.bcd66907.css?v={{$version}}">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700"> -->
    <script>this.globalThis || (this.globalThis = this); window.global = window;</script>
    <script>
        window.settings = {
            title: '{{$title}}',
            theme_path: '{{$theme_path}}',
            version: '{{$version}}',
            description: '{{$description}}',
            logo: '{{$logo}}'
        }
    </script>
    <script src="/theme/{{$theme}}/assets/config/config.js?v={{$version}}"></script>
    <script src="/theme/{{$theme}}/assets/i18n/i18n.js?v={{$version}}"></script>
    <script src="/theme/{{$theme}}/assets/i18n/zh-CN.js?v={{$version}}"></script>
    <script src="/theme/{{$theme}}/assets/i18n/en-US.js?v={{$version}}"></script>
</head>

<body class="antialiased bg-[#f8f8f8] text-gray-600 sidebar-expanded">
<div id="app"></div>

{!! $theme_config['custom_html'] !!}

</body>

</html>
