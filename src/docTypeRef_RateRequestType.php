<?php

namespace DHLExpress;

/**
 * Class docTypeRef_RateRequestType
 *
 * @package DHLExpress
 */
class docTypeRef_RateRequestType
{

	/**
	 * @var docTypeRef_ClientDetailType3 $ClientDetail
	 */
	protected $ClientDetail;

	/**
	 * @var docTypeRef_RequestedShipmentType2 $RequestedShipment
	 */
	protected $RequestedShipment;

	/**
	 * @param docTypeRef_RequestedShipmentType2 $RequestedShipment
	 */
	public function __construct($RequestedShipment)
	{
		$this->RequestedShipment = $RequestedShipment;
	}

	/**
	 * @return docTypeRef_ClientDetailType3
	 */
	public function getClientDetail()
	{
		return $this->ClientDetail;
	}

	/**
	 * @param docTypeRef_ClientDetailType3 $ClientDetail
	 * @return \DHLExpress\docTypeRef_RateRequestType
	 */
	public function setClientDetail($ClientDetail)
	{
		$this->ClientDetail = $ClientDetail;
		return $this;
	}

	/**
	 * @return docTypeRef_RequestedShipmentType2
	 */
	public function getRequestedShipment()
	{
		return $this->RequestedShipment;
	}

	/**
	 * @param docTypeRef_RequestedShipmentType2 $RequestedShipment
	 * @return \DHLExpress\docTypeRef_RateRequestType
	 */
	public function setRequestedShipment($RequestedShipment)
	{
		$this->RequestedShipment = $RequestedShipment;
		return $this;
	}

}
