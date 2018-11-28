<?php
namespace DHLExpress;


/**
 * Class docTypeRef_NotificationType3
 */
class docTypeRef_NotificationType3
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
	 * @var string $src
	 */
	protected $src;

	/**
	 * @param string $Message
	 * @param string $code
	 * @param string $src
	 */
	public function __construct(string $Message, string $code, string $src)
	{
		$this->Message = $Message;
		$this->code = $code;
		$this->src = $src;
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
	 * @return docTypeRef_NotificationType3
	 */
	public function setMessage(string $Message): docTypeRef_NotificationType3
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
	 * @return docTypeRef_NotificationType3
	 */
	public function setCode(string $code): docTypeRef_NotificationType3
	{
		$this->code = $code;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSrc(): ?string
	{
		return $this->src;
	}

	/**
	 * @param string $src
	 * @return docTypeRef_NotificationType3
	 */
	public function setSrc(string $src): docTypeRef_NotificationType3
	{
		$this->src = $src;
		return $this;
	}

}
