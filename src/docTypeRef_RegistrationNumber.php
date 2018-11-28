<?php
namespace DHLExpress;


/**
 * Class docTypeRef_RegistrationNumber
 */
class docTypeRef_RegistrationNumber
{

	/**
	 * @var Number $Number
	 */
	protected $Number;

	/**
	 * @var string $NumberTypeCode
	 */
	protected $NumberTypeCode;

	/**
	 * @var string $NumberIssuerCountryCode
	 */
	protected $NumberIssuerCountryCode;

	/**
	 * @param string $Number
	 * @param string $NumberTypeCode
	 * @param string $NumberIssuerCountryCode
	 */
	public function __construct(string $Number, string $NumberTypeCode, string $NumberIssuerCountryCode)
	{
		$this->Number = $Number;
		$this->NumberTypeCode = $NumberTypeCode;
		$this->NumberIssuerCountryCode = $NumberIssuerCountryCode;
	}

	/**
	 * @return string
	 */
	public function getNumber(): ?string
	{
		return $this->Number;
	}

	/**
	 * @param string $Number
	 * @return docTypeRef_RegistrationNumber
	 */
	public function setNumber(string $Number): docTypeRef_RegistrationNumber
	{
		$this->Number = $Number;
		return $this;
	}

	/**
	 * @return string
	 */
	public function string(): ?string
	{
		return $this->NumberTypeCode;
	}

	/**
	 * @param string $NumberTypeCode
	 * @return docTypeRef_RegistrationNumber
	 */
	public function setNumberTypeCode(string $NumberTypeCode): docTypeRef_RegistrationNumber
	{
		$this->NumberTypeCode = $NumberTypeCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNumberIssuerCountryCode(): ?string
	{
		return $this->NumberIssuerCountryCode;
	}

	/**
	 * @param string $NumberIssuerCountryCode
	 * @return docTypeRef_RegistrationNumber
	 */
	public function setNumberIssuerCountryCode(string $NumberIssuerCountryCode): docTypeRef_RegistrationNumber
	{
		$this->NumberIssuerCountryCode = $NumberIssuerCountryCode;
		return $this;
	}

}
