<?php
declare(strict_types=1);

namespace Learning\SampleModule\Controller\Index;

use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * @package Learning\SampleModule\Controller\Index
 */
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
