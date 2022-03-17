@include('backend.header')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MY EDUCATION</h1>
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">MY EDUCATION</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card bg-light">
                <div class="card-header">
                  <h3 class="card-title"></h3><br>
                  <a href="{{ url('addedu') }}" class="btn btn-primary float-end">Add </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">ID</th>
                        <th style="width:30px">Title</th>
                        <th style="width:200px">Description</th>
                        <th style="width: 10px">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($edu as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->edutitle}}</td>
                        <td>{{$data->edudesc}}</td>
                        <td>
                            <a href= {{ "editedu/".$data['id'] }} class="btn btn-success">Edit</a> <br><br>

                                {{-- <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                <form action="{{ url('deleteedu/'.$data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                              </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</div>


@include('backend.footer')
