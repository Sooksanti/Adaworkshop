<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="dropdown mb-3">
    <button class="btn btn-success dropdown-toggle" type="button" id="obtLangues" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Langues
    </button>
    <div class="dropdown-menu" aria-labelledby="obtLangues">
        <a class="dropdown-item" onclick="JSxLAGchangeLangues('th')">TH</a>
        <a class="dropdown-item" onclick="JSxLAGchangeLangues('en')">EN</a>
    </div>
</div>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><?php echo language('common/main/main','tLang')?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label id="olaLAGTest"><?php echo language('common/main/main','tEmail')?></label>
                <input type="email" class="form-control" placeholder="Enter email" id="oemLAGTest">
            </div>
            <div class="form-group">
                <label><?php echo language('common/main/main','tPass')?></label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" id="ocbLAGTest" class="form-check-input">
                <label class="form-check-label">Check me out</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary" id="osmLAGTest">Submit</button>
        </div>
    </form>
<script>

    //Functionality: เปลี่ยน session ภาษา
    //Parameters: lang รับมาจากฟังก์ชัน language
    //Creator: 5/08/2020 Sooksanti(Non)
    //Last Modified : 
    //Return : -
    //Return Type: - 
function JSxLAGchangeLangues(lang) {
    $.ajax({
        type: 'post',
        url: 'common/cLangues/FSxCLAGchangeLangues/' + lang,
        async: true,
        success: function(tData) {
            $('#odvMNUContent').html(tData);
        }

    });
}
</script>