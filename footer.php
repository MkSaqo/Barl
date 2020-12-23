</div>







</div>
</div>
</div>

</body>
<script type="text/javascript">
    show = false;
    $('#showHide').click(() => {
        // console.log($("#sidebar").attr('class'))
        if (show) {
            $("#sidebar").attr("class", "d-none")
            show = false;
        } else if ($(window).width() > 1100) {
            $("#sidebar").attr("class", "col-1 d-inline").removeAttr('style')
            show = true;
        } else {
            $("#sidebar").attr("class", "col-1 d-fixed").attr("style", 'position:fixed;z-index:1;top:0')
            show = true;
        }
    })


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
                success: (data) => {
                    processAsync(JSON.parse(data));
                }
            });
        };
    }

    $('#proshuOpl').typeahead({
        highlight: true
    }, {
        source: getFilms()
    });



    $('#kodStati').typeahead({
        highlight: true
    }, {
        source: getFilms()
    });

    function remId(i) {
        $('#myTable tbody tr[value=' + i + ']').remove();
    }
    var check = (checked, cat = false) => {
        if (cat) {
            $('#categorii' + checked).find('input').prop('checked', true);
            var otherRadios = $(".ch1 div")
            for (var i = 0; i < otherRadios.length; i++) {
                $(otherRadios[i]).attr('style', "background-color: white;color: gray");
            }
            $('#categorii' + checked).attr('style', "background-color: #007bff;color: white");

        } else {

            $('#stati' + checked).find('input').prop('checked', true);
            var otherRadios = $(".ch div")
            for (var i = 0; i < otherRadios.length; i++) {
                $(otherRadios[i]).attr('style', "background-color: white;color: gray");
            }
            $('#stati' + checked).attr('style', "background-color: #007bff;color: white");
        }
    }

    function remIdShow(i) {
        $.ajax({
            url: "req.php",
            type: 'post',
            data: {
                removeId: i
            },
            success: (data) => {
                console.log(data)
                if (data == "removed") {
                    $('#showTable tbody tr[value=' + i + ']').remove();

                }

            }

        })
    }
    var i = 0;
    $("#addRow").click(function() {
        i++;
        var row = "<tr value='" + i + "'><td><input class='itogo' type='text'></td><td><input class='itogColSum' type='number'></td><td><input class='itogCenSum' type='number'></td><td><input class='itogStoimSum' type='number'></td><td><input type='number'></td><td><input type='text'></td><td><i value='" + i + "' class='fa fa-lg fa-trash' onclick='remId(" + i + ")' aria-hidden='true'></i></td> </tr>"
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