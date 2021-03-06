<?php

/*
 * Copyright (C) 2009-2012 Internet Neutral Exchange Association Limited.
 * All Rights Reserved.
 *
 * This file is part of IXP Manager.
 *
 * IXP Manager is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation, version v2.0 of the License.
 *
 * IXP Manager is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License v2.0
 * along with IXP Manager.  If not, see:
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */


/**
 * Controller: Static pages
 *
 * @author     Barry O'Donovan <barry@opensolutions.ie>
 * @category   IXP
 * @package    IXP_Controller
 * @copyright  Copyright (c) 2009 - 2012, Internet Neutral Exchange Association Ltd
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU GPL V2.0
 */
class StaticController extends IXP_Controller_Action
{


    public function preDispatch()
    {
        if( substr( $this->getRequest()->getActionName(), 0, 4 ) == 'auth' )
            $this->_requireAuth();
    }
    
    private function _requireAuth( $priv = \Entities\User::AUTH_CUSTUSER )
    {
        if( !$this->getAuth()->hasIdentity() || $this->getUser()->getPrivs() < $priv )
        {
            if( $this->traitIsInitialised( 'OSS_Controller_Action_Trait_Messages' ) )
                $this->addMessage( "Please login below.", OSS_Message::ERROR );
        
            if( $this->traitIsInitialised( 'OSS_Controller_Action_Trait_Namespace' ) )
                $this->getSessionNamespace()->postAuthRedirect = $this->getRequest()->getPathInfo();
        
            $this->redirectAndEnsureDie( 'auth/login' );
        }
        
        
    }
    
    public function supportAction()
    {}

    public function exampleAction()
    {}

    public function feesAction()
    {
        $this->_requireAuth();
    }

    public function housingAction()
    {
        $this->_requireAuth();
    }

    public function meetingsInstructionsAction()
    {
        $this->_requireAuth();
    }
    
    public function miscBenefitsAction()
    {
        $this->_requireAuth();
    }

    public function switchesAction()
    {
        $this->_requireAuth();
    }

    public function portSecurityAction()
    {
        $this->_requireAuth();
    }
    
    public function routeServersAction()
    {
        $this->_requireAuth();
        
        // just find out if the user has route servers enabled or not
        $this->view->rsclient = false;
        foreach( $this->getCustomer()->getVirtualInterfaces() as $vi )
            foreach( $vi->getVlanInterfaces() as $vli )
                if( $vli->getRsclient() )
                    $this->view->rsclient = true;
    }
    
    public function as112Action()
    {
        $this->_requireAuth();
        
        // just find out if the user AS112 enabled or not
        $this->view->as112 = false;
        $this->view->rsclient = false;
        foreach( $this->getCustomer()->getVirtualInterfaces() as $vi )
        {
            foreach( $vi->getVlanInterfaces() as $vli )
            {
                if( $vli->getAs112client() )
                    $this->view->as112 = true;
                if( $vli->getRsclient() )
                    $this->view->rsclient = true;
            }
        }
    }
    
}


