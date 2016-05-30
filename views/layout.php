<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$this->e($title)?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="/semantic/semantic.min.css">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <div class="ui menu">
        <div class="item header">Ma super boutique</div>
        <a class="active item" href="/">Produits</a>
        <a class="item" href="/cart">Mon panier (<?=Cart::count()?> - <?=Cart::total()?> &euro;)</a>
        <div class="right menu">
            <div class="item">
                <a href="/logout" class="ui primary button">Logout</a>
            </div>
        </div>
    </div>
    <?php if(isset($_SESSION['msg'])) : ?>
        <div class="ui message">
            <p><?=flash()?></p>
        </div>
    <?php endif; ?>
    <?=$this->section('content')?>
    <details>
        <h2>$_SESSION</h2>
        <pre><code><?php var_dump($_SESSION)?></code></pre>
        <h2>$_COOKIE</h2>
        <pre><code><?php var_dump($_COOKIE)?></code></pre>
        <h2>session id</h2>
        <pre><code><?= session_id()?></code></pre>
    </details>
    <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.2.min.js"><\/script>')</script>
    <script src="js/main.js"></script>
</body>
</html>