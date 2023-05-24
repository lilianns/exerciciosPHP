<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio7Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function exercicio7(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio7");
        $I->fillField("livro", "Nome do livro");
        $I->selectOption("tipousuario", "professor");
        $I->click("Gerar Recibo");
        $I->see("Livro: Nome do livro");
        $I->see("Tipo de usuário: Professor");
        $I->see("Prazo de devolução: 10 dias a partir de hoje");

        $I->fillField("livro", "Lilian");
        $I->selectOption("tipousuario", "aluno");
        $I->click("Gerar Recibo");
        $I->see("Livro: Lilian");
        $I->see("Tipo de usuário: Aluno");
        $I->see("Prazo de devolução: 3 dias a partir de hoje");
    }
}
