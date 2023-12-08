<?php
// $name = $_POST['name'];
//$birthPlace = $_POST['birthPlace'];

$name = $_POST['name'];
if(isset($_POST['selectOption'])) {
    // セレクトボックスで選択された値を受け取る
      $Place = $_POST['selectOption'];
      $selectedColumn = $Place;
  
    // CSVファイルのパス
      $csvFilePath = 'pref_lat_lon.csv';


    // CSVファイルを読み込んでヘッダーとデータを取得
       $csvData = array_map('str_getcsv', file($csvFilePath));
       $header = $csvData[0];
  
    // 選択された列のインデックスを取得
       $selectedColumnIndex = array_search($selectedColumn, $header);
       $a =  htmlspecialchars($selectedColumn);
  

       foreach ($csvData as $row) {
            if ($row[$selectedColumnIndex] == $selectedColumn) {
            $rowData = $row;
            //var_dump($rowData); 
            break;
            }
        }

        foreach ($rowData as $values) {
            //$a = $rowData[0];
            $b = $rowData[1];
            $c = $rowData[2];
            $d = $rowData[3];
            $e = $rowData[4];
        }
  }

  
//$place = $_POST['selectOption'];

//$time = date('Y-m-d H:i:s') . "\n";
//file_put_contents('data/data.txt', $time . $name . $birthPlace, FILE_APPEND);

//$time = date('Y-m-d H:i:s') . "\n";
//file_put_contents('data/data.txt', $name . $Place . $a . $b . $c , FILE_APPEND);
//file_put_contents('data/data.txt', $name . $a . $b . $c . $d . $e , FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $a; ?>のエゴイストは誰だ？</title>
    <link rel="stylesheet" href="style.css" rel="stylesheet" />
    <script type="text/javascript" src="https://www.bing.com/api/maps/mapcontrol?key=YOUR_API_KEY"></script>
    <script type="text/javascript">
        function loadMap() {
            const map = new Microsoft.Maps.Map('#myMap', {
                credentials: ''
            });

            // 地図上の追加の操作を追加
            // 指定した緯度経度
            //const location = new Microsoft.Maps.Location(35.6895, 139.6917);

            // PHPから取得した緯度経度
            const latitude = <?php echo $b; ?>;
            const longitude = <?php echo $c; ?>;
            const location = new Microsoft.Maps.Location(latitude, longitude);

            // ピンを追加
            const pin = new Microsoft.Maps.Pushpin(location, {
                //title: 'Tokyo'
                title: '<?php echo $a; ?>'
            });

            // ピンを地図に追加
            map.entities.push(pin);

            // 地図を指定した緯度経度にズーム
            map.setView({
                center: location,
                zoom: 7
            });
        }
    </script>
</head>

