<?php

namespace DHLExpress;

class docTypeRef_RegistrationNumber
{

	/**
	 * @var Number $Number
	 */
	protected $Number = null;

	/**
	 * @var NumberTypeCode $NumberTypeCode
	 */
	protected $NumberTypeCode = null;

	/**
	 * @var NumberIssuerCountryCode $NumberIssuerCountryCode
	 */
	protected $NumberIssuerCountryCode = null;

	/**
	 * @param Number $Number
	 * @param NumberTypeCode $NumberTypeCode
	 * @param NumberIssuerCountryCode $NumberIssuerCountryCode
	 */
	public function __construct($Number, $NumberTypeCode, $NumberIssuerCountryCode)
	{
		$this->Number = $Number;
		$this->NumberTypeCode = $NumberTypeCode;
		$this->NumberIssuerCountryCode = $NumberIssuerCountryCode;
	}

	/**
	 * @return Number
	 */
	public function getNumber()
	{
		return $this->Number;
	}

	/**
	 * @param Number $Number
	 * @return \DHLExpress\docTypeRef_RegistrationNumber
	 */
	public function setNumber($Number)
	{
		$this->Number = $Number;
		return $this;
	}

	/**
	 * @return NumberTypeCode
	 */
	public function getNumberTypeCode()
	{
		return $this->NumberTypeCode;
	}

	/**
	 * @param NumberTypeCode $NumberTypeCode
	 * @return \DHLExpress\docTypeRef_RegistrationNumber
	 */
	public function setNumberTypeCode($NumberTypeCode)
	{
		$this->NumberTypeCode = $NumberTypeCode;
		return $this;
	}

	/**
	 * @return NumberIssuerCountryCode
	 */
	public function getNumberIssuerCountryCode()
	{
		return $this->NumberIssuerCountryCode;
	}

	/**
	 * @param NumberIssuerCountryCode $NumberIssuerCountryCode
	 * @return \DHLExpress\docTypeRef_RegistrationNumber
	 */
	public function setNumberIssuerCountryCode($NumberIssuerCountryCode)
	{
		$this->NumberIssuerCountryCode = $NumberIssuerCountryCode;
		return $this;
	}

}
