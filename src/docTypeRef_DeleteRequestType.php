<?php

namespace DHLExpress;

/**
 * Class docTypeRef_DeleteRequestType
 *
 * @package DHLExpress
 */
class docTypeRef_DeleteRequestType
{

	/**
	 * @var docTypeRef_ClientDetailType $ClientDetail
	 */
	protected $ClientDetail;

	/**
	 * @var string $PickupDate
	 */
	protected $PickupDate;

	/**
	 * @var string $PickupCountry
	 */
	protected $PickupCountry;

	/**
	 * @var ConfirmationNumberType $DispatchConfirmationNumber
	 */
	protected $DispatchConfirmationNumber;

	/**
	 * @var PersonName3 $RequestorName
	 */
	protected $RequestorName;

	/**
	 * @var CustomerReferences $Reason
	 */
	protected $Reason;

	/**
	 * @param string $PickupDate
	 * @param string $PickupCountry
	 * @param ConfirmationNumberType $DispatchConfirmationNumber
	 * @param PersonName3 $RequestorName
	 */
	public function __construct($PickupDate, $PickupCountry, $DispatchConfirmationNumber, $RequestorName)
	{
		$this->PickupDate = $PickupDate;
		$this->PickupCountry = $PickupCountry;
		$this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
		$this->RequestorName = $RequestorName;
	}

	/**
	 * @return docTypeRef_ClientDetailType
	 */
	public function getClientDetail()
	{
		return $this->ClientDetail;
	}

	/**
	 * @param docTypeRef_ClientDetailType $ClientDetail
	 * @return \DHLExpress\docTypeRef_DeleteRequestType
	 */
	public function setClientDetail($ClientDetail)
	{
		$this->ClientDetail = $ClientDetail;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPickupDate()
	{
		return $this->PickupDate;
	}

	/**
	 * @param string $PickupDate
	 * @return \DHLExpress\docTypeRef_DeleteRequestType
	 */
	public function setPickupDate($PickupDate)
	{
		$this->PickupDate = $PickupDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPickupCountry()
	{
		return $this->PickupCountry;
	}

	/**
	 * @param string $PickupCountry
	 * @return \DHLExpress\docTypeRef_DeleteRequestType
	 */
	public function setPickupCountry($PickupCountry)
	{
		$this->PickupCountry = $PickupCountry;
		return $this;
	}

	/**
	 * @return ConfirmationNumberType
	 */
	public function getDispatchConfirmationNumber()
	{
		return $this->DispatchConfirmationNumber;
	}

	/**
	 * @param ConfirmationNumberType $DispatchConfirmationNumber
	 * @return \DHLExpress\docTypeRef_DeleteRequestType
	 */
	public function setDispatchConfirmationNumber($DispatchConfirmationNumber)
	{
		$this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
		return $this;
	}

	/**
	 * @return PersonName3
	 */
	public function getRequestorName()
	{
		return $this->RequestorName;
	}

	/**
	 * @param PersonName3 $RequestorName
	 * @return \DHLExpress\docTypeRef_DeleteRequestType
	 */
	public function setRequestorName($RequestorName)
	{
		$this->RequestorName = $RequestorName;
		return $this;
	}

	/**
	 * @return CustomerReferences
	 */
	public function getReason()
	{
		return $this->Reason;
	}

	/**
	 * @param CustomerReferences $Reason
	 * @return \DHLExpress\docTypeRef_DeleteRequestType
	 */
	public function setReason($Reason)
	{
		$this->Reason = $Reason;
		return $this;
	}

}
