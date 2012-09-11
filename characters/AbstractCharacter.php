<?php
abstract class AbstractCharacter {
    abstract public function talk();

    public function setWeapon($weapon) {
        $this->weapon = $weapon;
    }

    public function attack() {
        if(isset($this->weapon)) {
            return $this->weapon->damage();
        } else {
            throw new Exception('You must use setWeapon() function.');
        }
    }
}