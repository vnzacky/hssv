<?php echo isset($error) ? '<div class="alert alert-error">'.$error.'</div>' : ""; ?>
<form id="frmEx" name="frmEx" method="post" enctype="multipart/form-data">
    <div class="control-group">
        <label class="control-label">Chọn tập tin</label>
        <div class="controls">
            <input type="file" name="fex" value="" class="box" />
        </div>
    </div>
    
    <div class="control-group">
        <div class="controls"><input type="submit" class="btn btn-primary" name="upload" value="Thêm Điểm Rèn Luyện" /></div>
    </div>
</form>

<div class="box">
    Vui lòng kiểm tra file trước khi upload!<br />
    <a href="upload/bieumau/renluyen-11T1.xlsx" >Download File Điểm Rèn luyện Mẫu</a>
</div>
<script>
$(document).ready(function(){
    $('#frmEx').validate({
        rules : {
            fex : {required: true}
        },
        messages : {
            fex: "Vui lòng chọn tập tin"
        }
    })
});
</script>