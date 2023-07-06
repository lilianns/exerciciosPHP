<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio9Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio9Test(AcceptanceTester $I)
    {
    
        $I->amOnPage('/Exercicio9');

        $I->fillField("countRepeat", "3");
        $I->click('Enviar');
        $I->see("SOL");
        $I->see("SOL");
        $I->see("SOL");

        $I->fillField("countRepeat", "abc");
        $I->click('Enviar');
        $I->see("Por favor, insira um número válido.");
        
        
    }
}