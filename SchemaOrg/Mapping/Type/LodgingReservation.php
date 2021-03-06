<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LodgingReservation.
 */
class LodgingReservation {

	/**
	 * @var Property\CheckinTime
	 */
	private $checkinTime;

	/**
	 * @var Property\CheckoutTime
	 */
	private $checkoutTime;

	/**
	 */
	private $id;

	/**
	 * @var Property\LodgingUnitDescription
	 */
	private $lodgingUnitDescription;

	/**
	 * @var Property\LodgingUnitType
	 */
	private $lodgingUnitType;

	/**
	 * @var Property\NumAdults
	 */
	private $numAdults;

	/**
	 * @var Property\NumChildren
	 */
	private $numChildren;

	/**
	 * LodgingReservation constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get checkin time.
	 * 
	 * @return Property\CheckinTime
	 */
	public function getCheckinTime() {
		return $this->checkinTime;
	}

	/**
	 * Get checkout time.
	 * 
	 * @return Property\CheckoutTime
	 */
	public function getCheckoutTime() {
		return $this->checkoutTime;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get lodging unit description.
	 * 
	 * @return Property\LodgingUnitDescription
	 */
	public function getLodgingUnitDescription() {
		return $this->lodgingUnitDescription;
	}

	/**
	 * Get lodging unit type.
	 * 
	 * @return Property\LodgingUnitType
	 */
	public function getLodgingUnitType() {
		return $this->lodgingUnitType;
	}

	/**
	 * Get num adults.
	 * 
	 * @return Property\NumAdults
	 */
	public function getNumAdults() {
		return $this->numAdults;
	}

	/**
	 * Get num children.
	 * 
	 * @return Property\NumChildren
	 */
	public function getNumChildren() {
		return $this->numChildren;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LodgingReservation';
	}

	/**
	 * Set checkin time.
	 * 
	 * @param Property\CheckinTime $checkinTime
	 * @return LodgingReservation
	 */
	public function setCheckinTime(Property\CheckinTime $checkinTime) {
		$this->checkinTime = $checkinTime;

		return $this;
	}

	/**
	 * Set checkout time.
	 * 
	 * @param Property\CheckoutTime $checkoutTime
	 * @return LodgingReservation
	 */
	public function setCheckoutTime(Property\CheckoutTime $checkoutTime) {
		$this->checkoutTime = $checkoutTime;

		return $this;
	}

	/**
	 * Set lodging unit description.
	 * 
	 * @param Property\LodgingUnitDescription $lodgingUnitDescription
	 * @return LodgingReservation
	 */
	public function setLodgingUnitDescription(Property\LodgingUnitDescription $lodgingUnitDescription) {
		$this->lodgingUnitDescription = $lodgingUnitDescription;

		return $this;
	}

	/**
	 * Set lodging unit type.
	 * 
	 * @param Property\LodgingUnitType $lodgingUnitType
	 * @return LodgingReservation
	 */
	public function setLodgingUnitType(Property\LodgingUnitType $lodgingUnitType) {
		$this->lodgingUnitType = $lodgingUnitType;

		return $this;
	}

	/**
	 * Set num adults.
	 * 
	 * @param Property\NumAdults $numAdults
	 * @return LodgingReservation
	 */
	public function setNumAdults(Property\NumAdults $numAdults) {
		$this->numAdults = $numAdults;

		return $this;
	}

	/**
	 * Set num children.
	 * 
	 * @param Property\NumChildren $numChildren
	 * @return LodgingReservation
	 */
	public function setNumChildren(Property\NumChildren $numChildren) {
		$this->numChildren = $numChildren;

		return $this;
	}
}