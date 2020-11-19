<?php
declare(strict_types=1);

namespace Learning\SampleModule\Block;

use Learning\SampleModule\Model\Item;
use Magento\Framework\View\Element\Template;
use Learning\SampleModule\Model\ResourceModel\Item\Collection;
use Learning\SampleModule\Model\ResourceModel\Item\CollectionFactory;

/**
 * Class Hello
 * @package Learning\SampleModule\Block
 */
class Hello extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
