<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="Content-Style-Type" content="text/css">
<TITLE></TITLE>
</HEAD>
<BODY>
<form action="confirm.php"  method="post">
<TABLE border="0">
  <TBODY>
    <TR>
      <TD colspan="4"><strong>社員情報入力フォーム</strong></TD>
    </TR>
    <TR>
      <TD>社員名</TD>
      <TD colspan="3"><input type="text" name="syain"></TD>
    </TR>
    <TR>
      <TD>年齢</TD>
      <TD colspan="3"><input type="text" name="nenrei"></TD>
    </TR>
    <TR>
      <TD>所属部署</TD>
      <TD colspan="3">
      <select name="busyo">
      <option value="開発部">開発部</option>
      <option value="営業部">営業部</option>
      <option value="人事部">人事部</option>
      </select>
    </TD>
    </TR>
    <TR>
      <TD colspan="4"><input type="submit" value="送信"></TD>
    </TR>
  </TBODY>
</TABLE>
</form>
</BODY>
</HTML>