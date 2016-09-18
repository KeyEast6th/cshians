<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status7_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status7_argument'}->createConditionValue();
if(!${'status7_argument'}->isValid()) return ${'status7_argument'}->getErrorMessage();
} else
${'status7_argument'} = NULL;if(${'status7_argument'} !== null) ${'status7_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl8_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl8_argument'}->checkFilter('number');
${'module_srl8_argument'}->createConditionValue();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
} else
${'module_srl8_argument'} = NULL;if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl9_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl9_argument'}->checkFilter('number');
${'document_srl9_argument'}->createConditionValue();
if(!${'document_srl9_argument'}->isValid()) return ${'document_srl9_argument'}->getErrorMessage();
} else
${'document_srl9_argument'} = NULL;if(${'document_srl9_argument'} !== null) ${'document_srl9_argument'}->setColumnType('number');

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('20');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'sort_index10_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index10_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index10_argument'}->isValid()) return ${'sort_index10_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status7_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl8_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index10_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count11_argument'}));
return $query; ?>