<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio4Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio4");

        $I->fillField("numero1", "12");
        $I->fillField("numero2", "5");
        $I->fillField("numero3", "1");
        $I->click("Enviar");
    }
}
