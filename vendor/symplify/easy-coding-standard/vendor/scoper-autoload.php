<?php

// scoper-autoload.php @generated by PhpScoper

$loader = (static function () {
    // Backup the autoloaded Composer files
    $existingComposerAutoloadFiles = $GLOBALS['__composer_autoload_files'] ?? [];

    $loader = require_once __DIR__.'/autoload.php';
    // Ensure InstalledVersions is available
    $installedVersionsPath = __DIR__.'/composer/InstalledVersions.php';
    if (file_exists($installedVersionsPath)) require_once $installedVersionsPath;

    // Restore the backup and ensure the excluded files are properly marked as loaded
    $GLOBALS['__composer_autoload_files'] = \array_merge(
        $existingComposerAutoloadFiles,
        \array_fill_keys(['5928a00fa978807cf85d90ec3f4b0147', '0e6d7bf4a5811bfa5cf40c5ccd6fae6a', 'a4a119a56e50fbb293281d9a48007e0e', '23c18046f52bef3eea034657bafda50f', '7bdb062931f6e7102434c3ad28423eb6', '7edcabe1b67fbb38f4972a722bbbb429', 'f49032536fdd06afd9df7191c3f21453', '18e965175c6bcd96deba6bc791a44373', '51421aa3e5e8003b70a289762d146a2a', '7b0b5d7b98f96ad751222ae5cc98cfcb', 'd1fb64fd99fc22e28e29a95cc0ea533a'], true)
    );

    return $loader;
})();

// Class aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#class-aliases
if (!function_exists('humbug_phpscoper_expose_class')) {
    function humbug_phpscoper_expose_class($exposed, $prefixed) {
        if (!class_exists($exposed, false) && !interface_exists($exposed, false) && !trait_exists($exposed, false)) {
            spl_autoload_call($prefixed);
        }
    }
}
humbug_phpscoper_expose_class('AutoloadIncluder', 'ECSPrefix202408\AutoloadIncluder');
humbug_phpscoper_expose_class('ComposerAutoloaderInitcd2649cd89d6ea688b2e96c8cd48f2ee', 'ECSPrefix202408\ComposerAutoloaderInitcd2649cd89d6ea688b2e96c8cd48f2ee');
humbug_phpscoper_expose_class('Sample1', 'ECSPrefix202408\Sample1');
humbug_phpscoper_expose_class('Sample2', 'ECSPrefix202408\Sample2');
humbug_phpscoper_expose_class('FooTest', 'ECSPrefix202408\FooTest');
humbug_phpscoper_expose_class('Attribute', 'ECSPrefix202408\Attribute');
humbug_phpscoper_expose_class('PhpToken', 'ECSPrefix202408\PhpToken');
humbug_phpscoper_expose_class('Stringable', 'ECSPrefix202408\Stringable');
humbug_phpscoper_expose_class('UnhandledMatchError', 'ECSPrefix202408\UnhandledMatchError');
humbug_phpscoper_expose_class('ValueError', 'ECSPrefix202408\ValueError');
humbug_phpscoper_expose_class('CURLStringFile', 'ECSPrefix202408\CURLStringFile');
humbug_phpscoper_expose_class('ReturnTypeWillChange', 'ECSPrefix202408\ReturnTypeWillChange');

