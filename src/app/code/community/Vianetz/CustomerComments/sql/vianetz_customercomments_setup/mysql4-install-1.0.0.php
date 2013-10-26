<?php
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