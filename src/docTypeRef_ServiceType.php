<?php

namespace DHLExpress;

use DateTime;

/**
 * Class docTypeRef_ServiceType
 *
 * @package DHLExpress
 */
class docTypeRef_ServiceType
{

	/**
	 * @var docTypeRef_TotalNetType $TotalNet
	 */
	protected $TotalNet;

	/**
	 * @var docTypeRef_ChargesType $Charges
	 */
	protected $Charges;

	/**
	 * @var DateTime $DeliveryTime
	 */
	protected $DeliveryTime;

	/**
	 * @var DateTime $CutoffTime
	 */
	protected $CutoffTime;

	/**
	 * @var NextBusinessDayInd2 $NextBusinessDayInd
	 */
	protected $NextBusinessDayInd;

	/**
	 * @var string $type
	 */
	protected $type;

	/**
	 * @var string $account enum:RateType
	 */
	protected $account;

	/**
	 * @param docTypeRef_TotalNetType $TotalNet
	 * @param string                  $type
	 * @param string                  $account enum:RateType
	 */
	public function __construct($TotalNet, $type, $account)
	{
		$this->TotalNet = $TotalNet;
		$this->type = $type;
		$this->account = $account;
	}

	/**
	 * @return docTypeRef_TotalNetType
	 */
	public function getTotalNet()
	{
		return $this->TotalNet;
	}

	/**
	 * @param docTypeRef_TotalNetType $TotalNet
	 * @return \DHLExpress\docTypeRef_ServiceType
	 */
	public function setTotalNet($TotalNet)
	{
		$this->TotalNet = $TotalNet;
		return $this;
	}

	/**
	 * @return docTypeRef_ChargesType
	 */
	public function getCharges()
	{
		return $this->Charges;
	}

	/**
	 * @param docTypeRef_ChargesType $Charges
	 * @return \DHLExpress\docTypeRef_ServiceType
	 */
	public function setCharges($Charges)
	{
		$this->Charges = $Charges;
		return $this;
	}

	/**
	 * @return DateTime|null|false
	 */
	public function getDeliveryTime()
	{
		if ($this->DeliveryTime === null)
		{
			return null;
		}

		try
		{
			return new DateTime($this->DeliveryTime);
		}
		catch (\Exception $oException)
		{
			return false;
		}
	}

	/**
	 * @param DateTime $DeliveryTime
	 * @return \DHLExpress\docTypeRef_ServiceType
	 */
	public function setDeliveryTime(DateTime $DeliveryTime = null)
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
	 * @return DateTime|null|false
	 */
	public function getCutoffTime()
	{
		if ($this->CutoffTime === null)
		{
			return null;
		}

		try
		{
			return new DateTime($this->CutoffTime);
		}
		catch (\Exception $oException)
		{
			return false;
		}
	}

	/**
	 * @param DateTime $CutoffTime
	 * @return \DHLExpress\docTypeRef_ServiceType
	 */
	public function setCutoffTime(DateTime $CutoffTime = null)
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
	 * @return NextBusinessDayInd2
	 */
	public function getNextBusinessDayInd()
	{
		return $this->NextBusinessDayInd;
	}

	/**
	 * @param NextBusinessDayInd2 $NextBusinessDayInd
	 * @return \DHLExpress\docTypeRef_ServiceType
	 */
	public function setNextBusinessDayInd($NextBusinessDayInd)
	{
		$this->NextBusinessDayInd = $NextBusinessDayInd;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 * @return \DHLExpress\docTypeRef_ServiceType
	 */
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @return string enum:RateType
	 */
	public function getAccount()
	{
		return $this->account;
	}

	/**
	 * @param string $account enum:RateType
	 *
	 * @return \DHLExpress\docTypeRef_ServiceType
	 */
	public function setAccount($account)
	{
		$this->account = $account;
		return $this;
	}

}
