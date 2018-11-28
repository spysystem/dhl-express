<?php
namespace DHLExpress;


/**
 * Class docTypeRef_RequestedPackagesType2
 */
class docTypeRef_RequestedPackagesType2
{

	/**
	 * @var docTypeRef_WeightType $Weight
	 */
	protected $Weight;

	/**
	 * @var docTypeRef_DimensionsType2 $Dimensions
	 */
	protected $Dimensions;

	/**
	 * @var int $number
	 */
	protected $number;

	/**
	 * @param docTypeRef_WeightType $Weight
	 * @param docTypeRef_DimensionsType2 $Dimensions
	 * @param int $number
	 */
	public function __construct(docTypeRef_WeightType $Weight, docTypeRef_DimensionsType2 $Dimensions, int $number)
	{
		$this->Weight = $Weight;
		$this->Dimensions = $Dimensions;
		$this->number = $number;
	}

	/**
	 * @return docTypeRef_WeightType
	 */
	public function getWeight(): ?docTypeRef_WeightType
	{
		return $this->Weight;
	}

	/**
	 * @param docTypeRef_WeightType $Weight
	 * @return docTypeRef_RequestedPackagesType2
	 */
	public function setWeight(docTypeRef_WeightType $Weight): docTypeRef_RequestedPackagesType2
	{
		$this->Weight = $Weight;
		return $this;
	}

	/**
	 * @return docTypeRef_DimensionsType2
	 */
	public function getDimensions(): ?docTypeRef_DimensionsType2
	{
		return $this->Dimensions;
	}

	/**
	 * @param docTypeRef_DimensionsType2 $Dimensions
	 * @return docTypeRef_RequestedPackagesType2
	 */
	public function setDimensions(docTypeRef_DimensionsType2 $Dimensions): docTypeRef_RequestedPackagesType2
	{
		$this->Dimensions = $Dimensions;
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
	 * @return docTypeRef_RequestedPackagesType2
	 */
	public function setNumber(int $number): docTypeRef_RequestedPackagesType2
	{
		$this->number = $number;
		return $this;
	}

}
