<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            $nums = [15,4,18,23,10];
            function sort_2way($array,$order){
                if($order){
                    echo'昇順にソートします。<br>';
                    sort($array);
                } else {
                    echo'降順にソートします<br>';
                    rsort($array);
                }

                foreach($array as $element){
                    echo $element.'<br>';
                }
            }
            sort_2way($nums,TRUE);
            sort_2way($nums,FALSE);
            // if ($order = true) {
            //     echo '昇順にソートします。';
            // } else {
            //     '降順にソートします。';
            // }
            // $nums = $array (15, 4, 18, 23, 10 );
            // sort($nums);
            // foreach ($nums as $num){
            //     echo $num . '<br>';
            // }
            // sort 2way = 
        ?>
    </p>
</body>

</html>
