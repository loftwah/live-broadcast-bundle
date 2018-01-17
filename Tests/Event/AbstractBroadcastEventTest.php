<?php

namespace Martin1982\LiveBroadcastBundle\Tests\Event;

use Martin1982\LiveBroadcastBundle\Entity\LiveBroadcast;
use Martin1982\LiveBroadcastBundle\Event\AbstractBroadcastEvent;
use Martin1982\LiveBroadcastBundle\Event\PostBroadcastEvent;
use Martin1982\LiveBroadcastBundle\Service\StreamOutput\OutputInterface;

/**
 * Class AbstractBroadcastEventTest
 */
class AbstractBroadcastEventTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test getting properties
     */
    public function testProperties()
    {
        $broadcast = $this->createMock(LiveBroadcast::class);
        $output = $this->createMock(OutputInterface::class);

        $testClass = new PostBroadcastEvent($broadcast, $output);
        self::assertEquals($broadcast, $testClass->getLiveBroadcast());
        self::assertEquals($output, $testClass->getOutput());
    }
}