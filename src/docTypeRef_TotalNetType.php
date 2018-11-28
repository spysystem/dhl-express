<?php
namespace DHLExpress;


/**
 * Class docTypeRef_TotalNetType
 */
class docTypeRef_TotalNetType
{

	/**
	 * @var string $Currency
	 */
	protected $Currency;

	/**
	 * @var string $Amount
	 */
	protected $Amount;

	/**
	 * @param string $Currency
	 * @param string $Amount
	 */
	public function __construct(string $Currency, string $Amount)
	{
		$this->Currency = $Currency;
		$this->Amount = $Amount;
	}

	/**
	 * @return string
	 */
	public function getCurrency(): ?string
	{
		return $this->Currency;
	}

	/**
	 * @param string $Currency
	 * @return docTypeRef_TotalNetType
	 */
	public function setCurrency(string $Currency): docTypeRef_TotalNetType
	{
		$this->Currency = $Currency;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAmount(): ?string
	{
		return $this->Amount;
	}

	/**
	 * @param string $Amount
	 * @return docTypeRef_TotalNetType
	 */
	public function setAmount(string $Amount): docTypeRef_TotalNetType
	{
		$this->Amount = $Amount;
		return $this;
	}

}
