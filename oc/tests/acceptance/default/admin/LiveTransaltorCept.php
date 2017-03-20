<?php 
$I = new AcceptanceTester($scenario);
$I->am('the administrator');
$I->wantTo('check that live translator works');

$I->login_admin();

$I->amOnPage('/oc-panel/?edit_translation=1');
$I->seeElement('.editable.editable-click');

$I->activate_theme('basecamp_free');
$I->seeElement('.editable.editable-click');

$I->activate_theme('default');
$I->amOnPage('/oc-panel/?edit_translation=0');
$I->dontSeeElement('.editable.editable-click');

$I->activate_theme('basecamp_free');
$I->dontSeeElement('.editable.editable-click');

$I->activate_theme('default');
