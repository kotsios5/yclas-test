<?php 
$I = new AcceptanceTester($scenario);
$I->am('the administrator');
$I->wantTo('CRUD widgets');

$I->login_admin();

// Categories
$I->wantTo('create a widget');

$I->amOnPage('/oc-panel/widget');
$I->click('//*[@id="modal_Widget_Stats"]//button[@class="btn btn-primary"]');


// See on default theme
$I->amOnPage('/');
$I->see('Stats','h3');

// See on basecamp theme
$I->activate_theme('basecamp_free');
$I->amOnPage('/all');
$I->see('Stats','h3');

// Back to default theme
$I->activate_theme('default');

// Delete
$I->amOnPage('/oc-panel/widget');
$I->click('a[class="btn btn-danger pull-left"]');

$I->amOnPage('/');
$I->click('Logout');























