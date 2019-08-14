<?php

class Neklo_ShareButtons_Model_Source_Widget_Title_Type
{
    const PAGE_CODE  = 'page';
    const PAGE_LABEL = 'Page Title';

    const CUSTOM_CODE  = 'custom';
    const CUSTOM_LABEL = 'Custom Title';

    public function toOptionArray()
    {
        $helper = Mage::helper('neklo_sharebuttons');
        return array(
            array(
                'value' => self::PAGE_CODE,
                'label' => $helper->__(self::PAGE_LABEL),
            ),
            array(
                'value' => self::CUSTOM_CODE,
                'label' => $helper->__(self::CUSTOM_LABEL),
            ),
        );
    }

    public function toArray()
    {
        $helper = Mage::helper('neklo_sharebuttons');
        return array(
            self::PAGE_CODE   => $helper->__(self::PAGE_LABEL),
            self::CUSTOM_CODE => $helper->__(self::CUSTOM_LABEL),
        );
    }
}