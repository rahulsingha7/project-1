@extends('teacher.layouts.default')
@section('abcd')
<style type="text/css">
  
body{
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}

</style>

<div class="container" style="margin-top:30px">
@if(Session::has('info'))
  <div class="alert alert-error">
    <strong>{{Session::get('info')}}</strong>
  </div>
@endif
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Create Project</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="{{ url('register-project')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Project Title</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="project_title" id="project_title" placeholder="Enter Project Title" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Project Description</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <textarea name="project_description" id="project_description" cols="100" rows="10" placeholder="Enter Project Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block login-button">Create Project</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
     $(document).ready(function() {
            $('#submit').click(function() {
                let project_title = $('#project_title').val();
                let project_description = $('#project_description').val();
                console.log(project_title);
                console.log(project_description);
                var str = '';
                $("#reg").empty();
                if (project_title == '' || project_description == '') {
                    alert('Please fill all the fields');
                } else {
                    $.ajax({
                        url: 'http://127.0.0.1:8000/api/register-project',
                        method: "POST",
                        data: {
                            project_title: project_title,
                            project_description: project_description,
                        },
                        success: function(result) {
                            if (result.status == 'success') {
                                str +=
                                    `<div class="alert alert-success" role="alert" id="reg"><strong>Project Created Successfully. </strong></div>`;
                                $("#reg").append(str);
                            } else {
                                str +=
                                    `<div class="alert alert-success" role="alert" id="reg"><strong>Project Not Created</strong></div>`;
                                $("#reg").append(str);
                            }
                        }
                    });
                }
            });
        });
</script> -->

@endsection