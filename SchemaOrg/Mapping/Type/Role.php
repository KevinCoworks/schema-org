<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Role.
 */
class Role extends Intangible {

	/**
	 * @var Property\EndDate
	 */
	private $endDate;

	/**
	 * @var Property\RoleName
	 */
	private $roleName;

	/**
	 * @var Property\StartDate
	 */
	private $startDate;

	/**
	 * Get end date.
	 * 
	 * @return Property\EndDate
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Get role name.
	 * 
	 * @return Property\RoleName
	 */
	public function getRoleName() {
		return $this->roleName;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Role';
	}

	/**
	 * Get start date.
	 * 
	 * @return Property\StartDate
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Set end date.
	 * 
	 * @param Property\EndDate $endDate
	 * @return Role
	 */
	public function setEndDate(Property\EndDate $endDate) {
		$this->endDate = $endDate;

		return $this;
	}

	/**
	 * Set role name.
	 * 
	 * @param Property\RoleName $roleName
	 * @return Role
	 */
	public function setRoleName(Property\RoleName $roleName) {
		$this->roleName = $roleName;

		return $this;
	}

	/**
	 * Set start date.
	 * 
	 * @param Property\StartDate $startDate
	 * @return Role
	 */
	public function setStartDate(Property\StartDate $startDate) {
		$this->startDate = $startDate;

		return $this;
	}
}