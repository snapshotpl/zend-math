<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @package   Zend_Math
 */

namespace Zend\Math\BigInteger\Exception;

use Zend\Math\Exception;

/**
 * Invalid argument exception
 *
 * @category   Zend
 * @package    Zend_Math
 * @subpackage BigInteger
 */
class InvalidArgumentException extends Exception\InvalidArgumentException implements ExceptionInterface
{}
