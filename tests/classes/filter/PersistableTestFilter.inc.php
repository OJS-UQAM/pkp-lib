<?php

/**
 * @file tests/classes/filter/PersistableTestFilter.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class PersistableTestFilter
 * @ingroup tests_classes_filter
 *
 * @brief Test class to be used to test the FilterDAO.
 */

import('lib.pkp.classes.filter.PersistableFilter');

class PersistableTestFilter extends PersistableFilter {
	/**
	 * Constructor
	 * @param $filterGroup FilterGroup
	 */
	function __construct($filterGroup) {
		import('lib.pkp.classes.filter.FilterSetting');
		$this->addSetting(new FilterSetting('some-key', null, null));
		parent::__construct($filterGroup);
	}

	//
	// Implement template methods from PersistableFilter
	//
	/**
	 * @copydoc PersistableFilter::getClassName()
	 */
	function getClassName() {
		return 'lib.pkp.tests.classes.filter.PersistableTestFilter';
	}
}

