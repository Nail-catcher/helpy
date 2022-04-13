'use strict';

$(document).ready(function () {
    $(".results__tbl-row").on('click', function (event) {
        $(this).toggleClass('check');
    });

    $(".pages__title").on('click', function (event) {
        $(this).parent().toggleClass('open');
    });

    $(".toggle-password").click(function () {

        $(this).toggleClass("fa");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $("#cl").datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        minDate: new Date($('#hiddendelivdate').val()),
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']
    });

    $(function () {
        var dateFormat = "dd/mm/yyyy",
            from = $("#from").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            minDate: new Date($('#hiddendelivdate').val()),
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']
        }).on("change", function () {
            to.datepicker("option", "minDate", getDate(this));
        }),
            to = $("#to").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            minDate: new Date($('#hiddendelivdate').val()),
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']
        }).on("change", function () {
            from.datepicker("option", "maxDate", getDate(this));
        });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });

    var dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

    $("#attachment").on('change', function (e) {
        for (var i = 0; i < this.files.length; i++) {
            var fileBloc = $('<span/>', { class: 'file-block' }),
                fileName = $('<span/>', { class: 'name', text: this.files.item(i).name });
            fileBloc.append('<span class="file-delete"><span><svg><use xlink:href="#delete"></use></svg></span></span>').append(fileName);
            $("#filesList > #files-names").append(fileBloc).parent().parent().parent().addClass('open');
        };
        // Ajout des fichiers dans l'objet DataTransfer
        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
            for (var _iterator = this.files[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                var file = _step.value;

                dt.items.add(file);
            }
            // Mise à jour des fichiers de l'input file après ajout
        } catch (err) {
            _didIteratorError = true;
            _iteratorError = err;
        } finally {
            try {
                if (!_iteratorNormalCompletion && _iterator.return) {
                    _iterator.return();
                }
            } finally {
                if (_didIteratorError) {
                    throw _iteratorError;
                }
            }
        }

        this.files = dt.files;

        // EventListener pour le bouton de suppression créé
        $('span.file-delete').click(function () {
            $(".file").removeClass('open');
            var name = $(this).next('span.name').text();
            // Supprimer l'affichage du nom de fichier
            $(this).parent().remove();
            for (var _i = 0; _i < dt.items.length; _i++) {
                // Correspondance du fichier et du nom
                if (name === dt.items[_i].getAsFile().name) {
                    // Suppression du fichier dans l'objet DataTransfer
                    dt.items.remove(_i);
                    continue;
                }
            }
            // Mise à jour des fichiers de l'input file après suppression
            document.getElementById('attachment').files = dt.files;
        });
    });
});
//# sourceMappingURL=app.js.map
