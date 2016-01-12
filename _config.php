<?php
/**
 * Simple extension to the UploadField class that allows sorting of multiple files.
 *
 * Works with has_many and many_many relations.
 */

$moduleDir = substr(Director::makeRelative(dirname(__FILE__)), 1);
define('SORTABLEFILE_DIR', $moduleDir);

