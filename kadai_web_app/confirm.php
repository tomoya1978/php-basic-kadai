<?php
// POSTリクエストから入力データを取得
$syain = $_POST['syain'];


$nenrei = $_POST['nenrei'];


$busyo = $_POST['busyo'];


?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="Content-Style-Type" content="text/css">
<TITLE></TITLE>
</HEAD>
<BODY>
<P><strong>入力内容をご確認ください</strong></P>
<P>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</P>
<TABLE border="1">
  <TBODY>
    <TR>
      <TD>項目</TD>
      <TD colspan="3">入力内容</TD>
    </TR>
    <TR>
      <TD>社員名</TD>
      <TD colspan="3"><?php echo $syain; ?></TD>
    </TR>
    <TR>
      <TD>年齢</TD>
      <TD colspan="3"><?php echo $nenrei; ?></TD>
    </TR>
    <TR>
      <TD>所属部署</TD>
      <TD colspan="3"><?php echo $busyo; ?></TD>
    </TR>
  </TBODY>
</TABLE>
<button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
<button id="cancel-btn" onclick="history.back();">キャンセル</button>
</BODY>
</HTML>

