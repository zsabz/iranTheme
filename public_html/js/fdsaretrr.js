i=1;
$('#add_preview_row').click(function(){
    i=i+1;
    $('#preview_row_number').val(i);
    $('#preview_append').append(` <div dir="rtl" class="row">
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <label>عنوان صفحه</label>
            <input name="pre_title${i}" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="form-group">
            <label>تصویر محصول</label>
            <input name="pre_img${i}" type="file" class="form-control">
        </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="form-group">
            <label>فایل صفحه</label>
            <input name="pre_file${i}" type="file" class="form-control">
        </div>
    </div>

   
</div>`)
})