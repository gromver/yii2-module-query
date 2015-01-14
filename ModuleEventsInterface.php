<?php
/**
 * @link https://github.com/gromver/yii2-cms.git#readme
 * @copyright Copyright (c) Gayazov Roman, 2014
 * @license https://github.com/gromver/yii2-cms/blob/master/LICENSE
 * @package yii2-module-query
 * @version 1.0.0
 */

namespace gromver\modulequery;

/**
 * Interface ModuleEventsInterface
 * @package yii2-module-query
 * @author Gayazov Roman <gromver5@gmail.com>
 */
interface ModuleEventsInterface {
    /**
     * @return array [eventName => callable, ...]
     */
    public function events();
} 