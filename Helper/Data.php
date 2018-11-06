<?php
/**
 * @author Milchbar
 * @copyright Copyright (c) 2017 Milchbar (https://www.milchbar.nl)
 * @package Milchbar_SimplyTranslate
 */

namespace Milchbar\SimplyTranslate\Helper;

/**
 * Class Data
 * @package Milchbar\SimplyTranslate\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    const ENABLED = 'milchbar_simplytranslate/general/enabled';
    const LICENSE = 'milchbar_simplytranslate/general/license';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    public function getEnabled(){
        return $this->scopeConfig->getValue(self::ENABLED);
    }

    public function getLicense(){
        return $this->scopeConfig->getValue(self::LICENSE);
    }

}
