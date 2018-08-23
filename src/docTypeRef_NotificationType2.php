<?php

namespace DHLExpress;

/**
 * Class docTypeRef_NotificationType2
 *
 * @package DHLExpress
 */
class docTypeRef_NotificationType2
{

	/**
	 * @var Message $Message
	 */
	protected $Message;

	/**
	 * @var int $code
	 */
	protected $code;

	/**
	 * @param Message $Message
	 * @param int $code
	 */
	public function __construct($Message, $code)
	{
		$this->Message = $Message;
		$this->code = $code;
	}

	/**
	 * @return Message
	 */
	public function getMessage()
	{
		return $this->Message;
	}

	/**
	 * @param Message $Message
	 * @return \DHLExpress\docTypeRef_NotificationType2
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
	 * @return \DHLExpress\docTypeRef_NotificationType2
	 */
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}

}
