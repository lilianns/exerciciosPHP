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
    
        $I->amOnPage('/Exercicio5');

        $I->fillField("num1", "3");
        $I->fillField("num2", "4");
        $I->fillField("num3", "5");
        $I->click('Enviar');
        $I->see("Triângulo escaleno");

        $I->fillField("num1", "3");
        $I->fillField("num2", "3");
        $I->fillField("num3", "3");
        $I->click('Enviar');
        $I->see("Triângulo equilátero");

        $I->fillField("num1", "3");
        $I->fillField("num2", "3");
        $I->fillField("num3", "2");
        $I->click('Enviar');
        $I->see("Triângulo isósceles");

        $I->fillField("num1", "3");
        $I->fillField("num2", "2");
        $I->fillField("num3", "8");
        $I->click('Enviar');
        $I->see("Os valores informados não formam um triângulo");
    }
}