<body onload="loadMap()">

    <h1 class="ttl"><?php echo $a; ?>のエゴイストは誰だ？</h1>
    <div id="myMap"></div> 

    <div class="prof" style ="font-size: 20px; text-align: center; color: #fff;" >
        <?php

        $str = $d;

        $itoshiRin = '<p><span style="font-size:14px;">Name: </span>糸師 凛</p>';
        $itoshiSae = '<p><span style="font-size:14px;">Name: </span>糸師 冴</p>';
        $kurona = '<p><span style="font-size:14px;">Name: </span>黒名 蘭世</p>';
        $isagi = '<p><span style="font-size:14px;">Name: </span>潔 世一</p>';
        $nagi = '<p><span style="font-size:14px;">Name: </span>凪 誠士郎</p>';
        $bachira = '<p><span style="font-size:14px;">Name: </span>蜂楽 廻</p>';
        $baro = '<p><span style="font-size:14px;">Name: </span>馬狼 照英</p>';
        $michael = '<p><span style="font-size:14px;">Name: </span>ミヒェエル・カイザー</p>';
        $aryu = '<p><span style="font-size:14px;">Name: </span>蟻生 十兵衛</p>';
        $mikage = '<p><span style="font-size:14px;">Name: </span>御影 玲王</p>';
        $tokimitsu = '<p><span style="font-size:14px;">Name: </span>時光 青志</p>';
        $kunigami = '<p><span style="font-size:14px;">Name: </span>國神 錬介<p/>';
        $oliver = '<p><span style="font-size:14px;">Name:</span> オリヴァ・愛空</p>';
        $ego = '<p><span style="font-size:14px;">Name: </span>絵心 甚八</p>';
        $niko = '<p><span style="font-size:14px;">Name: </span>二子 一揮</p>';
        $karasu = '<p><span style="font-size:14px;">Name: </span>烏 旅人</p>';
        $otoya = '<p><span style="font-size:14px;">Name: </span>乙夜 影太</p>';
        $hiori = '<p><span style="font-size:14px;">Name: </span>氷織 羊</p>';
        $gaga = '<p><span style="font-size:14px;">Name: </span>我牙丸 吟</p>';
        $chigiri = '<p><span style="font-size:14px;">Name: </span>千切 豹馬</p>';
        $alexcis = '<p><span style="font-size:14px;">Name: </span>アレクシス・ネス</p>';
        $teieri = '<p><span style="font-size:14px;">Name: </span>帝襟 アンリ</p>';
        $shido = '<p><span style="font-size:14px;">Name: </span>士道 龍聖</p>';
        $raichi = '<p><span style="font-size:14px;">Name: </span>雷市 陣吾</p>';
        $yukimiya = '<p><span style="font-size:14px;">Name: </span>雪宮 剣優</p>';


        if (false !== strpos($str, 'illust_1.')) {
            echo $kurona;
        }
        if (false !== strpos($str, 'illust_2.')) {
            echo $itoshiRin;
        }
        if (false !== strpos($str, 'illust_3.')) {
            echo $itoshiSae;
        }
        if (false !== strpos($str, 'illust_4.')) {
            echo $bachira;
        }
        if (false !== strpos($str, 'illust_5.')) {
            echo $baro;
        }
        if (false !== strpos($str, 'illust_6.')) {
            echo $nagi;
        }
        if (false !== strpos($str, 'illust_7.')) {
            echo $michael;
        }
        if (false !== strpos($str, 'illust_8.')) {
            echo $isagi;
        }
        if (false !== strpos($str, 'illust_9.')) {
            echo $aryu;
        }
        if (false !== strpos($str, 'illust_10.')) {
            echo $itoshiSae;
        }
        if (false !== strpos($str, 'illust_11.')) {
            echo $isagi;
        }
        if (false !== strpos($str, 'illust_12.')) {
            echo $bachira;
        }
        if (false !== strpos($str, 'illust_13.')) {
            echo $mikage;
        }
        if (false !== strpos($str, 'illust_14.')) {
            echo $itoshiRin;
        }
        if (false !== strpos($str, 'illust_15.')) {
            echo $tokimitsu;
        }
        if (false !== strpos($str, 'illust_16.')) {
            echo $kunigami;
        }
        if (false !== strpos($str, 'illust_17.')) {
            echo $mikage;
        }
        if (false !== strpos($str, 'illust_18.')) {
            echo $oliver;
        }
        if (false !== strpos($str, 'illust_19.')) {
            echo $ego;
        }
        if (false !== strpos($str, 'illust_20.')) {
            echo $niko;
        }
        if (false !== strpos($str, 'illust_21.')) {
            echo $karasu;
        }
        if (false !== strpos($str, 'illust_22.')) {
            echo $isagi;
        }
        if (false !== strpos($str, 'illust_23.')) {
            echo $otoya;
        }
        if (false !== strpos($str, 'illust_24.')) {
            echo $otoya;
        }
        if (false !== strpos($str, 'illust_25.')) {
            echo $michael;
        }
        if (false !== strpos($str, 'illust_26.')) {
            echo $hiori;
        }
        if (false !== strpos($str, 'illust_27.')) {
            echo $karasu;
        }
        if (false !== strpos($str, 'illust_28.')) {
            echo $nagi;
        }
        if (false !== strpos($str, 'illust_29.')) {
            echo $bachira;
        }
        if (false !== strpos($str, 'illust_30.')) {
            echo $gaga;
        }
        if (false !== strpos($str, 'illust_31.')) {
            echo $kunigami;
        }
        if (false !== strpos($str, 'illust_32.')) {
            echo $mikage;
        }
        if (false !== strpos($str, 'illust_33.')) {
            echo $aryu;
        }
        if (false !== strpos($str, 'illust_34.')) {
            echo $chigiri;
        }
        if (false !== strpos($str, 'illust_35.')) {
            echo $alexcis;
        }
        if (false !== strpos($str, 'illust_36.')) {
            echo $itoshiRin;
        }
        if (false !== strpos($str, 'illust_37.')) {
            echo $nagi;
        }
        if (false !== strpos($str, 'illust_38.')) {
            echo $chigiri;
        }
        if (false !== strpos($str, 'illust_39.')) {
            echo $teieri;
        }
        if (false !== strpos($str, 'illust_40.')) {
            echo $shido;
        }
        if (false !== strpos($str, 'illust_41.')) {
            echo $baro;
        }
        if (false !== strpos($str, 'illust_42.')) {
            echo $raichi;
        }
        if (false !== strpos($str, 'illust_43.')) {
            echo $itoshiRin;
        }
        if (false !== strpos($str, 'illust_44.')) {
            echo $tokimitsu;
        }
        if (false !== strpos($str, 'illust_45.')) {
            echo $yukimiya;
        }
        if (false !== strpos($str, 'illust_46.')) {
            echo $chigiri;
        }
        if (false !== strpos($str, 'illust_47.')) {
            echo $nagi;
        }
        
        ?>
    </div>
    <div id="bp">
        <div class="b1"><img src=" <?php echo $d; ?>"></div>
        <div class="b2"><img src=" <?php echo $e; ?>"></div>
    </div>
    <div class="btn"><a href="input.php">BACK</a></div>

</body>
</html>



<!-- <html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html> -->
