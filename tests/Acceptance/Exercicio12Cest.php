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

        $I->amOnPage("/Exercicio12");
        $I->fillField('palavra', 'Teste');
        $I->click('Enviar');
        $I->see('Teste');
        $I->see('Teste Teste'); 
        $I->see('Teste Teste Teste'); 
        $I->see('Teste Teste Teste Teste'); 

        $I->fillField('palavra', '');
        $I->click('Enviar');
        $I->see('Por favor, volte e digite uma palavra.');

    }

    public function testConexaoBancoDados(FunctionalTester $I)
    {
        
        $conexao = mysqli_connect('database', 'user_lilian', 'senha', 'titans');
        $I->assertInstanceOf('mysqli', $conexao);
        mysqli_close($conexao);
    }
}
