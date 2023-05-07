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
                    <form method="post" action="{{ $action }}" id="post-form" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" class="form-control rounded-0" name="title" id="title" value="{{ isset($record->title)?$record->title:'' }}">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 px-0" data-select2-id="4">
                            <label for="category_id" class="control-label">Category</label>
                            <select class="form-control rounded-0 select2-hidden-accessible" name="category_id" id="category_id" data-select2-id="category_id" tabindex="-1" aria-hidden="true">
                                <!-- <option value="value="{{$record->id }}"></option> -->
                                @foreach($datacate as $row)
                                <option value="{{$row->id }}">{{ $row->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>

                        <div class="form-group" style >
                            <textarea id="content" name="content">{{ isset($record->content)?$record->content:'' }}</textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace("content");
                            </script>
                        </div>
                        <div class="form-group">
                            <div class="icheck-primary d-inline">
                                <input type="checkbox" id="status" name="status" value="{{isset ($record->status) ?$record->status:''}} " @if ($record->status) checked @endif >
                                <label for="status" class="control-label">Published</label>
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <div class="col-md-10">
                                <input type="submit" value="Lưu" class="btn btn-primary">
                                <a href="{{ url('backend/posts') }}" class="btn btn-primary   rounded-0" form="manage-user"><i class="fa fa-angle-left"></i> Trở về</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</section>
@endsection