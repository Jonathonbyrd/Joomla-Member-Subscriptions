<?php
/**
 * Joomla! 1.5 component subscriptions
 *
 * @version $Id: controller.php 2010-06-23 11:53:05 svn $
 * @author Jonathon Byrd
 * @package Joomla
 * @subpackage subscriptions
 * @license Copyright (c) 2010 - All Rights Reserved
 *
 * Component is designed to manage subscriptions
 *
 * This component file was created using the Joomla Component Creator by Not Web Design
 * http://www.notwebdesign.com/joomla_component_creator/
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

/**
 * subscriptions Component Controller
 */
class SubscriptionsController extends JController {
	function display() {
        // Make sure we have a default view
        if( !JRequest::getVar( 'view' )) {
		    JRequest::setVar('view', 'subscriptions' );
        }
		parent::display();
	}
}
?>