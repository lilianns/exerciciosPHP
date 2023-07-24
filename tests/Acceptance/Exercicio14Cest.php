<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicioTest(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio14/form.html");

        $I->fillField("altura_chico", "150");
        $I->fillField("crescimento_chico", "2");
        $I->fillField("altura_juca", "110");
        $I->fillField("crescimento_juca", "3");
        $I->click('Calcular');

        $I->see("Serão necessários 41 anos para que Juca seja maior do que Chico.");
        $I->seeInDatabase('exercicio14', ['altura_chico' => '150']);

    }
}
