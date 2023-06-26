<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio2Cest
{
    public function _before(AcceptanceTester $I) {
        
    }

    // tests
    public function TitleExercicio2Test(AcceptanceTester $I) {
        $I->amOnPage("/Exercicio2");

        $I->seeInTitle("Exercicio 2");
        $I->see('Exercicio 2');

    }

    public function FormExercicio2Test(AcceptanceTester $I) {
        $I->amOnPage("/Exercicio2");

        $I->fillField("Divisor", "5");
        $I->click('Enviar');
        $I->see('5 é divisível por 5');

        $I->fillField("Divisor", "7");
        $I->click('Enviar');
        $I->see('7 não é divisível por 10, 5 e nem por 2.');

        $I->fillField("Divisor", "10");
        $I->click('Enviar');
        $I->see('10 é divisível por 10, 5 e 2');

        $I->fillField("Divisor", "12");
        $I->click('Enviar');
        $I->see('12 é divisível por 2');

        $I->fillField("Divisor", "20");
        $I->click('Enviar');
        $I->see('20 é divisível por 10, 5 e 2');

    }
}