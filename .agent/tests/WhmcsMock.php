<?php
/**
 * WHMCS Mock Helper for Unit Testing
 * This file helps simulate WHMCS environment without the actual WHMCS core.
 */

namespace VMW\Tests; // Adjust as needed

use PHPUnit\Framework\TestCase;

if (!class_exists('WHMCS\Database\Capsule')) {
    class MockCapsule {
        public static function table($name) { return new static(); }
        public function where($col, $val) { return $this; }
        public function first() { return (object)[]; }
        public function get() { return []; }
        public function insert($data) { return true; }
        public function update($data) { return true; }
    }
    class_alias(MockCapsule::class, 'WHMCS\Database\Capsule');
}

if (!function_exists('logModuleCall')) {
    function logModuleCall($module, $action, $request, $response, $data = "", $variables = []) {}
}

if (!function_exists('logActivity')) {
    function logActivity($description, $userid = 0) {}
}

if (!function_exists('add_hook')) {
    function add_hook($hook, $priority, $callback) {}
}
