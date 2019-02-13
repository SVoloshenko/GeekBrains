<!--1. Создать структуру классов ведения товарной номенклатуры.-->

<!--а) Есть абстрактный товар.-->
<!--б) Есть цифровой товар, штучный физический товар и товар на вес.-->
<!--в) У каждого есть метод подсчета финальной стоимости.-->
<!--г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза.
 У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах.
  У всех формируется в конечном итоге доход с продаж.-->
<!--д) Что можно вынести в абстрактный класс, наследование?-->


<?php

abstract class MainGood //Базовый класс товара
{
  const MARKUP = 15; //Общая наценка на товар
  abstract function GoodProfit(); //Абстрактный класс по вычислению прибыли

}

class DigitalGood extends MainGood{ //Класс цифрового товара наследник базового класса товара


    const PRICE = 280; //Цена за единицу товара
    private $count; //Кол-во товара

    public function __construct($count)
    {
       self::setDigitalGoodCount($count);
    }


    public function setDigitalGoodCount($count){
        $this->count = $count;
    }

    public function getDigitalGoodCount(){
        return $this->count;
    }

    function GoodProfit(){
        $markup = parent::MARKUP;
        $profit = (self::PRICE * $this->count) / 100 * $markup;
        echo "Прибыль от реализации электронного товара составила: <b>".$profit."</b> рублей.<br><br>";
    }
}

class SinglePieceGood extends DigitalGood { //Класс штучного товара наследник цифрового товара


    function GoodProfit()
    {
        $price = self::PRICE *2;
        $markup = parent::MARKUP;
        $profit = ($price * parent::getDigitalGoodCount()) / 100 * $markup;
        echo "Прибыль от реализации штучного товара составила: <b>".$profit."</b> рублей.<br><br>";
    }
}

class Goodbymass extends MainGood { //Класс весового товара наследник базового класса товара

    private $price; //Цена за единицу товара
    private $weight; //Вес одного товара

    public function __construct($price, $weight)
    {
        self::setGoodbymassPrice($price);
        self::setGoodbymassWeight($weight);
    }

    public function setGoodbymassPrice($price){
        $this->price = $price;
    }

    public function setGoodbymassWeight($weight){
        $this->weight = $weight;
    }

    function GoodProfit()
{
    $markup = parent::MARKUP;
    $profit = ($this->price * $this->weight) / 100 * $markup;
    echo "Прибыль от реализации весового товара составила: <b>".$profit."</b> рублей.<br>";
}
}

$goodDigit = new DigitalGood(100);
$goodDigit->GoodProfit();

$goodSingle = new SinglePieceGood(100);
$goodSingle->GoodProfit();

$goodMass = new Goodbymass(350,150);
$goodMass->GoodProfit();

