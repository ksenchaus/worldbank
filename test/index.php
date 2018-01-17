<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>World bank</title>
	<link rel="stylesheet" type="text/css" href="../test/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../test/css/main.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css"> 

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


  <script type="text/javascript">
$(function() {

    var b = $("#Editbox"),
        a = $("#jQuerySlider");
    a.slider({
        min: 1000,
        max: 3000000,
        step: 1000,
        change: function(a, c) {
            b.val(c.value)
        },
        slide: function(a, c) {
            b.val(c.value)
        }
    });
    b.val(1000).focusout(function() {
        a.slider("value", this.value)
    }).focusout()
});
</script>
  <script type="text/javascript">
$(function() {

    var b = $("#Editbox1"),
        a = $("#jQuerySlider1");
    a.slider({
        min: 1000,
        max: 3000000,
        step: 1000,
        change: function(a, c) {
            b.val(c.value)
        },
        slide: function(a, c) {
            b.val(c.value)
        }
    });
    b.val(1000).focusout(function() {
        a.slider("value", this.value)
    }).focusout()
});
</script>
<style>
.ui-slider .ui-slider-handle {
outline: none !important;
cursor: pointer !important;
}
</style>

<script>
function validate(inp) {  
inp.value = inp.value.replace(/[^0-9]/, "");
}
</script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>

<div class="container">
<header>
<div class="row header">
<div class="col-md-12">
<div class=" align">
<img src="../test/psd/logo.png" class="logo">
</div>

<div class="number">
<div>8-800-100-5005</div>
<div >+7 (3452) 522-000 </div>  
</div>

</div>
</div>
<div class="row menu">
<div class="col-md-12">
<ul class="headMenu">
<li style="width: 213px"><a href="#">Кредитные карты</a></li>
<li  style="width: 132px"><a href="#" >Вклады</a></li>
<li style="width: 183px"><a href="#">Дебетовые карты</a></li>
<li  style="width: 157px"><a href="#">Страхование</a></li>
<li  style="width: 122px"><a href="#">Друзья</a></li>
<li  style="width: 195px;"><a href="#" id="lastlink">Интернет-банк</a></li>
</ul>
</div>
</header>	
<div class="row">
<div class="col-md-12">
  <ol class="breadcrumb" id="breadcrumb">
  <li><a href="#">Главная</a></li>
  <li><a href="#">Вклады</a></li>
  <li class="active">Калькулятор</li>
</ol>
</div>
</div>
<div class="content">
 <div class="calculator">Калькулятор</div>
 <div class="logicCalculator">
 <form action="index.php" method="POST">

  <label for="data_oformlenia"><span>Дата оформления вклада</span>
  <input type="text" id="datepicker" class="input_width"> 
</label>
  <br>
  
  <label for="Editbox"><span>Сумма вклада</span>
  <input type="number" name="summa" id="Editbox" min="1000" max="3000000"  class="input_width">
  <div class="block1"><div id="jQuerySlider"></div></div>
</label>
  <br>
  <label for="Srok_vklada" ><span>Срок вклада</span>
  <select  id="Srok_vklada" class="input_width">
    <option value="1">1 год</option>
    <option value="2">2 года</option>
    <option value="3">3 года</option>
    <option value="4">4 года</option>
    <option value="5">5 лет</option>
  </select>
</label>
  <br>
  <label for="Popolnenie_vklada"><span>Пополнение вклада</span>
  <input type="radio" name="Popolnenie" id="Popolnenie_vklada" checked  value="no" >Нет
  <input type="radio" name="Popolnenie" id="Popolnenie_vklada" value="yes" >Да
</label>
  <br>
    <label for="Editbox1"><span>Сумма пополнения вклада</span>
  <input type="number" name="summa" id="Editbox1" min="1000" max="3000000"  class="input_width">
  <div class="block1"><div id="jQuerySlider1"></div></div>
</label>
<br>
 <input type="submit" name="Result" value="Расчитать" class="solve">
 <div class="Result">
   <span>Результат: </span>
 </div>
 </form>
 </div>
</div>

<div class="navbar-fixed-bottom ">
      <div class="footer-inner">
          <div class="container">
          	<div class=" footer">
          		<ul class="textfooter">
          			<li><a href="#">Кредитные карты</a></li>
          			<li><a href="#">Вклады</a></li>
          			<li><a href="#">Дебетовая карта</a></li>
          			<li><a href="#">Страхование</a></li>
          			<li><a href="#">Друзья</a></li>
          			<li><a href="#">Интернет-банк</a></li>
          		</ul>
            </div>
        </div>
	</div>
</div>

</div>
</body>
</html>