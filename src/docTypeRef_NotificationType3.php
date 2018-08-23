<?php

namespace DHLExpress;

/**
 * Class docTypeRef_NotificationType3
 *
 * @package DHLExpress
 */
class docTypeRef_NotificationType3
{

	/**
	 * @var Message2 $Message
	 */
	protected $Message;

	/**
	 * @var int $code
	 */
	protected $code;

	/**
	 * @param Message2 $Message
	 * @param int $code
	 */
	public function __construct($Message, $code)
	{
		$this->Message = $Message;
		$this->code = $code;
	}

	/**
	 * @return Message2
	 */
	public function getMessage()
	{
		return $this->Message;
	}

	/**
	 * @param Message2 $Message
	 * @return \DHLExpress\docTypeRef_NotificationType3
	 */
	public function setMessage($Message)
	{
		$this->Message = $Message;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * @param int $code
	 * @return \DHLExpress\docTypeRef_NotificationType3
	 */
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}

}
