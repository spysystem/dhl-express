<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ContactType1
 *
 * @package DHLExpress
 */
class docTypeRef_ContactType1
{

	/**
	 * @var PersonName $PersonName
	 */
	protected $PersonName;

	/**
	 * @var CompanyName $CompanyName
	 */
	protected $CompanyName;

	/**
	 * @var PhoneNumber $PhoneNumber
	 */
	protected $PhoneNumber;

	/**
	 * @var EmailAddress $EmailAddress
	 */
	protected $EmailAddress;

	/**
	 * @var MobilePhoneNumber $MobilePhoneNumber
	 */
	protected $MobilePhoneNumber;

	
	public function __construct()
	{
	
	}

	/**
	 * @return PersonName
	 */
	public function getPersonName()
	{
		return $this->PersonName;
	}

	/**
	 * @param PersonName $PersonName
	 * @return \DHLExpress\docTypeRef_ContactType1
	 */
	public function setPersonName($PersonName)
	{
		$this->PersonName = $PersonName;
		return $this;
	}

	/**
	 * @return CompanyName
	 */
	public function getCompanyName()
	{
		return $this->CompanyName;
	}

	/**
	 * @param CompanyName $CompanyName
	 * @return \DHLExpress\docTypeRef_ContactType1
	 */
	public function setCompanyName($CompanyName)
	{
		$this->CompanyName = $CompanyName;
		return $this;
	}

	/**
	 * @return PhoneNumber
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
	}

	/**
	 * @param PhoneNumber $PhoneNumber
	 * @return \DHLExpress\docTypeRef_ContactType1
	 */
	public function setPhoneNumber($PhoneNumber)
	{
		$this->PhoneNumber = $PhoneNumber;
		return $this;
	}

	/**
	 * @return EmailAddress
	 */
	public function getEmailAddress()
	{
		return $this->EmailAddress;
	}

	/**
	 * @param EmailAddress $EmailAddress
	 * @return \DHLExpress\docTypeRef_ContactType1
	 */
	public function setEmailAddress($EmailAddress)
	{
		$this->EmailAddress = $EmailAddress;
		return $this;
	}

	/**
	 * @return MobilePhoneNumber
	 */
	public function getMobilePhoneNumber()
	{
		return $this->MobilePhoneNumber;
	}

	/**
	 * @param MobilePhoneNumber $MobilePhoneNumber
	 * @return \DHLExpress\docTypeRef_ContactType1
	 */
	public function setMobilePhoneNumber($MobilePhoneNumber)
	{
		$this->MobilePhoneNumber = $MobilePhoneNumber;
		return $this;
	}

}
