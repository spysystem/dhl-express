<?php

namespace DHLExpress;

/**
 * Class Service2
 *
 * @package DHLExpress
 */
class Service2
{

	/**
	 * @var string $ServiceType
	 */
	protected $ServiceType;

	/**
	 * @var string $ServiceValue
	 */
	protected $ServiceValue;

	/**
	 * @var string $CurrencyCode
	 */
	protected $CurrencyCode;

	/**
	 * @var string $PaymentCode
	 */
	protected $PaymentCode;

	/**
	 * @var string $StartDate
	 */
	protected $StartDate;

	/**
	 * @var string $EndDate
	 */
	protected $EndDate;

	/**
	 * @var string  $TextInstruction
	 */
	protected $TextInstruction;

	/**
	 * @param string $ServiceType
	 */
	public function __construct($ServiceType)
	{
		$this->ServiceType = $ServiceType;
	}

	/**
	 * @return string
	 */
	public function getServiceType()
	{
		return $this->ServiceType;
	}

	/**
	 * @param string $ServiceType
	 * @return \DHLExpress\Service2
	 */
	public function setServiceType($ServiceType)
	{
		$this->ServiceType = $ServiceType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getServiceValue()
	{
		return $this->ServiceValue;
	}

	/**
	 * @param string $ServiceValue
	 * @return \DHLExpress\Service2
	 */
	public function setServiceValue($ServiceValue)
	{
		$this->ServiceValue = $ServiceValue;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCurrencyCode()
	{
		return $this->CurrencyCode;
	}

	/**
	 * @param string $CurrencyCode
	 * @return \DHLExpress\Service2
	 */
	public function setCurrencyCode($CurrencyCode)
	{
		$this->CurrencyCode = $CurrencyCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPaymentCode()
	{
		return $this->PaymentCode;
	}

	/**
	 * @param string $PaymentCode
	 * @return \DHLExpress\Service2
	 */
	public function setPaymentCode($PaymentCode)
	{
		$this->PaymentCode = $PaymentCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}

	/**
	 * @param string $StartDate
	 * @return \DHLExpress\Service2
	 */
	public function setStartDate($StartDate)
	{
		$this->StartDate = $StartDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}

	/**
	 * @param string $EndDate
	 * @return \DHLExpress\Service2
	 */
	public function setEndDate($EndDate)
	{
		$this->EndDate = $EndDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTextInstruction()
	{
		return $this->TextInstruction;
	}

	/**
	 * @param string  $TextInstruction
	 * @return \DHLExpress\Service2
	 */
	public function setTextInstruction($TextInstruction)
	{
		$this->TextInstruction = $TextInstruction;
		return $this;
	}

}
