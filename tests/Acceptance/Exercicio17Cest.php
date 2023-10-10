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
        $I->fillField("#vetor2", "20");
        $I->fillField("#vetor3", "30");
        $I->fillField("#vetor4", "40");
        $I->fillField("#vetor5", "50");
        $I->fillField("#vetor6", "60");
        $I->fillField("#vetor7", "70");
        $I->fillField("#vetor8", "80");
        $I->fillField("#vetor9", "90");
        $I->fillField("#vetor10", "100");
        $I->fillField("#vetor11", "110");
        $I->fillField("#vetor12", "120");
        $I->fillField("#vetor13", "130");
        $I->fillField("#vetor14", "140");
        $I->fillField("#vetor15", "150");
        $I->fillField("#vetor16", "160");
        $I->fillField("#vetor17", "170");
        $I->fillField("#vetor18", "180");
        $I->fillField("#vetor19", "190");
        $I->fillField("#vetor20", "200");


        $I->click('Enviar');

        $I->see("Maior valor: 200Menor valor: 10Percentual de números pares: 100%Média dos elementos: 105");

        $I->seeInDatabase('exercicio17', ['vetor1' => '10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200']);
        $I->seeInDatabase('exercicio17', ['maior' => '200']);
        $I->seeInDatabase('exercicio17', ['menor' => '10']);
        $I->seeInDatabase('exercicio17', ['media' => '105']);
        $I->seeInDatabase('exercicio17', ['pares' => '100']);
    }

    public function Exercicio17Listagem(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio17/form.html');

        $I->click('Carregar Listagem');
        $I->amOnPage("/Exercicio17/listagem.php");
        $I->see('Vetor:
        10,20,30,40,50,60,70,80,90,100,110,120,130,140,150,160,170,180,190,200');
        $I->see('Maior valor:
        200');
        $I->see('Menor valor:
        10');
        $I->see('Média:
        105');
        $I->see('Percentual de pares:
        100 %');


    }
}