<?php
/**
 * @link https://github.com/gromver/yii2-cms.git#readme
 * @copyright Copyright (c) Gayazov Roman, 2014
 * @license https://github.com/gromver/yii2-cms/blob/master/LICENSE
 * @package yii2-module-query
 * @version 1.0.0
 */

namespace gromver\modulequery;


use Yii;

/**
 * Class Value
 * контейнер для хранения и предачи не объектных данных
 * @package yii2-module-query
 * @author Gayazov Roman <gromver5@gmail.com>
 */
class Value
{
    /**
     * @var mixed
     */
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}