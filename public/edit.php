<?php
include "../template/header.php";
$db = mysqli_connect("localhost", 'root', 'Root.1234', "Filmer");
$sql = "SELECT * FROM `barl` WHERE `id` = " . $_GET['id'] . ";";
$q = mysqli_fetch_assoc(mysqli_query($db, $sql));
?>





<form action="router.php" method="post" enctype="multipart/form-data">
  <div class="cont1 row m-1">

    <div class="form-group d-xl-flex d-sm-flex col-xl-3 col-md-3 col">
      <label class="col-xl-4  col-form-label " for="nomer">Номер: </label>
      <input required value=<?php echo ($q['nomer']) ?> name="nomer" class="col-xl-8 col-md-10 col-sm-8 form-control" type="number" id="nomer">

    </div>
    <div class="form-group d-xl-flex d-sm-flex col-xl-3 col-md-3 col">
      <label class="col-xl-3 col-sm-4  col-form-label " for="datepicker">Дата: </label>
      <input required value='<?php echo ($q['datepicker']) ?>' name="datepicker" class="col-xl-8 col-md-8 col-sm-8" id="datepicker">
    </div>
    <div class="col-xl-6 d-flex col-md-6 col">

      <div class=" d-xl-flex d-sm-flex col-xl-7 col-md-6 col-sm-6">
        <label class="  col-form-label ">статьи:</label>
        <ul class="pagination ">
          <li class="page-item ch ">
            <div id="stati1" onclick='check(1)' class="pi1 page-link"><input type="radio" class="d-none" name="stati" value="1"> 1</div>
          </li>
          <li class="page-item ch">
            <div id="stati2" onclick='check(2)' class="page-link"> <input type="radio" class="d-none" name="stati" value="2"> 2</div>
          </li>
          <li class="page-item ch">
            <div id="stati3" onclick='check(3)' class="page-link"> <input type="radio" class="d-none" name="stati" value="3"> 3</div>
          </li>
          <li class="page-item ch">
            <div id="stati4" onclick='check(4)' class="page-link"> <input type="radio" class="d-none" name="stati" value="4"> 4</div>
          </li>
          <li class="page-item ch ">
            <div id="stati5" onclick='check(5)' class="pi5 page-link"><input type="radio" class="d-none" name="stati" value="5"> 5</div>
          </li>
        </ul>
      </div>
      <div class=" d-xl-flex d-sm-flex col-xl-5 col-md-6 col-sm-5">
        <label class="  col-form-label ">Категория:</label>
        <ul class="pagination ">
          <li class="page-item ch1">
            <div id="categorii1" onclick='check(1,true)' class="pi1 page-link"><input type="radio" class="d-none" name="categorii" value="1"> 1</div>
          </li>
          <li class="page-item ch1">
            <div id="categorii2" onclick='check(2,true)' class="pi5 page-link"><input type="radio" class="d-none" name="categorii" value="2"> 2</div>
          </li>
        </ul>
      </div>
    </div>


    <div class="head m-2">
      <div class="form-group row">
        <div class="row col-xl-6 col  col-md-6 col-sm-12  ">
          <div class="col-xl-6 d-xl-flex d-sm-flex  col-sm-6 ">
            <label for="proshuOpl" class="col-xl-5  col-form-label">оплатить</label>
            <input required value='<?php echo ($q['proshuOpl']) ?>' name="proshuOpl" type="text" class="form-control " class="typeahead tt-query" autocomplete="off" spellcheck="false" id="proshuOpl">
          </div>
          <div class="col-xl-6   d-xl-flex d-sm-flex  col-sm-6 ">
            <label for="summu" class="col-xl-5  col-form-label">Сумму</label>
            <input required value=<?php echo ($q['summu']) ?> name="summu" type="number" class="form-control col-xl-7  col-sm-  " id="summu">
            <span class="col-form-label d-md-none d-sm-none"> RUB</span>
          </div>
        </div>
        <div class="row margTop col-xl-6 col col-md-6  col-sm-12">

          <div class="col-xl-8  d-xl-flex d-sm-flex  col-sm-8 ">
            <label for="sUchNDS" class="col-xl-6 col-md-6  col-form-label">С учетом НДС</label>
            <input required value='<?php echo ($q['sUchNDS']) ?>' name="sUchNDS" type="number" class="form-control col-xl-6 col-md-6   col-sm-6" id="sUchNDS">
          </div>

          <select name="cont1Sel" class="form-control col-xl-4  col-sm-4 ">
            <option class="d-none"><?php echo ($q['cont1Sel']) ?></option>
            <option>НДС выклечен</option>
            <option>НДС вклечен</option>
          </select>
        </div>
      </div>
      <hr>
      <div class="row m-1">
        <div class="col-xl-5 ">
          <div class="row">
            <label for="nazvPlat" class="col-xl-3   col-md-3 col-sm-3 col-form-label">Название платежа</label>
            <textarea cols="30" rows="10" required  name="nazvPlat" type="text" class="form-control col  col-xl-4 col-md-4 col-sm-4" id="nazvPlat"><?php echo ($q['nazvPlat']) ?></textarea>
            <div class="col-xl-5 col-md-5 col-sm-5 col">
              <div class="inline col-xl-12 col-md-6  ">Вид платежа</div>
              <div class="inline ">
                <input required value="1" class="rad " id="avansRad" name="avansRad" type="radio">
                <label for="avansRad">аванс</label>
                <input required value="2" class="rad " id="avancRasch" name="avansRad" type="radio">
                <label for="avancRasch"> расчет</label>
              </div>
              <div class="inline ">
                <input required value=<?php echo ($q['tokos']) ?> name="tokos" type="number" class="col-xl-6 col-md-6 col-sm-6 col-8" id="tokos"> <label for="tokos">%</label>
              </div>

            </div>
          </div>
          <div class="row mt-3 mb-2 ">
            <label for="kodStati" class="col-xl-4 col-md-2 col-sm-3 col-4 col-form-label">код статьи</label>
            <div class="col-xl-8 col-md-8 col-sm-8 col-6">
              <input required value='<?php echo ($q['kodStati']) ?>' name="kodStati" type="text" id="kodStati" class="mb-md-3 form-control typeahead tt-query ">

            </div>
          </div>
        </div>
        <div id="myTableDiv" class="col-xl-6 ">
          <table id="myTable" class="table table-bordered">

            <thead class="thead-light">
              <tr>
                <th>Наиминования</th>
                <th>Кол</th>
                <th class="cena">Цена</th>
                <th class="ctoimost">Стоимость</th>
                <th>Заказ</th>
                <th>Подразд..</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr class="itog text-center">
                <th id="itogoSum">Итого</th>
                <th id="itogColSum">0</th>
                <th id="itogCenSum">0</th>
                <th id="itogStoimSum">0</th>
              </tr>

            </tbody>
          </table>



          <input required value="Добавить" id="addRow" type="button" value="0 Добавить" class="btn btn-primary float-right">
        </div>

      </div>

    </div>
  </div>
  <div class="cont2 inlne m-2">
    <h3 class="m-2">Ревизити получателя</h3>
    <div class="rekv p-2">
      <div class="form-group row">
        <label for="inn" class="col-5 col-xl-2 col-md-2 col-sm-2 col-form-label">ИНН</label>
        <input required value='<?php echo ($q['inn']) ?>' name="inn" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="inn">
        <label for="statPlat" class="col-xl-3 col-5 col-md-3 col-sm-3 col-form-label">Статус Плателшика</label>
        <input required value='<?php echo ($q['statPlat']) ?>' name="statPlat" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="statPlat">
      </div>
      <div class="form-group row">
        <label for="pc" class="col-5 col-xl-2 col-md-2 col-sm-2 col-form-label">P/c</label>
        <input required value='<?php echo ($q['pc']) ?>' name="pc" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="pc">
        <label for="oktmo" class="col-5 col-xl-3 col-md-3 col-sm-3 col-form-label">ОКТМО</label>
        <input required value='<?php echo ($q['oktmo']) ?>' name="oktmo" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="oktmo">
      </div>
      <div class="form-group row">
        <label for="korSchot" class="col-5 col-xl-2 col-md-2 col-sm-2 col-form-label">Кор/счет</label>
        <input required value='<?php echo ($q['korSchot']) ?>' name="korSchot" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="korSchot">
        <label for="kbk" class="col-5 col-xl-3 col-md-3 col-sm-3 col-form-label">КБК</label>
        <input required value='<?php echo ($q['kbk']) ?>' name="kbk" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="kbk">
      </div>
      <div class="form-group row">
        <label for="bank" class="col-5 col-xl-2 col-md-2 col-sm-2 col-form-label">Банк</label>
        <input required value='<?php echo ($q['bank']) ?>' name="bank" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="bank">
        <label for="nalPeriod" class="col-5 col-xl-3 col-md-3 col-sm-3 col-form-label">Налоговый период</label>
        <select name="nalPeriod" disabled class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="nalPeriod">
          <option>0</option>
        </select>
      </div>
      <div class="form-group row">
        <label for="bic" class="col-5 col-xl-2 col-md-2 col-sm-2 col-form-label">Бик</label>
        <input required value='<?php echo ($q['bic']) ?>' name="bic" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="bic">
        <label for="poOsnPlat" class="col-5 col-xl-3 col-md-3 col-sm-3 col-form-label">Показател основание платежа</label>
        <input required value='<?php echo ($q['poOsnPlat']) ?>' name="poOsnPlat" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="poOsnPlat">
      </div>
      <div class="form-group row">
        <label for="ufc" class="col-5 col-xl-2 col-md-2 col-sm-2 col-form-label">УФК</label>
        <div class="col-5 col-xl-3 col-md-3 col-sm-3">
          <input name="ufc" type="checkbox" class="form-control  col-1 col-xl-1 col-md-1 col-sm-1" id="ufc">
        </div>
        <label for="PokTipPlat" class="col-5 col-xl-3 col-md-3 col-sm-3 col-form-label">Покозател типа платежа </label>
        <input required value='<?php echo ($q['PokTipPlat']) ?>' name="PokTipPlat" type="text" class="form-control col-5 col-xl-3 col-md-3 col-sm-3" id="PokTipPlat">
      </div>
    </div>
  </div>
  <div class="cont3">
    <h3 class="m-2">Основние платежа</h3>
    <div class="osn p-2">
      <div class="form-group row d-flex">
        <div class="form-group row col-sm-8 col-md-8 col-xl-7">

          <label for="bic1" class="col-3 col-xl-3 col-md-3 col-sm-3 col-form-label">Договор</label>
          <span class="col-form-label">N<sup>o </sup></span>
          <input required value=<?php echo ($q['bic1']) ?> name="bic1" type="number" class="form-control col-3 col-xl-3 col-md-3 col-sm-3" id="bic1">
          <span class="col-form-label">От</span>
          <div class=" col-4 col-xl-5 col-md-5 col-sm-4">
            <input required value='<?php echo ($q['datepicker1']) ?>' name="datepicker1" class="form-control  col-xl-7 col-md-7 col-sm-7" id="datepicker1">
          </div>
        </div>
        <div class="form-group row col-sm-4 col-md-4 col-xl-5">


          <label for="etap" class="col-3 col-xl-4 col-md-5 col-sm-6 col-form-label">Этап <span class="col-form-label"> N<sup>o </sup></span></label>
          <input required value=<?php echo ($q['etap']) ?> name="etap" type="number" class="form-control col-3 col-xl-4 col-md-4 col-sm-4" id="etap">
          <label class="fa fa-paperclip col-form-label" style="font-size:2em" for="dogFile"></label>
          <input  name="dogFile" type="file" style="display:none" id="dogFile">
        <a href="<?php echo ($q['dogFile']) ?>" class="ml-2 btn btn-secondary" download >Скачать</a>
          <input value='<?php echo ($q['dogFile']) ?>' name="dogFile1" type="hidden"  >

        </div>
      </div>


      <div class="form-group row">
        <label for="bic2" class="col-3 col-xl-2 col-md-2 col-sm-2 col-form-label">Счет</label>
        <span class="col-form-label">N<sup>o </sup></span>
        <input required value=<?php echo ($q['bic2']) ?> name="bic2" type="number" class="form-control col-3 col-xl-2 col-md-2 col-sm-2" id="bic2">
        <span class="col-form-label">От</span>
        <div class=" col-4 col-xl-3 col-md-3 col-sm-4">
          <input required value='<?php echo ($q['datepicker2']) ?>' name="datepicker2" class="form-control  col-xl-7 col-md-7 col-sm-7" id="datepicker2">
        </div>
        <label class="fa fa-paperclip  schotFile col-form-label" style="font-size:2em" for="schotFile"></label>
        <input name="schotFile" type="file" style="display:none" id="schotFile">
        <a href="<?php echo ($q['schotFile']) ?>" class="ml-2 btn btn-secondary" download >Скачать</a>
        <input value='<?php echo ($q['schotFile']) ?>' name="schotFile1" type="hidden"  >
     
      </div>
      <div class="form-group row">

        <label class="col-5 col-xl-3 col-md-3 col-sm-3 col-form-label">Заривающие документы</label>
        <label class="fa fa-paperclip  zakrDoc col-form-label" style="font-size:2em" for="zakrDoc"></label>
        <input  name="zakrDoc" class="d-none" type="file" id="zakrDoc">
        <a href="<?php echo ($q['zakrDoc']) ?>" class="ml-2 btn btn-secondary" download >Скачать</a>
        <input type="hidden" value='<?php echo ($q['zakrDoc']) ?>' name="zakrDoc1">
      </div>
    </div>
  </div>
  <input class='d-none' type='number' value=<?php echo $_GET['id'] ?> name='id'>
  <input type="submit" value="Изменить" class="btn btn-success float-right" name="editData">
</form>
<script>
  $(document).ready(function() {
    check(<?php echo $q['stati'] ?>)
    check(<?php echo $q['categorii'] ?>, true)
    var av = $(".rad")[<?php echo $q['avansRad']-1; ?>]
    $(av).prop('checked', true);
    if('<?php echo $q['ufc']; ?>' == "on") $("#ufc").prop('checked', true)

  });
</script>
<?php include "../template/footer.php" ?>