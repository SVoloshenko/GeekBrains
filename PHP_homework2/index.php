<!--1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п.-->

<?php

class Items {
    public $img;
    public $title;
    public $price;
    public $link;

    public function SetImgBlock($img, $title, $price, $link){
        echo "<img src=".$this->img = $img.">
               <h3>".$this->title = $title."</h3>
               <p>".$this->price = $price."</p>
               <a href=\"#\">".$this->link = $link."</a>
               <br><br><br>";
    }
}

$imgBlock = new Items();
$imgBlock->SetImgBlock("img/Product_1.jpg", "Футболка мужская","1500 рублей", "Заказать товар");

?>

<!--
********************************************************************************************************************
2. Описать свойства класса из п.1 (состояние).-->

<!--

В нашем примере у свойств класса назначены модификаторы public, что означает, публичный обращаться к свойствам объекта
мы сможем в любом месте. Значение свойства данного объекта являются динамическими.

-->

<!--
********************************************************************************************************************
3. Описать поведение класса из п.1 (методы).-->

<!--

В нашем примере у метода класса назначен модификатор public, что означает, публичный обращаться к этому методу объекта
мы сможем в любом месте. В данном случае метод по типу является "сеттером" он принимает паметры для присвоения значений
свойств объекта.

-->

<!--
********************************************************************************************************************
4. Придумать наследников класса из п.1. Чем они будут отличаться?
Отличие потомков в методах, где менятеся шрифт названия товара и цвет цены.

-->

<?php

class ItemNext1 extends Items{
    public function SetImgBlock($img, $title, $price, $link){
        echo "<img src=".$this->img = $img.">
               <h2>".$this->title = $title."</h2>
               <p style='color: red'>".$this->price = $price."</p>
               <a href=\"#\">".$this->link = $link."</a>
               <br><br><br>";
    }
}

class ItemNext2 extends Items{
    public function SetImgBlock($img, $title, $price, $link){
        echo "<img src=".$this->img = $img.">
               <h1>".$this->title = $title."</h1>
               <p style='color: blue'>".$this->price = $price."</p>
               <a href=\"#\">".$this->link = $link."</a>
               <br><br><br>";
    }
}

$imgBlock1 = new ItemNext1();
$imgBlock1->SetImgBlock("img/Product_2.jpg", "Блузкая женская","1800 рублей", "Заказать товар");

$imgBlock2 = new ItemNext2();
$imgBlock2->SetImgBlock("img/Product_3.jpg", "Куртка мужская","7500 рублей", "Заказать товар");

?>

<!--
********************************************************************************************************************
5. Дан код:-->
<?php
//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//$a1 = new A();
//$a2 = new A();
//$a1->foo();
//$a2->foo();
//$a1->foo();
//$a2->foo();
//?>

<!--Что он выведет на каждом шаге? Почему?
В методе foo применено статическое свойство x, которое при каждом обращении к методу класса увеличивается на 1
-->
<!--1 2 3 4-->

<!--    Немного изменим п.5:-->

<?php
//
//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//class B extends A {
//}
//$a1 = new A();
//$b1 = new B();
//$a1->foo();
//$b1->foo();
//$a1->foo();
//$b1->foo();
//
//?>

<!-- 1 1 2 2
********************************************************************************************************************
6. Объясните результаты в этом случае.
В методе foo применено статическое свойство x, которое при каждом обращении к методу класса увеличивается на 1.
Экземпляры класса получают первоначальный вывод метода foo - который равен 1, и далее идёт повторное обращение к методу.
-->


<!--
********************************************************************************************************************
7. *Дан код:-->

<?php
//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//class B extends A {
//}
//$a1 = new A;
//$b1 = new B;
//$a1->foo();
//$b1->foo();
//$a1->foo();
//$b1->foo();
//
//?>
<!-- 1 1 2 2
<!--Что он выведет на каждом шаге? Почему?
Дубль примера №6 :))
В методе foo применено статическое свойство x, которое при каждом обращении к методу класса увеличивается на 1.
Экземпляры класса получают первоначальный вывод метода foo - который равен 1, и далее идёт повторное обращение к методу.
-->