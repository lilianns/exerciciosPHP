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

        $I->fillField('input[name="vetor1[]"][id="vetor1"]', "10");
        $I->fillField('input[name="vetor1[]"][id="vetor2"]', "20");
        $I->fillField('input[name="vetor1[]"][id="vetor3"]', "30");
        $I->fillField('input[name="vetor1[]"][id="vetor4"]', "40");
        $I->fillField('input[name="vetor1[]"][id="vetor5"]', "50");
        $I->fillField('input[name="vetor1[]"][id="vetor6"]', "60");
        $I->fillField('input[name="vetor1[]"][id="vetor7"]', "70");
        $I->fillField('input[name="vetor1[]"][id="vetor8"]', "80");
        $I->fillField('input[name="vetor1[]"][id="vetor9"]', "90");
        $I->fillField('input[name="vetor1[]"][id="vetor10"]', "100");
        $I->fillField('input[name="vetor1[]"][id="vetor11"]', "110");
        $I->fillField('input[name="vetor1[]"][id="vetor12"]', "120");
        $I->fillField('input[name="vetor1[]"][id="vetor13"]', "130");
        $I->fillField('input[name="vetor1[]"][id="vetor14"]', "140");
        $I->fillField('input[name="vetor1[]"][id="vetor15"]', "150");
        $I->fillField('input[name="vetor1[]"][id="vetor16"]', "160");
        $I->fillField('input[name="vetor1[]"][id="vetor17"]', "170");
        $I->fillField('input[name="vetor1[]"][id="vetor18"]', "180");
        $I->fillField('input[name="vetor1[]"][id="vetor19"]', "190");
        $I->fillField('input[name="vetor1[]"][id="vetor20"]', "200");
        $I->click('Enviar');
        
        $I->see('Maior valor: 200',);
        $I->see('Menor valor: 10 ');
        $I->see('Percentual de números pares: 100%');
        $I->see('Média dos elementos: 105');

        $I->seeInDatabase('exercicio17', ['vetor1' => '10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190, 200', 'maior' => '200' , 'menor' => '20', 'media' => '105', 'pares' => '100' ]);
    }
}