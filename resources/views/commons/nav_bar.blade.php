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
<a class="navbar-brand" href="/">タスクリスト</a>
    　　　</div>

   　　  <!-- メニュー項目 -->
    　<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>{!! link_to_route('tasklists.create', '新規メッセージの投稿') !!}</li>
                </ul>
            </div>
    　　　　</div><!-- /.navbar-collapse -->
 　　　 　　 </div><!-- /.container-fluid -->
　　　　</nav>