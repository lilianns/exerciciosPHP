<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio13Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio13Test(AcceptanceTester $I)
    {
    
        $I->amOnPage('/Exercicio13/form.html');
        $I->fillField('number', '150,165');
        $I->click('Enviar');
        $I->see("Foi digitado 2 número(s) entre 100 e 200.");


        $I->amOnPage('/Exercicio13/form.html');
        $I->fillField('number', '');
        $I->click('Enviar');
        $I->see("Por favor, insira um número válido.");

        $I->seeInDatabase("exercicio13", ["numeros" => "150,165"]);
    }
}