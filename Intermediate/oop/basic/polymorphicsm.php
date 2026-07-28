<?php
/** Parent Class */
class Animal {
    public function sound(): void {
        echo "Animal Sound";
    }
}

/** Child 01 */
class Dog extends Animal {

    public function sound(): void
    {
        echo "Dog is made sound<br/>";
    }
}

/** Child 02 */
class Cat extends Animal {
    
    public function sound(): void
    {
        echo "Cat is Made Sound<br/>";
    }

}

/** Create Object */
$dog = new Dog();
$cat = new Cat();

$dog->sound();
$cat->sound();




















