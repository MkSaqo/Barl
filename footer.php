<div class="inlne m-3">
  <h3 class="m-3">Ревизити получателя</h3>
  <div class="rekv p-2">
    <div class="form-group row">
      <label for="inn" class="col-2 col-form-label">ИНН</label>
      <input type="text" class="form-control col-3" id="inn">
      <label for="statPlat" class="col-3 col-form-label">Статус Плателшика</label>
      <input type="text" class="form-control col-3" id="statPlat">
    </div>
    <div class="form-group row">
      <label for="pc" class="col-2 col-form-label">P/c</label>
      <input type="text" class="form-control col-3" id="pc">
      <label for="oktmo" class="col-3 col-form-label">ОКТМО</label>
      <input type="text" class="form-control col-3" id="oktmo">
    </div>
    <div class="form-group row">
      <label for="korSchot" class="col-2 col-form-label">Кор/счет</label>
      <input type="text" class="form-control col-3" id="korSchot">
      <label for="kbk" class="col-3 col-form-label">КБК</label>
      <input type="text" class="form-control col-3" id="kbk">
    </div>
    <div class="form-group row">
      <label for="bank" class="col-2 col-form-label">Банк</label>
      <input type="text" class="form-control col-3" id="bank">
      <label for="nalPeriod" class="col-3 col-form-label">Налоговый период</label>
      <select disabled class="form-control col-3" id="nalPeriod">
        <option>0</option>
      </select>
    </div>
    <div class="form-group row">
      <label for="bic" class="col-2 col-form-label">Бик</label>
      <input type="text" class="form-control col-3" id="bic">
      <label for="poOsnPlat" class="col-3 col-form-label">Показател основание платежа</label>
      <input type="text" class="form-control col-3" id="poOsnPlat">
    </div>
    <div class="form-group row">
      <label for="ufc" class="col-2 col-form-label">УФК</label>
      <div class="col-3">
        <input type="checkbox" class="form-control col-1" id="ufc">
      </div>
      <label for="PokTipPlat" class="col-3 col-form-label">Покозател типа платежа </label>
      <input type="text" class="form-control col-3" id="PokTipPlat">
    </div>
  </div>
  <h3 class="m-3">Основние платежа</h3>
  <div class="osn p-2">
    <div class="form-group row">
      <label for="bic" class="col-2 col-form-label">Договор</label>
      <span class="col-form-label">N<sup>o </sup></span>
      <input type="text" class="form-control col-2" id="bic">
      <span class="col-form-label">От</span>
      <div class=" col-2">
        <input class="form-control col-7" id="datepicker1">
      </div>
      <label for="etap" class="col-1 col-form-label">Этап <span class="col-form-label"> N<sup>o </sup></span></label>
      <input type="text" class="form-control col-2" id="etap">
      <label class="fa fa-paperclip col-form-label" for="dogFile"></label>
      <input type="file" style="display:none" id="dogFile">

    </div>


    <div class="form-group row">
      <label for="bic" class="col-2 col-form-label">Счет</label>
      <span class="col-form-label">N<sup>o </sup></span>
      <input type="text" class="form-control col-2" id="bic">
      <span class="col-form-label">От</span>
      <div class=" col-2">
        <input class="form-control col-7" id="datepicker2">
      </div>
      <label class="fa fa-paperclip schotFile col-form-label" for="schotFile"></label>
      <input type="file" style="display:none" id="schotFile">
    </div>
    <div class="form-group row">

      <label class="col-1 col-form-label">Заривающие документы</label>
      <label class="fa fa-paperclip zakrDoc col-form-label" for="zakrDoc"></label>
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
</script>

</html>