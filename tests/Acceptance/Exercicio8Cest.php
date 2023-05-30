<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio8Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->fillField('$numero', '5'); 

        $I->click('Enviar');

        $I->see('De 1 até 5:'); 
        $I->see('1');
        $I->see('2');
        $I->see('3');
        $I->see('4');
        $I->see('5');
        $I->see('Produto: 120');


        $I->fillField('$numero', '3'); 

        $I->click('Enviar');

        $I->see('De 1 até 3:'); 
        $I->see('1');
        $I->see('2');
        $I->see('3');
        $I->see('Produto: 6');



    }
}
