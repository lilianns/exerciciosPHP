<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio17Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio17Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio17/form.html');

        $I->fillField("#vetor1", "10");
        $I->fillField("#vetor1", "20");
        $I->fillField("#vetor1", "30");
        $I->fillField("#vetor1", "40");
        $I->fillField("#vetor1", "50");
        $I->fillField("#vetor1", "60");
        $I->fillField("#vetor1", "70");
        $I->fillField("#vetor1", "80");
        $I->fillField("#vetor1", "90");
        $I->fillField("#vetor1", "100");
        $I->fillField("#vetor1", "110");
        $I->fillField("#vetor1", "120");
        $I->fillField("#vetor1", "130");
        $I->fillField("#vetor1", "140");
        $I->fillField("#vetor1", "150");
        $I->fillField("#vetor1", "160");
        $I->fillField("#vetor1", "170");
        $I->fillField("#vetor1", "180");
        $I->fillField("#vetor1", "190");
        $I->fillField("#vetor1", "200");


        $I->click('Enviar');


        $I->see("Maior valor: 200Menor valor: 200Percentual de números pares: 5%Média dos elementos: 10");

        $I->seeInDatabase('exercicio17', ['vetor1' => '10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200', 'maior' => '200' , 'menor' => '10', 'media' => '105', 'pares' => '100' ]);
    }
}