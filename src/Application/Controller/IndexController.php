<?php
/**
 * Default controller
 * This controller is set within controller manager under 'Application\Index' key
 * By default it is linked to the 'home' route of the router
 *
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Default controller
 */
class IndexController extends AbstractActionController
{
	/**
	 * Default action.
	 * Controller are divided in 'Actions'
	 * To know with action to deal with, the route has to define a parameter called 'action'. 
	 * 'Home' route defined 'index' has the default action parameter value. 
	 */
    public function indexAction()
    {
        
    }
}
