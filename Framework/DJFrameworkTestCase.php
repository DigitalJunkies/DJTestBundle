<?php

namespace DJ\TestBundle\Framework;

/**
 * Extended Framework Test Case created to implement easily Faker into the PHPUnit tests.
 * Implements getMethod method to access private/protected methods from classes
 *
 * Class DJFrameworkTestCase
 *
 * @package DJ\MailingBundle\Test
 */
class DJFrameworkTestCase extends \PHPUnit_Framework_TestCase
{
    /** @var \Faker\Generator $faker */
    protected $faker;

    /**
     * Calls PHPUnit_Framework_TestCase
     * Creates a Faker instance
     */
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->faker = \Faker\Factory::create();
    }

    /**
     * Returns a method from a defined class whatever its visibility is
     *
     * @param string $className
     * @param string $methodName
     *
     * @return \ReflectionMethod
     */
    public function getMethod($className, $methodName)
    {
        $class  = new \ReflectionClass($className);
        $method = $class->getMethod($methodName);
        $method->setAccessible(true);

        return $method;
    }
}