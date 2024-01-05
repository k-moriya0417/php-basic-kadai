<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // Foodクラスを定義する
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;
 
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
            //  メソッドを定義する
            public function show_price(){
                echo $this->price;
            }
         }

         // Animalクラスを定義する
         class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
           //  メソッドを定義する
           public function show_height(){
               echo $this->height;
           }
        }
 
         // インスタンス化する
         $onion = new Food('玉ねぎ', 50);
         $cat = new Animal('ネコ', 30, 20);
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($onion);
         echo '<br>';
         print_r($cat);
         echo '<br>';
         $onion->show_price();
         echo '<br>';
         $cat->show_height();
         ?>
     </p>
 </body>
 
 </html>