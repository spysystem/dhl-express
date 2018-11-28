<?php
namespace DHLExpress;


/**
 * Class ItemType
 */
class ItemType
{

	/**
	 * @var null|int $ItemNumber
	 */
	protected $ItemNumber;

	/**
	 * @var null|string $Description
	 */
	protected $Description;

	/**
	 * @var null|string $Remark
	 */
	protected $Remark;

	/**
	 * @var null|string $ManufacturingCountryCode
	 */
	protected $ManufacturingCountryCode;

	/**
	 * @var null|string $SKUPartNumber
	 */
	protected $SKUPartNumber;

	/**
	 * @var null|string $Quantity
	 */
	protected $Quantity;

	/**
	 * @var null|string $QuantityType
	 */
	protected $QuantityType;

	/**
	 * @var null|string $AdditionalQuantity
	 */
	protected $AdditionalQuantity;

	/**
	 * @var null|string $AdditionalQuantityType
	 */
	protected $AdditionalQuantityType;

	/**
	 * @var null|string $UnitPrice
	 */
	protected $UnitPrice;

	/**
	 * @var null|string $UnitPriceCurrencyCode
	 */
	protected $UnitPriceCurrencyCode;

	/**
	 * @var null|string $CustomsValue
	 */
	protected $CustomsValue;

	/**
	 * @var null|string $CustomsValueCurrencyCode
	 */
	protected $CustomsValueCurrencyCode;

	/**
	 * @var null|string $HarmonizedSystemCode
	 */
	protected $HarmonizedSystemCode;

	/**
	 * @var null|string $ItemWeight
	 */
	protected $ItemWeight;

	/**
	 * @var null|string|UnitOfMeasurement2 $ItemWeightUnitofMeasurement
	 */
	protected $ItemWeightUnitofMeasurement;

	/**
	 * @var null|string $Category
	 */
	protected $Category;

	/**
	 * @var null|string $Brand
	 */
	protected $Brand;

	/**
	 * @var GoodsCharacteristicsType $GoodsCharacteristics
	 */
	protected $GoodsCharacteristics;

	/**
	 * @param GoodsCharacteristicsType $GoodsCharacteristics
	 */
	public function __construct(GoodsCharacteristicsType $GoodsCharacteristics)
	{
		$this->GoodsCharacteristics = $GoodsCharacteristics;
	}

	/**
	 * @return null|int
	 */
	public function getItemNumber(): ?int
	{
		return $this->ItemNumber;
	}

