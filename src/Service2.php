<?php
namespace DHLExpress;


/**
 * Class Service2
 */
class Service2
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
	 * @return Service2
	 */
	public function setServiceType(string $ServiceType): Service2
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
	 * @return Service2
	 */
	public function setServiceValue(?string $ServiceValue = null): Service2
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
	 * @return Service2
	 */
	public function setCurrencyCode(?string $CurrencyCode = null): Service2
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
	 * @return Service2
	 */
	public function setPaymentCode(?string $PaymentCode = null): Service2
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
	 * @return Service2
	 */
	public function setStartDate(?string $StartDate = null): Service2
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
	 * @return Service2
	 */
	public function setEndDate(?string $EndDate = null): Service2
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
	 * @return Service2
	 */
	public function setTextInstruction(?string $TextInstruction = null): Service2
	{
		$this->TextInstruction = $TextInstruction;
		return $this;
	}

}
