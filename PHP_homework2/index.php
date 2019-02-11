<!--1. Создать структуру классов ведения товарной номенклатуры.-->

<!--а) Есть абстрактный товар.-->
<!--б) Есть цифровой товар, штучный физический товар и товар на вес.-->
<!--в) У каждого есть метод подсчета финальной стоимости.-->
<!--г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза.
 У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах.
  У всех формируется в конечном итоге доход с продаж.-->
<!--д) Что можно вынести в абстрактный класс, наследование?-->



!!!!!!!!!---------------ЗАПУТАЛСЯ, ДОДЕЛАЮ ПОСЛЕ ПЕРЕСМОТРА УРОКОВ--------!!!!!!!!
!!!!!!!!!---------------УТОНУЛ В НАСЛЕДОВАНИИ-----------------------------!!!!!!!!





<?php

abstract class MainGood
{
    protected $markup; //Наценка
    protected $price; //Цена за единицу товара
    protected $count; //Кол-во товара
    protected $weight; //Вес одного товара

  abstract function GetPrice();

  protected function setDataGoods($markup, $price, $count, $weight){
    $this->markup = $markup;
    $this->price = $price;
    $this->count = $count;
    $this->weight = $weight;

  }
}



class DigitalGood extends MainGood{


    function GetPrice(){

        $priceSinglePieceGood = new SinglePieceGood;
      $price = $priceSinglePieceGood->price / 2;

     $profit = ($price * $this->count) / 100 * $this->markup;
      echo "Прибыль от реализации электронного товара составила: ".$profit.'<br>';
  }
}

class SinglePieceGood extends MainGood {



    function GetPrice()
{
    $profit = ($this->price * $this->count) / 100 * $this->markup;
   echo "Прибыль от реализации штучного товара составила: ".$profit.'<br>';
}
}


class Goodbymass extends MainGood {


    function GetPrice()
{
    $profit = ($this->price * $this->weight) / 100 * $this->markup;
    echo "Прибыль от реализации весового товара составила: ".$profit;
}
}

$goodDigit = new DigitalGood;
$goodSingle = new SinglePieceGood;
$goodMass = new Goodbymass;

//$goodDigit->GetPrice(30,130,100,0);
$goodSingle->GetPrice();
$goodMass->GetPrice();