<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicioTest(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio14/form.html");

        $I->fillField("altura_chico", "150");
        $I->fillField("crescimento_chico", "2");
        $I->fillField("altura_juca", "110");
        $I->fillField("crescimento_juca", "3");
        $I->click('Calcular');

        $I->see("Serão necessários 41 anos para que Juca seja maior do que Chico.");
        
        
        $I->seeInDatabase("exercicio14", ["altura_chico" => "150"]);


        $I->seeInDatabase('exercicio14', ['crescimento_chico' => '2']);


        $I->seeInDatabase('exercicio14', ['altura_juca' => '110']);

        $I->seeInDatabase('exercicio14', ['crescimento_juca' => '3']);

        //listagem
        $I->amOnPage('/Exercicio14/listagem.php');

        $I->see('Altura Chico: 150 cm
                Altura Juca: 110 cm
                Crescimento Chico: 2 cm
                Crescimento Juca: 3 cm
                Anos: 41');
    }
}
