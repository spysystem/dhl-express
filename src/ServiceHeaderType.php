<?php
namespace DHLExpress;

use DateTime;
use Exception;

/**
 * Class ServiceHeaderType
 */
class ServiceHeaderType
{
	/**
	 * @var null|DateTime $MessageTime
	 */
	protected $MessageTime;

	/**
	 * @var null|string $MessageReference
	 */
	protected $MessageReference;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|DateTime
	 */
	public function getMessageTime(): ?DateTime
	{
		if ($this->MessageTime === null)
		{
			return null;
		}
		try
		{
			return new DateTime($this->MessageTime);
		}
		catch (Exception $oException)
		{
			return null;
		}
	}

	/**
	 * @param null|DateTime $MessageTime
	 * @return ServiceHeaderType
	 */
	public function setMessageTime(?DateTime $MessageTime = null): ServiceHeaderType
	{
		if ($MessageTime === null)
		{
			$this->MessageTime = null;
		}
		else
		{
			$this->MessageTime = $MessageTime->format(DateTime::ATOM);
		}
		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getMessageReference(): ?string
	{
		return $this->MessageReference;
	}

	/**
	 * @param null|string $MessageReference
	 * @return ServiceHeaderType
	 */
	public function setMessageReference(?string $MessageReference = null): ServiceHeaderType
	{
		$this->MessageReference = $MessageReference;
		return $this;
	}

}
