<?php
declare(strict_types=1);

namespace Learning\SampleModule\Model\ResourceModel\Item;

use Learning\SampleModule\Model\Item;
use Learning\SampleModule\Model\ResourceModel\Item as ItemResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Learning\SampleModule\Model\ResourceModel\Item
 */
class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Item::class, ItemResource::class);
    }
}
