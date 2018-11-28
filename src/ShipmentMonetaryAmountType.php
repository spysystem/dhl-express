<?php
namespace DHLExpress;


/**
 * Class ShipmentMonetaryAmountType
 */
class ShipmentMonetaryAmountType
{

	/**
	 * @var ChargesType[] $Charges
	 */
	protected $Charges;

	/**
	 * @param ChargesType[] $Charges
	 */
	public function __construct(array $Charges)
	{
		$this->Charges = $Charges;
	}

	/**
	 * @return ChargesType[]
	 */
	public function getCharges(): ?array
	{
		return $this->Charges;
	}

	/**
	 * @param ChargesType[] $Charges
	 * @return ShipmentMonetaryAmountType
	 */
	public function setCharges(array $Charges): ShipmentMonetaryAmountType
	{
		$this->Charges = $Charges;
		return $this;
	}

}
