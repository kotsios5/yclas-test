<?php 
$I = new AcceptanceTester($scenario);
$I->am('the administrator');
$I->wantTo('CRUD widgets');

$I->login_admin();

// Categories
$I->wantTo('create a widget');
$I->amOnPage('/oc-panel/widget');
$I->click(['class' => 'btn btn-primary btn-xs']);
$I->selectOption('placeholder','sidebar');
$I->click('Save changes');

// See on default theme
$I->amOnPage('/');
$I->seeElement('.col-md-3.col-sm-12.col-xs-12');

// See on basecamp theme
$I->activate_theme('basecamp_free');
$I->amOnPage('/all');
$I->seeElement('.Widget_Search');

// Back to default theme
$I->activate_theme('default');

// Delete
$I->amOnPage('/oc-panel/widget');
$I->click('button[class="btn btn-primary btn-xs pull-right"]');
$I->seeElement('.glyphicon.glyphicon-trash');
$I->click('a[class="btn btn-danger pull-left"]');

$I->amOnPage('/');
$I->click('Logout');























