<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ProcessShipmentRequestType
 *
 * @package DHLExpress
 */
class docTypeRef_ProcessShipmentRequestType
{

	/**
	 * @var MessageId $MessageId
	 */
	protected $MessageId;

	/**
	 * @var docTypeRef_ClientDetailType2 $ClientDetail
	 */
	protected $ClientDetail;

	/**
	 * @var docTypeRef_RequestedShipmentType $RequestedShipment
	 */
	protected $RequestedShipment;

	/**
	 * @param docTypeRef_RequestedShipmentType $RequestedShipment
	 */
	public function __construct($RequestedShipment)
	{
		$this->RequestedShipment = $RequestedShipment;
	}

	/**
	 * @return MessageId
	 */
	public function getMessageId()
	{
		return $this->MessageId;
	}

	/**
	 * @param MessageId $MessageId
	 * @return \DHLExpress\docTypeRef_ProcessShipmentRequestType
	 */
	public function setMessageId($MessageId)
	{
		$this->MessageId = $MessageId;
		return $this;
	}

	/**
	 * @return docTypeRef_ClientDetailType2
	 */
	public function getClientDetail()
	{
		return $this->ClientDetail;
	}

	/**
	 * @param docTypeRef_ClientDetailType2 $ClientDetail
	 * @return \DHLExpress\docTypeRef_ProcessShipmentRequestType
	 */
	public function setClientDetail($ClientDetail)
	{
		$this->ClientDetail = $ClientDetail;
		return $this;
	}

	/**
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function getRequestedShipment()
	{
		return $this->RequestedShipment;
	}

	/**
	 * @param docTypeRef_RequestedShipmentType $RequestedShipment
	 * @return \DHLExpress\docTypeRef_ProcessShipmentRequestType
	 */
	public function setRequestedShipment($RequestedShipment)
	{
		$this->RequestedShipment = $RequestedShipment;
		return $this;
	}

}
