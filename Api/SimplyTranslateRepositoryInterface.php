<?php
/**
 * @author Milchbar
 * @copyright Copyright (c) 2017 Milchbar (https://www.milchbar.nl)
 * @package Milchbar_SimplyTranslate
 */

namespace Milchbar\SimplyTranslate\Api;

/**
 * Interface WebServiceRepositoryInterface
 * @package Milchbar\SimplyTranslate\Api
 */
interface SimplyTranslateRepositoryInterface
{
    /**
     * @api
     * @return boolean
     */
    public function getEnabled();

    /**
     * @api
     * @return string
     */
    public function getLicense();
}
