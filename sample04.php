<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
    <?php
    $news=file_get_contents('../../newsdata/news.txt','2018-10-17');
    $news .= "追加\n";
    file_put_contents('../../newsdata/news.txt', $news);
    ?>
</pre>
</main>
</body>    
</html>