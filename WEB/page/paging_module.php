<?php
header("Content-Type: text/html; charset=UTF-8");
include('./include.php');
$sql="SELECT g_idx FROM game ORDER BY g_idx DESC";
$k = mysql_query($sql);
$num = mysql_num_rows($k);

$page = ($_GET['page'])?$_GET['page']:1;
$list = 10;
$block = 10;

$pageNum = ceil($num/$list); // 총 페이지
$blockNum = ceil($pageNum/$block); // 총 블록
$nowBlock = ceil($page/$block);

$s_page = ($nowBlock * $block) - 9;
if ($s_page <= 1) {
    $s_page = 1;
}
$e_page = $nowBlock*$block;
if ($pageNum <= $e_page) {
    $e_page = $pageNum;
}
?>
	<div>
		<a href="<?=$PHP_SELP?>?page=<?=$s_page-1?>">이전</a>
	</div>
<?
for ($p=$s_page; $p<=$e_page; $p++) {
?>
	<!--페이징-->
	<a href="<?=$PHP_SELP?>?page=<?=$p?>"><?=$p?></a>

<?
}
?>
	<!--인덱스-->
	<div>
		<a href="<?=$PHP_SELP?>?page=<?=$e_page+1?>">다음</a>
	</div>


<?
$s_point = ($page-1) * $list;


$real_data = mysql_query("SELECT * FROM game ORDER BY g_idx DESC LIMIT $s_point,$list");

for ($i=1; $i<=$num; $i++) {
    $fetch = mysql_fetch_array($real_data);
?>
	<!--출력부-->
    <div>
        <?= $fetch['g_title'] ?>
    </div>

<?
    if ($fetch == false) {
        exit;
    }
}
?>