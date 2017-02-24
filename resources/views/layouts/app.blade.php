<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
    　　<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>tasklist</title>
        
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
        .contents div{
        /* ウインドウサイズ指定なし760px以下の時に適用されるスタイル */
             background-color: #FFFFFF;
             }
             
        @media (min-width: 767px) {
   　　　/* ウインドウ760px以上の時に適用されるスタイル */
    　　　body {
        　background-color: #f00;
    　　　}
　　　　}
　　　　
　　　　@media (min-width: 1200px) {
   　　　/* ウインド1200px以上の時に適用されるスタイル */
    　　　body {
        　background-color: #FFFFFF;
    　　　}
　　　　}
　　　　
        </style>
        
    </head>
    <body>
        
        <div class="col-md-12">
          
        <nav class="navbar navbar-default">
  　　　　　<div class="container-fluid">
    　　　　<div class="navbar-header">
      　　　　<!-- 横幅が狭い時に出るハンバーガーボタン -->
      　　　　　<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        　　　　<span class="icon-bar"></span>
        　　　　<span class="icon-bar"></span>
        　　　　<span class="icon-bar"></span>
      　　　　</button>
　      　<!-- ホームへ戻るリンク -->
  　　　　　　    <a class="navbar-brand" href="#">タスクリスト</a>
    　　　</div>

   　　  <!-- メニュー項目 -->
    　　　<div id="navbar" class="collapse navbar-collapse">
      　　　　<ul class="nav navbar-nav">
        　　　<li class="active"><a href="tasklist/create">新規作成</a></li>
      　　　　</ul>
    　　　　</div><!-- /.navbar-collapse -->
 　　　 　　 </div><!-- /.container-fluid -->
　　　　</nav>
        
        @include('commons.error_messages')
        
        @yield('content')
        　
        </div>
        
    </body>
    
</html>