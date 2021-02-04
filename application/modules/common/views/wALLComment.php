<script src="<?php echo site_url('application/modules/common/assets/scripts/jAdastandardtest.js') ?>"></script>
<p id="ospArray"></p>
<p id="ospBoolean"></p>
<p id="ospNumber"></p>
<p id="ospFloat"></p>
<p id="ospDate"></p>
<p id="ospText"></p>

<script>
document.getElementById("ospArray").innerHTML = JSaCMTArray()
document.getElementById("ospBoolean").innerHTML = JSbCMTBoolean()
document.getElementById("ospNumber").innerHTML = JSnCMTNumber()
document.getElementById("ospFloat").innerHTML = JScCMTFloat()
document.getElementById("ospDate").innerHTML = JSdCMTDate()
document.getElementById("ospText").innerHTML = JSdCMTText()
</script>