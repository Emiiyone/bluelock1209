<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>エゴイストは誰だ？</title>
    <link rel="stylesheet" href="style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrap">
        <h1 class="ttl-img"><img src="ttl.png" alt="エゴイストは誰だ？"></h1>
        <div id="select">
            <form action="write.php" method="post">
                <!-- <p class="onamae">お名前: <input type="text" name="name"></p> -->
                <!-- 出身: <input type="text" name="birthPlace">  -->
                <?php

                
                        // CSVファイルのパス
                        $csvFilePath = 'pref_lat_lon.csv';
                
                        // CSVファイルを読み込んでx列目の値を取得
                        $csvData = array_map('str_getcsv', file($csvFilePath));
                        $values = array_column($csvData, 0); // 1列目の値を取得
                        
                        //var_dump( $values );
                
                        // セレクトボックスのオプションを生成
                        echo '<label class="selectbox"><select name="selectOption">';
                        foreach ($values as $value) {
                            echo '<option value="' . htmlspecialchars($value) . '">' . htmlspecialchars($value) . '</option>';
                        }
                        echo '</select></label>';
                ?>

                <input type="submit" value="送信">
            </form>
        </div>
    </div>
</body>

</html>
