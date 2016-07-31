<?php 


//pdoクラスの生成は省略します
$search = $_POST['str'];

$sql = "SELECT sports_name
		FROM sports
		WHERE sports_name LIKE :search";
		
$sth = $dbh -> prepare($sql);
$sth -> bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
$sth -> execute();

$arySuggest = $sth -> fetchAll(PDO::FETCH_COLUMN);

echo json_encode($arySuggest);


?>