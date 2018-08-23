<?php

namespace DHLExpress;

/**
 * Class docTypeRef_AddressType1
 *
 * @package DHLExpress
 */
class docTypeRef_AddressType1
{

	/**
	 * @var string $StreetLines
	 */
	protected $StreetLines;

	/**
	 * @var string $StreetName
	 */
	protected $StreetName;

	/**
	 * @var string $BuildingName
	 */
	protected $BuildingName;

	/**
	 * @var string $StreetNumber
	 */
	protected $StreetNumber;

	/**
	 * @var string $StreetLines2
	 */
	protected $StreetLines2;

	/**
	 * @var string $StreetLines3
	 */
	protected $StreetLines3;

	/**
	 * @var string $CityDistrict
	 */
	protected $CityDistrict;

	/**
	 * @var string $City
	 */
	protected $City;

	/**
	 * @var string $StateOrProvinceCode
	 */
	protected $StateOrProvinceCode;

	/**
	 * @var string $PostalCode
	 */
	protected $PostalCode;

	/**
	 * @var string $CountryName
	 */
	protected $CountryName;

	/**
	 * @var string $CountryCode
	 */
	protected $CountryCode;

	/**
	 * @param string $StreetLines
	 * @param string $City
	 * @param string $PostalCode
	 * @param string $CountryCode
	 */
	public function __construct($StreetLines, $City, $PostalCode, $CountryCode)
	{
		$this->StreetLines = $StreetLines;
		$this->City = $City;
		$this->PostalCode = $PostalCode;
		$this->CountryCode = $CountryCode;
	}

	/**
	 * @return string
	 */
	public function getStreetLines()
	{
		return $this->StreetLines;
	}

	/**
	 * @param string $StreetLines
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setStreetLines($StreetLines)
	{
		$this->StreetLines = $StreetLines;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStreetName()
	{
		return $this->StreetName;
	}

	/**
	 * @param string $StreetName
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setStreetName($StreetName)
	{
		$this->StreetName = $StreetName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBuildingName()
	{
		return $this->BuildingName;
	}

	/**
	 * @param string $BuildingName
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setBuildingName($BuildingName)
	{
		$this->BuildingName = $BuildingName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStreetNumber()
	{
		return $this->StreetNumber;
	}

	/**
	 * @param string $StreetNumber
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setStreetNumber($StreetNumber)
	{
		$this->StreetNumber = $StreetNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStreetLines2()
	{
		return $this->StreetLines2;
	}

	/**
	 * @param string $StreetLines2
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setStreetLines2($StreetLines2)
	{
		$this->StreetLines2 = $StreetLines2;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStreetLines3()
	{
		return $this->StreetLines3;
	}

	/**
	 * @param string $StreetLines3
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setStreetLines3($StreetLines3)
	{
		$this->StreetLines3 = $StreetLines3;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCityDistrict()
	{
		return $this->CityDistrict;
	}

	/**
	 * @param string $CityDistrict
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setCityDistrict($CityDistrict)
	{
		$this->CityDistrict = $CityDistrict;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}

	/**
	 * @param string $City
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setCity($City)
	{
		$this->City = $City;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStateOrProvinceCode()
	{
		return $this->StateOrProvinceCode;
	}

	/**
	 * @param string $StateOrProvinceCode
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setStateOrProvinceCode($StateOrProvinceCode)
	{
		$this->StateOrProvinceCode = $StateOrProvinceCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}

	/**
	 * @param string $PostalCode
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setPostalCode($PostalCode)
	{
		$this->PostalCode = $PostalCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountryName()
	{
		return $this->CountryName;
	}

	/**
	 * @param string $CountryName
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setCountryName($CountryName)
	{
		$this->CountryName = $CountryName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}

	/**
	 * @param string $CountryCode
	 * @return \DHLExpress\docTypeRef_AddressType1
	 */
	public function setCountryCode($CountryCode)
	{
		$this->CountryCode = $CountryCode;
		return $this;
	}

}
