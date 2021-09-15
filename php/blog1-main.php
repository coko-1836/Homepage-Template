<main>
<div class="contents">
    <div class="blog-top">
    <h1 class=""><?php echo $title ?></h1>
    <time><?php echo $time ?></time><?php if(is_null($writer)){}else{?>
    <p class="writer"><?php echo 'Writer:';echo $writer ?></p><?php }?>
    </div>
    <h3>テキストエディタとは?</h3>
    <p>テキストエディタはプログラムを書く際に使う補助ツールです。<br>
    文字に色をつけて仕分けしたり、自動でインデントを取ったり、予測変換したり、エラーを教えてくれたりなどと色々です。</p>
    <p>基本的にはこれを使わないと効率が悪すぎてプログラムの作成の時間が伸びるだけなのでできる限り使いましょう。</p>
    <a href="https://notepad-plus-plus.org/"><h2 class="blog-midashi">NotePad</h2></a>
    <img src="img/blogimage1.png" width="45%" height="auto" style="border:1px solid gray"/>
    <p>フリーで配布されているソフトで日本語も対応しています。ソースコードも配布されているので自分でプラグインもつくれます</p>
    <a href="https://code.visualstudio.com/"><h2>Visual Studio Code</h2></a>
    <img src="img/blogimage2.png" width="45%" height="auto" style="border:1px solid gray"/>
    <p>Microsoftがかなり昔からリリースしている、Visual Studioからコードを書く機能と実行する機能だけを抜き出してきたソフトです<br>このソフトもプラグインが多種多様でソフト内でプログラムを実行することもできます</p>
</div>
</main>