// Function aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#function-aliases
if (!function_exists('array_is_list')) { function array_is_list() { return \ECSPrefix202408\array_is_list(...func_get_args()); } }
if (!function_exists('bar')) { function bar() { return \ECSPrefix202408\bar(...func_get_args()); } }
if (!function_exists('baz')) { function baz() { return \ECSPrefix202408\baz(...func_get_args()); } }
if (!function_exists('enum_exists')) { function enum_exists() { return \ECSPrefix202408\enum_exists(...func_get_args()); } }
if (!function_exists('fdiv')) { function fdiv() { return \ECSPrefix202408\fdiv(...func_get_args()); } }
if (!function_exists('foo')) { function foo() { return \ECSPrefix202408\foo(...func_get_args()); } }
if (!function_exists('get_debug_type')) { function get_debug_type() { return \ECSPrefix202408\get_debug_type(...func_get_args()); } }
if (!function_exists('get_resource_id')) { function get_resource_id() { return \ECSPrefix202408\get_resource_id(...func_get_args()); } }
if (!function_exists('lowercaseUntilFirstLower')) { function lowercaseUntilFirstLower() { return \ECSPrefix202408\lowercaseUntilFirstLower(...func_get_args()); } }
if (!function_exists('mb_check_encoding')) { function mb_check_encoding() { return \ECSPrefix202408\mb_check_encoding(...func_get_args()); } }
if (!function_exists('mb_chr')) { function mb_chr() { return \ECSPrefix202408\mb_chr(...func_get_args()); } }
if (!function_exists('mb_convert_case')) { function mb_convert_case() { return \ECSPrefix202408\mb_convert_case(...func_get_args()); } }
if (!function_exists('mb_convert_encoding')) { function mb_convert_encoding() { return \ECSPrefix202408\mb_convert_encoding(...func_get_args()); } }
if (!function_exists('mb_convert_variables')) { function mb_convert_variables() { return \ECSPrefix202408\mb_convert_variables(...func_get_args()); } }
if (!function_exists('mb_decode_mimeheader')) { function mb_decode_mimeheader() { return \ECSPrefix202408\mb_decode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_decode_numericentity')) { function mb_decode_numericentity() { return \ECSPrefix202408\mb_decode_numericentity(...func_get_args()); } }
if (!function_exists('mb_detect_encoding')) { function mb_detect_encoding() { return \ECSPrefix202408\mb_detect_encoding(...func_get_args()); } }
if (!function_exists('mb_detect_order')) { function mb_detect_order() { return \ECSPrefix202408\mb_detect_order(...func_get_args()); } }
if (!function_exists('mb_encode_mimeheader')) { function mb_encode_mimeheader() { return \ECSPrefix202408\mb_encode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_encode_numericentity')) { function mb_encode_numericentity() { return \ECSPrefix202408\mb_encode_numericentity(...func_get_args()); } }
if (!function_exists('mb_encoding_aliases')) { function mb_encoding_aliases() { return \ECSPrefix202408\mb_encoding_aliases(...func_get_args()); } }
if (!function_exists('mb_get_info')) { function mb_get_info() { return \ECSPrefix202408\mb_get_info(...func_get_args()); } }
if (!function_exists('mb_http_input')) { function mb_http_input() { return \ECSPrefix202408\mb_http_input(...func_get_args()); } }
if (!function_exists('mb_http_output')) { function mb_http_output() { return \ECSPrefix202408\mb_http_output(...func_get_args()); } }
if (!function_exists('mb_internal_encoding')) { function mb_internal_encoding() { return \ECSPrefix202408\mb_internal_encoding(...func_get_args()); } }
if (!function_exists('mb_language')) { function mb_language() { return \ECSPrefix202408\mb_language(...func_get_args()); } }
if (!function_exists('mb_lcfirst')) { function mb_lcfirst() { return \ECSPrefix202408\mb_lcfirst(...func_get_args()); } }
if (!function_exists('mb_list_encodings')) { function mb_list_encodings() { return \ECSPrefix202408\mb_list_encodings(...func_get_args()); } }
if (!function_exists('mb_ord')) { function mb_ord() { return \ECSPrefix202408\mb_ord(...func_get_args()); } }
if (!function_exists('mb_output_handler')) { function mb_output_handler() { return \ECSPrefix202408\mb_output_handler(...func_get_args()); } }
if (!function_exists('mb_parse_str')) { function mb_parse_str() { return \ECSPrefix202408\mb_parse_str(...func_get_args()); } }
if (!function_exists('mb_scrub')) { function mb_scrub() { return \ECSPrefix202408\mb_scrub(...func_get_args()); } }
if (!function_exists('mb_str_pad')) { function mb_str_pad() { return \ECSPrefix202408\mb_str_pad(...func_get_args()); } }
if (!function_exists('mb_str_split')) { function mb_str_split() { return \ECSPrefix202408\mb_str_split(...func_get_args()); } }
if (!function_exists('mb_stripos')) { function mb_stripos() { return \ECSPrefix202408\mb_stripos(...func_get_args()); } }
if (!function_exists('mb_stristr')) { function mb_stristr() { return \ECSPrefix202408\mb_stristr(...func_get_args()); } }
if (!function_exists('mb_strlen')) { function mb_strlen() { return \ECSPrefix202408\mb_strlen(...func_get_args()); } }
if (!function_exists('mb_strpos')) { function mb_strpos() { return \ECSPrefix202408\mb_strpos(...func_get_args()); } }
if (!function_exists('mb_strrchr')) { function mb_strrchr() { return \ECSPrefix202408\mb_strrchr(...func_get_args()); } }
if (!function_exists('mb_strrichr')) { function mb_strrichr() { return \ECSPrefix202408\mb_strrichr(...func_get_args()); } }
if (!function_exists('mb_strripos')) { function mb_strripos() { return \ECSPrefix202408\mb_strripos(...func_get_args()); } }
if (!function_exists('mb_strrpos')) { function mb_strrpos() { return \ECSPrefix202408\mb_strrpos(...func_get_args()); } }
if (!function_exists('mb_strstr')) { function mb_strstr() { return \ECSPrefix202408\mb_strstr(...func_get_args()); } }
if (!function_exists('mb_strtolower')) { function mb_strtolower() { return \ECSPrefix202408\mb_strtolower(...func_get_args()); } }
if (!function_exists('mb_strtoupper')) { function mb_strtoupper() { return \ECSPrefix202408\mb_strtoupper(...func_get_args()); } }
if (!function_exists('mb_strwidth')) { function mb_strwidth() { return \ECSPrefix202408\mb_strwidth(...func_get_args()); } }
if (!function_exists('mb_substitute_character')) { function mb_substitute_character() { return \ECSPrefix202408\mb_substitute_character(...func_get_args()); } }
if (!function_exists('mb_substr')) { function mb_substr() { return \ECSPrefix202408\mb_substr(...func_get_args()); } }
if (!function_exists('mb_substr_count')) { function mb_substr_count() { return \ECSPrefix202408\mb_substr_count(...func_get_args()); } }
if (!function_exists('mb_ucfirst')) { function mb_ucfirst() { return \ECSPrefix202408\mb_ucfirst(...func_get_args()); } }
if (!function_exists('preg_last_error_msg')) { function preg_last_error_msg() { return \ECSPrefix202408\preg_last_error_msg(...func_get_args()); } }
if (!function_exists('printPHPCodeSnifferTestOutput')) { function printPHPCodeSnifferTestOutput() { return \ECSPrefix202408\printPHPCodeSnifferTestOutput(...func_get_args()); } }
if (!function_exists('sample')) { function sample() { return \ECSPrefix202408\sample(...func_get_args()); } }
if (!function_exists('str_contains')) { function str_contains() { return \ECSPrefix202408\str_contains(...func_get_args()); } }
if (!function_exists('str_ends_with')) { function str_ends_with() { return \ECSPrefix202408\str_ends_with(...func_get_args()); } }
if (!function_exists('str_starts_with')) { function str_starts_with() { return \ECSPrefix202408\str_starts_with(...func_get_args()); } }
if (!function_exists('trigger_deprecation')) { function trigger_deprecation() { return \ECSPrefix202408\trigger_deprecation(...func_get_args()); } }
if (!function_exists('uv_poll_init_socket')) { function uv_poll_init_socket() { return \ECSPrefix202408\uv_poll_init_socket(...func_get_args()); } }
if (!function_exists('xyz')) { function xyz() { return \ECSPrefix202408\xyz(...func_get_args()); } }

return $loader;
