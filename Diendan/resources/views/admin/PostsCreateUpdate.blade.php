@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<section class="content  text-dark" data-select2-id="11">
          <div class="" data-select2-id="10">
            
<style>
    .form-group.note-form-group.note-group-select-from-files {
        display: none;
    }
</style>
<section class="py-4" data-select2-id="9">
    <div class="container" data-select2-id="8">
        <div class="card rounded-0 shadow" data-select2-id="7">
            <div class="card-header">
                <h5 class="card-title">Update Topic Details</h5>
            </div>
            <div class="card-body" data-select2-id="6">
                <div class="container-fluid" data-select2-id="5">
                    <form action="" id="post-form" data-select2-id="[object HTMLInputElement]">
                        <input type="hidden" name="id" value="5">
                        <div class="form-group">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" class="form-control rounded-0" name="title" id="title" value="abc">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 px-0" data-select2-id="4">
                            <label for="category_id" class="control-label">Category</label>
                            <select class="form-control rounded-0 select2-hidden-accessible" name="category_id" id="category_id" data-select2-id="category_id" tabindex="-1" aria-hidden="true">
                                <option value="" disabled="" data-select2-id="16"></option>
                                                                <option value="6" data-select2-id="17">Chu Văn Long</option>
                                                                <option value="4" data-select2-id="18">JavaScript</option>
                                                                <option value="1" selected="" data-select2-id="2">PHP</option>
                                                                <option value="3" data-select2-id="19">Python</option>
                                                                <option value="2" data-select2-id="20">VB.NET</option>
                                                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-control rounded-0" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-category_id-container"><span class="select2-selection__rendered" id="select2-category_id-container" role="textbox" aria-readonly="true" title="PHP">PHP</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="form-group">
                            <div class="icheck-primary d-inline">
                                <input type="checkbox" id="status" name="status" value="1">
                                <label for="status">
                                </label>
                            </div>
                            <label for="status" class="control-label">Published</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer py-1 text-center">
                <button class="btn btn-flat btn-sm btn-primary bg-gradient-primary rounded-0" form="post-form"><i class="fa fa-save"></i> Save</button>
                <a class="btn btn-flat btn-sm btn-light bg-gradient-light border rounded-0" href="./?p=posts"><i class="fa fa-angle-left"></i> Cancel</a>
            </div>
        </div>
    </div>
</section>
<script>
    $(function(){
        $('#category_id').select2({
            placeholder:"Please Select Category Here",
            width:'100%',
            containerCssClass:'form-control rounded-0'
        })
        $('#content').summernote({
            height:"20em",
            placeholder:"Write your content here",
            toolbar: [
                [ 'style', [ 'style' ] ],
                [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                [ 'fontname', [ 'fontname' ] ],
                [ 'fontsize', [ 'fontsize' ] ],
                [ 'color', [ 'color' ] ],
                [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                [ 'table', [ 'table' ] ],
                [ 'insert', [ 'picture' ] ],
                [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
            ]
        })
        $('#post-form').submit(function(e){
            e.preventDefault()
            var _this = $(this)
            var el = $('<div>')
                el.addClass('alert alert-danger err_msg')
                el.hide()
            $('.err_msg').remove()
            if(_this[0].checkValidity() == false){
                _this[0].reportValidity();
                return false;
            }
            start_loader()
            $.ajax({
                url:_base_url_+"classes/Master.php?f=save_post",
                method:'POST',
                type:'POST',
                data:new FormData($(this)[0]),
                dataType:'json',
                cache:false,
                processData:false,
                contentType: false,
                error:err=>{
                    console.log(err)
                    alert('An error occurred')
                    end_loader()
                },
                success:function(resp){
                    if(resp.status == 'success'){
                    location.replace('./?page=posts/view_post&id='+resp.pid)
                    }else if(!!resp.msg){
                        el.html(resp.msg)
                        el.show('slow')
                        _this.prepend(el)
                        $('html, body').scrollTop(0)
                    }else{
                        alert('An error occurred')
                        console.log(resp)
                    }
                    end_loader()
                }
            })
        })
    })
</script>          </div>
</section>
@endsection