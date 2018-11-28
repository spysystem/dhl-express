<?php
namespace DHLExpress;


/**
 * Class Notification
 */
class Notification
{

	/**
	 * @var string $Message
	 */
	protected $Message;

	/**
	 * @var string $DetailedMessage
	 */
	protected $DetailedMessage;

	/**
	 * @var string $Code
	 */
	protected $Code;

	/**
	 * @param string $Message
	 * @param string $DetailedMessage
	 * @param string $Code
	 */
	public function __construct(string $Message, string $DetailedMessage, string $Code)
	{
		$this->Message = $Message;
		$this->DetailedMessage = $DetailedMessage;
		$this->Code = $Code;
	}

	/**
	 * @return string
	 */
	public function getMessage(): ?string
	{
		return $this->Message;
	}

	/**
	 * @param string $Message
	 * @return Notification
	 */
	public function setMessage(string $Message): Notification
	{
		$this->Message = $Message;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDetailedMessage(): ?string
	{
		return $this->DetailedMessage;
	}

	/**
	 * @param string $DetailedMessage
	 * @return Notification
	 */
	public function setDetailedMessage(string $DetailedMessage): Notification
	{
		$this->DetailedMessage = $DetailedMessage;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCode(): ?string
	{
		return $this->Code;
	}

	/**
	 * @param string $Code
	 * @return Notification
	 */
	public function setCode(string $Code): Notification
	{
		$this->Code = $Code;
		return $this;
	}

}
