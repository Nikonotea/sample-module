<?php
declare(strict_types=1);

namespace Learning\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class Item
 * @package Learning\SampleModule\Model
 */
class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Learning\SampleModule\Model\ResourceModel\Item::class);
    }
}
