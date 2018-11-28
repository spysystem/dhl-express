<?php
namespace DHLExpress;


/**
 * Class docTypeRef_RateRequestType
 */
class docTypeRef_RateRequestType
{

	/**
	 * @var null|docTypeRef_ClientDetailType3 $ClientDetail
	 */
	protected $ClientDetail;

	/**
	 * @var null|RequestType $Request
	 */
	protected $Request;

	/**
	 * @var docTypeRef_RequestedShipmentType2 $RequestedShipment
	 */
	protected $RequestedShipment;

	/**
	 * @param docTypeRef_RequestedShipmentType2 $RequestedShipment
	 */
	public function __construct(docTypeRef_RequestedShipmentType2 $RequestedShipment)
	{
		$this->RequestedShipment = $RequestedShipment;
	}

	/**
	 * @return null|docTypeRef_ClientDetailType3
	 */
	public function getClientDetail(): ?docTypeRef_ClientDetailType3
	{
		return $this->ClientDetail;
	}

	/**
	 * @param null|docTypeRef_ClientDetailType3 $ClientDetail
	 * @return docTypeRef_RateRequestType
	 */
	public function setClientDetail(?docTypeRef_ClientDetailType3 $ClientDetail = null): docTypeRef_RateRequestType
	{
		$this->ClientDetail = $ClientDetail;
		return $this;
	}

	/**
	 * @return null|RequestType
	 */
	public function getRequest(): ?RequestType
	{
		return $this->Request;
	}

	/**
	 * @param null|RequestType $Request
	 * @return docTypeRef_RateRequestType
	 */
	public function setRequest(?RequestType $Request = null): docTypeRef_RateRequestType
	{
		$this->Request = $Request;
		return $this;
	}

	/**
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function getRequestedShipment(): ?docTypeRef_RequestedShipmentType2
	{
		return $this->RequestedShipment;
	}

	/**
	 * @param docTypeRef_RequestedShipmentType2 $RequestedShipment
	 * @return docTypeRef_RateRequestType
	 */
	public function setRequestedShipment(docTypeRef_RequestedShipmentType2 $RequestedShipment): docTypeRef_RateRequestType
	{
		$this->RequestedShipment = $RequestedShipment;
		return $this;
	}

}
