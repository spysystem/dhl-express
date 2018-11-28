<?php
namespace DHLExpress;

use DateTime;
use Exception;

/**
 * Class docTypeRef_ServiceType
 */
class docTypeRef_ServiceType
{

	/**
	 * @var docTypeRef_TotalNetType $TotalNet
	 */
	protected $TotalNet;

	/**
	 * @var null|docTypeRef_ChargesType $Charges
	 */
	protected $Charges;

	/**
	 * @var null|docTypeRef_ItemsType $Items
	 */
	protected $Items;

	/**
	 * @var null|DateTime $DeliveryTime
	 */
	protected $DeliveryTime;

	/**
	 * @var null|DateTime $CutoffTime
	 */
	protected $CutoffTime;

	/**
	 * @var null|string|NextBusinessDayInd2 $NextBusinessDayInd
	 */
	protected $NextBusinessDayInd;

	/**
	 * @var string $type
	 */
	protected $type;

	/**
	 * @var string|RateType $account
	 */
	protected $account;

	/**
	 * @param docTypeRef_TotalNetType $TotalNet
	 * @param string                  $type
	 * @param string|RateType         $account
	 */
	public function __construct(docTypeRef_TotalNetType $TotalNet, string $type, $account)
	{
		$this->TotalNet = $TotalNet;
		$this->type = $type;
		$this->account = $account;
	}

	/**
	 * @return docTypeRef_TotalNetType
	 */
	public function getTotalNet(): ?docTypeRef_TotalNetType
	{
		return $this->TotalNet;
	}

	/**
	 * @param docTypeRef_TotalNetType $TotalNet
	 * @return docTypeRef_ServiceType
	 */
	public function setTotalNet(docTypeRef_TotalNetType $TotalNet): docTypeRef_ServiceType
	{
		$this->TotalNet = $TotalNet;
		return $this;
	}

	/**
	 * @return null|docTypeRef_ChargesType
	 */
	public function getCharges(): ?docTypeRef_ChargesType
	{
		return $this->Charges;
	}

	/**
	 * @param null|docTypeRef_ChargesType $Charges
	 * @return docTypeRef_ServiceType
	 */
	public function setCharges(?docTypeRef_ChargesType $Charges = null): docTypeRef_ServiceType
	{
		$this->Charges = $Charges;
		return $this;
	}

	/**
	 * @return null|docTypeRef_ItemsType
	 */
	public function getItems(): ?docTypeRef_ItemsType
	{
		return $this->Items;
	}

	/**
	 * @param null|docTypeRef_ItemsType $Items
	 * @return docTypeRef_ServiceType
	 */
	public function setItems(?docTypeRef_ItemsType $Items = null): docTypeRef_ServiceType
	{
		$this->Items = $Items;
		return $this;
	}

	/**
	 * @return null|DateTime
	 */
	public function getDeliveryTime(): ?DateTime
	{
		if ($this->DeliveryTime === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->DeliveryTime);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param null|DateTime $DeliveryTime
	 * @return docTypeRef_ServiceType
	 */
	public function setDeliveryTime(?DateTime $DeliveryTime = null): docTypeRef_ServiceType
	{
		if ($DeliveryTime === null)
		{
			$this->DeliveryTime = null;
		}
		else
		{
			$this->DeliveryTime = $DeliveryTime->format(DateTime::ATOM);
		}
		return $this;
	}

	/**
	 * @return null|DateTime
	 */
	public function getCutoffTime(): ?DateTime
	{
		if ($this->CutoffTime === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->CutoffTime);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param null|DateTime $CutoffTime
	 * @return docTypeRef_ServiceType
	 */
	public function setCutoffTime(?DateTime $CutoffTime = null): docTypeRef_ServiceType
	{
		if ($CutoffTime === null)
		{
			$this->CutoffTime = null;
		}
		else
		{
			$this->CutoffTime = $CutoffTime->format(DateTime::ATOM);
		}
		return $this;
	}

	/**
	 * @return null|string|NextBusinessDayInd2
	 */
	public function getNextBusinessDayInd()
	{
		return $this->NextBusinessDayInd;
	}

	/**
	 * @param null|string|NextBusinessDayInd2 $NextBusinessDayInd
	 * @return docTypeRef_ServiceType
	 */
	public function setNextBusinessDayInd($NextBusinessDayInd): docTypeRef_ServiceType
	{
		$this->NextBusinessDayInd = $NextBusinessDayInd;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getType(): ?string
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 * @return docTypeRef_ServiceType
	 */
	public function setType(string $type): docTypeRef_ServiceType
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @return string|RateType
	 */
	public function getAccount()
	{
		return $this->account;
	}

	/**
	 * @param string|RateType $account
	 *
	 * @return docTypeRef_ServiceType
	 */
	public function setAccount($account): docTypeRef_ServiceType
	{
		$this->account = $account;
		return $this;
	}

}
