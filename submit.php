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
    お名前： <?php print(htmlspecialchars($_POST['my_name'], ENT_QUOTES)); ?>
    郵便番号： <?php $zip=htmlspecialchars($_POST['address'],ENT_QUOTES);
            $zip=mb_convert_kana($zip, 'a', 'UTF-8'); //'a'は半角化
            if(preg_match("/\A\d{3}[-]\d{4}\z/",$zip)){
                print('郵便番号：〒'.$zip);
            }else{
                    print('ご記入しなおしてください');
                }
    ?>
</pre>
</main>
</body>    
</html>