<?php
namespace DHLExpress;


/**
 * Class docTypeRef_ItemType
 */
class docTypeRef_ItemType
{

	/**
	 * @var int $ItemNumber
	 */
	protected $ItemNumber;

	/**
	 * @var docTypeRef_ChargeType[] $Charge
	 */
	protected $Charge;

	/**
	 * @var null|Notification $Notification
	 */
	protected $Notification;

	/**
	 * @param int $ItemNumber
	 * @param docTypeRef_ChargeType[] $Charge
	 */
	public function __construct(int $ItemNumber, array $Charge)
	{
		$this->ItemNumber = $ItemNumber;
		$this->Charge = $Charge;
	}

	/**
	 * @return int
	 */
	public function getItemNumber(): ?int
	{
		return $this->ItemNumber;
	}

	/**
	 * @param int $ItemNumber
	 * @return docTypeRef_ItemType
	 */
	public function setItemNumber(int $ItemNumber): docTypeRef_ItemType
	{
		$this->ItemNumber = $ItemNumber;
		return $this;
	}

	/**
	 * @return docTypeRef_ChargeType[]
	 */
	public function getCharge(): ?array
	{
		return $this->Charge;
	}

	/**
	 * @param docTypeRef_ChargeType[] $Charge
	 * @return docTypeRef_ItemType
	 */
	public function setCharge(array $Charge): docTypeRef_ItemType
	{
		$this->Charge = $Charge;
		return $this;
	}

	/**
	 * @return null|Notification
	 */
	public function getNotification(): ?Notification
	{
		return $this->Notification;
	}

	/**
	 * @param null|Notification $Notification
	 * @return docTypeRef_ItemType
	 */
	public function setNotification(?Notification $Notification = null): docTypeRef_ItemType
	{
		$this->Notification = $Notification;
		return $this;
	}

}
