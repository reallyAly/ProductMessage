<?php
/**
 * @author Alysson Victor (github.com/reallyAly)
 */

namespace Aly\ProductMessage\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Store\Model\ScopeInterface;

/**
 * Class Config
 * @package Aly\ProductMessage\Helper
 */
class Config extends AbstractHelper
{
    /**
     * @var ScopeInterface
     */
    protected $scopeConfig;

    /**
     *
     */
    const XML_PATH_PRODUCT = 'product_message_section/';

    /**
     * Config constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * Get configs from system
     *
     * @return mixed
     */
    public function getConfigValue($field, $storeId = 0)
    {
        return $this->_scopeConfig->getValue(
            $field,ScopeInterface::SCOPE_STORE,$storeId
        );
    }

    /**
     * Get configs by code
     *
     * @return mixed
     */
    public function getGeneralConfig($code, $storeId = 0)
    {
        return $this->getConfigValue(self::XML_PATH_COUPON.'product_message_group/'.$code, $storeId);
    }
}