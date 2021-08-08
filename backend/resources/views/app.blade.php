<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Shogi Quizzes Application</title>
        <meta name="description" content="将棋AIの評価値に基づいて作成された次の一手問題集">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}">
        
        {{-- OGP --}}
        <meta property="og:url" content="http://example.com/index.html">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Shogi Quizzes Application">
        <meta property="og:description" content="将棋AIの評価値に基づいて作成された次の一手問題集">
        <meta property="og:image" content="http://example.com/images/ogp.jpg">
        
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>

        <div id="app">
        </div>

    <script src="{{ mix('js/app.js') }}"></script> 
    </body>
</html>