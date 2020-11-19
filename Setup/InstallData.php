<?php
declare(strict_types=1);

namespace Learning\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class InstallData
 * @package Learning\SampleModule\Setup
 */
class InstallData implements InstallDataInterface
{
    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->insert(
            'learning_sample_item',
            [
               'name' => 'Item 1'
           ]
        );

        $setup->getConnection()->insert(
            'learning_sample_item',
            [
                'name' => 'Item 2'
            ]
        );

        $setup->endSetup();
    }
}
