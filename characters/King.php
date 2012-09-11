<?php
class King extends AbstractCharacter {
    public function __constuct() {
        $this->weapon = new Sword();
    }

    public function talk() {
        echo "I\'m the King!";
    }
}