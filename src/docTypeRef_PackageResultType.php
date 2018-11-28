<?php
namespace DHLExpress;

/**
 * Class docTypeRef_PackageResultType
 */
class docTypeRef_PackageResultType
{

	/**
	 * @var string $TrackingNumber
	 */
	protected $TrackingNumber;

	/**
	 * @var int $number
	 */
	protected $number;

	/**
	 * @param string $TrackingNumber
	 * @param int $number
	 */
	public function __construct(string $TrackingNumber, int $number)
	{
		$this->TrackingNumber = $TrackingNumber;
		$this->number = $number;
	}

	/**
	 * @return string
	 */
	public function getTrackingNumber(): ?string
	{
		return $this->TrackingNumber;
	}

	/**
	 * @param string $TrackingNumber
	 * @return docTypeRef_PackageResultType
	 */
	public function setTrackingNumber(string $TrackingNumber): docTypeRef_PackageResultType
	{
		$this->TrackingNumber = $TrackingNumber;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNumber(): ?int
	{
		return $this->number;
	}

	/**
	 * @param int $number
	 * @return docTypeRef_PackageResultType
	 */
	public function setNumber(int $number): docTypeRef_PackageResultType
	{
		$this->number = $number;
		return $this;
	}

}
