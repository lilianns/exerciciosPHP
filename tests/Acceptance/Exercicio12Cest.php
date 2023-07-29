<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio12Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FormExercicioTest(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio12/form.html");
        $I->fillField('palavra', 'Teste');
        $I->click('Imprimir');
        $I->see('Teste');
        $I->see('Teste Teste'); 
        $I->see('Teste Teste Teste'); 
        $I->see('Teste Teste Teste Teste'); 

        $I->amOnPage("/Exercicio12/form.html");
        $palavras = ['Teste'];
        for ($i = 0; $i < count($palavras); $i++) {
            $palavra = $palavras[$i];
            $I->seeInDatabase('exercicio12', ['palavra' => 'Teste']);
        }
    }
}
