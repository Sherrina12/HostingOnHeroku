@include('backend.header')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MY ACTIVITY</h1>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">MY ACTIVITY</li>
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
                    <a href="{{ url('addact') }}" class="btn btn-primary float-end">Add </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">ID</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th style="width:40px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($activity as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td> <img style="width:50px" src="{{('assets/img/'.$data->actimg) }}" > </td>
                        <td>{{$data->actdesc}}</td>
                        <td>
                            <a href="{{ url('viewact/'.$data->id) }}" class="btn btn-primary float-end">View</a><br><br>
                            <a href= {{ "editact/".$data['id'] }} class="btn btn-success">Edit</a> <br><br>

                                {{-- <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                <form action="{{ url('deleteact/'.$data->id) }}" method="POST">
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
