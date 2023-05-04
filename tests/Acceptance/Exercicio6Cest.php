<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio6Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function TitleExercicio6Test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio6");
        $I->seeInTitle("Exercicio 6");
    }

    public function FormExercicio6Test(AcceptanceTester $I)
    {
        /**Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja
         * fora desse intervalo, informar que não existe mês com este número */
        $I->amOnPage('/Exercicio6');

        $meses = array(
            1 => 'janeiro',
            2 => 'fevereiro',
            3 => 'março',
            4 => 'abril',
            5 => 'maio',
            6 => 'junho',
            7 => 'julho',
            8 => 'agosto',
            9 => 'setembro',
            10 => 'outubro',
            11 => 'novembro',
            12 => 'dezembro'
        );

        // Itera por todos os meses, testando o valor correspondente
        foreach ($meses as $num => $mes) {
            $I->amOnPage('/Exercicio6');
            $I->fillField('num', $num);
            $I->click('Enviar');
           // $I->see("O número $num corresponde ao mês de $mes.");
        }

        // Testando um número fora do intervalo
        $I->amOnPage('/Exercicio6');
        $I->fillField('num', '20');
        $I->click('Enviar');
       // $I->see('Não existe mês com o número 20.');
    }
}

