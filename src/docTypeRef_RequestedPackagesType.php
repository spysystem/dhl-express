<?php

namespace DHLExpress;

/**
 * Class docTypeRef_RequestedPackagesType
 *
 * @package DHLExpress
 */
class docTypeRef_RequestedPackagesType
{

	/**
	 * @var InsuredValue $InsuredValue
	 */
	protected $InsuredValue;

	/**
	 * @var Weight $Weight
	 */
	protected $Weight;

	/**
	 * @var PieceIdentificationNumber $PieceIdentificationNumber
	 */
	protected $PieceIdentificationNumber;

	/**
	 * @var UseOwnPieceIdentificationNumber $UseOwnPieceIdentificationNumber
	 */
	protected $UseOwnPieceIdentificationNumber;

	/**
	 * @var PackageContentDescription $PackageContentDescription
	 */
	protected $PackageContentDescription;

	/**
	 * @var docTypeRef_DimensionsType $Dimensions
	 */
	protected $Dimensions;

	/**
	 * @var CustomerReferences $CustomerReferences
	 */
	protected $CustomerReferences;

	/**
	 * @var int $number
	 */
	protected $number;

	/**
	 * @param Weight $Weight
	 * @param docTypeRef_DimensionsType $Dimensions
	 * @param CustomerReferences $CustomerReferences
	 * @param int $number
	 */
	public function __construct($Weight, $Dimensions, $CustomerReferences, $number)
	{
		$this->Weight = $Weight;
		$this->Dimensions = $Dimensions;
		$this->CustomerReferences = $CustomerReferences;
		$this->number = $number;
	}

	/**
	 * @return InsuredValue
	 */
	public function getInsuredValue()
	{
		return $this->InsuredValue;
	}

	/**
	 * @param InsuredValue $InsuredValue
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType
	 */
	public function setInsuredValue($InsuredValue)
	{
		$this->InsuredValue = $InsuredValue;
		return $this;
	}

	/**
	 * @return Weight
	 */
	public function getWeight()
	{
		return $this->Weight;
	}

	/**
	 * @param Weight $Weight
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType
	 */
	public function setWeight($Weight)
	{
		$this->Weight = $Weight;
		return $this;
	}

	/**
	 * @return PieceIdentificationNumber
	 */
	public function getPieceIdentificationNumber()
	{
		return $this->PieceIdentificationNumber;
	}

	/**
	 * @param PieceIdentificationNumber $PieceIdentificationNumber
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType
	 */
	public function setPieceIdentificationNumber($PieceIdentificationNumber)
	{
		$this->PieceIdentificationNumber = $PieceIdentificationNumber;
		return $this;
	}

	/**
	 * @return UseOwnPieceIdentificationNumber
	 */
	public function getUseOwnPieceIdentificationNumber()
	{
		return $this->UseOwnPieceIdentificationNumber;
	}

	/**
	 * @param UseOwnPieceIdentificationNumber $UseOwnPieceIdentificationNumber
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType
	 */
	public function setUseOwnPieceIdentificationNumber($UseOwnPieceIdentificationNumber)
	{
		$this->UseOwnPieceIdentificationNumber = $UseOwnPieceIdentificationNumber;
		return $this;
	}

	/**
	 * @return PackageContentDescription
	 */
	public function getPackageContentDescription()
	{
		return $this->PackageContentDescription;
	}

	/**
	 * @param PackageContentDescription $PackageContentDescription
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType
	 */
	public function setPackageContentDescription($PackageContentDescription)
	{
		$this->PackageContentDescription = $PackageContentDescription;
		return $this;
	}

	/**
	 * @return docTypeRef_DimensionsType
	 */
	public function getDimensions()
	{
		return $this->Dimensions;
	}

	/**
	 * @param docTypeRef_DimensionsType $Dimensions
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType
	 */
	public function setDimensions($Dimensions)
	{
		$this->Dimensions = $Dimensions;
		return $this;
	}

	/**
	 * @return CustomerReferences
	 */
	public function getCustomerReferences()
	{
		return $this->CustomerReferences;
	}

	/**
	 * @param CustomerReferences $CustomerReferences
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType
	 */
	public function setCustomerReferences($CustomerReferences)
	{
		$this->CustomerReferences = $CustomerReferences;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNumber()
	{
		return $this->number;
	}

	/**
	 * @param int $number
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType
	 */
	public function setNumber($number)
	{
		$this->number = $number;
		return $this;
	}

}
