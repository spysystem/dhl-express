<?php
namespace DHLExpress;


/**
 * Class docTypeRef_DeleteRequestType
 */
class docTypeRef_DeleteRequestType
{

	/**
	 * @var null|docTypeRef_ClientDetailType $ClientDetail
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
	 * @var string $DispatchConfirmationNumber
	 */
	protected $DispatchConfirmationNumber;

	/**
	 * @var string $RequestorName
	 */
	protected $RequestorName;

	/**
	 * @var null|string $Reason
	 */
	protected $Reason;

	/**
	 * @param string $PickupDate
	 * @param string $PickupCountry
	 * @param string $DispatchConfirmationNumber
	 * @param string $RequestorName
	 */
	public function __construct(string $PickupDate, string $PickupCountry, string $DispatchConfirmationNumber, string $RequestorName)
	{
		$this->PickupDate = $PickupDate;
		$this->PickupCountry = $PickupCountry;
		$this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
		$this->RequestorName = $RequestorName;
	}

	/**
	 * @return null|docTypeRef_ClientDetailType
	 */
	public function getClientDetail(): ?docTypeRef_ClientDetailType
	{
		return $this->ClientDetail;
	}

	/**
	 * @param null|docTypeRef_ClientDetailType $ClientDetail
	 * @return docTypeRef_DeleteRequestType
	 */
	public function setClientDetail(?docTypeRef_ClientDetailType $ClientDetail = null): docTypeRef_DeleteRequestType
	{
		$this->ClientDetail = $ClientDetail;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPickupDate(): ?string
	{
		return $this->PickupDate;
	}

	/**
	 * @param string $PickupDate
	 * @return docTypeRef_DeleteRequestType
	 */
	public function setPickupDate(string $PickupDate): docTypeRef_DeleteRequestType
	{
		$this->PickupDate = $PickupDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPickupCountry(): ?string
	{
		return $this->PickupCountry;
	}

	/**
	 * @param string $PickupCountry
	 * @return docTypeRef_DeleteRequestType
	 */
	public function setPickupCountry(string $PickupCountry): docTypeRef_DeleteRequestType
	{
		$this->PickupCountry = $PickupCountry;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDispatchConfirmationNumber(): ?string
	{
		return $this->DispatchConfirmationNumber;
	}

	/**
	 * @param string $DispatchConfirmationNumber
	 * @return docTypeRef_DeleteRequestType
	 */
	public function setDispatchConfirmationNumber(string $DispatchConfirmationNumber): docTypeRef_DeleteRequestType
	{
		$this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRequestorName(): ?string
	{
		return $this->RequestorName;
	}

	/**
	 * @param string $RequestorName
	 * @return docTypeRef_DeleteRequestType
	 */
	public function setRequestorName(string $RequestorName): docTypeRef_DeleteRequestType
	{
		$this->RequestorName = $RequestorName;
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getReason(): ?string
	{
		return $this->Reason;
	}

	/**
	 * @param null|string $Reason
	 * @return docTypeRef_DeleteRequestType
	 */
	public function setReason(?string $Reason = null): docTypeRef_DeleteRequestType
	{
		$this->Reason = $Reason;
		return $this;
	}

}
