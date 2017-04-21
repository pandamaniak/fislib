<!DOCTYPE html>
<html>
<head>
	<title>Inputan</title>
	<style type='text/css'>
      * {font-family:verdana,arial,sans-serif;font-size:10pt;}
      h1{font-size:18pt;}
      h2{font-size:14pt;line-height:16pt;}
      fieldset{margin:5px;padding:5px;background-color:#eee;}
      legend {font-weight:bold;padding:5px;background-color:#ee9;}
      .inptxt{text-align:center;}
    </style>
</head>
<body>
	<h2>Sistem Inferensi Fuzzy</h2>
      <h1>Metode Tsukamoto</h1>
      <fieldset style='display:none'>
        <legend>Kasus</legend>
        <!-- reserved //-->
      </fieldset>
      <form method='post' action="ukamoto">
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