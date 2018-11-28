<?php
namespace DHLExpress;


/**
 * Class Service
 */
class Service
{

	/**
	 * @var string $ServiceType
	 */
	protected $ServiceType;

	/**
	 * @var null|string $ServiceValue
	 */
	protected $ServiceValue;

	/**
	 * @var null|string $CurrencyCode
	 */
	protected $CurrencyCode;

	/**
	 * @var null|string $PaymentCode
	 */
	protected $PaymentCode;

	/**
	 * @var null|string $StartDate
	 */
	protected $StartDate;

	/**
	 * @var null|string $EndDate
	 */
	protected $EndDate;

	/**
	 * @var null|string $TextInstruction
	 */
	protected $TextInstruction;

	/**
	 * @param string $ServiceType
	 */
	public function __construct(string $ServiceType)
	{
		$this->ServiceType = $ServiceType;
	}

	/**
	 * @return string
	 */
	public function getServiceType(): ?string
	{
		return $this->ServiceType;
	}

	/**
	 * @param string $ServiceType
	 * @return Service
	 */
	public function setServiceType(string $ServiceType): Service
	{
		$this->ServiceType = $ServiceType;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getServiceValue(): ?string
	{
		return $this->ServiceValue;
	}

	/**
	 * @param null|string $ServiceValue
	 * @return Service
	 */
	public function setServiceValue(?string $ServiceValue = null): Service
	{
		$this->ServiceValue = $ServiceValue;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getCurrencyCode(): ?string
	{
		return $this->CurrencyCode;
	}

	/**
	 * @param null|string $CurrencyCode
	 * @return Service
	 */
	public function setCurrencyCode(?string $CurrencyCode = null): Service
	{
		$this->CurrencyCode = $CurrencyCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getPaymentCode(): ?string
	{
		return $this->PaymentCode;
	}

	/**
	 * @param null|string $PaymentCode
	 * @return Service
	 */
	public function setPaymentCode(?string $PaymentCode = null): Service
	{
		$this->PaymentCode = $PaymentCode;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getStartDate(): ?string
	{
		return $this->StartDate;
	}

	/**
	 * @param null|string $StartDate
	 * @return Service
	 */
	public function setStartDate(?string $StartDate = null): Service
	{
		$this->StartDate = $StartDate;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getEndDate(): ?string
	{
		return $this->EndDate;
	}

	/**
	 * @param null|string $EndDate
	 * @return Service
	 */
	public function setEndDate(?string $EndDate = null): Service
	{
		$this->EndDate = $EndDate;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getTextInstruction(): ?string
	{
		return $this->TextInstruction;
	}

	/**
	 * @param null|string $TextInstruction
	 * @return Service
	 */
	public function setTextInstruction(?string $TextInstruction = null): Service
	{
		$this->TextInstruction = $TextInstruction;
		return $this;
	}

}