	/**
	 * @param null|int $ItemNumber
	 * @return ItemType
	 */
	public function setItemNumber(?int $ItemNumber = null): ItemType
	{
		$this->ItemNumber = $ItemNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDescription(): ?string
	{
		return $this->Description;
	}

	/**
	 * @param null|string $Description
	 * @return ItemType
	 */
	public function setDescription(?string $Description = null): ItemType
	{
		$this->Description = $Description;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getRemark(): ?string
	{
		return $this->Remark;
	}

	/**
	 * @param null|string $Remark
	 * @return ItemType
	 */
	public function setRemark(?string $Remark = null): ItemType
	{
		$this->Remark = $Remark;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getManufacturingCountryCode(): ?string
	{
		return $this->ManufacturingCountryCode;
	}

	/**
	 * @param null|string $ManufacturingCountryCode
	 * @return ItemType
	 */
	public function setManufacturingCountryCode(?string $ManufacturingCountryCode = null): ItemType
	{
		$this->ManufacturingCountryCode = $ManufacturingCountryCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getSKUPartNumber(): ?string
	{
		return $this->SKUPartNumber;
	}

	/**
	 * @param null|string $SKUPartNumber
	 * @return ItemType
	 */
	public function setSKUPartNumber(?string $SKUPartNumber = null): ItemType
	{
		$this->SKUPartNumber = $SKUPartNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getQuantity(): ?string
	{
		return $this->Quantity;
	}

	/**
	 * @param null|string $Quantity
	 * @return ItemType
	 */
	public function setQuantity(?string $Quantity = null): ItemType
	{
		$this->Quantity = $Quantity;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getQuantityType(): ?string
	{
		return $this->QuantityType;
	}

	/**
	 * @param null|string $QuantityType
	 * @return ItemType
	 */
	public function setQuantityType(?string $QuantityType = null): ItemType
	{
		$this->QuantityType = $QuantityType;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAdditionalQuantity(): ?string
	{
		return $this->AdditionalQuantity;
	}

	/**
	 * @param null|string $AdditionalQuantity
	 * @return ItemType
	 */
	public function setAdditionalQuantity(?string $AdditionalQuantity = null): ItemType
	{
		$this->AdditionalQuantity = $AdditionalQuantity;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAdditionalQuantityType(): ?string
	{
		return $this->AdditionalQuantityType;
	}

	/**
	 * @param null|string $AdditionalQuantityType
	 * @return ItemType
	 */
	public function setAdditionalQuantityType(?string $AdditionalQuantityType = null): ItemType
	{
		$this->AdditionalQuantityType = $AdditionalQuantityType;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUnitPrice(): ?string
	{
		return $this->UnitPrice;
	}

	/**
	 * @param null|string $UnitPrice
	 * @return ItemType
	 */
	public function setUnitPrice(?string $UnitPrice = null): ItemType
	{
		$this->UnitPrice = $UnitPrice;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUnitPriceCurrencyCode(): ?string
	{
		return $this->UnitPriceCurrencyCode;
	}

	/**
	 * @param null|string $UnitPriceCurrencyCode
	 * @return ItemType
	 */
	public function setUnitPriceCurrencyCode(?string $UnitPriceCurrencyCode = null): ItemType
	{
		$this->UnitPriceCurrencyCode = $UnitPriceCurrencyCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCustomsValue(): ?string
	{
		return $this->CustomsValue;
	}

	/**
	 * @param null|string $CustomsValue
	 * @return ItemType
	 */
	public function setCustomsValue(?string $CustomsValue = null): ItemType
	{
		$this->CustomsValue = $CustomsValue;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCustomsValueCurrencyCode(): ?string
	{
		return $this->CustomsValueCurrencyCode;
	}

	/**
	 * @param null|string $CustomsValueCurrencyCode
	 * @return ItemType
	 */
	public function setCustomsValueCurrencyCode(?string $CustomsValueCurrencyCode = null): ItemType
	{
		$this->CustomsValueCurrencyCode = $CustomsValueCurrencyCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getHarmonizedSystemCode(): ?string
	{
		return $this->HarmonizedSystemCode;
	}

	/**
	 * @param null|string $HarmonizedSystemCode
	 * @return ItemType
	 */
	public function setHarmonizedSystemCode(?string $HarmonizedSystemCode = null): ItemType
	{
		$this->HarmonizedSystemCode = $HarmonizedSystemCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getItemWeight(): ?string
	{
		return $this->ItemWeight;
	}

	/**
	 * @param null|string $ItemWeight
	 * @return ItemType
	 */
	public function setItemWeight(?string $ItemWeight = null): ItemType
	{
		$this->ItemWeight = $ItemWeight;
		return $this;
	}

	/**
	 * @return null|string|UnitOfMeasurement2
	 */
	public function getItemWeightUnitofMeasurement()
	{
		return $this->ItemWeightUnitofMeasurement;
	}

	/**
	 * @param null|string|UnitOfMeasurement2 $ItemWeightUnitofMeasurement
	 * @return ItemType
	 */
	public function setItemWeightUnitofMeasurement($ItemWeightUnitofMeasurement): ItemType
	{
		$this->ItemWeightUnitofMeasurement = $ItemWeightUnitofMeasurement;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCategory(): ?string
	{
		return $this->Category;
	}

	/**
	 * @param null|string $Category
	 * @return ItemType
	 */
	public function setCategory(?string $Category = null): ItemType
	{
		$this->Category = $Category;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getBrand(): ?string
	{
		return $this->Brand;
	}

	/**
	 * @param null|string $Brand
	 * @return ItemType
	 */
	public function setBrand(?string $Brand = null): ItemType
	{
		$this->Brand = $Brand;
		return $this;
	}

	/**
	 * @return GoodsCharacteristicsType
	 */
	public function getGoodsCharacteristics(): ?GoodsCharacteristicsType
	{
		return $this->GoodsCharacteristics;
	}

	/**
	 * @param GoodsCharacteristicsType $GoodsCharacteristics
	 * @return ItemType
	 */
	public function setGoodsCharacteristics(GoodsCharacteristicsType $GoodsCharacteristics): ItemType
	{
		$this->GoodsCharacteristics = $GoodsCharacteristics;
		return $this;
	}

}
