<?php
class Warrior extends AbstractCharacter {
    public function __constuct() {
        $this->weapon = new Axe();
    }

    public function talk() {
        echo "I\'m warrior!";
    }
}