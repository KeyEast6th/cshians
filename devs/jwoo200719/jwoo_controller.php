<?php
// DB 설정
$db_host = 'db2.webtizen.kr';
$db_user = 'cshians';
$db_password = '1043dcmslab!';
$db_database = 'cshians_db';

// DB 연결
$connect = mysql_connect($db_host,$db_user,$db_password) or die(mysql_error());
mysql_select_db($db_database, $connect) or die(mysql_error());
mysql_query("SET NAMES 'utf8'", $connect) or die(mysql_error());

// DB에 데이터 입력
$location = $_POST['location'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$query = "insert into jwoo(location, sex, age) values('$location','$sex','$age')";
$result = mysql_query($query);

// DB 입력시 오류가 있다면 오류를 출력하고 없으면 DB 연결 끊기
if (!$result) die(mysql_error());
mysql_close($connect);

// 처리가 완료되면 성공 메시지 보여주고 이동할 페이지로 이동
echo "<script>alert(\"Input Success!\");</script>";
echo "<script>location.href='http://cshians.net/devs/jwoo200719/colortest/'</script>";
?>