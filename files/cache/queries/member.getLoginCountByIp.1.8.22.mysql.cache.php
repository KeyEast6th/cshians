<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress5_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress5_argument'}->createConditionValue();
if(!${'ipaddress5_argument'}->isValid()) return ${'ipaddress5_argument'}->getErrorMessage();
} else
${'ipaddress5_argument'} = NULL;if(${'ipaddress5_argument'} !== null) ${'ipaddress5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress5_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>