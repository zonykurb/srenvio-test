<?php

namespace FedEx\Tests;

use FedEx\ShipService\Request;
use FedEx\ShipService\ComplexType;
use FedEx\Utility\ComplexTypePopulator;

class ShipServiceTest extends TestCase
{
    public function testShipServiceRequest()
    {
        $createPendingShipmentRequest = new ComplexType\CreatePendingShipmentRequest();
        $processTagRequest = new ComplexType\ProcessTagRequest();
        $processShipmentRequest = new ComplexType\ProcessShipmentRequest();
        $cancelPendingShipmentRequest = new ComplexType\CancelPendingShipmentRequest();
        $deleteTagRequest = new ComplexType\DeleteTagRequest();
        $deleteShipmentRequest = new ComplexType\DeleteShipmentRequest();
        $validationShipmentRequest = new ComplexType\ValidateShipmentRequest();

        $populator = new ComplexTypePopulator();
        $populator->populate($createPendingShipmentRequest);
        $populator->populate($processTagRequest);
        $populator->populate($cancelPendingShipmentRequest);
        $populator->populate($deleteTagRequest);
        $populator->populate($deleteShipmentRequest);
        $populator->populate($validationShipmentRequest);

        $mockSoapClient = $this->getMockFromWsdl(Request::getWsdlPath());
        $mockSoapClient->method('createPendingShipment')->will($this->returnValue(ComplexType\CreatePendingShipmentRequest::class));
        $mockSoapClient->method('processTag')->will($this->returnValue(ComplexType\ProcessTagRequest::class));
        $mockSoapClient->method('processShipment')->will($this->returnValue(ComplexType\ProcessShipmentRequest::class));
        $mockSoapClient->method('cancelPendingShipment')->will($this->returnValue(ComplexType\CancelPendingShipmentRequest::class));
        $mockSoapClient->method('deleteTag')->will($this->returnValue(ComplexType\DeleteTagRequest::class));
        $mockSoapClient->method('deleteShipment')->will($this->returnValue(ComplexType\DeleteShipmentRequest::class));
        $mockSoapClient->method('validateShipment')->will($this->returnValue(ComplexType\ValidateShipmentRequest::class));

        $request = new Request($mockSoapClient);

        $this->assertEquals(ComplexType\CreatePendingShipmentRequest::class, $request->getCreatePendingShipmentReply($createPendingShipmentRequest, true));
        $this->assertEquals(ComplexType\ProcessTagRequest::class, $request->getProcessTagReply($processTagRequest, true));
        $this->assertEquals(ComplexType\ProcessShipmentRequest::class, $request->getProcessShipmentReply($processShipmentRequest, true));
        $this->assertEquals(ComplexType\CancelPendingShipmentRequest::class, $request->getCancelPendingShipmentReply($cancelPendingShipmentRequest, true));
        $this->assertEquals(ComplexType\DeleteTagRequest::class, $request->getDeleteTagReply($deleteTagRequest, true));
        $this->assertEquals(ComplexType\DeleteShipmentRequest::class, $request->getDeleteShipmentReply($deleteShipmentRequest, true));
        $this->assertEquals(ComplexType\ValidateShipmentRequest::class, $request->getValidateShipmentReply($validationShipmentRequest, true));
    }
}
