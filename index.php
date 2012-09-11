<?php
include('characters/AbstractCharacter.php');
include('characters/King.php');
include('characters/Warrior.php');
include('characters/Wizard.php');

include('weapon/WeaponBehavior.php');
include('weapon/Sword.php');
include('weapon/Axe.php');
include('weapon/Blunt.php');

$king = new King();
$king->talk();
$king->setWeapon(new Axe());
echo $king->attack();