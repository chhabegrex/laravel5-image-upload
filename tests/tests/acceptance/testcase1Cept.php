<?php 
$I = new AcceptanceTester($scenario);

$I->wantTo('Upload Page');
$I->amOnPage("/");
$I->see('Upload Page');

$I->fillField('height', 'ddi');
$I->fillField('width', '121');

$I->click('button');


$I->wantTo('List Page');
$I->amOnPage("/admin");
$I->see('List Page');


