<?php
class News {
	private $id;

	/**
	* @access public
	* @param int
	* @return self
	*/
	public function setId($id) {
		$this->id = intval($id);

		return $this;
	}
}
