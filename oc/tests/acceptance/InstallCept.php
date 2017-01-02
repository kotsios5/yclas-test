<?php 

$I = new AcceptanceTester($scenario);
$I->am('the admin');
$I->wantTo('install Yclas');
$I->lookForwardTo('see a success message after the installation and see the website');

$I->amOnPage('/?LANGUAGE=en_US'); //select language already
$I->see('Welcome to the super easy and fast installation');

$I->click('Start installation');
$I->see('DB Configuration');






?>
