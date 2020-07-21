<h1 class="text-center">รายงานสถานการณ์ โควิด-19</h1>
<div class="small-box bg-danger mt-3">
    <div class="inner text-center">
        <h5>ติดเชื้อสะสม</h5>
        <h3><?php echo number_format($covid->Confirmed); ?></h3>
        <h5>[+<?php echo $covid->NewConfirmed; ?>]</h5>
    </div>
</div>
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner text-center">
                <h5>หายแล้ว</h5>
                <h3><?php echo number_format($covid->Recovered); ?></h3>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner text-center">
                <h5>รักษาอยู่ใน รพ.</h5>
                <h3><?php echo number_format($covid->Hospitalized); ?></h3>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner text-center">
                <h5>เสียชีวิต</h5>
                <h3><?php echo number_format($covid->Deaths); ?></h3>
            </div>
        </div>
    </div>
</div>
<p>อัพเดทข้อมูลล่าสุด : <?php echo $covid->UpdateDate; ?></p>