@extends('admin.layouts.default')
@section('abcd')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 mt-2">Pending Students</h1>
</div>
<table class="table table-responsive">
  <thead>
  <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Student ID</th>
        <th>Role</th>
        <th>Status</th>
  </tr>
  </thead>
  <tbody id="t_data">
     
  </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.js"
integrity="sha512-NXopZjApK1IRgeFWl6aECo0idl7A+EEejb8ur0O3nAVt15njX9Gvvk+ArwgHfbdvJTCCGC5wXmsOUXX+ZZzDQw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<!-- <script>
   $(document).ready(function() {
            getAllUsers();
            //get all users
            function getAllUsers() {
                var str = ""
                $.ajax({
                    url: 'http://127.0.0.1:8000/api/show-pending-student',
                    type: 'GET',
                    dataType: "json",
                    success: function(result) {
                        console.log(result);
                        if (result.status == 'success') {
                            var data = result.data;
                            var lent = result.data.length;
                            for (var i = 0; i < lent; i++) {
                                str += `<tr>
                                <td>${data[i].name}</td>
                                <td>${data[i].email}</td>
                                <td>${data[i].student_id}</td>
                                <td>${data[i].role}</td>
                                <td>${(data[i].active) == 0 ? 'pending' : 'approved'}</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#myModal${data[i].id}">
                                        <i class="fas fa-check"></i>
                                    </a>
                                    <div class="modal" id="myModal${data[i].id}">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title">Change Active Status</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            Do you want to change the activate status of <b>${data[i].name}</b>?
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <a id="submit" value="${data[i].id}" class="btn btn-success">yes</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>`
                            }
                            $("#t_data").append(str);
                        } else if (result.status == 'error') {
                            str +=
                                `<tr><td colspan="8" class="text-center">${result.message}</td></tr>`;
                            $("#t_data").append(str);
                        }
                    }
                });
            }
            //Update
            $(document).on('click','#submit',function(){
                var id =$(this).attr('value');
                $.ajax({
                    url: `http://127.0.0.1:8000/api/pending-student-approve/${id}`,
                    type: 'POST',
                    dataType: "json",
                    data: {
                        activate:1
                    },
                    success: function(result){
                        $("#myModal"+id).modal('hide');
                        if(result.status=='success'){
                            Command: toastr["success"]("Request Updated")
                            toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                                }
                            //     setTimeout(() => {
                            //     window.location.reload();
                            // }, 5000);
                        }
                        else if(result.status=='error'){
                            Command: toastr["error"]("An error occured!")
                            toastr.options = {
                                "closeButton": false,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                                } 
                        }
                    }
                })
            })
        });
</script> -->

<script>
        $(document).ready(function() {
            getAllUsers();
            //get all users
            function getAllUsers() {
                var str = ""
                $.ajax({
                    url: 'http://127.0.0.1:8000/api/show-total-student',
                    type: 'GET',
                    dataType: "json",
                    success: function(result) {
                        if (result.status == 'success') {
                            var data = result.data;
                            console.log(data);
                            var lent = result.data.length;
                            for (var i = 0; i < lent; i++) {
                                str += `<tr>
                                <td>${data[i].name}</td>
                                <td>${data[i].email}</td>
                                <td>${data[i].student_id}</td>
                                <td>${data[i].role}</td>
                                <td>${(data[i].active) == 0 ? 'pending' : 'approved'}</td>
                                // <td>
                                //     <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal${data[i].id}">
                                //          <i class="fas fa-check"></i>
                                //     </a>
                                //     <div class="modal" id="myModal${data[i].id}">
                                //         <div class="modal-dialog modal-dialog-centered">
                                //         <div class="modal-content">
                                //             <div class="modal-header">
                                //             <h4 class="modal-title">Change Active Status</h4>
                                //             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                //             </div>
                                //             <div class="modal-body">
                                //             Do you want to change the activate status of <b>${data[i].name}</b>?
                                //             </div>
                                //             <div class="modal-footer">
                                //             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                //             <a id="submit" value="${data[i].id}" class="btn btn-success">yes</a>
                                //             </div>
                                //         </div>
                                //         </div>
                                //     </div>
                                //     <a href="#" class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#myModaldel${data[i].id}" >
                                //       <i class="fas fa-trash"></i>
                                //     </a>
                                //     <div class="modal" id="myModaldel${data[i].id}">
                                //         <div class="modal-dialog modal-dialog-centered">
                                //         <div class="modal-content">
                                //             <div class="modal-header">
                                //             <h4 class="modal-title">Delete Confirmation</h4>
                                //             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                //             </div>
                                //             <div class="modal-body">
                                //             Do you want to delete <b>${data[i].name}</b>?
                                //             </div>
                                //             <div class="modal-footer">
                                //             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                //             <a id="submit2" value="${data[i].id}" class="btn btn-success">yes</a>
                                //             </div>
                                //         </div>
                                //         </div>
                                //     </div>
                                // </td>
                            </tr>`
                            }
                            $("#t_data").append(str);
                        } else if (result.status == 'error') {
                            str +=
                                `<tr><td colspan="8" class="text-center">${result.message}</td></tr>`;
                            $("#t_data").append(str);
                        }
                    }
                });
            }
        });
    </script>


@endsection