<?php
class SiteControllerTest extends CTestCase
{
    public function testIndex()
    {
        $controller = new SiteController('site');
        $this->assertInstanceOf('SiteController', $controller);

        $result = $this->action($controller, 'actionIndex');
        var_dump($result);
    }

    protected function action($controller, $name)
    {
        ob_start();
        $controller->$name();
        return ob_get_clean();
    }
}