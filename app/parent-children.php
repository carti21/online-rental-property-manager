<?php
// This script and data application were generated by AppGini 23.14
// Download AppGini for free from https://bigprof.com/appgini/download/

	/* Configuration */
	/*************************************/

		$pcConfig = [
			'applicants_and_tenants' => [
			],
			'applications_leases' => [
				'tenants' => [
					'parent-table' => 'applicants_and_tenants',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Applications/Leases <span class="hidden child-label-applications_leases child-field-caption">(Applicant/ Tenant)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/curriculum_vitae.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Applicant/ Tenant', 2 => 'Application status', 3 => 'Property', 4 => 'Unit applied for', 5 => 'Lease type', 6 => 'Total number of occupants', 7 => 'Lease period from', 8 => 'to', 11 => 'Rental amount', 12 => 'Security deposit', 14 => 'Emergency contact', 17 => 'Applicant agrees'],
					'display-field-names' => [1 => 'tenants', 2 => 'status', 3 => 'property', 4 => 'unit', 5 => 'type', 6 => 'total_number_of_occupants', 7 => 'start_date', 8 => 'end_date', 11 => 'rent', 12 => 'security_deposit', 14 => 'emergency_contact', 17 => 'agreement'],
					'sortable-fields' => [0 => '`applications_leases`.`id`', 1 => 2, 2 => 3, 3 => '`properties1`.`property_name`', 4 => '`units1`.`unit_number`', 5 => 6, 6 => 7, 7 => '`applications_leases`.`start_date`', 8 => '`applications_leases`.`end_date`', 9 => 10, 10 => '`applications_leases`.`next_due_date`', 11 => '`applications_leases`.`rent`', 12 => '`applications_leases`.`security_deposit`', 13 => '`applications_leases`.`security_deposit_date`', 14 => 15, 15 => 16, 16 => 17, 17 => 18],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-applications_leases',
					'template-printable' => 'children-applications_leases-printable',
					'query' => "SELECT `applications_leases`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenants', `applications_leases`.`status` as 'status', IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') as 'property', IF(    CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `units1`.`unit_number`), '') as 'unit', `applications_leases`.`type` as 'type', `applications_leases`.`total_number_of_occupants` as 'total_number_of_occupants', if(`applications_leases`.`start_date`,date_format(`applications_leases`.`start_date`,'%m/%d/%Y'),'') as 'start_date', if(`applications_leases`.`end_date`,date_format(`applications_leases`.`end_date`,'%m/%d/%Y'),'') as 'end_date', `applications_leases`.`recurring_charges_frequency` as 'recurring_charges_frequency', if(`applications_leases`.`next_due_date`,date_format(`applications_leases`.`next_due_date`,'%m/%d/%Y'),'') as 'next_due_date', CONCAT('$', FORMAT(`applications_leases`.`rent`, 2)) as 'rent', CONCAT('$', FORMAT(`applications_leases`.`security_deposit`, 2)) as 'security_deposit', if(`applications_leases`.`security_deposit_date`,date_format(`applications_leases`.`security_deposit_date`,'%m/%d/%Y'),'') as 'security_deposit_date', `applications_leases`.`emergency_contact` as 'emergency_contact', `applications_leases`.`co_signer_details` as 'co_signer_details', `applications_leases`.`notes` as 'notes', concat('<i class=\"glyphicon glyphicon-', if(`applications_leases`.`agreement`, 'check', 'unchecked'), '\"></i>') as 'agreement' FROM `applications_leases` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`applications_leases`.`tenants` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`applications_leases`.`property` LEFT JOIN `units` as units1 ON `units1`.`id`=`applications_leases`.`unit` "
				],
				'property' => [
					'parent-table' => 'properties',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Applications/leases <span class="hidden child-label-applications_leases child-field-caption">(Property)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/curriculum_vitae.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Applicant/ Tenant', 2 => 'Application status', 3 => 'Property', 4 => 'Unit applied for', 5 => 'Lease type', 6 => 'Total number of occupants', 7 => 'Lease period from', 8 => 'to', 11 => 'Rental amount', 12 => 'Security deposit', 14 => 'Emergency contact', 17 => 'Applicant agrees'],
					'display-field-names' => [1 => 'tenants', 2 => 'status', 3 => 'property', 4 => 'unit', 5 => 'type', 6 => 'total_number_of_occupants', 7 => 'start_date', 8 => 'end_date', 11 => 'rent', 12 => 'security_deposit', 14 => 'emergency_contact', 17 => 'agreement'],
					'sortable-fields' => [0 => '`applications_leases`.`id`', 1 => 2, 2 => 3, 3 => '`properties1`.`property_name`', 4 => '`units1`.`unit_number`', 5 => 6, 6 => 7, 7 => '`applications_leases`.`start_date`', 8 => '`applications_leases`.`end_date`', 9 => 10, 10 => '`applications_leases`.`next_due_date`', 11 => '`applications_leases`.`rent`', 12 => '`applications_leases`.`security_deposit`', 13 => '`applications_leases`.`security_deposit_date`', 14 => 15, 15 => 16, 16 => 17, 17 => 18],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-applications_leases',
					'template-printable' => 'children-applications_leases-printable',
					'query' => "SELECT `applications_leases`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenants', `applications_leases`.`status` as 'status', IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') as 'property', IF(    CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `units1`.`unit_number`), '') as 'unit', `applications_leases`.`type` as 'type', `applications_leases`.`total_number_of_occupants` as 'total_number_of_occupants', if(`applications_leases`.`start_date`,date_format(`applications_leases`.`start_date`,'%m/%d/%Y'),'') as 'start_date', if(`applications_leases`.`end_date`,date_format(`applications_leases`.`end_date`,'%m/%d/%Y'),'') as 'end_date', `applications_leases`.`recurring_charges_frequency` as 'recurring_charges_frequency', if(`applications_leases`.`next_due_date`,date_format(`applications_leases`.`next_due_date`,'%m/%d/%Y'),'') as 'next_due_date', CONCAT('$', FORMAT(`applications_leases`.`rent`, 2)) as 'rent', CONCAT('$', FORMAT(`applications_leases`.`security_deposit`, 2)) as 'security_deposit', if(`applications_leases`.`security_deposit_date`,date_format(`applications_leases`.`security_deposit_date`,'%m/%d/%Y'),'') as 'security_deposit_date', `applications_leases`.`emergency_contact` as 'emergency_contact', `applications_leases`.`co_signer_details` as 'co_signer_details', `applications_leases`.`notes` as 'notes', concat('<i class=\"glyphicon glyphicon-', if(`applications_leases`.`agreement`, 'check', 'unchecked'), '\"></i>') as 'agreement' FROM `applications_leases` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`applications_leases`.`tenants` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`applications_leases`.`property` LEFT JOIN `units` as units1 ON `units1`.`id`=`applications_leases`.`unit` "
				],
				'unit' => [
					'parent-table' => 'units',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Applications/Leases <span class="hidden child-label-applications_leases child-field-caption">(Unit applied for)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/curriculum_vitae.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Applicant/ Tenant', 2 => 'Application status', 3 => 'Property', 4 => 'Unit applied for', 5 => 'Lease type', 6 => 'Total number of occupants', 7 => 'Lease period from', 8 => 'to', 11 => 'Rental amount', 12 => 'Security deposit', 14 => 'Emergency contact', 17 => 'Applicant agrees'],
					'display-field-names' => [1 => 'tenants', 2 => 'status', 3 => 'property', 4 => 'unit', 5 => 'type', 6 => 'total_number_of_occupants', 7 => 'start_date', 8 => 'end_date', 11 => 'rent', 12 => 'security_deposit', 14 => 'emergency_contact', 17 => 'agreement'],
					'sortable-fields' => [0 => '`applications_leases`.`id`', 1 => 2, 2 => 3, 3 => '`properties1`.`property_name`', 4 => '`units1`.`unit_number`', 5 => 6, 6 => 7, 7 => '`applications_leases`.`start_date`', 8 => '`applications_leases`.`end_date`', 9 => 10, 10 => '`applications_leases`.`next_due_date`', 11 => '`applications_leases`.`rent`', 12 => '`applications_leases`.`security_deposit`', 13 => '`applications_leases`.`security_deposit_date`', 14 => 15, 15 => 16, 16 => 17, 17 => 18],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-applications_leases',
					'template-printable' => 'children-applications_leases-printable',
					'query' => "SELECT `applications_leases`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenants', `applications_leases`.`status` as 'status', IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') as 'property', IF(    CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `units1`.`unit_number`), '') as 'unit', `applications_leases`.`type` as 'type', `applications_leases`.`total_number_of_occupants` as 'total_number_of_occupants', if(`applications_leases`.`start_date`,date_format(`applications_leases`.`start_date`,'%m/%d/%Y'),'') as 'start_date', if(`applications_leases`.`end_date`,date_format(`applications_leases`.`end_date`,'%m/%d/%Y'),'') as 'end_date', `applications_leases`.`recurring_charges_frequency` as 'recurring_charges_frequency', if(`applications_leases`.`next_due_date`,date_format(`applications_leases`.`next_due_date`,'%m/%d/%Y'),'') as 'next_due_date', CONCAT('$', FORMAT(`applications_leases`.`rent`, 2)) as 'rent', CONCAT('$', FORMAT(`applications_leases`.`security_deposit`, 2)) as 'security_deposit', if(`applications_leases`.`security_deposit_date`,date_format(`applications_leases`.`security_deposit_date`,'%m/%d/%Y'),'') as 'security_deposit_date', `applications_leases`.`emergency_contact` as 'emergency_contact', `applications_leases`.`co_signer_details` as 'co_signer_details', `applications_leases`.`notes` as 'notes', concat('<i class=\"glyphicon glyphicon-', if(`applications_leases`.`agreement`, 'check', 'unchecked'), '\"></i>') as 'agreement' FROM `applications_leases` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`applications_leases`.`tenants` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`applications_leases`.`property` LEFT JOIN `units` as units1 ON `units1`.`id`=`applications_leases`.`unit` "
				],
			],
			'residence_and_rental_history' => [
				'tenant' => [
					'parent-table' => 'applicants_and_tenants',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Residence and rental history <span class="hidden child-label-residence_and_rental_history child-field-caption">(Tenant)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/document_comment_above.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [2 => 'Address', 3 => 'Landlord/manager name', 4 => 'Landlord/manager phone', 5 => 'Monthly rent', 6 => 'Duration of residency from', 7 => 'to', 8 => 'Reason for leaving'],
					'display-field-names' => [2 => 'address', 3 => 'landlord_or_manager_name', 4 => 'landlord_or_manager_phone', 5 => 'monthly_rent', 6 => 'duration_of_residency_from', 7 => 'to', 8 => 'reason_for_leaving'],
					'sortable-fields' => [0 => '`residence_and_rental_history`.`id`', 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => '`residence_and_rental_history`.`monthly_rent`', 6 => '`residence_and_rental_history`.`duration_of_residency_from`', 7 => '`residence_and_rental_history`.`to`', 8 => 9, 9 => 10],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-residence_and_rental_history',
					'template-printable' => 'children-residence_and_rental_history-printable',
					'query' => "SELECT `residence_and_rental_history`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenant', `residence_and_rental_history`.`address` as 'address', `residence_and_rental_history`.`landlord_or_manager_name` as 'landlord_or_manager_name', `residence_and_rental_history`.`landlord_or_manager_phone` as 'landlord_or_manager_phone', CONCAT('$', FORMAT(`residence_and_rental_history`.`monthly_rent`, 2)) as 'monthly_rent', if(`residence_and_rental_history`.`duration_of_residency_from`,date_format(`residence_and_rental_history`.`duration_of_residency_from`,'%m/%d/%Y'),'') as 'duration_of_residency_from', if(`residence_and_rental_history`.`to`,date_format(`residence_and_rental_history`.`to`,'%m/%d/%Y'),'') as 'to', `residence_and_rental_history`.`reason_for_leaving` as 'reason_for_leaving', `residence_and_rental_history`.`notes` as 'notes' FROM `residence_and_rental_history` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`residence_and_rental_history`.`tenant` "
				],
			],
			'employment_and_income_history' => [
				'tenant' => [
					'parent-table' => 'applicants_and_tenants',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Employment and income history <span class="hidden child-label-employment_and_income_history child-field-caption">(Tenant)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/cash_stack.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [2 => 'Employer name', 3 => 'City', 4 => 'Employer phone', 5 => 'employed from', 6 => 'Employed till', 7 => 'Occupation', 8 => 'Notes'],
					'display-field-names' => [2 => 'employer_name', 3 => 'city', 4 => 'employer_phone', 5 => 'employed_from', 6 => 'employed_till', 7 => 'occupation', 8 => 'notes'],
					'sortable-fields' => [0 => '`employment_and_income_history`.`id`', 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => '`employment_and_income_history`.`employed_from`', 6 => '`employment_and_income_history`.`employed_till`', 7 => 8, 8 => 9],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-employment_and_income_history',
					'template-printable' => 'children-employment_and_income_history-printable',
					'query' => "SELECT `employment_and_income_history`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenant', `employment_and_income_history`.`employer_name` as 'employer_name', `employment_and_income_history`.`city` as 'city', CONCAT_WS('-', LEFT(`employment_and_income_history`.`employer_phone`,3), MID(`employment_and_income_history`.`employer_phone`,4,3), RIGHT(`employment_and_income_history`.`employer_phone`,4)) as 'employer_phone', if(`employment_and_income_history`.`employed_from`,date_format(`employment_and_income_history`.`employed_from`,'%m/%d/%Y'),'') as 'employed_from', if(`employment_and_income_history`.`employed_till`,date_format(`employment_and_income_history`.`employed_till`,'%m/%d/%Y'),'') as 'employed_till', `employment_and_income_history`.`occupation` as 'occupation', `employment_and_income_history`.`notes` as 'notes' FROM `employment_and_income_history` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`employment_and_income_history`.`tenant` "
				],
			],
			'references' => [
				'tenant' => [
					'parent-table' => 'applicants_and_tenants',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'References <span class="hidden child-label-references child-field-caption">(Tenant)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/application_from_storage.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [2 => 'Reference name', 3 => 'Reference phone'],
					'display-field-names' => [2 => 'reference_name', 3 => 'phone'],
					'sortable-fields' => [0 => '`references`.`id`', 1 => 2, 2 => 3, 3 => 4],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-references',
					'template-printable' => 'children-references-printable',
					'query' => "SELECT `references`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenant', `references`.`reference_name` as 'reference_name', CONCAT_WS('-', LEFT(`references`.`phone`,3), MID(`references`.`phone`,4,3), RIGHT(`references`.`phone`,4)) as 'phone' FROM `references` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`references`.`tenant` "
				],
			],
			'rental_owners' => [
			],
			'properties' => [
				'owner' => [
					'parent-table' => 'rental_owners',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Properties <span class="hidden child-label-properties child-field-caption">(Owner)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/application_home.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Property Name', 2 => 'Cover photo', 3 => 'Type', 4 => 'Number of units', 5 => 'Owner', 6 => 'Operating account', 7 => 'Property reserve', 10 => 'Street', 11 => 'City', 12 => 'State', 13 => 'ZIP'],
					'display-field-names' => [1 => 'property_name', 2 => 'photo', 3 => 'type', 4 => 'number_of_units', 5 => 'owner', 6 => 'operating_account', 7 => 'property_reserve', 10 => 'street', 11 => 'City', 12 => 'State', 13 => 'ZIP'],
					'sortable-fields' => [0 => '`properties`.`id`', 1 => 2, 2 => 3, 3 => 4, 4 => '`properties`.`number_of_units`', 5 => 6, 6 => 7, 7 => '`properties`.`property_reserve`', 8 => 9, 9 => 10, 10 => 11, 11 => 12, 12 => 13, 13 => '`properties`.`ZIP`'],
					'records-per-page' => 10,
					'default-sort-by' => 0,
					'default-sort-direction' => 'desc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-properties',
					'template-printable' => 'children-properties-printable',
					'query' => "SELECT `properties`.`id` as 'id', `properties`.`property_name` as 'property_name', `properties`.`photo` as 'photo', `properties`.`type` as 'type', `properties`.`number_of_units` as 'number_of_units', IF(    CHAR_LENGTH(`rental_owners1`.`first_name`) || CHAR_LENGTH(`rental_owners1`.`last_name`), CONCAT_WS('',   `rental_owners1`.`first_name`, ' ', `rental_owners1`.`last_name`), '') as 'owner', `properties`.`operating_account` as 'operating_account', CONCAT('$', FORMAT(`properties`.`property_reserve`, 2)) as 'property_reserve', `properties`.`lease_term` as 'lease_term', `properties`.`country` as 'country', `properties`.`street` as 'street', `properties`.`City` as 'City', `properties`.`State` as 'State', `properties`.`ZIP` as 'ZIP' FROM `properties` LEFT JOIN `rental_owners` as rental_owners1 ON `rental_owners1`.`id`=`properties`.`owner` "
				],
			],
			'property_photos' => [
				'property' => [
					'parent-table' => 'properties',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Property photos <span class="hidden child-label-property_photos child-field-caption">(Property)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/camera_link.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [2 => 'Photo', 3 => 'Description'],
					'display-field-names' => [2 => 'photo', 3 => 'description'],
					'sortable-fields' => [0 => '`property_photos`.`id`', 1 => '`properties1`.`property_name`', 2 => 3, 3 => 4],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-property_photos',
					'template-printable' => 'children-property_photos-printable',
					'query' => "SELECT `property_photos`.`id` as 'id', IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') as 'property', `property_photos`.`photo` as 'photo', `property_photos`.`description` as 'description' FROM `property_photos` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`property_photos`.`property` "
				],
			],
			'units' => [
				'property' => [
					'parent-table' => 'properties',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Units <span class="hidden child-label-units child-field-caption">(Property)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/change_password.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [1 => 'Property', 2 => 'Unit', 3 => 'Cover photo', 4 => 'Status', 5 => 'Area (sq. feet)', 7 => 'Street', 8 => 'City', 9 => 'State', 11 => 'Rooms', 12 => 'Bathroom', 13 => 'Features', 15 => 'Rental amount'],
					'display-field-names' => [1 => 'property', 2 => 'unit_number', 3 => 'photo', 4 => 'status', 5 => 'size', 7 => 'street', 8 => 'city', 9 => 'state', 11 => 'rooms', 12 => 'bathroom', 13 => 'features', 15 => 'rental_amount'],
					'sortable-fields' => [0 => '`units`.`id`', 1 => '`properties1`.`property_name`', 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => '`properties1`.`country`', 7 => '`properties1`.`street`', 8 => '`properties1`.`City`', 9 => '`properties1`.`State`', 10 => '`properties1`.`ZIP`', 11 => 12, 12 => '`units`.`bathroom`', 13 => 14, 14 => '`units`.`market_rent`', 15 => '`units`.`rental_amount`', 16 => '`units`.`deposit_amount`', 17 => 18],
					'records-per-page' => 10,
					'default-sort-by' => 1,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-units',
					'template-printable' => 'children-units-printable',
					'query' => "SELECT `units`.`id` as 'id', IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') as 'property', `units`.`unit_number` as 'unit_number', `units`.`photo` as 'photo', `units`.`status` as 'status', `units`.`size` as 'size', IF(    CHAR_LENGTH(`properties1`.`country`), CONCAT_WS('',   `properties1`.`country`), '') as 'country', IF(    CHAR_LENGTH(`properties1`.`street`), CONCAT_WS('',   `properties1`.`street`), '') as 'street', IF(    CHAR_LENGTH(`properties1`.`City`), CONCAT_WS('',   `properties1`.`City`), '') as 'city', IF(    CHAR_LENGTH(`properties1`.`State`), CONCAT_WS('',   `properties1`.`State`), '') as 'state', IF(    CHAR_LENGTH(`properties1`.`ZIP`), CONCAT_WS('',   `properties1`.`ZIP`), '') as 'postal_code', `units`.`rooms` as 'rooms', `units`.`bathroom` as 'bathroom', `units`.`features` as 'features', FORMAT(`units`.`market_rent`, 0) as 'market_rent', CONCAT('$', FORMAT(`units`.`rental_amount`, 2)) as 'rental_amount', CONCAT('$', FORMAT(`units`.`deposit_amount`, 2)) as 'deposit_amount', `units`.`description` as 'description' FROM `units` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`units`.`property` "
				],
			],
			'unit_photos' => [
				'unit' => [
					'parent-table' => 'units',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Unit photos <span class="hidden child-label-unit_photos child-field-caption">(Unit)</span>',
					'auto-close' => false,
					'table-icon' => 'resources/table_icons/camera_link.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => [2 => 'Photo', 3 => 'Description'],
					'display-field-names' => [2 => 'photo', 3 => 'description'],
					'sortable-fields' => [0 => '`unit_photos`.`id`', 1 => 2, 2 => 3, 3 => 4],
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-unit_photos',
					'template-printable' => 'children-unit_photos-printable',
					'query' => "SELECT `unit_photos`.`id` as 'id', IF(    CHAR_LENGTH(`properties1`.`property_name`) || CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `properties1`.`property_name`, ' - unit# ', `units1`.`unit_number`), '') as 'unit', `unit_photos`.`photo` as 'photo', `unit_photos`.`description` as 'description' FROM `unit_photos` LEFT JOIN `units` as units1 ON `units1`.`id`=`unit_photos`.`unit` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`units1`.`property` "
				],
			],
		];

	/*************************************/
	/* End of configuration */


	include_once(__DIR__ . '/lib.php');
	@header('Content-Type: text/html; charset=' . datalist_db_encoding);

	handle_maintenance();

	/**
	* dynamic configuration based on current user's permissions
	* $userPCConfig array is populated only with parent tables where the user has access to
	* at least one child table
	*/
	$userPCConfig = [];
	foreach($pcConfig as $pcChildTable => $ChildrenLookups) {
		$permChild = getTablePermissions($pcChildTable);
		if(!$permChild['view']) continue;

		foreach($ChildrenLookups as $ChildLookupField => $ChildConfig) {
			$permParent = getTablePermissions($ChildConfig['parent-table']);
			if(!$permParent['view']) continue;

			$userPCConfig[$pcChildTable][$ChildLookupField] = $pcConfig[$pcChildTable][$ChildLookupField];
			// show add new only if configured above AND the user has insert permission
			$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = ($permChild['insert'] && $pcConfig[$pcChildTable][$ChildLookupField]['display-add-new']);
		}
	}

	/* Receive, UTF-convert, and validate parameters */
	$ParentTable = Request::val('ParentTable'); // needed only with operation=show-children, will be validated in the processing code
	$ChildTable = Request::val('ChildTable');
		if(!in_array($ChildTable, array_keys($userPCConfig))) {
			/* defaults to first child table in config array if not provided */
			$ChildTable = current(array_keys($userPCConfig));
		}
		if(!$ChildTable) { die('<!-- No tables accessible to current user -->'); }
	$SelectedID = strip_tags(Request::val('SelectedID'));
	$ChildLookupField = Request::val('ChildLookupField');
		if(!in_array($ChildLookupField, array_keys($userPCConfig[$ChildTable]))) {
			/* defaults to first lookup in current child config array if not provided */
			$ChildLookupField = current(array_keys($userPCConfig[$ChildTable]));
		}

	if(function_exists('child_records_config')) {
		// $userPCConfig is passed by reference
		child_records_config($ChildTable, $ChildLookupField, $userPCConfig);
	}

	$currentConfig = $userPCConfig[$ChildTable][$ChildLookupField];
	if(empty($currentConfig))
		die('<!-- No tables accessible to current user -->');

	$Page = intval(Request::val('Page'));
		if($Page < 1) $Page = 1;
	$SortBy = (Request::val('SortBy') != '' ? abs(intval(Request::val('SortBy'))) : false);
		if(!in_array($SortBy, array_keys($currentConfig['sortable-fields']), true))
			$SortBy = $currentConfig['default-sort-by'];
	$SortDirection = strtolower(Request::val('SortDirection'));
		if(!in_array($SortDirection, ['asc', 'desc']))
			$SortDirection = $currentConfig['default-sort-direction'];
	$Operation = strtolower(Request::val('Operation'));
		if(!in_array($Operation, ['get-records', 'show-children', 'get-records-printable', 'show-children-printable']))
			$Operation = 'get-records';

	/* process requested operation */
	switch($Operation) {
		/************************************************/
		case 'show-children':
			/* populate HTML and JS content with children tabs */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups) {
				foreach($childLookups as $ChildLookupField => $childConfig) {
					if($childConfig['parent-table'] != $ParentTable) continue;

					$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\">" : '');

					$tabLabels .= "<li class=\"child-tab-label child-table-{$ChildTable} lookup-field-{$ChildLookupField} " . ($tabLabels ? '' : 'active') . "\">" .
							"<a href=\"#panel_{$ChildTable}-{$ChildLookupField}\" id=\"tab_{$ChildTable}-{$ChildLookupField}\" data-toggle=\"tab\">" .
								$TableIcon . $childConfig['tab-label'] .
								"<span class=\"badge child-count child-count-{$ChildTable}-{$ChildLookupField}\"></span>" .
							"</a>" .
						"</li>\n\t\t\t\t";

					$tabPanels .= "<div id=\"panel_{$ChildTable}-{$ChildLookupField}\" class=\"tab-pane" . ($tabPanels ? '' : ' active') . "\">" .
							"<i class=\"glyphicon glyphicon-refresh loop-rotate\"></i> " .
							"{$Translation['Loading ...']}" .
						"</div>\n\t\t\t\t";

					$tabLoaders .= "post('parent-children.php', " . json_encode([
							'ChildTable' => $ChildTable,
							'ChildLookupField' => $ChildLookupField,
							'SelectedID' => $SelectedID,
							'Page' => 1,
							'SortBy' => '',
							'SortDirection' => '',
							'Operation' => 'get-records'
						]) . ", 'panel_{$ChildTable}-{$ChildLookupField}');\n\t\t\t\t";
				}
			}

			if(!$tabLabels) { die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs">
				<ul class="nav nav-tabs">
					<?php echo $tabLabels; ?>
				</ul>
				<span id="pc-loading"></span>
			</div>
			<div class="tab-content"><?php echo $tabPanels; ?></div>

			<script>
				$j(function() {
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded) {
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>

					/* show child field caption on tab title in case the same child table appears more than once */
					$j('.child-field-caption').each(function() {
						var clss = $j(this).attr('class').split(/\s+/).reduce(function(rc, cc) {
							return (cc.match(/child-label-.*/) ? '.' + cc : rc);
						}, '');

						// if class occurs more than once, remove .hidden
						if($j(clss).length > 1) $j(clss).removeClass('hidden');
					})
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'show-children-printable':
			/* populate HTML and JS content with children buttons */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups) {
				foreach($childLookups as $ChildLookupField => $childConfig) {
					if($childConfig['parent-table'] != $ParentTable) continue;

					$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\">" : '');

					$tabLabels .= "<button type=\"button\" class=\"btn btn-default child-tab-print-toggler\" data-target=\"#panel_{$ChildTable}-{$ChildLookupField}\" id=\"tab_{$ChildTable}-{$ChildLookupField}\" data-toggle=\"collapse\">" .
							"{$TableIcon} {$childConfig['tab-label']}" .
							"<span class=\"badge child-count child-count-{$ChildTable}-{$ChildLookupField}\"></span>" .
						"</button>\n\t\t\t\t\t";

					$tabPanels .= "<div id=\"panel_{$ChildTable}-{$ChildLookupField}\" class=\"collapse child-panel-print\">" .
							"<i class=\"glyphicon glyphicon-refresh loop-rotate\"></i> " .
							$Translation['Loading ...'] .
						"</div>\n\t\t\t\t";

					$tabLoaders .= "post('parent-children.php', " . json_encode([
							'ChildTable' => $ChildTable,
							'ChildLookupField' => $ChildLookupField,
							'SelectedID' => $SelectedID,
							'Page' => 1,
							'SortBy' => '',
							'SortDirection' => '',
							'Operation' => 'get-records-printable'
						]) . ", 'panel_{$ChildTable}-{$ChildLookupField}');\n\t\t\t\t";
				}
			}

			if(!$tabLabels) { die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs" class="hidden-print">
				<div class="btn-group btn-group-lg">
					<?php echo $tabLabels; ?>
				</div>
				<span id="pc-loading"></span>
			</div>
			<div class="vspacer-lg"><?php echo $tabPanels; ?></div>

			<script>
				$j(function() {
					/* for iOS, avoid loading child tabs in modals */
					var iOS = /(iPad|iPhone|iPod)/g.test(navigator.userAgent);
					var embedded = ($j('.navbar').length == 0);
					if(iOS && embedded) {
						$j('#children-tabs').next('.tab-content').remove();
						$j('#children-tabs').remove();
						return;
					}

					/* ajax loading of each tab's contents */
					<?php echo $tabLoaders; ?>
				})
			</script>
			<?php
			break;

		/************************************************/
		case 'get-records-printable':
		default: /* default is 'get-records' */

			if($Operation == 'get-records-printable') {
				$currentConfig['records-per-page'] = 2000;
			}

			// build the user permissions limiter
			$permissionsWhere = $permissionsJoin = '';
			$permChild = getTablePermissions($ChildTable);
			if($permChild['view'] == 1) { // user can view only his own records
				$permissionsWhere = "`$ChildTable`.`{$currentConfig['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND LCASE(`membership_userrecords`.`memberID`)='" . getLoggedMemberID() . "'";
			} elseif($permChild['view'] == 2) { // user can view only his group's records
				$permissionsWhere = "`$ChildTable`.`{$currentConfig['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND `membership_userrecords`.`groupID`='" . getLoggedGroupID() . "'";
			} elseif($permChild['view'] == 3) { // user can view all records
				/* that's the only case remaining ... no need to modify the query in this case */
			}
			$permissionsJoin = ($permissionsWhere ? ", `membership_userrecords`" : '');

			// build the count query
			$forcedWhere = $currentConfig['forced-where'];
			$query = 
				preg_replace('/^select .* from /i', 'SELECT count(1) FROM ', $currentConfig['query']) .
				$permissionsJoin . " WHERE " .
				($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
				($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
				"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'";
			$totalMatches = sqlValue($query);

			// make sure $Page is <= max pages
			$maxPage = ceil($totalMatches / $currentConfig['records-per-page']);
			if($Page > $maxPage) { $Page = $maxPage; }

			// initiate output data array
			$data = [
				'config' => $currentConfig,
				'parameters' => [
					'ChildTable' => $ChildTable,
					'ChildLookupField' => $ChildLookupField,
					'SelectedID' => $SelectedID,
					'Page' => $Page,
					'SortBy' => $SortBy,
					'SortDirection' => $SortDirection,
					'Operation' => $Operation,
				],
				'records' => [],
				'totalMatches' => $totalMatches
			];

			// build the data query
			if($totalMatches) { // if we have at least one record, proceed with fetching data
				$startRecord = $currentConfig['records-per-page'] * ($Page - 1);
				$data['query'] = 
					$currentConfig['query'] .
					$permissionsJoin . " WHERE " .
					($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
					($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
					"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'" . 
					($SortBy !== false && $currentConfig['sortable-fields'][$SortBy] ? " ORDER BY {$currentConfig['sortable-fields'][$SortBy]} $SortDirection" : '') .
					" LIMIT $startRecord, {$currentConfig['records-per-page']}";
				$res = sql($data['query'], $eo);
				while($row = db_fetch_row($res)) {
					$data['records'][$row[$currentConfig['child-primary-key-index']]] = $row;
				}
			} else { // if no matching records
				$startRecord = 0;
			}

			if($Operation == 'get-records-printable') {
				$response = loadView($currentConfig['template-printable'], $data);
			} else {
				$response = loadView($currentConfig['template'], $data);
			}

			// change name space to ensure uniqueness
			$uniqueNameSpace = $ChildTable.ucfirst($ChildLookupField).'GetRecords';
			echo str_replace("{$ChildTable}GetChildrenRecordsList", $uniqueNameSpace, $response);
		/************************************************/
	}
