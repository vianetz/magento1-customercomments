<?php
/**
 * CustomerComments sql installer
 *
 * @section LICENSE
 * This file is created by vianetz <info@vianetz.com>.
 * The Magento module is distributed under the GPL license.
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@vianetz.com so we can send you a copy immediately.
 *
 * @category    Vianetz
 * @package     Vianetz_AdvancedInvoiceLayout
 * @author      Christoph Massmann, <C.Massmann@vianetz.com>
 * @link        http://www.vianetz.com
 * @copyright   Copyright (c) 2006-15 vianetz - C. Massmann (http://www.vianetz.com)
 * @license     http://www.gnu.org/licenses/gpl-2.0.txt GNU GENERAL PUBLIC LICENSE
 */

/* @var $installer Mage_Customer_Model_Entity_Setup */
$installer = $this;

$installer->startSetup();

$installer->addAttribute(
    'customer',
    'vianetz_cc_internal_comment',
    array(
        'group'                => 'Default',
        'type'                 => 'text',
        'label'                => 'Internal Comment',
        'input'                => 'textarea',
        'global'               => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'required'             => 0,
        'default'              => 0,
        'visible_on_front'     => 1,
        'used_for_price_rules' => 0,
        'adminhtml_only'       => 1,
        'comment'              => 'Insert comments for internal use here.'
    )
);

Mage::getSingleton('eav/config')->getAttribute('customer', 'vianetz_cc_internal_comment')
    ->setData('used_in_forms', array('adminhtml_customer'))
    ->save();

$installer->endSetup();