<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編15章課題</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;
      public function show_price(){
        echo $this->price;
      }
      public function __construct(string $name ,int $price){
        $this->name = $name;
        $this->price = $price;
      }
    }

    $apple = new Food('apple', 500);

    class Animal {
      private $name;
      private $height;
      private $weight;
      public function show_height(){
        echo $this->height;
      }
      public function __construct(string $name, int $height ,int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }
    $apple = new Food('apple', 500);

    $cat = new Animal('cat', 40, 20);

    print_r($apple);
    echo '<br>';
    print_r($cat);
    echo '<br>';

    $apple->show_price();
    echo '<br>';
    $cat->show_height();
    ?>
  </p>
</body>

</html>
