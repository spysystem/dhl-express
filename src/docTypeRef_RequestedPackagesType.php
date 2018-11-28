<?php
namespace DHLExpress;


/**
 * Class docTypeRef_RequestedPackagesType
 */
class docTypeRef_RequestedPackagesType
{

	/**
	 * @var null|string $InsuredValue
	 */
	protected $InsuredValue;

	/**
	 * @var string $Weight
	 */
	protected $Weight;

	/**
	 * @var null|string $PieceIdentificationNumber
	 */
	protected $PieceIdentificationNumber;

	/**
	 * @var null|string $UseOwnPieceIdentificationNumber
	 */
	protected $UseOwnPieceIdentificationNumber;

	/**
	 * @var null|string $PackageContentDescription
	 */
	protected $PackageContentDescription;

	/**
	 * @var docTypeRef_DimensionsType $Dimensions
	 */
	protected $Dimensions;

	/**
	 * @var string $CustomerReferences
	 */
	protected $CustomerReferences;

	/**
	 * @var int $number
	 */
	protected $number;

	/**
	 * @param string $Weight
	 * @param docTypeRef_DimensionsType $Dimensions
	 * @param string $CustomerReferences
	 * @param int $number
	 */
	public function __construct(string $Weight, docTypeRef_DimensionsType $Dimensions, string $CustomerReferences, int $number)
	{
		$this->Weight = $Weight;
		$this->Dimensions = $Dimensions;
		$this->CustomerReferences = $CustomerReferences;
		$this->number = $number;
	}

	/**
	 * @return null|string
	 */
	public function getInsuredValue(): ?string
	{
		return $this->InsuredValue;
	}

	/**
	 * @param null|string $InsuredValue
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function setInsuredValue(?string $InsuredValue = null): docTypeRef_RequestedPackagesType
	{
		$this->InsuredValue = $InsuredValue;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getWeight(): ?string
	{
		return $this->Weight;
	}

	/**
	 * @param string $Weight
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function setWeight(string $Weight): docTypeRef_RequestedPackagesType
	{
		$this->Weight = $Weight;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPieceIdentificationNumber(): ?string
	{
		return $this->PieceIdentificationNumber;
	}

	/**
	 * @param null|string $PieceIdentificationNumber
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function setPieceIdentificationNumber(?string $PieceIdentificationNumber = null): docTypeRef_RequestedPackagesType
	{
		$this->PieceIdentificationNumber = $PieceIdentificationNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getUseOwnPieceIdentificationNumber(): ?string
	{
		return $this->UseOwnPieceIdentificationNumber;
	}

	/**
	 * @param null|string $UseOwnPieceIdentificationNumber
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function setUseOwnPieceIdentificationNumber(?string $UseOwnPieceIdentificationNumber = null): docTypeRef_RequestedPackagesType
	{
		$this->UseOwnPieceIdentificationNumber = $UseOwnPieceIdentificationNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPackageContentDescription(): ?string
	{
		return $this->PackageContentDescription;
	}

	/**
	 * @param null|string $PackageContentDescription
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function setPackageContentDescription(?string $PackageContentDescription = null): docTypeRef_RequestedPackagesType
	{
		$this->PackageContentDescription = $PackageContentDescription;
		return $this;
	}

	/**
	 * @return docTypeRef_DimensionsType
	 */
	public function getDimensions(): ?docTypeRef_DimensionsType
	{
		return $this->Dimensions;
	}

	/**
	 * @param docTypeRef_DimensionsType $Dimensions
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function setDimensions(docTypeRef_DimensionsType $Dimensions): docTypeRef_RequestedPackagesType
	{
		$this->Dimensions = $Dimensions;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCustomerReferences(): ?string
	{
		return $this->CustomerReferences;
	}

	/**
	 * @param string $CustomerReferences
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function setCustomerReferences(string $CustomerReferences): docTypeRef_RequestedPackagesType
	{
		$this->CustomerReferences = $CustomerReferences;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNumber(): ?int
	{
		return $this->number;
	}

	/**
	 * @param int $number
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function setNumber(int $number): docTypeRef_RequestedPackagesType
	{
		$this->number = $number;
		return $this;
	}

}
