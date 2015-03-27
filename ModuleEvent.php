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
     * @param bool $useCache использовать кеширование - выпринципе бесполезная опция
     * @return bool
     */
    static public function trigger($name, Event $event, $useCache = true)
    {
        if ($useCache) {
            return self::moduleQuery()->trigger($name, $event);
        } else {
            $cache = self::moduleQuery()->cache;
            $result = self::moduleQuery()->cache(null)->trigger($name, $event);
            self::moduleQuery()->cache($cache);
            return $result;
        }
    }
}