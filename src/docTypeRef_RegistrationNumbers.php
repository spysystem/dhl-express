<?php

namespace DHLExpress;

/**
 * Class docTypeRef_RegistrationNumbers
 *
 * @package DHLExpress
 */
class docTypeRef_RegistrationNumbers
{

	/**
	 * @var docTypeRef_RegistrationNumber[] $RegistrationNumber
	 */
	protected $RegistrationNumber;

	/**
	 * @param docTypeRef_RegistrationNumber[] $RegistrationNumber
	 */
	public function __construct(array $RegistrationNumber)
	{
		$this->RegistrationNumber = $RegistrationNumber;
	}

	/**
	 * @return docTypeRef_RegistrationNumber[]
	 */
	public function getRegistrationNumber()
	{
		return $this->RegistrationNumber;
	}

	/**
	 * @param docTypeRef_RegistrationNumber[] $RegistrationNumber
	 * @return \DHLExpress\docTypeRef_RegistrationNumbers
	 */
	public function setRegistrationNumber(array $RegistrationNumber)
	{
		$this->RegistrationNumber = $RegistrationNumber;
		return $this;
	}

}
