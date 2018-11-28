<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ContactType1
 */
class docTypeRef_ContactType1
{

	/**
	 * @var null|string $PersonName
	 */
	protected $PersonName;

	/**
	 * @var null|string $CompanyName
	 */
	protected $CompanyName;

	/**
	 * @var null|string $PhoneNumber
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

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|string
	 */
	public function getPersonName(): ?string
	{
		return $this->PersonName;
	}

	/**
	 * @param null|string $PersonName
	 * @return docTypeRef_ContactType1
	 */
	public function setPersonName(?string $PersonName = null): docTypeRef_ContactType1
	{
		$this->PersonName = $PersonName;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCompanyName(): ?string
	{
		return $this->CompanyName;
	}

	/**
	 * @param null|string $CompanyName
	 * @return docTypeRef_ContactType1
	 */
	public function setCompanyName(?string $CompanyName = null): docTypeRef_ContactType1
	{
		$this->CompanyName = $CompanyName;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPhoneNumber(): ?string
	{
		return $this->PhoneNumber;
	}

	/**
	 * @param null|string $PhoneNumber
	 * @return docTypeRef_ContactType1
	 */
	public function setPhoneNumber(?string $PhoneNumber = null): docTypeRef_ContactType1
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
	 * @return docTypeRef_ContactType1
	 */
	public function setEmailAddress(?string $EmailAddress = null): docTypeRef_ContactType1
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
	 * @return docTypeRef_ContactType1
	 */
	public function setMobilePhoneNumber(?string $MobilePhoneNumber = null): docTypeRef_ContactType1
	{
		$this->MobilePhoneNumber = $MobilePhoneNumber;
		return $this;
	}

}
