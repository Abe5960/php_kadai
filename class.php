<!DOCTYPE>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function __construct(string $name, int $price){
                $this->name =$name;
                $this->price =$price;

            }
            public function show_price() {
                    echo $this-> price . '<br>';
            }    
        }
        
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height =$height;
                $this->weight = $weight;
            }
            public function show_height() {
                echo $this-> height . '<br>';
            }
        }

        $Food = new Food('Poteto',250);
        print_r($Food);
        
        $Animal = new Animal('dog',60,5000);
        print_r($Animal);

        echo '<br>';
        $Food->show_price();
        $Animal->show_height();
        ?>
    </p>
</body>
</html>
