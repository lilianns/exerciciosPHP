<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio3Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicio3Test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio3");

        $I->fillField("nome", "maria");
        $I->fillField("idade", "24");
        $I->selectOption("select[name='genero']", "masculino"); //teste do sexo
        $I->click('Enviar');

        $I->see(" --- NAO ACEITA");


    }

    public function FromExercicio3AceitaTest(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio3");

        
        $I->fillField("nome", "maria");
        $I->fillField("idade", "24");
        $I->selectOption("select[name='genero']", "feminino");
        $I->click('Enviar');

        $I->see(" --- ACEITA");


    }

    public function FromExercicio3IdadeTest(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio3");
            
        $I->fillField("nome", "maria");
        $I->fillField("idade", "26");  //teste de idade
        $I->selectOption("select[name='genero']", "feminino");
        $I->click('Enviar');

        $I->see(" --- NAO ACEITA");


    }
    
}
