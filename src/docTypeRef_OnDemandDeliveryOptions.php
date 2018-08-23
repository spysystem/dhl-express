<?php

namespace DHLExpress;

/**
 * Class docTypeRef_OnDemandDeliveryOptions
 *
 * @package DHLExpress
 */
class docTypeRef_OnDemandDeliveryOptions
{

	/**
	 * @var DeliveryOption $DeliveryOption
	 */
	protected $DeliveryOption;

	/**
	 * @var Location $Location
	 */
	protected $Location;

	/**
	 * @var Instructions $Instructions
	 */
	protected $Instructions;

	/**
	 * @var GateCode $GateCode
	 */
	protected $GateCode;

	/**
	 * @var LWNTypeCode $LWNTypeCode
	 */
	protected $LWNTypeCode;

	/**
	 * @var NeighbourName $NeighbourName
	 */
	protected $NeighbourName;

	/**
	 * @var NeighbourHouseNumber $NeighbourHouseNumber
	 */
	protected $NeighbourHouseNumber;

	/**
	 * @var AuthorizerName $AuthorizerName
	 */
	protected $AuthorizerName;

	/**
	 * @var SelectedServicePointID $SelectedServicePointID
	 */
	protected $SelectedServicePointID;

	/**
	 * @var RequestedDeliveryDate $RequestedDeliveryDate
	 */
	protected $RequestedDeliveryDate;

	/**
	 * @param DeliveryOption $DeliveryOption
	 */
	public function __construct($DeliveryOption)
	{
		$this->DeliveryOption = $DeliveryOption;
	}

	/**
	 * @return DeliveryOption
	 */
	public function getDeliveryOption()
	{
		return $this->DeliveryOption;
	}

	/**
	 * @param DeliveryOption $DeliveryOption
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setDeliveryOption($DeliveryOption)
	{
		$this->DeliveryOption = $DeliveryOption;
		return $this;
	}

	/**
	 * @return Location
	 */
	public function getLocation()
	{
		return $this->Location;
	}

	/**
	 * @param Location $Location
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setLocation($Location)
	{
		$this->Location = $Location;
		return $this;
	}

	/**
	 * @return Instructions
	 */
	public function getInstructions()
	{
		return $this->Instructions;
	}

	/**
	 * @param Instructions $Instructions
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setInstructions($Instructions)
	{
		$this->Instructions = $Instructions;
		return $this;
	}

	/**
	 * @return GateCode
	 */
	public function getGateCode()
	{
		return $this->GateCode;
	}

	/**
	 * @param GateCode $GateCode
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setGateCode($GateCode)
	{
		$this->GateCode = $GateCode;
		return $this;
	}

	/**
	 * @return LWNTypeCode
	 */
	public function getLWNTypeCode()
	{
		return $this->LWNTypeCode;
	}

	/**
	 * @param LWNTypeCode $LWNTypeCode
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setLWNTypeCode($LWNTypeCode)
	{
		$this->LWNTypeCode = $LWNTypeCode;
		return $this;
	}

	/**
	 * @return NeighbourName
	 */
	public function getNeighbourName()
	{
		return $this->NeighbourName;
	}

	/**
	 * @param NeighbourName $NeighbourName
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setNeighbourName($NeighbourName)
	{
		$this->NeighbourName = $NeighbourName;
		return $this;
	}

	/**
	 * @return NeighbourHouseNumber
	 */
	public function getNeighbourHouseNumber()
	{
		return $this->NeighbourHouseNumber;
	}

	/**
	 * @param NeighbourHouseNumber $NeighbourHouseNumber
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setNeighbourHouseNumber($NeighbourHouseNumber)
	{
		$this->NeighbourHouseNumber = $NeighbourHouseNumber;
		return $this;
	}

	/**
	 * @return AuthorizerName
	 */
	public function getAuthorizerName()
	{
		return $this->AuthorizerName;
	}

	/**
	 * @param AuthorizerName $AuthorizerName
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setAuthorizerName($AuthorizerName)
	{
		$this->AuthorizerName = $AuthorizerName;
		return $this;
	}

	/**
	 * @return SelectedServicePointID
	 */
	public function getSelectedServicePointID()
	{
		return $this->SelectedServicePointID;
	}

	/**
	 * @param SelectedServicePointID $SelectedServicePointID
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setSelectedServicePointID($SelectedServicePointID)
	{
		$this->SelectedServicePointID = $SelectedServicePointID;
		return $this;
	}

	/**
	 * @return RequestedDeliveryDate
	 */
	public function getRequestedDeliveryDate()
	{
		return $this->RequestedDeliveryDate;
	}

	/**
	 * @param RequestedDeliveryDate $RequestedDeliveryDate
	 * @return \DHLExpress\docTypeRef_OnDemandDeliveryOptions
	 */
	public function setRequestedDeliveryDate($RequestedDeliveryDate)
	{
		$this->RequestedDeliveryDate = $RequestedDeliveryDate;
		return $this;
	}

}
