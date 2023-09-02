<?php

function currentURL(){
    $url = '';
    if(isset($_SERVER['HTTPS'])){
        $url .= 'https://';
    }else{
        $url .= 'http://';
    }
    $url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
}

?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Simple API Doc</title>


</head>
<body>
<?php echo currentUrl();?>

<h2>JSON</h2>

<h4>datetime1</h4>
<ul>
    <li>特徴</li>
    日時を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."datetime1.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>


<h4>hash1</h4>
<ul>
    <li>特徴</li>
    md5,sha1,sha3-512を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."hash1.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>



<h4>hostname</h4>
<ul>
    <li>特徴</li>
    ホスト名を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."hostname.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>


<h4>ipaddress</h4>
<ul>
    <li>特徴</li>
    クライアントのIPアドレスを返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."ipaddress.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>

<h4>ipaddress</h4>
<ul>
    <li>特徴</li>
    クライアントのIPアドレスを返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."ipaddress.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>




<h4>latlng1</h4>
<ul>
    <li>特徴</li>
    ランダムな緯度経度を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."latlng1.php";
    $urlsample = $url.""."?dataid=10";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        <li>dataid</li>
            乱数のシード
    </ul>
</ul>


<h4>latlngnear2</h4>
<ul>
    <li>特徴</li>
    ある程度近いランダムな緯度経度を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."latlngnear2.php";
    $urlsample = $url.""."?dataid=10";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        <li>dataid</li>
        乱数のシード
    </ul>
</ul>


<h4>monster1</h4>
<ul>
    <li>特徴</li>
    ランダムなモンスター一覧を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."monster1.php";
    $urlsample = $url.""."?dataid=10";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        <li>dataid</li>
        乱数のシード
    </ul>
</ul>


<h4>randomnum1</h4>
<ul>
    <li>特徴</li>
    ランダム数字を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."randomnum1.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>

<h4>randomnum2</h4>
<ul>
    <li>特徴</li>
    ランダム数字を複数返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."randomnum2.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>


<h4>randomnum3</h4>
<ul>
    <li>特徴</li>
    マイナスありのランダム数字を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."randomnum3.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>


<h4>randomnum4</h4>
<ul>
    <li>特徴</li>
    マイナスありのランダム数字を複数返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."randomnum4.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>

<h4>randomnum5</h4>
<ul>
    <li>特徴</li>
    1~6の数字を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."randomnum5.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        なし
    </ul>
</ul>


<h4>userinfo1</h4>
<ul>
    <li>特徴</li>
    ランダムなユーザ情報を返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."userinfo1.php";
    $urlsample = $url.""."?dataid=10";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        <li>dataid</li>
        乱数のシード
    </ul>
</ul>

<h4>uuid1</h4>
<ul>
    <li>特徴</li>
    UUIDを返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."uuid1.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
    </ul>
</ul>


<h4>uuid2</h4>
<ul>
    <li>特徴</li>
    UUIDを複数返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."uuid2.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
    </ul>
</ul>

<h4>uuid3</h4>
<ul>
    <li>特徴</li>
    UUIDを複数返す
    <li>URL</li>
    <?php
    $url = currentURL()."json/"."uuid3.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
    </ul>
</ul>

<h2>Image</h2>

<h4>clockimage1</h4>
<ul>
    <li>特徴</li>
    時間の文字列が入った画像生成
    <li>URL</li>
    <?php
    $url = currentURL()."image/"."clockimage1.php";
    $urlsample = $url.""."?red=10&green=200&blue=200&sizeW=1024&sizeH=1024";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        <li>red</li>
        画像の赤：0~255
        <li>green</li>
        画像の緑：0~255
        <li>blue</li>
        画像の青：0~255
        <li>sizeW</li>
        画像の幅
        <li>sizeH</li>
        画像の高さ
    </ul>
</ul>


<h4>simpleimage1</h4>
<ul>
    <li>特徴</li>
    単色画像生成
    <li>URL</li>
    <?php
    $url = currentURL()."image/"."simpleimage1.php";
    $urlsample = $url.""."?red=10&green=200&blue=200&sizeW=1024&sizeH=1024";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>
        <li>red</li>
        画像の赤：0~255
        <li>green</li>
        画像の緑：0~255
        <li>blue</li>
        画像の青：0~255
        <li>sizeW</li>
        画像の幅
        <li>sizeH</li>
        画像の高さ
    </ul>
</ul>

<h4>random</h4>
<ul>
    <li>特徴</li>
    ランダムな色の画像生成
    <li>URL</li>
    <?php
    $url = currentURL()."image/"."random1.php";
    $urlsample = $url.""."";
    ?>
    <a href=<?php echo $url; ?>><?php echo $url; ?></a>
    <li>Sample</li>
    <a href=<?php echo $urlsample; ?>><?php echo $urlsample; ?></a>
    <li>GETパラメータ</li>
    <ul>

    </ul>
</ul>

</br>
</br>
</br>
</br>

</body>
</html>