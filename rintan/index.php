<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/tombol.css" rel="stylesheet" type="text/css" />
<title>Form Input</title>
<style type="text/css">
</style>
</head>

<body>
<form id="input" name="input" method="post" action="simpan.php">
  <table width="354" height="33" align="center" style="text-align: center; font-weight: bold; font-size:24px; text-shadow: 0px 1px 2px #999; font-family: Georgia, 'Times New Roman', Times, serif;">
    <tr>
      <td width="531" align="center"><span class="style1">FORM INPUT</span></td>
    </tr>
    <tr>
      <td><table style="background-repeat:no-repeat; center center fixed; background-size:contain; margin-top:10px; font-size:medium; background-color:#FFFFFF;  box-shadow:#666 1px 6px 6px; border:1px solid #CCC; border-radius:10px;" width="334" border="0" align="center" cellpadding="1" cellspacing="15">
        <tr>
          <td align="middle"><label for="no">NO</label>
            <input name="no" type="text" id="username" size="43" placeholder="No" class="textField" required=""/></td>
        </tr>
        <tr>
          <td align="middle"><label for="nama">Nama</label>
            <input name="nama" class="textField" type="text" id="nama" size="43" placeholder="Input Nama" required=""/></td>
          </tr>
        <tr>
            <td><input class="button blue medium" type="submit" name="submit" value="Simpan" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
