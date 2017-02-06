<?php

namespace Netgen\Bundle\OpenWeatherMapBundle\Tests\Controller;

use Netgen\Bundle\OpenWeatherMapBundle\Controller\AirPollutionController;
use Netgen\Bundle\OpenWeatherMapBundle\Core\AirPollution;
use Netgen\Bundle\OpenWeatherMapBundle\Exception\NotAuthorizedException;
use Netgen\Bundle\OpenWeatherMapBundle\Exception\NotFoundException;
use Symfony\Component\HttpFoundation\Response;

class AirPollutionControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testCallOzoneDataWithDatetimeStringCurrent()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchOzoneData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willReturn('some_data')
            ->method('fetchOzoneData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getOzoneData(12.7, 45.3, 'current');

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCallOzoneDataWithDatetimeAsInvalidDate()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchOzoneData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willReturn('some_data')
            ->method('fetchOzoneData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getOzoneData(12.7, 45.3, 'test');

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCallOzoneDataWithValidDatetimeString()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchOzoneData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willReturn('some_data')
            ->method('fetchOzoneData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getOzoneData(12.7, 45.3, 'test');

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCallOzoneDataWithNotAuthorizedException()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchOzoneData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willThrowException(new NotAuthorizedException('Not authorized'))
            ->method('fetchOzoneData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getOzoneData(12.7, 45.3, 'current');

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCallOzoneDataWithNotFoundException()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchOzoneData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willThrowException(new NotFoundException('Not found'))
            ->method('fetchOzoneData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getOzoneData(12.7, 45.3, 'current');

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCallCarbonMonoxideDataWithDatetimeAsInvalidDate()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchCarbonMonoxideData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willReturn('some_data')
            ->method('fetchCarbonMonoxideData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getCarbonMonoxideData(12.7, 45.3, 'test');

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCallCarbonMonoxideDataWithCurrentAsDatetimeString()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchCarbonMonoxideData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willReturn('some_data')
            ->method('fetchCarbonMonoxideData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getCarbonMonoxideData(12.7, 45.3, 'current');

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCallCarbonMonoxideDataWithValidDatetimeString()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchCarbonMonoxideData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willReturn('some_data')
            ->method('fetchCarbonMonoxideData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getCarbonMonoxideData(12.7, 45.3, 'test');

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCallCarbonMonoxideDataWithNotAuthorizedException()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchCarbonMonoxideData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willThrowException(new NotAuthorizedException('Not authorized'))
            ->method('fetchCarbonMonoxideData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getCarbonMonoxideData(12.7, 45.3, 'test');

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testCallCarbonMonoxideDataWithNotFoundException()
    {
        $airPollution = $this->getMockBuilder(AirPollution::class)
            ->disableOriginalConstructor()
            ->setMethods(array('fetchCarbonMonoxideData'))
            ->getMock();

        $airPollution->expects($this->once())
            ->willThrowException(new NotFoundException('Not found'))
            ->method('fetchCarbonMonoxideData');

        $airPollutionController = new AirPollutionController($airPollution);
        $response = $airPollutionController->getCarbonMonoxideData(12.7, 45.3, 'test');

        $this->assertInstanceOf(Response::class, $response);
    }
}
