@extends("admin.front")
@section("content")
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="{{route("logo.create")}}">
                                        <button  class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none;background-color: #00ad5f;border-color:#00ad5f ">Avelacnel</button>
                                    </a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Հեռախոսահամար</th>
                                        <th>E-Mail</th>
                                        <th>Քաղաքը</th>
                                        <th>Հասցե</th>
                                        <th>Ձևափոխել</th>
                                        <th>Ջնջել</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($contact)
                                        @foreach($contact as $contacts)
                                            <tr>
                                                <td>{{$contacts->id}}</td>
                                                <td>{{$contacts->phone}}</td>
                                                <td>{{$contacts->email}}</td>
                                                <td>{{$contacts->city}}</td>
                                                <td>{{$contacts->address}}</td>
                                                <td>
                                                    <form  action="{{route('contact.edit',$contacts->id)}}" method="get" style="color: black;text-align: center">
                                                        <button class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none">edit</button>
                                                    </form>
                                                </td>                                        <td>
                                                    <form action="{{route('contact.destroy',$contacts->id)}}" method="post" style="color: black">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none">Ջնջել</button>
                                                    </form>
                                                </td>                                    </tr>
                                        @endforeach
                                    @endisset
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
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
