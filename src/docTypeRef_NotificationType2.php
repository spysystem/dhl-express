<?php
namespace DHLExpress;


/**
 * Class docTypeRef_NotificationType2
 */
class docTypeRef_NotificationType2
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
	 * @return docTypeRef_NotificationType2
	 */
	public function setMessage(string $Message): docTypeRef_NotificationType2
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
	 * @return docTypeRef_NotificationType2
	 */
	public function setCode(string $code): docTypeRef_NotificationType2
	{
		$this->code = $code;
		return $this;
	}

}
