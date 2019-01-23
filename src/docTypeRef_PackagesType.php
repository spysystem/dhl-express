<?php
namespace DHLExpress;


/**
 * Class docTypeRef_PackagesType
 */
class docTypeRef_PackagesType implements \ArrayAccess, \Iterator, \Countable
{

	/**
	 * @var docTypeRef_RequestedPackagesType[] $RequestedPackages
	 */
	protected $RequestedPackages;

	/**
	 * @param docTypeRef_RequestedPackagesType[]|null $RequestedPackages
	 */
	public function __construct($RequestedPackages)
	{
		$this->RequestedPackages = $RequestedPackages;
	}

	/**
	 * @return null|docTypeRef_RequestedPackagesType[]
	 */
	public function getRequestedPackages(): ?array
	{
		return $this->RequestedPackages;
	}

	/**
	 * @param null|docTypeRef_RequestedPackagesType[] $RequestedPackages
	 * @return docTypeRef_PackagesType
	 */
	public function setRequestedPackages(?array $RequestedPackages): docTypeRef_PackagesType
	{
		$this->RequestedPackages = $RequestedPackages;
		return $this;
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset An offset to check for
	 * @return boolean true on success or false on failure
	 */
	public function offsetExists($offset)
	{
		return isset($this->RequestedPackages[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 *
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function offsetGet($offset)
	{
		return $this->RequestedPackages[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed                            $offset The offset to assign the value to
	 * @param docTypeRef_RequestedPackagesType $value  The value to set
	 *
	 * @return void
	 */
	public function offsetSet($offset, $value)
	{
		$this->RequestedPackages[$offset] = $value;
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to unset
	 *
	 * @return void
	 */
	public function offsetUnset($offset)
	{
		unset($this->RequestedPackages[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return docTypeRef_RequestedPackagesType Return the current element
	 */
	public function current()
	{
		return current($this->RequestedPackages);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next()
	{
		next($this->RequestedPackages);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->RequestedPackages);
	}

	/**
	 * Iterator implementation
	 *
	 * @return boolean Return the validity of the current position
	 */
	public function valid()
	{
		return $this->key() !== null;
	}

	/**
	 * Iterator implementation
	 * Rewind the Iterator to the first element
	 *
	 * @return void
	 */
	public function rewind()
	{
		reset($this->RequestedPackages);
	}

	/**
	 * Countable implementation
	 *
	 * @return int Return count of elements
	 */
	public function count()
	{
		return count($this->RequestedPackages);
	}

}
