<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * Created by Belous Alex.
 * Description: Converter
 * Date: 15/11/22
 */
spl_autoload_register();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Converter Temperatures</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script defer src="/assets/js/jquery.min.js"></script>
    <script defer src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h2>Converter Temperatures</h2>
<form method="post" action="#">
  <div class="form-group col-md-4">
    <label for="number">Degree</label>
    <input name="number" type="number" class="form-control" id="number">
  </div>
  <div class="form-group col-md-4">
    <label for="scale">Scale</label>
    <select name="scale" class="form-control" id="scale">
      <option value="kelvin">Kelvin</option>
      <option value="celsius">Celsius</option>
      <option value="fahrenheit">Fahrenheit</option>
      <option value="rankine">Rankine</option>
      <option value="newton">Newton</option>
      <option value="rømer">Rømer</option>
      <option value="réaumu">Réaumur</option>
      <option value="delisle">Delisle</option>
    </select>
  </div>
    <button type="submit" name="convert" class="btn btn-primary">Convert</button>
    <button type="submit" name="reset" class="btn btn-primary">Reset</button>
</form>
</body>
<?php
if (isset($_POST['convert'])) {
    $convertNumber = $_POST['number'];
    $convertType = $_POST['scale'];
    $conversion = Classes\BaseConverter::convert($convertNumber, $convertType);
    echo "The initial temperature was $convertNumber. The new temperature is $conversion.";
}