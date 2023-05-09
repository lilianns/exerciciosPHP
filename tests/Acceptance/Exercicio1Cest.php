<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio1Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicio1Test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio1");
        $I->fillField("value1", "11");
        $I->fillField("value2", "10");
        $I->click("Enviar");
        $I->see("O resultado foi 29");

        $I->fillField('value1', 20);
        $I->fillField('value2', 1);
        $I->click("Enviar");
       // $I->see('O resultado foi 16'); testar o erro 

        $I->fillField("value1", "7");
        $I->fillField("value2", "15");
        $I->click("Enviar");
        $I->see("O resultado foi 30");
    }
}
