<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

<<<<<<< HEAD
class Exercicio2Cest
=======
class Exercicio6Cest
>>>>>>> 97252d2 (adicionando o teste)
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
<<<<<<< HEAD
    public function TitleExercicio2Test(AcceptanceTester $I)
    {
     $I->amOnPage("/Exercicio2");

     $I->seeInTitle("Exercicio 2");
     $I->see('Exercicio 2');

    }

    public function FormExercicio2Test(AcceptanceTester $I)
    {
     $I->amOnPage("/Exercicio2");

     $I->fillField("Divisor", "5");
     $I->click('Enviar');
     //$I->see('É divisível por 5')

     $I->fillField("Divisor", "7");
     $I->click('Enviar');
     //$I->see('Não é divisível por 10, 5 e nem por 2.')

     $I->fillField("Divisor", "10");
     $I->click('Enviar');
     //$I->see('É divisível por 10')

     $I->fillField("Divisor", "12");
     $I->click('Enviar');
     //$I->see('É divisível por 2')

    }
}
=======
    public function FormExercicio2Test(AcceptanceTester $I)
    {
     $I->fillField("Divisor", "5");
     $I->click('Enviar');
     $I->see('É divisível por 5');

     $I->fillField("Divisor", "10");
     $I->click('Enviar');
     $I->see('É divisível por 10');

     $I->fillField("Divisor", "12");
     $I->click('Enviar');
     $I->see('É divisível por 2');

    }
}

>>>>>>> 97252d2 (adicionando o teste)
