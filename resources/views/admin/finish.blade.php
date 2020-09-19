@extends("admin.front")
@section("content")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Վաճառված Ապրանքներ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Գլխավոր</a></li>
                            <li class="breadcrumb-item active">Ապրանքներ</li>
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>

                                    <tr>
                                        <th style="width: 1%">
                                            #
                                        </th>
                                        <th style="width: 8%">
                                            Անվանումը
                                        </th>
                                        <th style="width: 2%" class="text-center">
                                            Գինը
                                        </th>



                                        <th style="width: 8%" class="text-center">
                                            Նկարը
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Կոդ
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Չափս
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Գույն
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Քանակ
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Վճարման եղանակ
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Կատեգորիան
                                        </th>
                                        <th style="width: 20%">
                                            #
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($products)
                                        @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    {{$product->id}}
                                                </td>
                                                <td>
                                                        {{$product->titleAM}}
                                                </td>
                                                <td class="project-state">
                                                    {{$product->priceAM}}&nbsp;&nbsp;դր
                                                    <br>
                                                    {{$product->priceRU}}&nbsp;&nbsp;руб
                                                    <br>
                                                    {{$product->priceEN}}&nbsp;&nbsp;$
                                                </td>

                                                <td>
                                                    @php $img = json_decode($product->posters)
                                                    @endphp
                                                        <img src="{{asset('images/'.$img[0])}}" width="60">
                                                </td>
                                                <td>
                                                    {{$product->code}}
                                                </td>
                                                <td>
                                                    {{$product->size}}
                                                </td>
                                                <td>
                                                    {{$product->color}}
                                                </td>
                                                <td>
                                                    {{$product->quantity}}
                                                </td>
                                                <td>
                                                    @if($product->quantity == 1)
                                                        Visa/MasterCard/ArCa
                                                    @elseif ($product->quantity == 2)
                                                        Idram
                                                    @elseif ($product->quantity == 0)
                                                        Կանխիկ
                                                    @endif
                                                </td>
                                                <td >
                                                    <form action="{{route('product.destroy',$product->id)}}" method="post" style="color: black;text-align: left">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn waves-effect waves-light btn-rounded btn-danger" style="text-align: center;border-radius: 15px;outline: none">Ջնջել</button>
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
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
