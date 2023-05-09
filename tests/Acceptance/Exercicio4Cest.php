<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio4Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio4Test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio4");

        $I->fillField("numero1", "11");
        $I->fillField("numero2", "15");
        $I->fillField("numero3", "20");
        $I->click("Enviar");

        $I->see("201511");

    }
}
