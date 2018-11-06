<?php
/**
 * @author Milchbar
 * @copyright Copyright (c) 2017 Milchbar (https://www.milchbar.nl)
 * @package Milchbar_SimplyTranslate
 */

namespace Milchbar\SimplyTranslate\Model;

use Milchbar\SimplyTranslate\Api\SimplyTranslateRepositoryInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class SimplyTranslateRepository
 * @package Milchbar\SimplyTranslate\Model
 */
class SimplyTranslateRepository implements SimplyTranslateRepositoryInterface
{

    protected $objectManager;

    public function __construct(
        ObjectManagerInterface $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
        $helper = $this->objectManager->create('Milchbar\SimplyTranslate\Helper\Data');
        return $helper->getEnabled();
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        $helper = $this->objectManager->create('Milchbar\SimplyTranslate\Helper\Data');
        return $helper->getLicense();
    }
}
