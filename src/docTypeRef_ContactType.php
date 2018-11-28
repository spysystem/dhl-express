<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ContactType
 */
class docTypeRef_ContactType
{

	/**
	 * @var string $PersonName
	 */
	protected $PersonName;

	/**
	 * @var string $CompanyName
	 */
	protected $CompanyName;

	/**
	 * @var string $PhoneNumber
	 */
	protected $PhoneNumber;

	/**
	 * @var null|string $EmailAddress
	 */
	protected $EmailAddress;

	/**
	 * @var null|string $MobilePhoneNumber
	 */
	protected $MobilePhoneNumber;

	/**
	 * @param string $PersonName
	 * @param string $CompanyName
	 * @param string $PhoneNumber
	 */
	public function __construct(string $PersonName, string $CompanyName, string $PhoneNumber)
	{
		$this->PersonName = $PersonName;
		$this->CompanyName = $CompanyName;
		$this->PhoneNumber = $PhoneNumber;
	}

	/**
	 * @return string
	 */
	public function getPersonName(): ?string
	{
		return $this->PersonName;
	}

	/**
	 * @param string $PersonName
	 * @return docTypeRef_ContactType
	 */
	public function setPersonName(string $PersonName): docTypeRef_ContactType
	{
		$this->PersonName = $PersonName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCompanyName(): ?string
	{
		return $this->CompanyName;
	}

	/**
	 * @param string $CompanyName
	 * @return docTypeRef_ContactType
	 */
	public function setCompanyName(string $CompanyName): docTypeRef_ContactType
	{
		$this->CompanyName = $CompanyName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhoneNumber(): ?string
	{
		return $this->PhoneNumber;
	}

	/**
	 * @param string $PhoneNumber
	 * @return docTypeRef_ContactType
	 */
	public function setPhoneNumber(string $PhoneNumber): docTypeRef_ContactType
	{
		$this->PhoneNumber = $PhoneNumber;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEmailAddress(): ?string
	{
		return $this->EmailAddress;
	}

	/**
	 * @param null|string $EmailAddress
	 * @return docTypeRef_ContactType
	 */
	public function setEmailAddress(?string $EmailAddress = null): docTypeRef_ContactType
	{
		$this->EmailAddress = $EmailAddress;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getMobilePhoneNumber(): ?string
	{
		return $this->MobilePhoneNumber;
	}

	/**
	 * @param null|string $MobilePhoneNumber
	 * @return docTypeRef_ContactType
	 */
	public function setMobilePhoneNumber(?string $MobilePhoneNumber = null): docTypeRef_ContactType
	{
		$this->MobilePhoneNumber = $MobilePhoneNumber;
		return $this;
	}

}
