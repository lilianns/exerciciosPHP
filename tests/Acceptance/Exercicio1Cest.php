<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio1Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio1');
        $I->fillField("value1", "11");
        $I->fillField("value2", "10");
        $I->click('Enviar');
        
    }
}
