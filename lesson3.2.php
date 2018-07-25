<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Наследование и интерфейсы</title>
</head>
<body>
<h2>Полиморфизм</h2>
<p>Полиморфизм принцип объектно-ориентированного программирования, который может переопределять свойства и методы,
    унаследованные от родительского класса.</p>

<h2>Наследование</h2>
<p>Наследование - принцип объектно-ориентированного программирования, который может не просто наследовать свойства
    и методы родительского класса, а также расширять их своими собственными методами и классами.</p>

<h2>Отличие интерфейсов и абстрактных классов</h2>
<p>Абстрактный класс может содержать, как абстрактные методы, так и конкретные реализации.<br>
Интерфейс может содержать только методы, причем без их реализации и константы.</p>
<h2>Когда что использовать?</h2>
<p>Классы лучше исользовать, когда повторяются описания объектов, а интерфейсы когда совершаются одни и те же действия.</p>

</body>
</html>

<?php

//супер класс
class SuperClass
{
    public $price;
}

//интерфейс для всех классов

interface Sell
{
    public function toSell();
}

class Car extends SuperClass implements Sell
{
    public $brand;
    public $model;
    public $type;

    public function __construct($brand, $model, $type, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
        $this->price = $price;
        echo "$this->brand, $this->model, $this->type, $this->price<br>";
    }

    public function toSell()
    {
        return 'Продажа';
    }
 }

$mercedes = new Car ('Mercedes', 'W-177', 'hatchback', 2000000);
$bmw = new Car ('BMW', 'x6', 'crossover', 6000000);


class Tv extends SuperClass implements Sell
{
    public $brand, $model, $diagonal;

    public function __construct($brand, $model, $diagonal)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->diagonal = $diagonal;
    }

    public function getInfo()
    {
        echo "Марка: $this->brand,  Модель: $this->model, Диагональ: $this->diagonal<br>";
    }
    public function toSell()
    {
        echo "Продажа $this->brand $this->model  за $this->price руб.<br>";
    }
}

$Sony = new Tv ('Sony', 'KD-55XE7096', 54.6);
$Samsung = new Tv ('Samsung', 'UE50MU6100U', 54.6);
$Sony->price=60000;
$Samsung->price=70000;

$Sony->getInfo();
$Sony->toSell();

$Samsung->getInfo();
$Samsung->toSell();
class Pen extends SuperClass implements Sell
{
    public $model, $color;

    public function __construct($model, $color, $price)
    {
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
    }

    public function getPrice()
    {
        echo "$this->price<br>";
    }

    public function toSell()
    {
        echo "Продажа ручек $this->model за $this->price руб.<br>";
    }
}
$pilot = new Pen('Pilot', 'black', 100);
$pilot->getPrice();
$pilot->toSell();

$bic = new Pen('BIC', 'blue', 30 );
$bic->getPrice();
$bic->toSell();
class Duck extends SuperClass implements Sell
{
    public $breed;
    public $dwelling;

    public function __construct($breed, $dwelling)
    {
        $this->breed = $breed;
        $this->dwelling = $dwelling;
    }

    public function getDuck()
    {
        echo "$this->breed:  Среда обитания - $this->dwelling<br>";
    }
    public function toSell()
    {
        echo "Продажа уточек $this->breed  за $this->price руб.<br>";
    }
}
$duck1 = new Duck('Кряква', 'болотистая местность');
$duck1->price=500;
$duck1->getDuck();
$duck1->toSell();

$duck2 = new Duck('Индоутка', 'около речных водоемов');
$duck2->price=600;
$duck2->getDuck();
$duck2->toSell();
class Product extends SuperClass implements Sell
{
    public $name;
    public $category;

    public function __construct($name, $category, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    public function getProducts()
    {
        echo "$this->category<br>$this->name<br>$this->price<br>";
    }
    public function toSell()
    {
        echo "Продажа $this->name за $this->price руб.<br>";
    }
}
$product1 = new Product('iPhone8', 'Телефон', 80000);
$product1->getProducts();
$product1->toSell();

$product2 = new Product('Indesit', 'Холодильник', 70000);
$product2 ->getProducts();
$product2->toSell();
?>

/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.07.2018
 * Time: 20:12
 */