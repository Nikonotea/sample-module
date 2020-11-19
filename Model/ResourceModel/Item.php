<?php
declare(strict_types=1);

namespace Learning\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Item
 * @package Learning\SampleModule\Model\ResourceModel
 */
class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('learning_sample_item', 'id');
    }
}
