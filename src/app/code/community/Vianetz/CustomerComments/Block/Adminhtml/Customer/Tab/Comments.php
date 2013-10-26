<?php

class Vianetz_CustomerComments_Block_Adminhtml_Customer_Tab_Comments extends Mage_Adminhtml_Block_Template
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    /**
     * Return Tab label
     *
     * @return string
     */
    public function getTabLabel()
    {
        return $this->helper('vianetz_customercomments')->__('Comments');
    }

    public function getCustomtabInfo(){

        $customer = Mage::registry('current_customer');
        $customtab='My Custom tab Action Contents Here';
		return $customtab;
		}

    /**
     * Return Tab title
     *
     * @return string
     */
    public function getTabTitle()
    {
        return $this->helper('vianetz_customercomments')->__('Comments');
    }

    public function canShowTab()
    {
        if (Mage::registry('current_customer')->getId()) {
            return true;
        }
        return false;
    }

    public function isHidden()
    {
        if (Mage::registry('current_customer')->getId()) {
            return false;
        }
        return true;
    }

    /**
     * Defines after which tab, this tab should be rendered
     *
     * @return string
     */
    public function getAfter()
    {
        return 'tags';
    }
}