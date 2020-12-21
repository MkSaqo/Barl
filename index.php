<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container-fluid ">
    <nav style="height: 50px" class="navbar bg-dark ">
    </nav>
    <div class="row" id="viewport">
      <div class="col-xl-1 col-md-1 d-md-none d-lg-none d-xl-inline" id="sidebar">
        
      </div>
      <div class="pl-0 col-xl-11 col-md-12" id="content">
        <h2 class="p-2 p-md-1">Служебная запись</h2>
        <div class="right m-2">
          <!-- <form class="form"> -->

          <div class="row m-2">

            <div class="form-group d-xl-flex col-xl-3 col-md-3">
              <label class="col-xl-4  col-form-label " for="nomer">Номер: </label>
              <input class="col-xl-8 col-md-10 form-control" type="number" name="nomer" id="nomer">

            </div>
            <div class="form-group d-xl-flex col-xl-2 col-md-2">
              <label class="col-xl-4  col-form-label " for="datepicker">Дата: </label>
              <input class="col-xl-8 col-md-8" id="datepicker">
            </div>

            <div class="form-group d-xl-flex col-xl-4 col-md-4">
              <label class="col-xl-6  col-form-label ">Категории статьи:</label>
              <ul class="pagination col-xl-5">
                <li class="page-item "><a id='pi1' class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item "><a id="pi5" class="page-link" href="#">5</a></li>
              </ul>
            </div>
            <div class="form-group d-xl-flex col-xl-3 col-md-3">
              <label class="col-xl-10  col-form-label ">Категория:</label>
              <ul class="pagination col-xl-2">
                <li class="page-item "><a id='pi1' class="page-link" href="#">1</a></li>
                <li class="page-item "><a id="pi5" class="page-link" href="#">2</a></li>
              </ul>
            </div>
          </div>



          <div class="head m-2">

            <div class="inline m-2">
              <div class="form-group row">
                <div class="col-xl-4 d-xl-flex col-md-3 ">
                  <label for="proshuOpl" class="col-xl-5  col-form-label">Прошу оплатить</label>
                  <input type="text" class="form-control " class="typeahead tt-query" autocomplete="off" spellcheck="false" id="proshuOpl">
                </div>
                <div class="col-xl-2 d-xl-flex col-md-2 ">
                  <label for="summu" class="col-xl-5  col-form-label">Сумму</label>
                  <input type="text" class="form-control col-xl-7 col-md-7" id="summu">
                  <span class="col-form-label d-md-none"> RUB</span>
                </div>
                <div class="col-xl-4 d-xl-flex col-md-3 ">
                  <label for="sUchNDS" class="col-xl-6  col-form-label">С учетом НДС</label>
                  <input type="text" class="form-control col-xl-6 col-md-6" id="sUchNDS">
                </div>
                
                <select class="form-control col-xl-2 col-md-4 ">
                  <option>НДС влечен в суму платежа</option>
                </select>

              </div>
              <hr>
            </div>
            <div class="row m-2">
              <div class="col-xl-6 ">
                <div class="row">

                  <label for="nazvPlat" class="col-xl-3 col-md-3 col-form-label">Название платежа</label>
                  <input type="text" class="form-control col-xl-4 col-md-4" id="nazvPlat">
                  <div class="col-xl-5 col-md-5">
                    <div class="inline col-xl-12 col-md-6 ">Вид платежа</div>
                    <div class="inline ">
                      <input class="rad " id="avansRad" name="av" type="radio">
                      <label for="avansRad">аванс</label>
                      <input class="rad " id="akancRasch" name="av" type="radio">
                      <label for="akancRasch">окончател расчет</label>
                    </div>
                    <div class="inline ">
                      <input type="text" class="col-xl-4 col-md-6" id="tokos"> <label for="tokos">%</label>
                    </div>

                  </div>
                </div>
                <div class="row mt-3">
                  <label for="kodStati" class="col-xl-3 col-md-3 col-form-label">код статьи</label>
                  <input type="text" id="kodStati" class="mb-md-3 form-control typeahead tt-query ">
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



                <input id="addRow" type="button" value="0 Добавить" class="btn btn-primary float-right">
              </div>

            </div>

          </div>
          <div class="inlne m-2">
            <h3 class="m-2">Ревизити получателя</h3>
            <div class="rekv p-2">
              <div class="form-group row">
                <label for="inn" class="col-xl-2 col-md-2 col-form-label">ИНН</label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="inn">
                <label for="statPlat" class="col-xl-3 col-md-3 col-form-label">Статус Плателшика</label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="statPlat">
              </div>
              <div class="form-group row">
                <label for="pc" class="col-xl-2 col-md-2 col-form-label">P/c</label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="pc">
                <label for="oktmo" class="col-xl-3 col-md-3 col-form-label">ОКТМО</label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="oktmo">
              </div>
              <div class="form-group row">
                <label for="korSchot" class="col-xl-2 col-md-2 col-form-label">Кор/счет</label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="korSchot">
                <label for="kbk" class="col-xl-3 col-md-3 col-form-label">КБК</label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="kbk">
              </div>
              <div class="form-group row">
                <label for="bank" class="col-xl-2 col-md-2 col-form-label">Банк</label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="bank">
                <label for="nalPeriod" class="col-xl-3 col-md-3 col-form-label">Налоговый период</label>
                <select disabled class="form-control col-xl-3 col-md-3" id="nalPeriod">
                  <option>0</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="bic" class="col-xl-2 col-md-2 col-form-label">Бик</label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="bic">
                <label for="poOsnPlat" class="col-xl-3 col-md-3 col-form-label">Показател основание платежа</label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="poOsnPlat">
              </div>
              <div class="form-group row">
                <label for="ufc" class="col-xl-2 col-md-2 col-form-label">УФК</label>
                <div class="col-xl-3 col-md-3">
                  <input type="checkbox" class="form-control col-xl-1 col-md-1" id="ufc">
                </div>
                <label for="PokTipPlat" class="col-xl-3 col-md-3 col-form-label">Покозател типа платежа </label>
                <input type="text" class="form-control col-xl-3 col-md-3" id="PokTipPlat">
              </div>
            </div>
            <h3 class="m-2">Основние платежа</h3>
            <div class="osn p-2">
              <div class="form-group row">
                <label for="bic1" class="col-xl-2 col-md-2 col-form-label">Договор</label>
                <span class="col-form-label">N<sup>o </sup></span>
                <input type="text" class="form-control col-xl-2 col-md-2" id="bic1">
                <span class="col-form-label">От</span>
                <div class=" col-xl-2 col-md-2">
                  <input class="form-control col-xl-7 col-md-7" id="datepicker1">
                </div>
                <label for="etap" class="col-xl-1 col-md-1 col-form-label">Этап <span class="col-form-label"> N<sup>o </sup></span></label>
                <input type="text" class="form-control col-xl-2 col-md-2" id="etap">
                <label class="fa fa-paperclip col-form-label" for="dogFile"></label>
                <input type="file" style="display:none" id="dogFile">

              </div>


              <div class="form-2group row">
                <label for="bic" class="col-xl-2 col-md-2 col-form-label">Счет</label>
                <span class="col-form-label">N<sup>o </sup></span>
                <input type="text" class="form-control col-xl-2 col-md-2" id="bic2">
                <span class="col-form-label">От</span>
                <div class=" col-xl-2 col-md-2">
                  <input class="form-control col-xl-7 col-md-7" id="datepicker2">
                </div>
                <label class="fa fa-paperclip schotFile col-form-label" for="schotFile"></label>
                <input type="file" style="display:none" id="schotFile">
              </div>
              <div class="form-group row">

                <label class="col-xl-2 col-md-2  col-form-label">Заривающие документы</label>
                <label class="fa fa-paperclip schotFile zakrDoc col-form-label" for="zakrDoc"></label>
                <input type="file" style="display:none" id="zakrDoc">

              </div>
            </div>
            </form>

          </div>


        </div>







      </div>
    </div>
  </div>

