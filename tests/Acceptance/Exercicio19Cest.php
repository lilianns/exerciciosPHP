<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio19Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicioTest(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio19/form.html");

        $I->fillField("matrix[0][0]", "6");
        $I->fillField("matrix[0][1]", "2");
        $I->fillField("matrix[0][2]", "3");
        $I->fillField("matrix[0][3]", "3");
        $I->fillField("matrix[0][4]", "5");

        $I->fillField("matrix[1][0]", "2");
        $I->fillField("matrix[1][1]", "50");
        $I->fillField("matrix[1][2]", "50");
        $I->fillField("matrix[1][3]", "1");
        $I->fillField("matrix[1][4]", "5");

        $I->fillField("matrix[2][0]", "6");
        $I->fillField("matrix[2][1]", "5");
        $I->fillField("matrix[2][2]", "50");
        $I->fillField("matrix[2][3]", "6");
        $I->fillField("matrix[2][4]", "6");

        $I->fillField("matrix[3][0]", "2");
        $I->fillField("matrix[3][1]", "2");
        $I->fillField("matrix[3][2]", "5");
        $I->fillField("matrix[3][3]", "5");
        $I->fillField("matrix[3][4]", "6");

        $I->fillField("matrix[4][0]", "1");
        $I->fillField("matrix[4][1]", "2");
        $I->fillField("matrix[4][2]", "5");
        $I->fillField("matrix[4][3]", "5");
        $I->fillField("matrix[4][4]", "10");

        $I->click('Enviar');

        $I->see("6", "table tr:nth-child(1) td:nth-child(1)"); // Verifica se "6" está na primeira linha e na primeira coluna
        $I->see("50", "table tr:nth-child(2) td:nth-child(2)"); 
        $I->see("50", "table tr:nth-child(3) td:nth-child(3)"); 
        $I->see("5", "table tr:nth-child(4) td:nth-child(4)");   
        $I->see("10", "table tr:nth-child(5) td:nth-child(5)"); 

        
        $I->seeInDatabase("exercicio19", ["matriz" => "2, 3, 3, 5, 2, 50, 1, 5, 6, 5, 6, 6, 2, 2, 5, 6, 1, 2, 5, 5"]);
        $I->seeInDatabase('exercicio19', ['diagonal' => '6, 50, 50, 5, 10']);

    }
}