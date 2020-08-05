//Functionality: แสดงหน้าจอเปลี่ยนภาษา
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNULoadwLangues() {
    $.ajax({
        url: 'masShowLangues',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}

//Functionality: แสดงหน้าจออัพโหลดรูปภาพ
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNUUploadimg() {
    $.ajax({
        url: 'masShowupimgpage',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}

//Functionality: แสดงหน้าจอ datatables
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNULoadwTable() {
    $.ajax({
        url: 'masShowDatatables',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}

//Functionality: แสดงหน้าจอเพิ่มลบแก้ไข
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNULoadwInsertUpdateDelete() {
    $.ajax({
        url: 'masShowInsertUpdateDeletePage',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}


//Functionality: แสดงหน้าจอ datepicker
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNULoadwDatepicker() {
    $.ajax({
        url: 'common/cDatepicker/index',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}

//Functionality: แสดงหน้าจอทดสอบ css
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNULoadwCss() {
    $.ajax({
        url: 'common/cCss/index',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}

//Functionality: แสดงหน้าจอ api covid
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNUCovid() {
    $.ajax({
        url: 'common/cCovidApi/index',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}

//Functionality: แสดงหน้าจอการเขียนโปรแกรมแบบมีเงื่อนไข
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNUCondition() {
    $.ajax({
        url: 'common/cCondition/index',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}

//Functionality: แสดงหน้าจอ standard
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNUAll() {
    $.ajax({
        url: 'common/cAll/index',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}

//Functionality: แสดงหน้าจอแสดงความสัมพันธ์ของ object
//Parameters:  -
//Creator: 5/08/2020 Sooksanti(Non)
//Last Modified : 
//Return : - 
//Return Type: -
function JSxMNUObjrelations() {
    $.ajax({
        url: 'common/cObjectrelation/index',
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}