</body>
<script type="text/javascript">
  $('#datepicker').datepicker({
    format: "dd.mm.yyyy",
    uiLibrary: 'bootstrap4',
    language: "ru",
    autoclose: true
  });
  $('#datepicker1').datepicker({
    format: "dd.mm.yyyy",
    uiLibrary: 'bootstrap4',
    language: "ru",
    autoclose: true
  });
  $('#datepicker2').datepicker({
    format: "dd.mm.yyyy",
    uiLibrary: 'bootstrap4',
    language: "ru",
    autoclose: true
  });


  var getFilms = (query) => {
    return (query, processSync, processAsync) => {
      $.ajax({
        url: 'req.php',
        type: 'post',
        data: {
          q: query
        },
        type: "POST",
        success: (data) => {
          processAsync(JSON.parse(data));
        }
      });
    };
  }

  $('#proshuOpl').typeahead({
    highlight: true
  }, {
    limit: 5,
    source: getFilms()
  });



  $('#kodStati').typeahead({
    highlight: true
  }, {
    name: 'states',
    source: getFilms()
  });

  function remId(i) {
    $('#myTable tbody tr[value=' + i + ']').remove();
  }
  var i = 0;
  $("#addRow").click(function() {
    i++;
    var row = "<tr value='" + i + "'><td><input class='itogo' type='text'></td><td><input class='itogColSum' type='number'></td><td><input class='itogCenSum' type='number'></td><td><input class='itogStoimSum' type='number'></td><td><input type='number'></td><td><input type='text'></td><td><i id='removeId' value='" + i + "' class='fa fa-lg fa-trash' onclick='remId(" + i + ")' aria-hidden='true'></i></td> </tr>"
    $(row).insertBefore(".itog");
  });
  $('#myTableDiv').keyup(() => {
    var itogoSum = 0;
    var itogColSum = 0;
    var itogCenSum = 0;
    var itogStoimSum = 0;
    var tr = $('#myTable tbody tr');
    var itogo = $(".itogo");
    var itogCol = $(".itogColSum");
    var itogCen = $(".itogCenSum");
    var itogStoim = $(".itogStoimSum");
    for (let i = 0; i < tr.length - 1; i++) {
      if (tr[i]) {
        var itogoI = itogo[i];
        var itogColI = itogCol[i];
        var itogCenI = itogCen[i];
        var itogStoimI = itogStoim[i];

        itogoSum = parseInt($(itogoI).val()) ? itogoSum + parseInt($(itogoI).val()) : itogoSum;
        itogColSum = parseInt($(itogColI).val()) ? itogColSum + parseInt($(itogColI).val()) : itogColSum;
        itogCenSum = parseInt($(itogCenI).val()) ? itogCenSum + parseInt($(itogCenI).val()) : itogCenSum;
        itogStoimSum = parseInt($(itogStoimI).val()) ? itogStoimSum + parseInt($(itogStoimI).val()) : itogStoimSum;


      }
    }
    $("#itogoSum").text("Итого " + itogoSum)
    $("#itogColSum").text(itogColSum)
    $("#itogCenSum").text(itogCenSum)
    $("#itogStoimSum").text(itogStoimSum)
    $("#summu").attr("value", itogStoimSum)
    $("#sUchNDS").attr("value", itogStoimSum)

  })
</script>

</html>