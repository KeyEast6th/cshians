<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl12_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl12_argument'}->checkNotNull();
${'site_srl12_argument'}->createConditionValue();
if(!${'site_srl12_argument'}->isValid()) return ${'site_srl12_argument'}->getErrorMessage();
if(${'site_srl12_argument'} !== null) ${'site_srl12_argument'}->setColumnType('number');

${'addon13_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon13_argument'}->checkNotNull();
${'addon13_argument'}->createConditionValue();
if(!${'addon13_argument'}->isValid()) return ${'addon13_argument'}->getErrorMessage();
if(${'addon13_argument'} !== null) ${'addon13_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl12_argument,"equal")
,new ConditionWithArgument('`addon`',$addon13_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>