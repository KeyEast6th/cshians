<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberListWithinGroup");
$query->setAction("select");
$query->setPriority("");

${'selected_group_srl14_argument'} = new ConditionArgument('selected_group_srl', $args->selected_group_srl, 'in');
${'selected_group_srl14_argument'}->checkNotNull();
${'selected_group_srl14_argument'}->createConditionValue();
if(!${'selected_group_srl14_argument'}->isValid()) return ${'selected_group_srl14_argument'}->getErrorMessage();
if(${'selected_group_srl14_argument'} !== null) ${'selected_group_srl14_argument'}->setColumnType('number');
if(isset($args->is_admin)) {
${'is_admin15_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin15_argument'}->createConditionValue();
if(!${'is_admin15_argument'}->isValid()) return ${'is_admin15_argument'}->getErrorMessage();
} else
${'is_admin15_argument'} = NULL;if(${'is_admin15_argument'} !== null) ${'is_admin15_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied16_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied16_argument'}->createConditionValue();
if(!${'is_denied16_argument'}->isValid()) return ${'is_denied16_argument'}->getErrorMessage();
} else
${'is_denied16_argument'} = NULL;if(${'is_denied16_argument'} !== null) ${'is_denied16_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls17_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls17_argument'}->createConditionValue();
if(!${'member_srls17_argument'}->isValid()) return ${'member_srls17_argument'}->getErrorMessage();
} else
${'member_srls17_argument'} = NULL;if(${'member_srls17_argument'} !== null) ${'member_srls17_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id18_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id18_argument'}->createConditionValue();
if(!${'s_user_id18_argument'}->isValid()) return ${'s_user_id18_argument'}->getErrorMessage();
} else
${'s_user_id18_argument'} = NULL;if(${'s_user_id18_argument'} !== null) ${'s_user_id18_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name19_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name19_argument'}->createConditionValue();
if(!${'s_user_name19_argument'}->isValid()) return ${'s_user_name19_argument'}->getErrorMessage();
} else
${'s_user_name19_argument'} = NULL;if(${'s_user_name19_argument'} !== null) ${'s_user_name19_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name20_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name20_argument'}->createConditionValue();
if(!${'s_nick_name20_argument'}->isValid()) return ${'s_nick_name20_argument'}->getErrorMessage();
} else
${'s_nick_name20_argument'} = NULL;if(${'s_nick_name20_argument'} !== null) ${'s_nick_name20_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name21_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name21_argument'}->createConditionValue();
if(!${'html_nick_name21_argument'}->isValid()) return ${'html_nick_name21_argument'}->getErrorMessage();
} else
${'html_nick_name21_argument'} = NULL;if(${'html_nick_name21_argument'} !== null) ${'html_nick_name21_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address22_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address22_argument'}->createConditionValue();
if(!${'s_email_address22_argument'}->isValid()) return ${'s_email_address22_argument'}->getErrorMessage();
} else
${'s_email_address22_argument'} = NULL;if(${'s_email_address22_argument'} !== null) ${'s_email_address22_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday23_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday23_argument'}->createConditionValue();
if(!${'s_birthday23_argument'}->isValid()) return ${'s_birthday23_argument'}->getErrorMessage();
} else
${'s_birthday23_argument'} = NULL;if(${'s_birthday23_argument'} !== null) ${'s_birthday23_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars24_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars24_argument'}->createConditionValue();
if(!${'s_extra_vars24_argument'}->isValid()) return ${'s_extra_vars24_argument'}->getErrorMessage();
} else
${'s_extra_vars24_argument'} = NULL;if(${'s_extra_vars24_argument'} !== null) ${'s_extra_vars24_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate25_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate25_argument'}->createConditionValue();
if(!${'s_regdate25_argument'}->isValid()) return ${'s_regdate25_argument'}->getErrorMessage();
} else
${'s_regdate25_argument'} = NULL;if(${'s_regdate25_argument'} !== null) ${'s_regdate25_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login26_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login26_argument'}->createConditionValue();
if(!${'s_last_login26_argument'}->isValid()) return ${'s_last_login26_argument'}->getErrorMessage();
} else
${'s_last_login26_argument'} = NULL;if(${'s_last_login26_argument'} !== null) ${'s_last_login26_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more27_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more27_argument'}->createConditionValue();
if(!${'s_regdate_more27_argument'}->isValid()) return ${'s_regdate_more27_argument'}->getErrorMessage();
} else
${'s_regdate_more27_argument'} = NULL;if(${'s_regdate_more27_argument'} !== null) ${'s_regdate_more27_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less28_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less28_argument'}->createConditionValue();
if(!${'s_regdate_less28_argument'}->isValid()) return ${'s_regdate_less28_argument'}->getErrorMessage();
} else
${'s_regdate_less28_argument'} = NULL;if(${'s_regdate_less28_argument'} !== null) ${'s_regdate_less28_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more29_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more29_argument'}->createConditionValue();
if(!${'s_last_login_more29_argument'}->isValid()) return ${'s_last_login_more29_argument'}->getErrorMessage();
} else
${'s_last_login_more29_argument'} = NULL;if(${'s_last_login_more29_argument'} !== null) ${'s_last_login_more29_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less30_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less30_argument'}->createConditionValue();
if(!${'s_last_login_less30_argument'}->isValid()) return ${'s_last_login_less30_argument'}->getErrorMessage();
} else
${'s_last_login_less30_argument'} = NULL;if(${'s_last_login_less30_argument'} !== null) ${'s_last_login_less30_argument'}->setColumnType('date');

