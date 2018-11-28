<?php
namespace DHLExpress;


/**
 * Class docTypeRef_RequestedShipmentType
 */
class docTypeRef_RequestedShipmentType
{

	/**
	 * @var docTypeRef_ShipmentInfoType $ShipmentInfo
	 */
	protected $ShipmentInfo;

	/**
	 * @var string $ShipTimestamp
	 */
	protected $ShipTimestamp;

	/**
	 * @var null|string $PickupLocationCloseTime
	 */
	protected $PickupLocationCloseTime;

	/**
	 * @var null|string $SpecialPickupInstruction
	 */
	protected $SpecialPickupInstruction;

	/**
	 * @var null|string $PickupLocation
	 */
	protected $PickupLocation;

	/**
	 * @var string|PaymentInfo $PaymentInfo
	 */
	protected $PaymentInfo;

	/**
	 * @var docTypeRef_InternationDetailType $InternationalDetail
	 */
	protected $InternationalDetail;

	/**
	 * @var null|docTypeRef_OnDemandDeliveryOptions $OnDemandDeliveryOptions
	 */
	protected $OnDemandDeliveryOptions;

	/**
	 * @var docTypeRef_ShipType $Ship
	 */
	protected $Ship;

	/**
	 * @var docTypeRef_PackagesType $Packages
	 */
	protected $Packages;

	/**
	 * @var null|docTypeRef_DangerousGoods $DangerousGoods
	 */
	protected $DangerousGoods;

	/**
	 * @param docTypeRef_ShipmentInfoType $ShipmentInfo
	 * @param string $ShipTimestamp
	 * @param string|PaymentInfo $PaymentInfo
	 * @param docTypeRef_InternationDetailType $InternationalDetail
	 * @param docTypeRef_ShipType $Ship
	 * @param docTypeRef_PackagesType $Packages
	 */
	public function __construct(docTypeRef_ShipmentInfoType $ShipmentInfo, string $ShipTimestamp, $PaymentInfo, docTypeRef_InternationDetailType $InternationalDetail, docTypeRef_ShipType $Ship, docTypeRef_PackagesType $Packages)
	{
		$this->ShipmentInfo = $ShipmentInfo;
		$this->ShipTimestamp = $ShipTimestamp;
		$this->PaymentInfo = $PaymentInfo;
		$this->InternationalDetail = $InternationalDetail;
		$this->Ship = $Ship;
		$this->Packages = $Packages;
	}

	/**
	 * @return docTypeRef_ShipmentInfoType
	 */
	public function getShipmentInfo(): docTypeRef_ShipmentInfoType
	{
		return $this->ShipmentInfo;
	}

	/**
	 * @param docTypeRef_ShipmentInfoType $ShipmentInfo
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setShipmentInfo(docTypeRef_ShipmentInfoType $ShipmentInfo): docTypeRef_RequestedShipmentType
	{
		$this->ShipmentInfo = $ShipmentInfo;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getShipTimestamp(): ?string
	{
		return $this->ShipTimestamp;
	}

	/**
	 * @param string $ShipTimestamp
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setShipTimestamp(string $ShipTimestamp): docTypeRef_RequestedShipmentType
	{
		$this->ShipTimestamp = $ShipTimestamp;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPickupLocationCloseTime(): ?string
	{
		return $this->PickupLocationCloseTime;
	}

	/**
	 * @param null|string $PickupLocationCloseTime
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setPickupLocationCloseTime(?string $PickupLocationCloseTime = null): docTypeRef_RequestedShipmentType
	{
		$this->PickupLocationCloseTime = $PickupLocationCloseTime;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSpecialPickupInstruction(): ?string
	{
		return $this->SpecialPickupInstruction;
	}

	/**
	 * @param null|string $SpecialPickupInstruction
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setSpecialPickupInstruction(?string $SpecialPickupInstruction = null): docTypeRef_RequestedShipmentType
	{
		$this->SpecialPickupInstruction = $SpecialPickupInstruction;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPickupLocation(): ?string
	{
		return $this->PickupLocation;
	}

	/**
	 * @param null|string $PickupLocation
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setPickupLocation(?string $PickupLocation = null): docTypeRef_RequestedShipmentType
	{
		$this->PickupLocation = $PickupLocation;
		return $this;
	}

	/**
	 * @return string|PaymentInfo
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
	}

	/**
	 * @param string|PaymentInfo $PaymentInfo
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setPaymentInfo($PaymentInfo): docTypeRef_RequestedShipmentType
	{
		$this->PaymentInfo = $PaymentInfo;
		return $this;
	}

	/**
	 * @return docTypeRef_InternationDetailType
	 */
	public function getInternationalDetail(): ?docTypeRef_InternationDetailType
	{
		return $this->InternationalDetail;
	}

	/**
	 * @param docTypeRef_InternationDetailType $InternationalDetail
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setInternationalDetail(docTypeRef_InternationDetailType $InternationalDetail): docTypeRef_RequestedShipmentType
	{
		$this->InternationalDetail = $InternationalDetail;
		return $this;
	}

	/**
	 * @return null|docTypeRef_OnDemandDeliveryOptions
	 */
	public function getOnDemandDeliveryOptions(): ?docTypeRef_OnDemandDeliveryOptions
	{
		return $this->OnDemandDeliveryOptions;
	}

	/**
	 * @param null|docTypeRef_OnDemandDeliveryOptions $OnDemandDeliveryOptions
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setOnDemandDeliveryOptions(?docTypeRef_OnDemandDeliveryOptions $OnDemandDeliveryOptions = null): docTypeRef_RequestedShipmentType
	{
		$this->OnDemandDeliveryOptions = $OnDemandDeliveryOptions;
		return $this;
	}

	/**
	 * @return docTypeRef_ShipType
	 */
	public function getShip(): ?docTypeRef_ShipType
	{
		return $this->Ship;
	}

	/**
	 * @param docTypeRef_ShipType $Ship
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setShip(docTypeRef_ShipType $Ship): docTypeRef_RequestedShipmentType
	{
		$this->Ship = $Ship;
		return $this;
	}

	/**
	 * @return docTypeRef_PackagesType
	 */
	public function getPackages(): ?docTypeRef_PackagesType
	{
		return $this->Packages;
	}

	/**
	 * @param docTypeRef_PackagesType $Packages
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setPackages(docTypeRef_PackagesType $Packages): docTypeRef_RequestedShipmentType
	{
		$this->Packages = $Packages;
		return $this;
	}

	/**
	 * @return null|docTypeRef_DangerousGoods
	 */
	public function getDangerousGoods(): ?docTypeRef_DangerousGoods
	{
		return $this->DangerousGoods;
	}

	/**
	 * @param null|docTypeRef_DangerousGoods $DangerousGoods
	 * @return docTypeRef_RequestedShipmentType
	 */
	public function setDangerousGoods(?docTypeRef_DangerousGoods $DangerousGoods = null): docTypeRef_RequestedShipmentType
	{
		$this->DangerousGoods = $DangerousGoods;
		return $this;
	}

}
