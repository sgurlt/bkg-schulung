<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Check that I am able to create, edit and delete an node.');
$I->signInWithEditor();
$I->comment('I am creating an node.');
$I->amOnPage('node/add/article');
$I->doNotSeeErrors();
$I->fillField('title[0][value]', 'Test');
$I->fillField('field_tags[target_id]', 'Everybody has access');
$I->click('Save and publish');
$I->doNotSeeErrors();
$I->comment('I am going to edit the node.');
$I->click('Edit');
$I->fillField('field_tags[target_id]', '');
$I->click('Save and keep published');
$I->doNotSeeErrors();
$I->click('Delete');
$I->doNotSeeErrors();
$I->click('#edit-submit');
$I->doNotSeeErrors();
