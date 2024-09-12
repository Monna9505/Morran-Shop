<?php

$pageid = get_the_ID();

include(locate_template('components/shared/header.php'));

// ACF modules
include(locate_template('components/modules/_modules.php'));

include(locate_template('components/shared/footer.php'));