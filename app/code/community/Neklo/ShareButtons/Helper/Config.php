<?php

class Neklo_ShareButtons_Helper_Config extends Mage_Core_Helper_Data
{
    const GENERAL_IS_ENABLED = 'neklo_sharebuttons/general/is_enabled';

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function isEnabled($store = null)
    {
        $isConfigEnabled = Mage::getStoreConfigFlag(self::GENERAL_IS_ENABLED, $store);
        $isModuleEnabled = $this->isModuleEnabled();
        $isModuleOutputEnabled = $this->isModuleOutputEnabled();
        return $isConfigEnabled && $isModuleEnabled && $isModuleOutputEnabled;
    }
}