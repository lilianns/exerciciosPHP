<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio3Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicio3Test(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio3");

        $I->fillField("nome", "maria");
        $I->fillField("idade", "25");
        $I->fillField("feminino", "masculino");
        $I->click('Enviar');
     
    }
}
