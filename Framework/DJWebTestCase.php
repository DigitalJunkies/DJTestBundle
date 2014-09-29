<?php

namespace DJ\TestBundle\Framework;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Extended Framework Test Case created to implement easily Faker into the PHPUnit tests.
 * Implements getMethod method to access private/protected methods from classes
 *
 * Class DJFrameworkTestCase
 *
 * @package DJ\MailingBundle\Test
 */
class DJWebTestCase extends WebTestCase
{
    /** @var \Faker\Generator $faker */
    protected $faker;

    /**
     * Calls PHPUnit_Framework_TestCase
     * Creates a Faker instance
     */
    public function __construct()
    {
        parent::__construct();

        $this->faker = \Faker\Factory::create();
    }

    /**
     * Returns a method from a defined class whatever its visibility is
     *
     * @param $className
     * @param $methodName
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