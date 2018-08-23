<?php

namespace DHLExpress;

/**
 * Class docTypeRef_PackageResultType
 *
 * @package DHLExpress
 */
class docTypeRef_PackageResultType
{

	/**
	 * @var TrackingNumber $TrackingNumber
	 */
	protected $TrackingNumber;

	/**
	 * @var int $number
	 */
	protected $number;

	/**
	 * @param TrackingNumber $TrackingNumber
	 * @param int $number
	 */
	public function __construct($TrackingNumber, $number)
	{
		$this->TrackingNumber = $TrackingNumber;
		$this->number = $number;
	}

	/**
	 * @return TrackingNumber
	 */
	public function getTrackingNumber()
	{
		return $this->TrackingNumber;
	}

	/**
	 * @param TrackingNumber $TrackingNumber
	 * @return \DHLExpress\docTypeRef_PackageResultType
	 */
	public function setTrackingNumber($TrackingNumber)
	{
		$this->TrackingNumber = $TrackingNumber;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNumber()
	{
		return $this->number;
	}

	/**
	 * @param int $number
	 * @return \DHLExpress\docTypeRef_PackageResultType
	 */
	public function setNumber($number)
	{
		$this->number = $number;
		return $this;
	}

}
