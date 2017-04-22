<?
include('./include.php');

/*전체승인
값이 넘어오는게 아니라, 전체승인을 체크하면
다른녀석들도 다 체크되게 해라 */

//부분승인
//승인요청이 100개까지 쌓일수있어.
for($i=0; $i<100; $i++){
	if($_POST['check'.$i]=='on'){
		$sql="select al_idx,p_id, filename from album where al_idx=".$i.";";
		$q=mysql_query($sql);
		$data=mysql_fetch_array($q);
		/*선택되어 넘어오는 녀석의 정보
		사진인덱스는 $data['al_idx']
		사진올린사람은 $data['p_id'], 
		단, al_idx는 partner의 albumAsk파일안에 규칙에 의해서 1부터 시작하게된다.
		따라서, 넘어오는 check들은 0부터가 아니라 1부터 시작한다.
		이때, 디렉토리에 저장되는 사진은 0부터임을 기억해라*/

		//1.유저의 album컬럼을 증가시켜라
			//partner의 album값을 증가시키기전에 현재 얼마인지 파악한다
				//album은 사진갯수, album_count는 업로드요청개수.
			$sql="select album, album_count from partner where p_id='".$data['p_id']."'";
			$q=mysql_query($sql);
			$album=mysql_fetch_array($q);

	//출력		echo($album['album']." ".$album['album_count']."<br>");
  
			//총앨범수 1증가, 앨범요청수 1감소
			$sql="update partner set album='".$album['album']."'+1 , album_count='".$album['album_count']."'-1 where p_id='".$data['p_id']."'";
			mysql_query($sql);
			

		//2.파일을이동시켜라		
		echo(rename("../partner/albumAsk/".$data['filename'].".jpg", "/home/hosting_users/talchuler6/www/partner/album/".$data['filename'].".jpg"));
		//3. album 칼럼에 승인 대기중이던 녀석의 filename을 path로 업소들이 불러와야 하므로 album_path테이블에 값을저장한다.
		$sql="insert into album_path (ap_idx, p_id, path) values ('','".$data['p_id']."','".$data['filename']."')";
		mysql_query($sql);

		//4. album 칼럼에 대기중이던 녀석을 없앤다.
		$sql="delete from album where al_idx='".$data['al_idx']."'";
		mysql_query($sql);
		
		//5.유저의 album_count를 감소시켜라
		$sql="update partner set album_count='".$album['album_count']."'-1 where p_id='".$data['p_id']."'";
		mysql_query($sql);

	}
}
?>
<script>
history.back();
</script>