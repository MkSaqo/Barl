<?php include "header.php" ?>

<h2 class="p-3">Служебная запись</h2>
<div class="right m-3">
  <!-- <form class="form"> -->

  <div class="row m-3">

    <div class="form-group d-flex col-3">
      <label class="col-4 col-form-label" for="nomer">Номер: </label>
      <input class="col-8 form-control" type="number" name="nomer" id="nomer">

    </div>
    <div class="form-group d-flex col-2">
      <label class="col-4 col-form-label" for="datepicker">Дата: </label>
      <input class="col-8" id="datepicker">
    </div>

    <div class="form-group d-flex col-4">
      <span class="col-6 col-form-label ">Категории статьи:</span>
      <ul class="pagination col-5">
        <li class="page-item "><a id='pi1' class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item "><a id="pi5" class="page-link" href="#">5</a></li>
      </ul>
    </div>
    <div class="form-group d-flex col-3">
      <span class="col-10 col-form-label ">Категория строчности:</span>
      <ul class="pagination col-2">
        <li class="page-item "><a id='pi1' class="page-link" href="#">1</a></li>
        <li class="page-item "><a id="pi5" class="page-link" href="#">2</a></li>
      </ul>
    </div>
  </div>



  <div class="head m-2">

    <div class="inline m-3">
      <div class="form-group row">
        <div class="col-4 d-flex">
          <label for="proshuOpl" class="col-5 col-form-label">Прошу оплатить</label>
          <!-- <div class="bs-example"> -->
            <input type="text" class="form-control " class="typeahead tt-query" autocomplete="off" spellcheck="false" id="proshuOpl">
          <!-- </div> -->
        </div>
        <div class="col-2 d-flex">
          <label for="summu" class="col-5 col-form-label">Сумму</label>
          <input type="text" class="form-control col-7" id="summu">
          <span class="col-form-label"> RUB</span>
        </div>
        <div class="col-3 d-flex">
          <label for="sUchNDS" class="col-6 col-form-label">С учетом НДС</label>
          <input type="text" class="form-control col-6" id="sUchNDS">
        </div>
        <select class="form-control col-2">
          <option>НДС влечен в суму платежа</option>
        </select>

      </div>
      <hr>
    </div>
    <div class="row m-3">
      <div class="col-6">
        <div class="row">

          <label for="nazvPlat" class="col-3 col-form-label">Название платежа</label>
          <input type="text" class="form-control col-4" id="nazvPlat">
          <div class="col-5">
            <div class="inline">Вид платежа</div>
            <div class="inline">
              <input class="rad" id="avansRad" name="av" type="radio">
              <label for="avansRad">аванс</label>
              <input class="rad" id="akancRasch" name="av" type="radio">
              <label for="akancRasch">окончател расчет</label>
            </div>
            <div class="inline">
              <input type="text" class="col-4" id="tokos"> <label for="tokos">%</label>
            </div>

          </div>
        </div>
        <div class="row mt-3">
          <label for="kodStati" class="col-3 col-form-label">код статьи</label>
          <input type="text" id="kodStati" class="form-control typeahead tt-query " >
        </div>
      </div>
      <div id="myTableDiv" class="col-6">
        <table id="myTable" class="table table-bordered">

          <thead class="thead-light">
            <tr>
              <th>Наиминования</th>
              <th >Кол-во</th>
              <th class="cena">Цена</th>
              <th class="ctoimost">Стоимость</th>
              <th>Заказ</th>
              <th>Подразделенние</th>
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



        <input id="addRow" type="button" value="0 Добавить" class="btn btn-primary float-right">
      </div>

    </div>

  </div>

  <?php include 'footer.php' ?>