<?php
namespace DHLExpress;


/**
 * Class docTypeRef_NotificationType
 */
class docTypeRef_NotificationType
{

	/**
	 * @var string $Message
	 */
	protected $Message;

	/**
	 * @var string $code
	 */
	protected $code;

	/**
	 * @param string $Message
	 * @param string $code
	 */
	public function __construct(string $Message, string $code)
	{
		$this->Message = $Message;
		$this->code = $code;
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
	 * @return docTypeRef_NotificationType
	 */
	public function setMessage(string $Message): docTypeRef_NotificationType
	{
		$this->Message = $Message;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCode(): ?string
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 * @return docTypeRef_NotificationType
	 */
	public function setCode(string $code): docTypeRef_NotificationType
	{
		$this->code = $code;
		return $this;
	}

}
