<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Search_Lucene
 * @subpackage Analysis
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace Zend\Search\Lucene\Analysis\Analyzer;

/**
 * Analyzer manager.
 *
 * @uses       \Zend\Search\Lucene\Analysis\Analyzer\AnalyzerInterface
 * @category   Zend
 * @package    Zend_Search_Lucene
 * @subpackage Analysis
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Analyzer
{
    /**
     * The Analyzer implementation used by default.
     *
     * @var \Zend\Search\Lucene\Analysis\Analyzer\AnalyzerInterface
     */
    private static $_defaultImpl = null;

    /**
     * Set the default Analyzer implementation used by indexing code.
     *
     * @param \Zend\Search\Lucene\Analysis\Analyzer\AnalyzerInterface $analyzer
     */
    public static function setDefault(AnalyzerInterface $analyzer)
    {
        self::$_defaultImpl = $analyzer;
    }

    /**
     * Return the default Analyzer implementation used by indexing code.
     *
     * @return \Zend\Search\Lucene\Analysis\Analyzer\AnalyzerInterface
     */
    public static function getDefault()
    {
        if (self::$_defaultImpl === null) {
            self::$_defaultImpl = new Common\Text\CaseInsensitive();
        }

        return self::$_defaultImpl;
    }
}
