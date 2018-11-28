<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ChargeType
 */
class docTypeRef_ChargeType
{

	/**
	 * @var null|string $ChargeCode
	 */
	protected $ChargeCode;

	/**
	 * @var string $ChargeType
	 */
	protected $ChargeType;

	/**
	 * @var string $ChargeAmount
	 */
	protected $ChargeAmount;

	/**
	 * @var null|string $ChargeName
	 */
	protected $ChargeName;

	/**
	 * @var null|string $ChargeCurrencyCode
	 */
	protected $ChargeCurrencyCode;

	/**
	 * @param string $ChargeType
	 * @param string $ChargeAmount
	 */
	public function __construct(string $ChargeType, string $ChargeAmount)
	{
		$this->ChargeType = $ChargeType;
		$this->ChargeAmount = $ChargeAmount;
	}

	/**
	 * @return null|string
	 */
	public function getChargeCode(): ?string
	{
		return $this->ChargeCode;
	}

	/**
	 * @param null|string $ChargeCode
	 * @return docTypeRef_ChargeType
	 */
	public function setChargeCode(?string $ChargeCode = null): docTypeRef_ChargeType
	{
		$this->ChargeCode = $ChargeCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getChargeType(): ?string
	{
		return $this->ChargeType;
	}

	/**
	 * @param string $ChargeType
	 * @return docTypeRef_ChargeType
	 */
	public function setChargeType(string $ChargeType): docTypeRef_ChargeType
	{
		$this->ChargeType = $ChargeType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getChargeAmount(): ?string
	{
		return $this->ChargeAmount;
	}

	/**
	 * @param string $ChargeAmount
	 * @return docTypeRef_ChargeType
	 */
	public function setChargeAmount(string $ChargeAmount): docTypeRef_ChargeType
	{
		$this->ChargeAmount = $ChargeAmount;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getChargeName(): ?string
	{
		return $this->ChargeName;
	}

	/**
	 * @param null|string $ChargeName
	 * @return docTypeRef_ChargeType
	 */
	public function setChargeName(?string $ChargeName = null): docTypeRef_ChargeType
	{
		$this->ChargeName = $ChargeName;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getChargeCurrencyCode(): ?string
	{
		return $this->ChargeCurrencyCode;
	}

	/**
	 * @param null|string $ChargeCurrencyCode
	 * @return docTypeRef_ChargeType
	 */
	public function setChargeCurrencyCode(?string $ChargeCurrencyCode = null): docTypeRef_ChargeType
	{
		$this->ChargeCurrencyCode = $ChargeCurrencyCode;
		return $this;
	}

}
