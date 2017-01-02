<?php 

$I = new AcceptanceTester($scenario);
$I->am('the admin');
$I->wantTo('install Yclas');
$I->lookForwardTo('see a success message after the installation and see the website');

$I->amOnPage('/'); //select language already
$I->see('Welcome to the super easy and fast installation');

$I->see('Start Installation','button');
sleep(2);
$I->fillField('#DB_HOST', 'localhost');
$I->fillField('#DB_NAME', 'openclassifieds');
$I->fillField('#DB_USER', 'root'); 	# Default travis user: root or travis
$I->fillField('#DB_USER', ''); 		# Default travis pass (blank): 

// $I->click('Continue');

$I->see('Site Configuration');
$I->fillField('#SITE_NAME', 'Test Yclas');
$I->fillField('#ADMIN_EMAIL', 'admin@reoc.lo');
$I->fillField('#ADMIN_PWD', '1234');

$I->click('Install');


$I->see('Congratulations');

?>
