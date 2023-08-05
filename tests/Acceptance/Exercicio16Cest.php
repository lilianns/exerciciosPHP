<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio16Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio16Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio16/form.html');

        $I->fillField("numero", "3,6,10,5,7,9,8,1,4,25,16,13,17,89,15");
        $I->click('Enviar');
        $I->see("Tabuada do número: 3");
        $I->see('O número 3 é ímpar.');
        $I->see("O número 6 é par.");
        $I->see('O número 10 é par.');
        $I->see('O número 5 é ímpar.');
        $I->see('O número 7 é ímpar.');
        $I->see('O número 9 é ímpar.');
        $I->see('O número 8 é par.');
        $I->see('O número 1 é ímpar.');
        $I->see('O número 4 é par.');
        $I->see('O número 25 é ímpar.');
        $I->see('O número 16 é par.');
        $I->see('O número 13 é ímpar.');
        $I->see('O número 17 é ímpar.');
        $I->see('O número 89 é ímpar.',);
        $I->see('O número 15 é ímpar.');

        $I->seeInDatabase('exercicio16', ['numeros' => '3,6,10,5,7,9,8,1,4,25,16,13,17,89,15', 'resposta' => 'O número 3 é ímpar.<br>O número 6 é par.<br>O número 10 é par.<br>O número 5 é ímpar.<br>O número 7 é ímpar.<br>O número 9 é ímpar.<br>O número 8 é par.<br>O número 1 é ímpar.<br>O número 4 é par.<br>O número 25 é ímpar.<br>O número 16 é par.<br>O número 13 é ímpar.<br>O número 17 é ímpar.<br>O número 89 é ímpar.<br>O número 15 é ímpar.<br>']);
    }
}
