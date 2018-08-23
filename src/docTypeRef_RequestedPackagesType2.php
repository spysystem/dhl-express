<?php

namespace DHLExpress;

/**
 * Class docTypeRef_RequestedPackagesType2
 *
 * @package DHLExpress
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
	public function __construct($Weight, $Dimensions, $number)
	{
		$this->Weight = $Weight;
		$this->Dimensions = $Dimensions;
		$this->number = $number;
	}

	/**
	 * @return docTypeRef_WeightType
	 */
	public function getWeight()
	{
		return $this->Weight;
	}

	/**
	 * @param docTypeRef_WeightType $Weight
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType2
	 */
	public function setWeight($Weight)
	{
		$this->Weight = $Weight;
		return $this;
	}

	/**
	 * @return docTypeRef_DimensionsType2
	 */
	public function getDimensions()
	{
		return $this->Dimensions;
	}

	/**
	 * @param docTypeRef_DimensionsType2 $Dimensions
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType2
	 */
	public function setDimensions($Dimensions)
	{
		$this->Dimensions = $Dimensions;
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
	 * @return \DHLExpress\docTypeRef_RequestedPackagesType2
	 */
	public function setNumber($number)
	{
		$this->number = $number;
		return $this;
	}

}
