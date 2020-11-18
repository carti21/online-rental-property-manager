<?php header('Content-type: text/css'); ?>

@media (min-width: 768px) { .container{ width: 90% !important; } }
@media (max-width: 767px) { .detail_view{ padding: 0; } }
@media print{
	a[href]:after{ content: "" !important; }
	.container{ width: 98% !important; }
}

.rtl{ direction: rtl !important; }
.ltr{ direction: ltr !important; }

.navbar-brand{ text-transform: capitalize; }

table a, .table a { text-decoration: none !important; }

#children-tabs li a{ display: block !important; }

.hidden{ visibility: hidden !important; }

iframe{ border: none; overflow: auto; }

.tab-content{ padding: 10px 20px; border: 1px solid #DDDDDD; border-top: none; }

#pc-loading{ background: none repeat scroll 0 0 yellow; font-family: arial; left: 10px; margin-top: -10px; opacity: 0.85; position: absolute; top: 20px; width: 150px; }

.navbar a.btn { margin-left: 10px; margin-right: 10px; }

.view-on-click a.btn { max-width: 75px; }

/* prevent prototype conflicts */
li.dropdown{ display: block !important; }

.hspacer-xs{ margin-left: 0.1em; margin-right: 0.1em; }
.hspacer-sm{ margin-left: 0.2em; margin-right: 0.2em; }
.hspacer-md{ margin-left: 0.4em; margin-right: 0.4em; }
.hspacer-lg{ margin-left: 0.8em; margin-right: 0.8em; }
.vspacer-xs{ margin-top: 0.1em; margin-bottom: 0.1em; }
.vspacer-sm{ margin-top: 0.2em; margin-bottom: 0.2em; }
.vspacer-md{ margin-top: 0.4em; margin-bottom: 0.4em; }
.vspacer-lg{ margin-top: 0.8em; margin-bottom: 0.8em; }

div.datePicker{ font-size: 1.3em; }
.always_shown{ display: inline !important; }
.always-shown-block { display: block !important; }
.always-shown-inline { display: inline !important; }
.always-shown-inline-block { display: inline-block !important; }
.text-bold{ font-weight: bold; }
.text-italic{ font-style: italic; }

/* .form-control, .help-block .alert{ width: 90% !important; } */
.input-group .form-control{ width: 100% !important; }
.admin-area .form-inline .form-control{ width: auto !important; }
.panel .btn{ overflow: hidden; }

.select2-container .select2-choice{ height: 2.4em; line-height: 2.2em; }
.select2-container .select2-choice .select2-arrow b{ background-position: 0 -0.1em; }

.navbar ul.dropdown-menu{ max-height: 90vh; overflow-y: auto; }

.date_combo { padding-right: 0.5em; }
/* .date_combo select { width: 100% !important; padding-left: 0; padding-right: 0; } */

img[src="blank.gif"] { max-height: 10px !important; }

/* fix for scrolling wide tables horizontally on iOS, https://stackoverflow.com/a/39073181/1945185 */
.table-responsive .table {
	max-width: none;
	-webkit-overflow-scrolling: touch !important;
}

td.applicants_and_tenants-last_name{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applicants_and_tenants-first_name{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applicants_and_tenants-email{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden; word-break: break-all; }
td.applicants_and_tenants-phone{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applicants_and_tenants-birth_date{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applicants_and_tenants-driver_license_number{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applicants_and_tenants-driver_license_state{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applicants_and_tenants-requested_lease_term{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applicants_and_tenants-monthly_gross_pay{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.applicants_and_tenants-additional_income{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.applicants_and_tenants-assets{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.applicants_and_tenants-status{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applicants_and_tenants-notes{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applications_leases-tenants{ white-space: normal !important; max-width: 60px !important; min-width: 60px !important; overflow: hidden;  }
td.applications_leases-status{ white-space: normal !important; max-width: 50px !important; min-width: 50px !important; overflow: hidden;  }
td.applications_leases-property{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.applications_leases-unit{ white-space: normal !important; max-width: 60px !important; min-width: 60px !important; overflow: hidden;  }
td.applications_leases-type{ white-space: normal !important; max-width: 40px !important; min-width: 40px !important; overflow: hidden;  }
td.applications_leases-total_number_of_occupants{ white-space: normal !important; max-width: 70px !important; min-width: 70px !important; overflow: hidden;  }
td.applications_leases-start_date{ white-space: normal !important; max-width: 70px !important; min-width: 70px !important; overflow: hidden;  }
td.applications_leases-end_date{ white-space: normal !important; max-width: 60px !important; min-width: 60px !important; overflow: hidden;  }
td.applications_leases-rent{ white-space: normal !important; max-width: 70px !important; min-width: 70px !important; overflow: hidden;  }
td.applications_leases-security_deposit{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.applications_leases-security_deposit_date{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.applications_leases-emergency_contact{ white-space: normal !important; max-width: 120px !important; min-width: 120px !important; overflow: hidden;  }
td.applications_leases-co_signer_details{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applications_leases-notes{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.applications_leases-agreement{ white-space: normal !important; max-width: 70px !important; min-width: 70px !important; overflow: hidden;  }
td.residence_and_rental_history-address{ white-space: normal !important; max-width: 180px !important; min-width: 180px !important; overflow: hidden;  }
td.residence_and_rental_history-landlord_or_manager_name{ white-space: normal !important; max-width: 120px !important; min-width: 120px !important; overflow: hidden;  }
td.residence_and_rental_history-landlord_or_manager_phone{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.residence_and_rental_history-monthly_rent{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.residence_and_rental_history-duration_of_residency_from{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.residence_and_rental_history-to{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.residence_and_rental_history-reason_for_leaving{ white-space: normal !important; max-width: 120px !important; min-width: 120px !important; overflow: hidden;  }
td.residence_and_rental_history-notes{ white-space: normal !important; max-width: 120px !important; min-width: 120px !important; overflow: hidden;  }
td.employment_and_income_history-employer_name{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.employment_and_income_history-city{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.employment_and_income_history-employer_phone{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.employment_and_income_history-employed_from{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.employment_and_income_history-employed_till{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.employment_and_income_history-occupation{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.employment_and_income_history-notes{ white-space: normal !important; max-width: 50px !important; min-width: 50px !important; overflow: hidden;  }
td.references-reference_name{ white-space: normal !important; max-width: 160px !important; min-width: 160px !important; overflow: hidden;  }
td.references-phone{ white-space: normal !important; max-width: 160px !important; min-width: 160px !important; overflow: hidden;  }
td.properties-property_name{ white-space: normal !important; max-width: 50px !important; min-width: 50px !important; overflow: hidden;  }
td.properties-photo{ white-space: normal !important; max-width: 60px !important; min-width: 60px !important; overflow: hidden;  }
td.properties-type{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.properties-number_of_units{ white-space: normal !important; max-width: 50px !important; min-width: 50px !important; overflow: hidden;  }
td.properties-owner{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.properties-operating_account{ white-space: normal !important; max-width: 120px !important; min-width: 120px !important; overflow: hidden;  }
td.properties-property_reserve{ white-space: normal !important; max-width: 70px !important; min-width: 70px !important; overflow: hidden;  }
td.properties-street{ white-space: normal !important; max-width: 120px !important; min-width: 120px !important; overflow: hidden;  }
td.properties-City{ white-space: normal !important; max-width: 70px !important; min-width: 70px !important; overflow: hidden;  }
td.properties-State{ white-space: normal !important; max-width: 50px !important; min-width: 50px !important; overflow: hidden;  }
td.properties-ZIP{ white-space: normal !important; max-width: 50px !important; min-width: 50px !important; overflow: hidden;  }
td.units-id{ white-space: normal !important; max-width: 150px !important; min-width: 150px !important; overflow: hidden;  }
td.units-property{ white-space: normal !important; max-width: 90px !important; min-width: 90px !important; overflow: hidden;  }
td.units-unit_number{ white-space: normal !important; max-width: 40px !important; min-width: 40px !important; overflow: hidden;  }
td.units-photo{ white-space: normal !important; max-width: 60px !important; min-width: 60px !important; overflow: hidden;  }
td.units-status{ white-space: normal !important; max-width: 60px !important; min-width: 60px !important; overflow: hidden;  }
td.units-size{ white-space: normal !important; max-width: 60px !important; min-width: 60px !important; overflow: hidden;  }
td.units-country{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.units-street{ white-space: normal !important; max-width: 100px !important; min-width: 100px !important; overflow: hidden;  }
td.units-city{ white-space: normal !important; max-width: 55px !important; min-width: 55px !important; overflow: hidden;  }
td.units-state{ white-space: normal !important; max-width: 40px !important; min-width: 40px !important; overflow: hidden;  }
td.units-postal_code{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }
td.units-rooms{ white-space: normal !important; max-width: 45px !important; min-width: 45px !important; overflow: hidden;  }
td.units-bathroom{ white-space: normal !important; max-width: 70px !important; min-width: 70px !important; overflow: hidden;  }
td.units-features{ white-space: normal !important; max-width: 150px !important; min-width: 150px !important; overflow: hidden;  }
td.units-rental_amount{ white-space: normal !important; max-width: 60px !important; min-width: 60px !important; overflow: hidden;  }
td.units-deposit_amount{ white-space: normal !important; max-width: 50px !important; min-width: 50px !important; overflow: hidden;  }
td.units-description{ white-space: normal !important; max-width: 80px !important; min-width: 80px !important; overflow: hidden;  }

/* fixes for glyph icons in some themes */
.glyphicon-camera:before { content: "\e046"; }
.glyphicon-lock:before { content: "\e033"; }
.glyphicon-eur:before { content: "\20ac"; }
.glyphicon-calendar:before { content: "\e109"; }
.glyphicon-bell:before { content: "\e123"; }
.glyphicon-wrench:before { content: "\e136"; }
.glyphicon-briefcase:before { content: "\e139"; }

.navbar-right {
	margin-right: 0 !important;
}

.no-caption .field-caption-tv{  display: none; }
.no-caption dd{ margin-left: 0; margin-right: 0; }

.nav-tabs a img{ margin: 0 0.25em; }

/* rotation classes */
.rotate90{ -ms-transform: rotate(90deg); -webkit-transform: rotate(90deg); transform: rotate(90deg); }
.rotate180{ -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg); }
.rotate270{ -ms-transform: rotate(270deg); -webkit-transform: rotate(270deg); transform: rotate(270deg); }

/* compacting mobile borders for DV */
.detail_view .form-group hr { margin: 0 0 0.5em 0; border-top-style: dashed; }

/* tv tools button widths */
.tv-tools .btn { width: 5em; }

/* compact theme styles */
.container.theme-compact{ font-size: 0.857em; }

.theme-compact .btn {
	font-size: 12px;
	padding: 4px 10px;
}

.theme-compact .btn-lg, .theme-compact .btn-group-lg > .btn {
	font-size: 15px;
	padding: 6px 15px;
}

.theme-compact .form-group {
	margin-bottom: 8px;
}

.theme-compact .form-control, .theme-compact .input-group-addon {
	font-size: 12px;
	height: auto;
	padding: 4px 6px;
}

.theme-compact .input-sm {
	border-radius: 3px;
	font-size: 12px;
	padding: 2px 6px;
}

.theme-compact select.input-sm {
	height: 25px;
	line-height: 25px;
}

.theme-compact .dropdown-menu {
	font-size: 12px;
}

.theme-compact .table > thead > tr > th, .theme-compact .table > tbody > tr > th, .theme-compact .table > tfoot > tr > th, .theme-compact .table > thead > tr > td, .theme-compact .table > tbody > tr > td, .theme-compact .table > tfoot > tr > td {
	padding: 4px;
}

.theme-compact h1, .theme-compact h2, .theme-compact h3, .theme-compact h4, .theme-compact h5, .theme-compact h6, .theme-compact .h1, .theme-compact .h2, .theme-compact .h3, .theme-compact .h4, .theme-compact .h5, .theme-compact .h6 {
	line-height: 2;
}

.theme-compact h1, .theme-compact .h1 {
	font-size: 27px;
}

.theme-compact h2, .theme-compact .h2 {
	font-size: 24px;
}

.theme-compact h3, .theme-compact .h3 {
	font-size: 20px;
}

.theme-compact h4, .theme-compact .h4 {
	font-size: 16px;
}

.theme-compact .navbar {
	margin-bottom: 13px;
	min-height: 40px;
}

.theme-compact .navbar-fixed-bottom {
	margin-bottom: 0 !important;
}

.theme-compact .navbar-brand {
	font-size: 15px;
	height: 40px;
	padding: 12px;
}

.theme-compact .navbar-nav > li > a {
	padding-bottom: 9px;
	padding-top: 9px;
	line-height: 26px;
}

.theme-compact .navbar-text {
	margin-bottom: 12px;
	margin-top: 14px;
}

.theme-compact .page-header {
	margin: 20px 0 10px;
	padding-bottom: 0;
}

.theme-compact .navbar-nav > li > a { margin-top: 0; margin-bottom: 0; }

.theme-compact .panel-heading {
	padding: 6px;
}

.theme-compact .panel-title {
	font-size: 14px;
}

/* correct arrow directions in RTL pages */
.theme-rtl #Previous .glyphicon, .theme-rtl #Next .glyphicon {
	transform: rotate(180deg);
}

/* theme-specific compact adjustments */
.theme-sandstone .theme-compact .btn {
	padding: 2.5px 10px;
}

/* file upload box formatting */
.upload-toolbox {
	overflow-x: hidden;
	max-width: 40rem;
	font-size: 1.2rem;
	text-align: left;
	background-color: rgba(255, 255, 255, 0.15);
}
.theme-rtl .upload-toolbox {
	text-align: right;
}
.upload-toolbox input[type="file"] {
	display: inline-block;
}
.form-control-static.well {
	margin-bottom: 0;
}
.file-type-error, .file-size-error {
	margin-top: 1rem;
}
.clear-upload {
	cursor: pointer;
}

/* auto-complete matches */
.select2-result-selectable .select2-match, .select2-result-unselectable .select2-match {
	font-weight: bold;
	background-color: rgba(255, 255, 0, 0.5);
}

/* continuous rotation animation */
.loop-rotate {
	animation: spin 2s linear infinite;
}
@keyframes spin { 100% { transform: rotate(360deg); } }

kbd {
	background-color: #eee;
	border-radius: 3px;
	border: 1px solid #b4b4b4;
	box-shadow: 0 1px 1px rgba(0, 0, 0, .2), 0 2px 0 0 rgba(255, 255, 255, .7) inset;
	color: #333;
	display: inline-block;
	font-size: .85em;
	font-weight: 700;
	line-height: 1;
	padding: 4px 8px;
	white-space: nowrap;
}

th:focus {
	outline: thin dotted;
}

img.help-shortcuts-launcher {
	height: 21px;
	cursor: pointer;
}

.theme-compact .help-shortcuts-launcher-container {
	margin: 10px !important;
}
