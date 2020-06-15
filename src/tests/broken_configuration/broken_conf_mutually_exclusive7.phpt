--TEST--
Broken configuration
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) print "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/broken_conf_mutually_exclusive7.ini
--FILE--
--EXPECT--
PHP Fatal error:  [snuffleupagus][0.0.0.0][config] Invalid configuration line: 'sp.disabled_functions.function("system").ret("0").drop().allow();': The rule must either be a `drop` or `allow` one on line 1 in Unknown on line 0

Fatal error: [snuffleupagus][0.0.0.0][config] Invalid configuration line: 'sp.disabled_functions.function("system").ret("0").drop().allow();': The rule must either be a `drop` or `allow` one on line 1 in Unknown on line 0

Fatal error: [snuffleupagus][0.0.0.0][config] Invalid configuration file in Unknown on line 0
Could not startup.