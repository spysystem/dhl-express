<?php
namespace DHLExpress;


/**
 * Class docTypeRef_OnDemandDeliveryOptions
 */
class docTypeRef_OnDemandDeliveryOptions
{

	/**
	 * @var string|DeliveryOption $DeliveryOption
	 */
	protected $DeliveryOption;

	/**
	 * @var null|string $Location
	 */
	protected $Location;

	/**
	 * @var null|string $Instructions
	 */
	protected $Instructions;

	/**
	 * @var null|string $GateCode
	 */
	protected $GateCode;

	/**
	 * @var null|string|LWNTypeCode $LWNTypeCode
	 */
	protected $LWNTypeCode;

	/**
	 * @var null|string $NeighbourName
	 */
	protected $NeighbourName;

	/**
	 * @var null|string $NeighbourHouseNumber
	 */
	protected $NeighbourHouseNumber;

	/**
	 * @var null|string $AuthorizerName
	 */
	protected $AuthorizerName;

	/**
	 * @var null|string $SelectedServicePointID
	 */
	protected $SelectedServicePointID;

	/**
	 * @var null|string $RequestedDeliveryDate
	 */
	protected $RequestedDeliveryDate;

	/**
	 * @param string|DeliveryOption $DeliveryOption
	 */
	public function __construct($DeliveryOption)
	{
		$this->DeliveryOption = $DeliveryOption;
	}

	/**
	 * @return string|DeliveryOption
	 */
	public function getDeliveryOption()
	{
		return $this->DeliveryOption;
	}

	/**
	 * @param string|DeliveryOption $DeliveryOption
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setDeliveryOption($DeliveryOption): docTypeRef_OnDemandDeliveryOptions
	{
		$this->DeliveryOption = $DeliveryOption;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getLocation(): ?string
	{
		return $this->Location;
	}

	/**
	 * @param null|string $Location
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setLocation(?string $Location = null): docTypeRef_OnDemandDeliveryOptions
	{
		$this->Location = $Location;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getInstructions(): ?string
	{
		return $this->Instructions;
	}

	/**
	 * @param null|string $Instructions
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setInstructions(?string $Instructions = null): docTypeRef_OnDemandDeliveryOptions
	{
		$this->Instructions = $Instructions;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getGateCode(): ?string
	{
		return $this->GateCode;
	}

	/**
	 * @param null|string $GateCode
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setGateCode(?string $GateCode = null): docTypeRef_OnDemandDeliveryOptions
	{
		$this->GateCode = $GateCode;
		return $this;
	}

	/**
	 * @return null|string|LWNTypeCode
	 */
	public function getLWNTypeCode()
	{
		return $this->LWNTypeCode;
	}

	/**
	 * @param null|string|LWNTypeCode $LWNTypeCode
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setLWNTypeCode($LWNTypeCode): docTypeRef_OnDemandDeliveryOptions
	{
		$this->LWNTypeCode = $LWNTypeCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getNeighbourName(): ?string
	{
		return $this->NeighbourName;
	}

	/**
	 * @param null|string $NeighbourName
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setNeighbourName(?string $NeighbourName = null): docTypeRef_OnDemandDeliveryOptions
	{
		$this->NeighbourName = $NeighbourName;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getNeighbourHouseNumber(): ?string
	{
		return $this->NeighbourHouseNumber;
	}

	/**
	 * @param null|string $NeighbourHouseNumber
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setNeighbourHouseNumber(?string $NeighbourHouseNumber = null): docTypeRef_OnDemandDeliveryOptions
	{
		$this->NeighbourHouseNumber = $NeighbourHouseNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAuthorizerName(): ?string
	{
		return $this->AuthorizerName;
	}

	/**
	 * @param null|string $AuthorizerName
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setAuthorizerName(?string $AuthorizerName = null): docTypeRef_OnDemandDeliveryOptions
	{
		$this->AuthorizerName = $AuthorizerName;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSelectedServicePointID(): ?string
	{
		return $this->SelectedServicePointID;
	}

	/**
	 * @param null|string $SelectedServicePointID
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setSelectedServicePointID(?string $SelectedServicePointID = null): docTypeRef_OnDemandDeliveryOptions
	{
		$this->SelectedServicePointID = $SelectedServicePointID;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getRequestedDeliveryDate(): ?string
	{
		return $this->RequestedDeliveryDate;
	}

	/**
	 * @param null|string $RequestedDeliveryDate
	 * @return docTypeRef_OnDemandDeliveryOptions
	 */
	public function setRequestedDeliveryDate(?string $RequestedDeliveryDate = null): docTypeRef_OnDemandDeliveryOptions
	{
		$this->RequestedDeliveryDate = $RequestedDeliveryDate;
		return $this;
	}

}
