@extends('backend/layout/layout')
@section('topscripts')
<link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap-tagsinput.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}" type="text/css" />
<script type="text/javascript">
     $(document).ready(function () {
        $("#title").slug();
        if ($('#tag').length != 0) {
            var elt = $('#tag');
            elt.tagsinput();
        }
    });
</script>
@endsection
@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">
            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
         <li><a href="{!! url(getLang() . '/admin/article') !!}"><i class="fa fa-book"></i> Article</a></li>
        <li class="active">Update Article</li>
            </ol>
            <div class="page-header">
                     <h1> Article <small> | Update Article</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection
@section('content')
<div class="row">
        <div class="col-sm-12">
        <!-- start: PANLEL TABS -->
            <div class="panel panel-default">
                <div class="panel-heading">
                <i class="fa fa-reorder"></i>
                Panel Tabs
                </div>
                <div class="panel-body">
                {!! Form::open( array( 'route' => array(getLang(). '.admin.article.update', $article->id), 'method' => 'PATCH', 'files'=>true)) !!}
     @include('backend.article.fields')
                {!! Form::close() !!}
                <!-- end: PANLEL TABS -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/bootbox/bootbox.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/jquery-mockjax/jquery.mockjax.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/select2/select2.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/DataTables/media/js/jquery.dataTables.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/DataTables/media/js/DT_bootstrap.js') !!}"></script>
        <script src="{!! asset('/backend/assets/js/table-data.js') !!}"></script>
<script type="text/javascript" src="{!! asset('jasny-bootstrap/js/jasny-bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('ckeditor/ckeditor.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/bootstrap/js/bootstrap-tagsinput.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/js/jquery.slug.js') !!}"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
            <script>
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };
    </script>
@endsection
@section('clipinline')
TableData.init();
@endsection
