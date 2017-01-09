<?php
namespace Inchoo\Helloworld\Block;
 
class Helloworld extends \Magento\Framework\View\Element\Template
{
     protected $_productCollectionFactory;
     protected $_storeManager;
        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
            \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    )
    {    
        $this->_productCollectionFactory = $productCollectionFactory;   
        parent::__construct($context, $data);
    }
    
    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        return $collection;
    }


    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
}
?>