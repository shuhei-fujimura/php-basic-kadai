<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            if ($order === "asc") {
                echo "昇順にソートします。<br>";
                sort($array);
            } elseif ($order === "desc") {
                echo "降順にソートします。<br>";
                rsort($array);
            } else {
                echo "指定されたソート順が不正です。'asc' または 'desc' を指定してください。<br>";
                return;
            }

            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        $nums = [15, 4, 18, 23, 10];

        sort_2way($nums, "asc"); 
        echo "<br>"; 
        sort_2way($nums, "desc");  
        ?>
    </p>
</body>

</html>
