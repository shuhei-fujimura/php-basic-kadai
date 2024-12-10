<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array) {  
            echo "昇順にソートします。<br>";
            $asc_array = $array; 
            sort($asc_array);
            foreach ($asc_array as $value) {
            echo $value . "<br>";
            }
            echo "降順にソートします。<br>";
            $desc_array = $array;
            rsort($desc_array);
            foreach ($desc_array as $value) {
                echo $value . "<br>";
            }
            }
            $nums = [15, 4, 18, 23, 10];
            sort_2way($nums);
        ?>
    </p>
</body>

</html>