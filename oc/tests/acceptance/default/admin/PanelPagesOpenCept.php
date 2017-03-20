<?php 
$I = new AcceptanceTester($scenario);
$I->am('the administrator');
$I->wantTo('check that all the pages in the panel open');

$I->login_admin();

$I->amOnPage('/oc-panel/');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/stats/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/update/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/ad/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/category/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/location/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/fields/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/coupon/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/content/page');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/content/email');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/newsletter/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/cmsimages/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/map');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/theme/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/theme/options');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/widget/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/menu/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/theme/css');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/market/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/settings/general');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/settings/form');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/settings/email');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/settings/payment');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/settings/plugins');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/translations/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/settings/image');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/user/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/role/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/pool/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/tools/optimize');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/crontab/index');
$I->dontSeeElement('#kohana_error');

$I->amOnPage('/oc-panel/import/index');
$I->dontSeeElement('#kohana_error');