@extends("admin.front")
@section("content")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Գլխավոր</a></li>
                            <li class="breadcrumb-item active">Կատեգորիա</li>
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
                                    <a href="{{route("category.create")}}">
                                        <button  class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none;background-color: #00ad5f;border-color:#00ad5f ">Ավելացնել</button>
                                    </a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Անվանում/AM
                            </th>
                            <th style="width: 30%">
                                Անվանում/RU
                            </th>
                            <th>
                                Անվանում/EN
                            </th>
                            <th>
                             Նկար
                             </th>
                            <th style="width: 20%">
                                #
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($categorys)
                            @foreach($categorys as $category)
                        <tr>
                            <td>
                                {{$category->id}}
                            </td>
                            <td>
                                    {{$category->titleAM}}
                            </td>
                            <td>
                                    {{$category->titleRU}}
                            </td>
                            <td>
                                    {{$category->titleEN}}
                            </td>
                            <td>
                                <img src="{{asset('images/'.json_decode($category->posters)[0])}}" alt="{{json_decode($category->posters)[0]}}" width="60">
{{--                                @foreach(json_decode($category->posters) as $poster)--}}
{{--                                    <img src="{{asset('images/'.$poster)}}" alt="{{$poster}}" width="60">--}}
{{--                                @endforeach--}}
                            </td>
                            <td class="action-field"  >
                                <form  action="{{route('category.edit',$category ->id)}}" method="get" class="delete-button-table" style="color: black;text-align: center">
                                <button class="btn btn-info btn-sm">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Փոփոխել
                                </button>
                                </form>
                                <form action="{{route('category.destroy',$category->id)}}} " method="post">
                                    @method('DELETE')
                                    @csrf
                                <button class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Ջնջել
                                </button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
