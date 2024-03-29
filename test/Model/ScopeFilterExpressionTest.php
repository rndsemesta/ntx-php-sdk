<?php
/**
 * ScopeFilterExpressionTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Nutanix Intentful API
 *
 * Move programming from the user to the machine.
 *
 * The version of the OpenAPI document: 3.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * ScopeFilterExpressionTest Class Doc Comment
 *
 * @category    Class
 * @description The Scope filter expression is a combination of LHS-Operator-RHS. This type of filter expression helps express the \&quot;Context\&quot; part of a Filter. Example1 - To express a context &#x3D; Belonging to Project P1 or Project P2   left_hand_side &#x3D; PROJECT   operator &#x3D; IN   right_hand_side &#x3D; [\&quot;P1\&quot;, \&quot;P2\&quot;] Example2 - To express Belonging to 2 categories   left_hand_side &#x3D; CATEGORY   operator &#x3D; IN_ALL   right_hand_side &#x3D; [\&quot;location:nyc\&quot;, \&quot;env:prod\&quot;]
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ScopeFilterExpressionTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "ScopeFilterExpression"
     */
    public function testScopeFilterExpression()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "operator"
     */
    public function testPropertyOperator()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "right_hand_side"
     */
    public function testPropertyRightHandSide()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "left_hand_side"
     */
    public function testPropertyLeftHandSide()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
