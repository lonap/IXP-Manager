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
 * Form: adding / editing customers
 *
 * @author     Barry O'Donovan <barry@opensolutions.ie>
 * @category   INEX
 * @package    INEX_Form
 * @copyright  Copyright (c) 2009 - 2012, Internet Neutral Exchange Association Ltd
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU GPL V2.0
 */
class INEX_Form_Customer extends INEX_Form
{
    public function init()
    {
        $this->setDecorators( [ [ 'ViewScript', [ 'viewScript' => 'customer/forms/edit.phtml' ] ] ] );
        
        $name = $this->createElement( 'text', 'name' );
        $name->addValidator( 'stringLength', false, array( 1, 255 ) )
            ->setRequired( true )
            ->setLabel( 'Name' )
            ->setAttrib( 'class', 'span6' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $name  );

        $type = $this->createElement( 'select', 'type' );
        $type->setMultiOptions( [ '0' => '' ] + \Entities\Customer::$CUST_TYPES_TEXT )
            ->setRegisterInArrayValidator( true )
            ->setLabel( 'Type' )
            ->setAttrib( 'class', 'chzn-select span6' )
            ->setErrorMessages( array( 'Please select a customer type' ) );
        $this->addElement( $type );

        $shortname = $this->createElement( 'text', 'shortname' );
        $shortname->addValidator( 'stringLength', false, array( 1, 255 ) )
            ->addValidator( 'alnum' )
            ->addValidator( 'regex', false, array('/^[a-z0-9]+/' ) )
            ->setRequired( true )
            ->setAttrib( 'class', 'span4' )
            ->setLabel( 'Short Name' )
            ->addFilter( 'StringToLower' )
            ->addFilter( 'StringTrim' );
        $this->addElement( $shortname  );


        $corpwww = $this->createElement( 'text', 'corpwww' );
        $corpwww->addValidator( 'stringLength', false, array( 0, 255 ) )
            ->setRequired( false )
            ->setAttrib( 'placeholder', 'http://www.example.com/' )
            ->setAttrib( 'class', 'span6' )
            ->setLabel( 'Corporate Website' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $corpwww );

        $datejoin = $this->createElement( 'text', 'datejoin' );
        $datejoin->addValidator( 'stringLength', false, array( 10, 10 ) )
            ->addValidator( 'regex', false, array('/^\d\d\d\d-\d\d-\d\d/' ) )
            ->setRequired( false )
            ->setLabel( 'Date Joined' )
            ->setAttrib( 'placeholder', 'YYYY-MM-DD' )
            ->setAttrib( 'class', 'span4' )
            ->addFilter( 'StringTrim' )
            ->setAttrib( 'id', 'datejoin' );
        $this->addElement( $datejoin );

        $dateleave = $this->createElement( 'text', 'dateleave' );
        $dateleave->addValidator( 'stringLength', false, array( 10, 10 ) )
            ->addValidator( 'regex', false, array('/^\d\d\d\d-\d\d-\d\d/' ) )
            ->setRequired( false )
            ->setAttrib( 'placeholder', 'YYYY-MM-DD' )
            ->setAttrib( 'class', 'span4' )
            ->setLabel( 'Date Left' )
            ->addFilter( 'StringTrim' );
        $this->addElement( $dateleave );

        $status = $this->createElement( 'select', 'status' );
        $status->setMultiOptions( [ '0' => '' ] + \Entities\Customer::$CUST_STATUS_TEXT )
            ->setRegisterInArrayValidator( true )
            ->setLabel( 'Status' )
            ->setRequired( true )
            ->setAttrib( 'class', 'chzn-select span6' )
            ->setErrorMessages( array( 'Please set the customer\'s status' ) );
        $this->addElement( $status );


        $autsys = $this->createElement( 'text', 'autsys' );
        $autsys->addValidator('int')
            ->addValidator( 'greaterThan', false, array( -1 ) )
            ->setRequired( false )
            ->setAttrib( 'class', 'span4' )
            ->setLabel( 'AS Number' );
        $this->addElement( $autsys  );

        $maxprefixes = $this->createElement( 'text', 'maxprefixes' );
        $maxprefixes->addValidator('int')
            ->addValidator( 'greaterThan', false, array( -1 ) )
            ->setRequired( false )
            ->setAttrib( 'class', 'span2' )
            ->setLabel( 'Max Prefixes' );
        $this->addElement( $maxprefixes  );

        $peeringemail = $this->createElement( 'text', 'peeringemail' );
        $peeringemail->addValidator('emailAddress' )
            ->addValidator( 'stringLength', false, array( 0, 64 ) )
            ->setRequired( false )
            ->setAttrib( 'class', 'span6' )
            ->setAttrib( 'placeholder', 'peering@example.com' )
            ->setLabel( 'Email' );
        $this->addElement( $peeringemail );

        $peeringpolicy = $this->createElement( 'select', 'peeringpolicy' );
        $peeringpolicy->setMultiOptions( [ 0 => '' ] + \Entities\Customer::$PEERING_POLICIES )
            ->setRegisterInArrayValidator( true )
            ->setLabel( 'Peering Policy' )
            ->setRequired( false )
            ->setAttrib( 'class', 'chzn-select span6' );
        
        $this->addElement( $peeringpolicy );
        
        
        $peeringmacro = $this->createElement( 'text', 'peeringmacro' );
        $peeringmacro->addValidator( 'stringLength', false, array( 0, 255 ) )
            ->setRequired( false )
            ->setLabel( 'Peering Macro' )
            ->addFilter( 'StringTrim' )
            ->setAttrib( 'class', 'span4' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $peeringmacro );


        $this->addElement( INEX_Form_IrrdbConfig::getPopulatedSelect() );



        $activepeeringmatrix = $this->createElement( 'checkbox', 'activepeeringmatrix' );
        $activepeeringmatrix->setLabel( 'Active Peering Matrix' )
            ->setCheckedValue( '1' );
        $this->addElement( $activepeeringmatrix );


        $this->addDisplayGroup(
            [ 'autsys', 'maxprefixes', 'peeringemail', 'peeringmacro', 'peeringpolicy', 'irrdb', 'activepeeringmatrix' ],
    		'peeringDisplayGroup'
        );
        $this->getDisplayGroup( 'peeringDisplayGroup' )->setLegend( 'Peering Details' );

        
        
        $nocphone = $this->createElement( 'text', 'nocphone' );
        $nocphone->addValidator( 'stringLength', false, array( 0, 255 ) )
            ->setRequired( false )
            ->setLabel( 'Phone' )
            ->setAttrib( 'placeholder', '+44 20 7946 1234' )
            ->setAttrib( 'class', 'span4' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $nocphone );

        $noc24hphone = $this->createElement( 'text', 'noc24hphone' );
        $noc24hphone->addValidator( 'stringLength', false, array( 0, 255 ) )
            ->setRequired( false )
            ->setAttrib( 'placeholder', '+44 20 7946 1234' )
            ->setAttrib( 'class', 'span4' )
            ->setLabel( '24h Phone' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $noc24hphone );

        $nocfax = $this->createElement( 'text', 'nocfax' );
        $nocfax->addValidator( 'stringLength', false, array( 0, 40 ) )
            ->setRequired( false )
            ->setLabel( 'Fax' )
            ->setAttrib( 'placeholder', '+44 20 7946 1234' )
            ->setAttrib( 'class', 'span4' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $nocfax );

        $nocemail = $this->createElement( 'text', 'nocemail' );
        $nocemail->addValidator('emailAddress' )
            ->addValidator( 'stringLength', false, array( 0, 40 ) )
            ->setRequired( false )
            ->setAttrib( 'class', 'span6' )
            ->setAttrib( 'placeholder', 'noc@example.com' )
            ->setLabel( 'E-Mail' );
        $this->addElement( $nocemail );

        $nochours = $this->createElement( 'select', 'nochours' );
        $nochours->setMultiOptions( [ '0' => '' ] + \Entities\Customer::$NOC_HOURS )
            ->setRegisterInArrayValidator( true )
            ->setLabel( 'Hours' )
            ->setRequired( false )
            ->setAttrib( 'class', 'chzn-select span6' );
        $this->addElement( $nochours );
        
        
        $nocwww = $this->createElement( 'text', 'nocwww' );
        $nocwww->addValidator( 'stringLength', false, array( 0, 255 ) )
            ->setRequired( false )
            ->setLabel( 'Website' )
            ->setAttrib( 'placeholder', 'http://www.noc.example.com/' )
            ->setAttrib( 'class', 'span6' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $nocwww );

        $this->addDisplayGroup(
            array( 'nocphone', 'noc24hphone', 'nocfax', 'nocemail', 'nochours', 'nocwww' ),
        	'nocDisplayGroup'
        );
        $this->getDisplayGroup( 'nocDisplayGroup' )->setLegend( 'NOC Details' );

        
        
        
        $billingContact = $this->createElement( 'text', 'billingContact' );
        $billingContact->addValidator( 'stringLength', false, array( 0, 64 ) )
            ->setRequired( false )
            ->setLabel( 'Contact' )
            ->addFilter( 'StringTrim' )
            ->setAttrib( 'class', 'span6' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $billingContact );

        $billingAddress1 = $this->createElement( 'text', 'billingAddress1' );
        $billingAddress1->addValidator( 'stringLength', false, array( 0, 64 ) )
            ->setRequired( false )
            ->setLabel( 'Address' )
            ->setAttrib( 'class', 'span6' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $billingAddress1 );

        $billingAddress2 = $this->createElement( 'text', 'billingAddress2' );
        $billingAddress2->addValidator( 'stringLength', false, array( 0, 64 ) )
            ->setRequired( false )
            ->setAttrib( 'class', 'span6' )
            ->setLabel( '' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $billingAddress2 );

        $billingCity = $this->createElement( 'text', 'billingCity' );
        $billingCity->addValidator( 'stringLength', false, array( 0, 64 ) )
            ->setRequired( false )
            ->setAttrib( 'class', 'span4' )
            ->setLabel( 'City' )
            ->addFilter( 'StringTrim' )
            ->addFilter( new OSS_Filter_StripSlashes() );
        $this->addElement( $billingCity );

        $billingCountry = $this->createElement( 'select', 'billingCountry' );
        $billingCountry->setMultiOptions( OSS_Countries::getCountriesArray() )
            ->setRegisterInArrayValidator( true )
            ->setValue( 'GB' )
            ->setLabel( 'Country' )
            ->setRequired( false )
            ->setAttrib( 'class', 'chzn-select span6' );
        
        $this->addElement( $billingCountry );
        
        
        
        
        
        
        $this->addDisplayGroup(
            [ 'billingContact', 'billingAddress1', 'billingAddress2', 'billingCity', 'billingCountry' ],
        	'billingDisplayGroup'
        );
        $this->getDisplayGroup( 'billingDisplayGroup' )->setLegend( 'Billing Details' );


        
        $notes = $this->createElement( 'textarea', 'notes' );
        $notes->setLabel( 'Notes' )
            ->setAttrib( 'class', 'span3' )
            ->setRequired( false )
            ->addFilter( new OSS_Filter_StripSlashes() )
            ->setAttrib( 'cols', 60 )
            ->setAttrib( 'rows', 5 );
        $this->addElement( $notes );
        
        $this->addElement( self::createSubmitElement( 'submit', _( 'Add' ) ) );
        $this->addElement( $this->createCancelElement() );
    }


    
    /**
     * Create a SELECT / dropdown element of all customer names indexed by their id.
     *
     * @param string $name The element name
     * @return Zend_Form_Element_Select The select element
     */
    public static function getPopulatedSelect( $name = 'custid' )
    {
        $cust = new Zend_Form_Element_Select( $name );
        
        $maxId = self::populateSelectFromDatabase( $cust, '\\Entities\\Customer', 'id', 'name', 'name', 'ASC' );
        
        $cust->setRegisterInArrayValidator( true )
            ->setRequired( true )
            ->setLabel( _( 'Customer' ) )
            ->setAttrib( 'class', 'span3 chzn-select' )
            ->addValidator( 'between', false, array( 1, $maxId ) )
            ->setErrorMessages( array( _( 'Please select a customer' ) ) );
        
        return $cust;
    }

}

