<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio15Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicioTest(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio15/form.html");

        $I->fillField("massaInicial", "9");
        $I->fillField("massaLimite", "0.9");
        $I->click('Calcular');
        $I->see("270");

        $I->seeInDatabase('exercicio15', ['massaInicial' => '9']);
        $I->seeInDatabase('exercicio15', ['tempo' => '270']);
    }
}
