<?php 

class IndexCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('test my page');
        $I->amGoingTo("/index-test.php");
        $I->see('My Web Application');
    }
}
