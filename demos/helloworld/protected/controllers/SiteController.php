<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
        $product = new stdClass();
        $product->qtty = 10;
        $this->render('index', array(
            'product' => $product
        ));
	}

    public function actionActivities()
    {
        $this->render('activities', array(
            'facet' => array(
                'result' => array(
                    'adventure' => 2,
                    'boxe' => 10
                )
            ),
            'mapping' => array(
                'adventure' => 'Adventure',
                'boxe' => 'Boxe'
            ),
            'url' => array(
                'params' => array()
            ),
            'selectedActivity' => 'adventure'
        ));
    }

    public function getCatalogUrl()
    {
        return '';
    }

    public function getStaticUrl()
    {
        return '';
    }
}