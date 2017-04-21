<?php
$x_min=isset($_POST['x_min'])?$_POST['x_min']:0;
$x_max=isset($_POST['x_max'])?$_POST['x_max']:0;
$y_min=isset($_POST['y_min'])?$_POST['y_min']:0;
$y_max=isset($_POST['y_max'])?$_POST['y_max']:0;
$z_min=isset($_POST['z_min'])?$_POST['z_min']:0;
$z_max=isset($_POST['z_max'])?$_POST['z_max']:0;
$x=isset($_POST['x'])?$_POST['x']:0;
$y=isset($_POST['y'])?$_POST['y']:0;
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form method='post'>
    <fieldset>
      <legend>Batasan</legend>
      <table>
            <tr><th>Variabel</th><th>Min Value</th><th>Max Value</th></tr>
            <tr>
              <td>Permintaan (x)</td>
              <td><input type='text' class='inptxt' name='x_min' /></td>
              <td><input type='text' class='inptxt' name='x_max' /></td>
            </tr>
            <tr>
              <td>Persediaan (y)</td>
              <td><input type='text' class='inptxt' name='y_min' /></td>
              <td><input type='text' class='inptxt' name='y_max' /></td>
            </tr>
            <tr>
              <td>Produksi (z)</td>
              <td><input type='text' class='inptxt' name='z_min' /></td>
              <td><input type='text' class='inptxt' name='z_max' /></td>
            </tr>
      </table>
    </fieldset>

    <fieldset>
      <legend>Inputan</legend>
      <table>
        <tr>
              <td>Permintaan yang diinginkan (x)</td>
              <td><input type='text' class='inptxt' name='x' /></td>
        </tr>
        <tr>
              <td>Persediaan di gudang (y)</td>
              <td><input type='text' class='inptxt' name='y' /></td>
        </tr>
      </table>
    </fieldset>
        <input type='submit' name='proses' value='proses' />
  </form>
</body>
</html>