<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Tests\Form\DataTransformer;

use Sonata\AdminBundle\Form\DataTransformer\ModelToIdTransformer;

class ModelToIdTransformerTest extends \PHPUnit_Framework_TestCase
{
    private $modelManager = null;

    public function setUp()
    {
        $this->modelManager = $this->getMock('Sonata\AdminBundle\Model\ModelManagerInterface');
    }

    public function testReverseTransformWhenPassing0AsId()
    {
        $transformer = new ModelToIdTransformer($this->modelManager,'TEST');

        $this->modelManager
                ->expects($this->exactly(2))
                ->method('find');

        // we pass 0 as integer
        // this must call the model manager find method... i not care what is returned, but must be called
        $transformer->reverseTransform(0);

        // we pass 0 as string
        // this must call the model manager find method... i not care what is returned, but must be called
        $transformer->reverseTransform('0');

        // we pass null must return null
        $this->assertNull($transformer->reverseTransform(null));

        // we pass false, must return null
        $this->assertNull($transformer->reverseTransform(false));
    }

    public function testTransform()
    {
        $this->modelManager->expects($this->once())
            ->method('getIdentifierValues')
            ->will($this->returnValue(array(123)));

        $transformer = new ModelToIdTransformer($this->modelManager,'TEST');

        $this->assertNull($transformer->transform(null));
        $this->assertNull($transformer->transform(false));
        $this->assertNull($transformer->transform(0));
        $this->assertNull($transformer->transform('0'));

        $this->assertEquals(123, $transformer->transform(new \stdClass));
    }
}
