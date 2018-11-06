<?php
/**
 * @author Milchbar
 * @copyright Copyright (c) 2017 Milchbar (https://www.milchbar.nl)
 * @package Milchbar_SimplyTranslate
 */

namespace Milchbar\SimplyTranslate\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Integration\Model\ConfigBasedIntegrationManager;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * @var ConfigBasedIntegrationManager
     */
    private $integrationManager;

    /**
     * @param ConfigBasedIntegrationManager $integrationManager
     */
    public function __construct(ConfigBasedIntegrationManager $integrationManager)
    {
        $this->integrationManager = $integrationManager;
    }

    /**
     * {@inheritdoc}
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '0.2.1', '<')) {
            // $this->integrationManager->processIntegrationConfig(['Simply Translate Platform']);
        }
    }
}
