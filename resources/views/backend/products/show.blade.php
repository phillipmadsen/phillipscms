@ @extends('backend/layout/clip')

@section('topscripts')
 <script type="text/javascript">
        $(document).ready(function () {


        });
    </script>
@endsection

@section('pagetitle')
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Article</li>
            </ol>
            <div class="page-header">
                    <h1> Articles <small> | Control Panel</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">


                    @include('backend.products.show_fields')

                    <div class="form-group">
                           <a href="{!! route('backend.products.index') !!}" class="btn btn-default">Back</a>
                    </div>


            </div>
        </div>
    </div>
</div>
@endsection

@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')

@endsection
