<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ProcessShipmentRequestType
 */
class docTypeRef_ProcessShipmentRequestType
{

	/**
	 * @var null|string $MessageId
	 */
	protected $MessageId;

	/**
	 * @var null|docTypeRef_ClientDetailType2 $ClientDetail
	 */
	protected $ClientDetail;

	/**
	 * @var docTypeRef_RequestedShipmentType $RequestedShipment
	 */
	protected $RequestedShipment;

	/**
	 * @param docTypeRef_RequestedShipmentType $RequestedShipment
	 */
	public function __construct(docTypeRef_RequestedShipmentType $RequestedShipment)
	{
		$this->RequestedShipment = $RequestedShipment;
	}

	/**
	 * @return null|string
	 */
	public function getMessageId(): ?string
	{
		return $this->MessageId;
	}

	/**
	 * @param null|string $MessageId
	 * @return docTypeRef_ProcessShipmentRequestType
	 */
	public function setMessageId(string $MessageId = null): docTypeRef_ProcessShipmentRequestType
	{
		$this->MessageId = $MessageId;
		return $this;
	}

	/**
	 * @return null|docTypeRef_ClientDetailType2
	 */
	public function getClientDetail(): ?docTypeRef_ClientDetailType2
	{
		return $this->ClientDetail;
	}

	/**
	 * @param null|docTypeRef_ClientDetailType2 $ClientDetail
	 * @return docTypeRef_ProcessShipmentRequestType
	 */
	public function setClientDetail(?docTypeRef_ClientDetailType2 $ClientDetail = null): docTypeRef_ProcessShipmentRequestType
	{
		$this->ClientDetail = $ClientDetail;
		return $this;
	}

	/**
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function getRequestedShipment(): ?docTypeRef_RequestedShipmentType
	{
		return $this->RequestedShipment;
	}

	/**
	 * @param docTypeRef_RequestedShipmentType $RequestedShipment
	 * @return docTypeRef_ProcessShipmentRequestType
	 */
	public function setRequestedShipment(docTypeRef_RequestedShipmentType $RequestedShipment): docTypeRef_ProcessShipmentRequestType
	{
		$this->RequestedShipment = $RequestedShipment;
		return $this;
	}

}
