<?php
interface Animal {
    const DOG = 1;
    const CAT = 2;
    const TIGER = 3;
    public function talk();
}

class Dog implements Animal {

    public function talk() {
        echo "Dog talk: Wolf Wolf<br>";
    }
}

class Cat implements Animal {

    public function talk() {
        echo "Cat talk: Mew Mew<br>";
    }
}


class Tiger implements Animal {
    public function talk() {
        echo "Tiger talk: Gru Gru<br>";
    }
}

class AnimalFactory {
    public function getAnimal($type) {
        switch ($type) {
            case Animal::DOG:
                return new Dog;
                break;
            case Animal::CAT:
                return new Cat;
                break;
            case Animal::TIGER:
                return new Tiger;
            default:
                return null;
                break;
        }
        
        return null;
    }
}

$factory = new AnimalFactory();

$dog = $factory->getAnimal(Animal::DOG);
$dog->talk();

$cat = $factory->getAnimal(Animal::CAT);
$cat->talk();

$tiger = $factory->getAnimal(Animal::TIGER);
$tiger->talk();


