<?php

namespace DHLExpress;

/**
 * Class docTypeRef_AddressType2
 *
 * @package DHLExpress
 */
class docTypeRef_AddressType2
{

	/**
	 * @var string $StreetLines
	 */
	protected $StreetLines;

	/**
	 * @var string $StreetLines2
	 */
	protected $StreetLines2;

	/**
	 * @var string $StreetLines3
	 */
	protected $StreetLines3;

	/**
	 * @var string $StreetName
	 */
	protected $StreetName;

	/**
	 * @var string $StreetNumber
	 */
	protected $StreetNumber;

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
	 * @var string $CountryCode
	 */
	protected $CountryCode;

	/**
	 * @param string $City
	 * @param string $PostalCode
	 * @param string $CountryCode
	 */
	public function __construct($City, $PostalCode, $CountryCode)
	{
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
	 * @return \DHLExpress\docTypeRef_AddressType2
	 */
	public function setStreetLines($StreetLines)
	{
		$this->StreetLines = $StreetLines;
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
	 * @return \DHLExpress\docTypeRef_AddressType2
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
	 * @return \DHLExpress\docTypeRef_AddressType2
	 */
	public function setStreetLines3($StreetLines3)
	{
		$this->StreetLines3 = $StreetLines3;
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
	 * @return \DHLExpress\docTypeRef_AddressType2
	 */
	public function setStreetName($StreetName)
	{
		$this->StreetName = $StreetName;
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
	 * @return \DHLExpress\docTypeRef_AddressType2
	 */
	public function setStreetNumber($StreetNumber)
	{
		$this->StreetNumber = $StreetNumber;
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
	 * @return \DHLExpress\docTypeRef_AddressType2
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
	 * @return \DHLExpress\docTypeRef_AddressType2
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
	 * @return \DHLExpress\docTypeRef_AddressType2
	 */
	public function setPostalCode($PostalCode)
	{
		$this->PostalCode = $PostalCode;
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
	 * @return \DHLExpress\docTypeRef_AddressType2
	 */
	public function setCountryCode($CountryCode)
	{
		$this->CountryCode = $CountryCode;
		return $this;
	}

}
