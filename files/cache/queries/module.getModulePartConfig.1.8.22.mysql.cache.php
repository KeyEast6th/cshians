<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module37_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module37_argument'}->checkNotNull();
${'module37_argument'}->createConditionValue();
if(!${'module37_argument'}->isValid()) return ${'module37_argument'}->getErrorMessage();
if(${'module37_argument'} !== null) ${'module37_argument'}->setColumnType('varchar');

${'module_srl38_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl38_argument'}->checkNotNull();
${'module_srl38_argument'}->createConditionValue();
if(!${'module_srl38_argument'}->isValid()) return ${'module_srl38_argument'}->getErrorMessage();
if(${'module_srl38_argument'} !== null) ${'module_srl38_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module37_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl38_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>