<!DOCTYPE html>
<html lang="ja">
 
<head>
  <meta charset="UTF-8">
</head>

<body>
  <p>
    <?php
      $score1 = 80;
      $score2 = 60;
      $score3 = 55;
      $score4 = 40;
      $score5 = 100;
      $score6 = 25;
      $score7 = 80;
      $score8 = 95;
      $score9 = 30;
      $score10 = 60;

      $total = 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60;

      $average = $total / 10;

      echo '合計点' . $total;
      echo '<br>';
      echo '平均点' . $average;
    ?>
  </p>
</body>
</html>