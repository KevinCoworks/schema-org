<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PerformingGroup.
 * 
 * @method PerformingGroup setAddress(Property\Address $address)
 * @method PerformingGroup setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method PerformingGroup setAlumni(Property\Alumni $alumni)
 * @method PerformingGroup setAreaServed(Property\AreaServed $areaServed)
 * @method PerformingGroup setAward(Property\Award $award)
 * @method PerformingGroup setBrand(Property\Brand $brand)
 * @method PerformingGroup setContactPoint(Property\ContactPoint $contactPoint)
 * @method PerformingGroup setDepartment(Property\Department $department)
 * @method PerformingGroup setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method PerformingGroup setDuns(Property\Duns $duns)
 * @method PerformingGroup setEmail(Property\Email $email)
 * @method PerformingGroup setEmployee(Property\Employee $employee)
 * @method PerformingGroup setEvent(Property\Event $event)
 * @method PerformingGroup setFaxNumber(Property\FaxNumber $faxNumber)
 * @method PerformingGroup setFounder(Property\Founder $founder)
 * @method PerformingGroup setFoundingDate(Property\FoundingDate $foundingDate)
 * @method PerformingGroup setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method PerformingGroup setFunder(Property\Funder $funder)
 * @method PerformingGroup setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method PerformingGroup setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method PerformingGroup setHasPOS(Property\HasPOS $hasPOS)
 * @method PerformingGroup setIsicV4(Property\IsicV4 $isicV4)
 * @method PerformingGroup setLegalName(Property\LegalName $legalName)
 * @method PerformingGroup setLeiCode(Property\LeiCode $leiCode)
 * @method PerformingGroup setLocation(Property\Location $location)
 * @method PerformingGroup setLogo(Property\Logo $logo)
 * @method PerformingGroup setMakesOffer(Property\MakesOffer $makesOffer)
 * @method PerformingGroup setMember(Property\Member $member)
 * @method PerformingGroup setMemberOf(Property\MemberOf $memberOf)
 * @method PerformingGroup setNaics(Property\Naics $naics)
 * @method PerformingGroup setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method PerformingGroup setOwns(Property\Owns $owns)
 * @method PerformingGroup setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method PerformingGroup setReview(Property\Review $review)
 * @method PerformingGroup setSeeks(Property\Seeks $seeks)
 * @method PerformingGroup setSponsor(Property\Sponsor $sponsor)
 * @method PerformingGroup setSubOrganization(Property\SubOrganization $subOrganization)
 * @method PerformingGroup setTaxID(Property\TaxID $taxID)
 * @method PerformingGroup setTelephone(Property\Telephone $telephone)
 * @method PerformingGroup setVatID(Property\VatID $vatID)
 */
class PerformingGroup extends Organization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PerformingGroup';
	}
}