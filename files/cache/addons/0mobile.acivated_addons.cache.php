<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = 'no_run_selected';
$ml = array(
'findidpw' => 1,
'xeicon' => 1,
'privacy' => 1,
'policy' => 1,
'bbs_open' => 1,
'register' => 1,
);
$addon_file = './addons/sejin7940_mustlogin/sejin7940_mustlogin.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NDp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjk6ImxvZ2luX21pZCI7czoxMjoibG9naW5faGVscGVyIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjE1OiJub19ydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6Njp7aTowO3M6ODoiZmluZGlkcHciO2k6MTtzOjY6InhlaWNvbiI7aToyO3M6NzoicHJpdmFjeSI7aTozO3M6NjoicG9saWN5IjtpOjQ7czo4OiJiYnNfb3BlbiI7aTo1O3M6ODoicmVnaXN0ZXIiO319')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NDp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjk6ImxvZ2luX21pZCI7czoxMjoibG9naW5faGVscGVyIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjE1OiJub19ydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6Njp7aTowO3M6ODoiZmluZGlkcHciO2k6MTtzOjY6InhlaWNvbiI7aToyO3M6NzoicHJpdmFjeSI7aTozO3M6NjoicG9saWN5IjtpOjQ7czo4OiJiYnNfb3BlbiI7aTo1O3M6ODoicmVnaXN0ZXIiO319')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "sejin7940_mustlogin";
$addon_time_log->called_extension = "sejin7940_mustlogin";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);