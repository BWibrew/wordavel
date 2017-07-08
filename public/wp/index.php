<?php
/**
 * Force requests to '../wp' directory to redirect to WordPress admin dashboard.
 */
header('Location: ./cms/wp-admin');
exit;
