function JSxMNULoadwLangues() {
    $.ajax({
        url: 'masShowLangues',
        async: true,
        success: function(data) {
            $('#odvMNUContent').html(data);
        }

    });
}

function JSxMNUUploadimg() {
    $.ajax({
        url: 'masShowupimgpage',
        async: true,
        success: function(data) {
            $('#odvMNUContent').html(data);
        }

    });
}

function JSxMNULoadwTable() {
    $.ajax({
        url: 'masShowDatatables',
        async: true,
        success: function(data) {
            $('#odvMNUContent').html(data);
        }

    });
}

function JSxMNULoadwInsertUpdateDelete() {
    $.ajax({
        url: 'masShowInsertUpdateDeletePage',
        async: true,
        success: function(data) {
            $('#odvMNUContent').html(data);
        }

    });
}


function JSxMNULoadwDatepicker() {
    $.ajax({
        url: 'common/cDatepicker/index',
        async: true,
        success: function(data) {
            $('#odvMNUContent').html(data);
        }

    });
}

function JSxMNULoadwCss() {
    $.ajax({
        url: 'common/cCss/index',
        async: true,
        success: function(data) {
            $('#odvMNUContent').html(data);
        }

    });
}

function JSxMNUCovid() {
    $.ajax({
        url: 'common/cCovidApi/index',
        async: true,
        success: function(data) {
            $('#odvMNUContent').html(data);
        }

    });
}

function JSxMNUCondition() {
    $.ajax({
        url: 'common/cCondition/index',
        async: true,
        success: function(data) {
            $('#odvMNUContent').html(data);
        }

    });
}

$(document).ready(function() {
    JSxMNULoadwLangues();
});



$("#oahMNULangues").click(function() {
    JSxMNULoadwLangues()
});

$("#oahMNUUploadimages").click(function() {
    JSxMNUUploadimg()
});

$("#oahMNUDatatable").click(function() {
    JSxMNULoadwTable()
});

$("#oahMNUInsertUpdateDelete").click(function() {
    JSxMNULoadwInsertUpdateDelete()
});

$("#oahMNUDatepicker").click(function() {
    JSxMNULoadwDatepicker()
});

$("#oahMNUCss").click(function() {
    JSxMNULoadwCss()
});

$("#oahMNUCovidApi").click(function() {
    JSxMNUCovid()
});

$("#oahMNUCondition").click(function() {
    JSxMNUCondition()
});

$("#oahMNUKoolReport").click(function() {
    window.open('common/reports/cReport/index', '_blank');
});