${'page33_argument'} = new Argument('page', $args->{'page'});
${'page33_argument'}->ensureDefaultValue('1');
if(!${'page33_argument'}->isValid()) return ${'page33_argument'}->getErrorMessage();

${'page_count34_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count34_argument'}->ensureDefaultValue('10');
if(!${'page_count34_argument'}->isValid()) return ${'page_count34_argument'}->getErrorMessage();

${'list_count35_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count35_argument'}->ensureDefaultValue('20');
if(!${'list_count35_argument'}->isValid()) return ${'list_count35_argument'}->getErrorMessage();

${'sort_index31_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index31_argument'}->ensureDefaultValue('member.list_order');
if(!${'sort_index31_argument'}->isValid()) return ${'sort_index31_argument'}->getErrorMessage();

${'sort_order32_argument'} = new SortArgument('sort_order32', $args->sort_order);
${'sort_order32_argument'}->ensureDefaultValue('asc');
if(!${'sort_order32_argument'}->isValid()) return ${'sort_order32_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`member`.*')
,new SelectExpression('`site_srl`')
,new SelectExpression('`group_srl`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_member_group_member`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_group`.`group_srl`',$selected_group_srl14_argument,"in")
,new ConditionWithoutArgument('`member`.`member_srl`','`member_group`.`member_srl`',"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`is_admin`',$is_admin15_argument,"equal")
,new ConditionWithArgument('`member`.`denied`',$is_denied16_argument,"equal", 'and')
,new ConditionWithArgument('`member`.`member_srl`',$member_srls17_argument,"in", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`user_id`',$s_user_id18_argument,"like")
,new ConditionWithArgument('`member`.`user_name`',$s_user_name19_argument,"like", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$s_nick_name20_argument,"like", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$html_nick_name21_argument,"like", 'or')
,new ConditionWithArgument('`member`.`email_address`',$s_email_address22_argument,"like", 'or')
,new ConditionWithArgument('`member`.`birthday`',$s_birthday23_argument,"like", 'or')
,new ConditionWithArgument('`member`.`extra_vars`',$s_extra_vars24_argument,"like", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate25_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login26_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more27_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less28_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more29_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less30_argument,"less", 'or')),'and')
));
$query->setGroups(array(
'`member`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index31_argument'}, $sort_order32_argument)
));
$query->setLimit(new Limit(${'list_count35_argument'}, ${'page33_argument'}, ${'page_count34_argument'}));
return $query; ?>