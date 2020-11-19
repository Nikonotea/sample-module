<?php
declare(strict_types=1);

namespace Learning\SampleModule\Controller\Adminhtml\Index;

use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * @package Learning\SampleModule\Controller\Adminhtml\Index
 */
class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        /** @var Raw $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello Admin!');
        return $result;
    }
}
