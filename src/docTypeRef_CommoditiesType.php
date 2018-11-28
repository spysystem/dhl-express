<?php
namespace DHLExpress;


/**
 * Class docTypeRef_CommoditiesType
 */
class docTypeRef_CommoditiesType
{

	/**
	 * @var null|string $NumberOfPieces
	 */
	protected $NumberOfPieces;

	/**
	 * @var string $Description
	 */
	protected $Description;

	/**
	 * @var null|string $CountryOfManufacture
	 */
	protected $CountryOfManufacture;

	/**
	 * @var null|string $Quantity
	 */
	protected $Quantity;

	/**
	 * @var null|string $UnitPrice
	 */
	protected $UnitPrice;

	/**
	 * @var null|string $CustomsValue
	 */
	protected $CustomsValue;

	/**
	 * @var null|string $USFilingTypeValue
	 */
	protected $USFilingTypeValue;

	/**
	 * @param string $Description
	 */
	public function __construct(string $Description)
	{
		$this->Description = $Description;
	}

	/**
	 * @return null|string
	 */
	public function getNumberOfPieces(): ?string
	{
		return $this->NumberOfPieces;
	}

	/**
	 * @param null|string $NumberOfPieces
	 * @return docTypeRef_CommoditiesType
	 */
	public function setNumberOfPieces(?string $NumberOfPieces = null): docTypeRef_CommoditiesType
	{
		$this->NumberOfPieces = $NumberOfPieces;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription(): ?string
	{
		return $this->Description;
	}

	/**
	 * @param string $Description
	 * @return docTypeRef_CommoditiesType
	 */
	public function setDescription(string $Description): docTypeRef_CommoditiesType
	{
		$this->Description = $Description;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCountryOfManufacture(): ?string
	{
		return $this->CountryOfManufacture;
	}

	/**
	 * @param null|string $CountryOfManufacture
	 * @return docTypeRef_CommoditiesType
	 */
	public function setCountryOfManufacture(?string $CountryOfManufacture = null): docTypeRef_CommoditiesType
	{
		$this->CountryOfManufacture = $CountryOfManufacture;
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
	 * @return docTypeRef_CommoditiesType
	 */
	public function setQuantity(?string $Quantity = null): docTypeRef_CommoditiesType
	{
		$this->Quantity = $Quantity;
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
	 * @return docTypeRef_CommoditiesType
	 */
	public function setUnitPrice(?string $UnitPrice = null): docTypeRef_CommoditiesType
	{
		$this->UnitPrice = $UnitPrice;
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
	 * @return docTypeRef_CommoditiesType
	 */
	public function setCustomsValue(?string $CustomsValue = null): docTypeRef_CommoditiesType
	{
		$this->CustomsValue = $CustomsValue;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUSFilingTypeValue(): ?string
	{
		return $this->USFilingTypeValue;
	}

	/**
	 * @param null|string $USFilingTypeValue
	 * @return docTypeRef_CommoditiesType
	 */
	public function setUSFilingTypeValue(?string $USFilingTypeValue = null): docTypeRef_CommoditiesType
	{
		$this->USFilingTypeValue = $USFilingTypeValue;
		return $this;
	}

}
