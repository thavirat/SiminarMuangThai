@extends('template.template')

@section('css_top')
<style>
    /* css top */
</style>
@endsection

@section('body')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Codefox</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">

                <table class="table table-bordered table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th class="text-center">Action</th>
                    </tr>

                </table>

            </div>
        </div>


    </div> <!-- container -->

</div> <!-- content -->
@endsection


@section('css_bottom')
<style>
    /* css bottom */
</style>
@endsection


@section('js')
<script>

</script>
@endsection
