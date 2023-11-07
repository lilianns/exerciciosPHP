<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio18Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicioTest(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio18/form.html");

        $I->fillField("numeros", "15,12,10,5,3,15,14,2,4,7");
        $I->fillField("numeros2", "19,12,10,5,35,15,14,2,4,8");
        $I->click('Enviar');

        $I->see("Números não comuns aos dois vetores: 3 7 19 35 8");
        
        
        $I->seeInDatabase("exercicio18", ["vetor" => "15, 12, 10, 5, 3, 15, 14, 2, 4, 7"]);


        $I->seeInDatabase('exercicio18', ['vetor2' => '19, 12, 10, 5, 35, 15, 14, 2, 4, 8']);


        $I->seeInDatabase('exercicio18', ['Naocomuns' => '3, 7, 19, 35, 8']);

        $I->see('Vetor:
                20, 10, 2
                Vetor 2:
                2
                Não comuns:
                20, 10');
    }
}