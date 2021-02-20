<?php
/**
 * @author Alysson Victor (github.com/reallyAly)
 */
namespace Aly\ProductMessage\Block\Product;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Aly\ProductMessage\Helper\Config;

/**
 * Class Message
 * @package Aly\ProductMessage\Block\Product
 */
class Message extends Template
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var Config
     */
    protected $_config;


    CONST CONFIG_CODE = 'product_message_message';

    /**
     * Message constructor.
     * @param Context $context
     * @param Config $config
     */
    public function __construct(Context $context, Config $config)
    {
        parent::__construct($context);
        $this->_config = $config;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->_config->getGeneralConfig(self::CONFIG_CODE);
    }
}