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
 * Class ModuleEvent
 * Обертка для метода [[ModuleQuery::trigger]]
 * @package yii2-module-query
 * @author Gayazov Roman <gromver5@gmail.com>
 */
class ModuleEvent
{
    /**
     * @var ModuleQuery
     */
    static private $_moduleQuery;

    /**
     * @return ModuleQuery|object
     * @throws \yii\base\InvalidConfigException
     */
    static private function moduleQuery()
    {
        if (!isset(self::$_moduleQuery)) {
            self::$_moduleQuery = Yii::createObject(ModuleQuery::className());
        }
        return self::$_moduleQuery;
    }

    /**
     * @param string $name название события
     * @param Event $event обьект события
     * @param string $returnProperty своиство объекта $event для возврата
     * @return mixed
     */
    static public function trigger($name, Event $event, $returnProperty = null)
    {
        self::moduleQuery()->trigger($name, $event);
        if (isset($returnProperty)) {
            return $event->{$returnProperty};
        }

        return null;
    }
}