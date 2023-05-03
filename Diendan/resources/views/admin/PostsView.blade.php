@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<section class="content  text-dark">
          <div class="">
            <style>
    .post-user, .comment-user{
        width: 1.8em;
        height: 1.8em;
        object-fit:cover;
        object-position:center center;
    }
</style>
<div class="card card-outline card-navy " style="background:none; box-shadow:none">
    <div class="card-header">
        <h4 class="card-title">Post Details</h4>
        <div class="card-tools">
            <a href="./?page=posts/manage_post&amp;id=5" class="btn btn-sm btn-flat bg-gradient-primary btn-primary"><i class="fa fa-edit"></i> Edit Post</a>
            <button type="button" id="delete_post" class="btn btn-sm btn-flat bg-gradient-danger btn-danger"><i class="fa fa-trash"></i> Delete</button>
        </div>
    </div>
    <div class="card-body">
        <div class="contrain-fluid">
                        <div style="line-height:1em" class="mb-3">
                <h2 class="font-weight-bold mb-0 border-bottom">abc</h2>
                <div class="py-1">
                    <small class="badge badge-light border text-dark rounded-pill px-3 me-2"><i class="far fa-circle"></i> PHP</small>
                    <span class="me-2"><img src="http://localhost/odfs/uploads/logo.png?v=1652665183" alt="" class="img-thumbnail border border-dark post-user rounded-circle p-0"></span>
                    <span class="">nva@gmail.com</span>
                </div>
            </div>
            <div>
                <p>sfdgfsđhdfh</p>            </div>
            <hr class="mx-n3">
            <h4 class="font-weight-bolder">Comments:</h4>
            <div class="list-group comment-list mb-3 rounded-0">
                                <div class="list-group-item list-group-item-action mb-1 border-top">
                    <div class="d-flex align-items-center w-100">
                        <div class="col-auto">
                            <img src="http://localhost/odfs/uploads/logo.png?v=1652665183" alt="" class="comment-user rounded-circle img-thumbnail p-0 border">
                        </div>
                        <div class="col-auto flex-shrink-1 flex-grow-1">
                            <div style="line-height:1em">
                                <div class="font-weight-bolder">nva@gmail.com</div>
                                <div><small class="text-muted"><i>2023-04-21 09:13 pm</i></small></div>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="text-danger text-decoration-none delete-comment" data-id="6"><i class="fa fa-trash"></i></a>
                    </div>
                    <hr>
                    <div><p>mot hai ba</p><p><br></p></div>
                </div>
                                <div class="list-group-item list-group-item-action mb-1 border-top">
                    <div class="d-flex align-items-center w-100">
                        <div class="col-auto">
                            <img src="http://localhost/odfs/uploads/logo.png?v=1652665183" alt="" class="comment-user rounded-circle img-thumbnail p-0 border">
                        </div>
                        <div class="col-auto flex-shrink-1 flex-grow-1">
                            <div style="line-height:1em">
                                <div class="font-weight-bolder">nva@gmail.com</div>
                                <div><small class="text-muted"><i>2023-04-22 01:17 am</i></small></div>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="text-danger text-decoration-none delete-comment" data-id="7"><i class="fa fa-trash"></i></a>
                    </div>
                    <hr>
                    <div><p>https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/342331530_9834824649877146_5492761029863297514_n.jpg?stp=dst-jpg_p960x960&amp;_nc_cat=107&amp;ccb=1-7&amp;_nc_sid=5cd70e&amp;_nc_ohc=mmQV1EvCb6MAX8s0fxV&amp;_nc_ht=scontent.fhan14-1.fna&amp;oh=00_AfD9Sms4p_c9WWdelw5ekcAEpDeUgxNOoGwtM-NnQv7zVA&amp;oe=6448B468<br></p></div>
                </div>
                            </div>
            <div class="card rounded-0 shadow" style="background:none; box-shadow:none!important">
                <div class="card-body" style="background:none; box-shadow:none!important">
                    <div class="">
                    </div>
                </div>
                <div class="card-footer py-1 text-right">
                        <button class="btn btn-primary btn-flat btn-sm bg-gradient-primary" form="comment-form"><i class="fa fa-save"></i> Save</button>
                        <button class="btn btn-light btn-flat btn-sm bg-gradient-light border" type="reset" form="comment-form">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>          
</div>
</section>
@endsection