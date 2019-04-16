<?php

namespace Collectify\Tests\Unit;

use Collectify\Services\Dynamizer;
use PHPUnit\Framework\TestCase;

class dynamizerTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testIfDynamizerCanDynamize()
    {

        $view = '{{ var }}';
        $parameters = array('var' => 'myVar');
        $result = 'myVar';

        $dynamizer = new Dynamizer();
        $dynamizer->setParameters($parameters);
        $dynamizer->setView($view);

        $dynamizerdView = $dynamizer->dynamize();

        $this->assertEquals($dynamizerdView, $result);
    }


}