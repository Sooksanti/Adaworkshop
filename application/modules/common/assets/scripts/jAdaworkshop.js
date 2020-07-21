function JSxLGloadwLangues() {
    $.ajax({
        url: 'masShowLangues',
        async: true,
        success: function(data) {
            $('#odvContent').html(data);
        }

    });
}

function JSxIMGuploadimg() {
    $.ajax({
        url: 'masShowupimgpage',
        async: true,
        success: function(data) {
            $('#odvContent').html(data);
        }

    });
}

function JSxDTBLoadwTable() {
    $.ajax({
        url: 'masShowDatatables',
        async: true,
        success: function(data) {
            $('#odvContent').html(data);
        }

    });
}

function JSxCSTLoadwCrud() {
    $.ajax({
        url: 'masShowCrudPage',
        async: true,
        success: function(data) {
            $('#odvContent').html(data);
        }

    });
}


function JSxDPLoadwDatepicker() {
    $.ajax({
        url: 'common/cDatepicker/index',
        async: true,
        success: function(data) {
            $('#odvContent').html(data);
        }

    });
}

function JSxCSSLoadwCss() {
    $.ajax({
        url: 'common/cCss/index',
        async: true,
        success: function(data) {
            $('#odvContent').html(data);
        }

    });
}

function JSxAPICovid() {
    $.ajax({
        url: 'common/cCovidApi/index',
        async: true,
        success: function(data) {
            $('#odvContent').html(data);
        }

    });
}

function JSxPGCondition() {
    $.ajax({
        url: 'common/cCondition/index',
        async: true,
        success: function(data) {
            $('#odvContent').html(data);
        }

    });
}

$(document).ready(function() {
    JSxLGloadwLangues();
});

function JSxLGchangeLangues(lang) {
    $.ajax({
        type: 'post',
        url: 'common/cLangues/FSxCLGchangeLangues/' + lang,
        async: true,
        success: function(data) {
            $('#odvContent').html(data);
        }

    });
}

$("#oahLangues").click(function() {
    JSxLGloadwLangues()
});

$("#oahUploadimages").click(function() {
    JSxIMGuploadimg()
});

$("#oahDatatable").click(function() {
    JSxDTBLoadwTable()
});

$("#oahCrud").click(function() {
    JSxCSTLoadwCrud()
});

$("#oahDatepicker").click(function() {
    JSxDPLoadwDatepicker()
});

$("#oahCss").click(function() {
    JSxCSSLoadwCss()
});

$("#oahCovidApi").click(function() {
    JSxAPICovid()
});

$("#oahCondition").click(function() {
    JSxPGCondition()
});

$("#oahKoolReport").click(function() {
    window.open('common/reports/cReport/index', '_blank');
});