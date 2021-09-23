<!DOCTYPE html>
<?php include('config.php');?>
<head>
    <title><?php if(is_null($title)){echo $sitetitle;}else{echo $title; echo ' | ' ;echo $sitetitle;}?></title>
    <html lang="ja">
    <meta name="description" content="<?php echo $desc ?>">
    <meta charset="utf-8"> <!--文字コード-->
    <meta property="og:title" content="<?php echo $sitetitle; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="img/icon.png">
    <meta property="og:url" content="http://demo20210912.php.xdomain.jp/index.php">
    <meta property="og:description" content="<?php echo $desc ?>">
    <!--Twitter-->
    <meta name="twitter:card" content="img/icon.png" /> 
    <meta name="twitter:site" content="@ユーザー名" />
    <!--アイコン-->
    <link rel="icon" href="img/icon.png" sizes="16x16" type="image/png" />
    <link rel="icon" href="img/icon.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="img/icon.png" sizes="48x48" type="image/png" />
    <link rel="icon" href="img/icon.png" sizes="64x64" type="image/png" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/icon.png">
    <!--CSS-->
    <!--メニュー用-->
    <style>
        <?php
        if ($pagenumber == 1){ ?>
        .menu-1{
            color:var(--normal-color);
        }<?php }elseif($pagenumber == 2){ ?>
        .menu-2{
            color:var(--normal-color);
        }<?php }elseif($pagenumber == 3){ ?>
            .menu-3{
            color:var(--normal-color);
        }<?php }elseif($pagenumber == 4){ ?>
            .menu-4{
            color:var(--normal-color);
        }<?php }?>
    </style>
    <link rel="stylesheet" href="css/style.css" />
    <link href="js/slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="js/slick/slick.css" rel="stylesheet" type="text/css">
    <!--レスポンシブ-->
    <meta name="viewport" content="width=device-width">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!--script-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/return-top.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/slick/slick.min.js"></script>
</head>