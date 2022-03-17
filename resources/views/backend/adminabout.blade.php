@include('backend.header')




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">About Me</h1>
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About Me</li>
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
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Location</th>
                        <th>Email</th>
                        <th style="width: 50px">Image</th>
                        <th style="width:60px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($about as $data)
                      <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->aboutdesc}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->age}}</td>
                        <td>{{$data->location}}</td>
                        <td>{{$data->email}}</td>
                        <td> <img style="width:50px" src="{{('assets/img/'.$data->aboutimg) }}" > </td>

                       <td>
                        <a href="{{ url('viewabout') }}" class="btn btn-primary float-end">View</a><br><br>
                        <a href= {{ "editabout/".$data['id'] }} class="btn btn-success">Edit</a> <br><br>

                            {{-- <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                            <form action="{{ url('deleteabout/'.$data->id) }}" method="POST">
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
