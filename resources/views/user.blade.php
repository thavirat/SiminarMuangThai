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
                    <h4 class="page-title">User</h4>
                </div>
            </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            <div class="table-responsive">
                                <table class="table table-bordered" id="tableUser">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Name</td>
                                            <td>User</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end card -->


            </div>
        </div>
        <!-- end page title -->

    </div> <!-- container -->

</div> <!-- content -->


<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">แก้ไขข้อมูล</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" id="formEditUser">
            @csrf
            <input type="hidden" id="editUserId">
        <div class="modal-body">
            <div class="row">
                <div class="col-12 form-group mt-2">
                    <label for="">แผนก</label>
                    <select name="department_id" id="edit_department_id" class="form-control">
                        <option value="">เลือกแผนก</option>
                        @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 form-group mt-2">
                    <label for="">อีเมล์</label>
                    <input type="text" name="email" id="edit_email" class="form-control">
                </div>
                <div class="col-12 form-group mt-2">
                    <label for="">Username</label>
                    <input type="text" name="name" id="edit_name" class="form-control">
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>
  </div>


@endsection


@section('css_bottom')
<style>
    /* css bottom */
</style>
@endsection


@section('js')
<script>

$('body').on('submit' , '#formEditUser' , function(e){
    e.preventDefault();
    var form = $(this);
    var id = $('#editUserId').val();
    loadingButton(form.find('button[type=submit]'));
    $.ajax({
        method: "PUT",
        url: "{{url('user')}}/"+id,
        dataType: "json",
        data: form.serialize()
    }).done(function( res ) {
        resetButton(form.find('button[type=submit]'));
        if(res.status==1){
            Swal.fire(
                {
                    title: res.title,
                    text: res.content,
                    icon: 'success'
                }
            )
            $('#modal-edit').modal('hide');
            TableUser.ajax.reload();
        }else{
            Swal.fire(
                {
                    title: res.title,
                    text: res.content,
                    icon: 'error'
                }
            )
        }
    }).fail(function(res){
        resetButton(form.find('button[type=submit]'));
        var res = $.parseJSON(res.responseText);
        var str = "Please take a screenshot of this for the staff.\n\r"+res.message+"\n\r"+res.exception+"\n\r"+res.file+" Line : "+res.line;
        // swal("Sorry something went wrong.",str,'error');
        Swal.fire(
                {
                    title: 'Sorry something went wrong.',
                    text: str,
                    icon: 'error'
                }
            )

    });
});

    $('body').on('click' , '.btn-edit' , function(){
        var id = $(this).data('id');
        var btn = $(this);
        $('#editUserId').val(id);
        loadingButton(btn);
    $.ajax({
        method: "GET",
        url: urlGb+"/user/"+id,
        dataType: "json"
    }).done(function( res ) {
        resetButton(btn);
        $('#edit_name').val(res.name);
        $('#edit_email').val(res.email);
        $('#edit_department_id').val(res.department_id);
        $('#modal-edit').modal('show');

    }).fail(function(res){
        resetButton(btn);
        var res = $.parseJSON(res.responseText);
        var str = "Please take a screenshot of this for the staff.\n\r"+res.message+"\n\r"+res.exception+"\n\r"+res.file+" Line : "+res.line;
        Swal.fire(
                {
                    title: 'Sorry something went wrong.',
                    text: str,
                    icon: 'error'
                }
            )

    });











    });


var TableUser = new DataTable('#tableUser', {
    ajax: '{{url("user/lists")}}',
    processing: true,
    serverSide: true,
    "columns": [
        {"data" : "id", name: 'id'},
        {"data" : "name", name: 'name'},
        {"data" : "email", name: 'email'},
        {"data" : "action", name: 'action' , searchable : false},
    ]
});
</script>
@endsection
