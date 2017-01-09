<?php
namespace Basicphp\EasyAds\Block;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Created by JetBrains PhpStorm.
 * User: long
 * Date: 12/1/16
 * Time: 10:16 PM
 * To change this template use File | Settings | File Templates.
 */


class Head extends \Magento\Framework\View\Element\Template
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;

    /**
     * @var \Magento\Catalog\Block\Product\ImageBuilder
     */
    protected $_imageBuilder;


    protected $_helper;

    /**
     * Block factory
     *
     * @var \Magento\Review\Model\Review\SummaryFactory
     */
    protected $_reviewSummaryFactory;

    protected $_scopeConfig;
    protected $_urlInterface;

    /**
     * @param \Magento\Catalog\Block\Product\Context $productContext
     * @param \Magento\Review\Model\Review\SummaryFactory $reviewSummaryFactory
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = []
        , ScopeConfigInterface $scopeConfig,
        \Magento\Framework\UrlInterface $urlInterface
    )
    {
        $this->_scopeConfig = $scopeConfig;
        $this->_urlInterface = $urlInterface;
        parent::__construct($context, $data);
    }

    public function getConfig()
    {
        return array(
            $this->_scopeConfig->getValue('easyads_section/left/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE),
            $this->_scopeConfig->getValue('easyads_section/left/top', \Magento\Store\Model\ScopeInterface::SCOPE_STORE),
            $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . "easyads/" . $this->_scopeConfig->getValue('easyads_section/left/source', \Magento\Store\Model\ScopeInterface::SCOPE_STORE),
            $this->_scopeConfig->getValue('easyads_section/left/url', \Magento\Store\Model\ScopeInterface::SCOPE_STORE),
            $this->_scopeConfig->getValue('easyads_section/right/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE),
            $this->_scopeConfig->getValue('easyads_section/right/top', \Magento\Store\Model\ScopeInterface::SCOPE_STORE),
            $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . "easyads/" . $this->_scopeConfig->getValue('easyads_section/right/source', \Magento\Store\Model\ScopeInterface::SCOPE_STORE),
            $this->_scopeConfig->getValue('easyads_section/right/url', \Magento\Store\Model\ScopeInterface::SCOPE_STORE),

        );
    }

}