<?php
class Wizard extends AbstractCharacter {
    public function __constuct() {
        $this->weapon = new Blunt();
    }

    public function talk() {
        echo "I\'m wizard!";
    }
}