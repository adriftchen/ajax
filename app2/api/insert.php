<?php
//處理新增資料的請求
include_once "../base.php";

$res=$Stu->save($_POST);

if($res){
  echo "成功";
}else{
  echo "失敗";
}

// to("../index.php");
//前端新增觸發js，ajax在背景作業把資料傳到insert.php，不需要to()了
?>