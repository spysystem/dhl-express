<?php
namespace DHLExpress;


/**
 * Class LandedCostType
 */
class LandedCostType
{

	/**
	 * @var string|GetItemCostBreakdown2 $GetItemCostBreakdown
	 */
	protected $GetItemCostBreakdown;

	/**
	 * @var string $ShipmentCurrencyCode
	 */
	protected $ShipmentCurrencyCode;

	/**
	 * @var null|string|ShipmentPurpose2 $ShipmentPurpose
	 */
	protected $ShipmentPurpose;

	/**
	 * @var null|string|ShipmentTransportationMode2 $ShipmentTransportationMode
	 */
	protected $ShipmentTransportationMode;

	/**
	 * @var null|string|MerchantSelectedCarrierName2 $MerchantSelectedCarrierName
	 */
	protected $MerchantSelectedCarrierName;

	/**
	 * @var ItemsType $Items
	 */
	protected $Items;

	/**
	 * @var null|ShipmentMonetaryAmountType $ShipmentMonetaryAmount
	 */
	protected $ShipmentMonetaryAmount;

	/**
	 * @param string|GetItemCostBreakdown2 $GetItemCostBreakdown
	 * @param string $ShipmentCurrencyCode
	 * @param ItemsType $Items
	 */
	public function __construct($GetItemCostBreakdown, string $ShipmentCurrencyCode, ItemsType $Items)
	{
		$this->GetItemCostBreakdown = $GetItemCostBreakdown;
		$this->ShipmentCurrencyCode = $ShipmentCurrencyCode;
		$this->Items = $Items;
	}

	/**
	 * @return string|GetItemCostBreakdown2
	 */
	public function getGetItemCostBreakdown()
	{
		return $this->GetItemCostBreakdown;
	}

	/**
	 * @param string|GetItemCostBreakdown2 $GetItemCostBreakdown
	 * @return LandedCostType
	 */
	public function setGetItemCostBreakdown($GetItemCostBreakdown): LandedCostType
	{
		$this->GetItemCostBreakdown = $GetItemCostBreakdown;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getShipmentCurrencyCode(): ?string
	{
		return $this->ShipmentCurrencyCode;
	}

	/**
	 * @param string $ShipmentCurrencyCode
	 * @return LandedCostType
	 */
	public function setShipmentCurrencyCode(string $ShipmentCurrencyCode): LandedCostType
	{
		$this->ShipmentCurrencyCode = $ShipmentCurrencyCode;
		return $this;
	}

	/**
	 * @return null|string|ShipmentPurpose2
	 */
	public function getShipmentPurpose()
	{
		return $this->ShipmentPurpose;
	}

	/**
	 * @param null|string|ShipmentPurpose2 $ShipmentPurpose
	 * @return LandedCostType
	 */
	public function setShipmentPurpose($ShipmentPurpose): LandedCostType
	{
		$this->ShipmentPurpose = $ShipmentPurpose;
		return $this;
	}

	/**
	 * @return null|string|ShipmentTransportationMode2
	 */
	public function getShipmentTransportationMode()
	{
		return $this->ShipmentTransportationMode;
	}

	/**
	 * @param null|string|ShipmentTransportationMode2 $ShipmentTransportationMode
	 * @return LandedCostType
	 */
	public function setShipmentTransportationMode($ShipmentTransportationMode): LandedCostType
	{
		$this->ShipmentTransportationMode = $ShipmentTransportationMode;
		return $this;
	}

	/**
	 * @return null|string|MerchantSelectedCarrierName2
	 */
	public function getMerchantSelectedCarrierName()
	{
		return $this->MerchantSelectedCarrierName;
	}

	/**
	 * @param null|string|MerchantSelectedCarrierName2 $MerchantSelectedCarrierName
	 * @return LandedCostType
	 */
	public function setMerchantSelectedCarrierName($MerchantSelectedCarrierName): LandedCostType
	{
		$this->MerchantSelectedCarrierName = $MerchantSelectedCarrierName;
		return $this;
	}

	/**
	 * @return ItemsType
	 */
	public function getItems(): ?ItemsType
	{
		return $this->Items;
	}

	/**
	 * @param ItemsType $Items
	 * @return LandedCostType
	 */
	public function setItems(ItemsType $Items): LandedCostType
	{
		$this->Items = $Items;
		return $this;
	}

	/**
	 * @return null|ShipmentMonetaryAmountType
	 */
	public function getShipmentMonetaryAmount(): ?ShipmentMonetaryAmountType
	{
		return $this->ShipmentMonetaryAmount;
	}

	/**
	 * @param null|ShipmentMonetaryAmountType $ShipmentMonetaryAmount
	 * @return LandedCostType
	 */
	public function setShipmentMonetaryAmount(?ShipmentMonetaryAmountType $ShipmentMonetaryAmount = null): LandedCostType
	{
		$this->ShipmentMonetaryAmount = $ShipmentMonetaryAmount;
		return $this;
	}

}
