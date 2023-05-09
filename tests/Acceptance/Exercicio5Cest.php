<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio5Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio5Test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio5");

        $I->FillField("num1", "2");
        $I->fillField("num2", "2");
        $I->fillField("num3", "5");
        $I->click("Enviar");

    }
}
