@extends("admin.app")
@section("add")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ավելացնել EJ</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('footer.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Facebook Link</label>
                                    <input name="fbLink" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Facebook Icon</label>
                                    <select name="fbIcon" class="form-control custom-select">
                                        <option selected disabled="disabled" style="color: #38eba1!important;"><h2>Icon</h2></option>
                                        <option value="0">Facebook</option>
                                        <option value="1">Instagram</option>
                                        <option value="2">WhatsApp</option>
                                        <option value="3">Viber</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Instagram Link</label>
                                    <input name="instagramLink" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Instagram Icon</label>
                                    <select name="instagramIcon" class="form-control custom-select">
                                        <option selected disabled="disabled" style="color: #38eba1!important;"><h2>Icon</h2></option>
                                        <option value="0">Facebook</option>
                                        <option value="1">Instagram</option>
                                        <option value="2">WhatsApp</option>
                                        <option value="3">Viber</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >WhatsApp Link</label>
                                    <input name="WhatsAppLink" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">WhatsApp Icon</label>
                                    <select name="WhatsAppIcon" class="form-control custom-select">
                                        <option selected disabled="disabled" style="color: #38eba1!important;"><h2>Icon</h2></option>
                                        <option value="0">Facebook</option>
                                        <option value="1">Instagram</option>
                                        <option value="2">WhatsApp</option>
                                        <option value="3">Viber</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Viber Link</label>
                                    <input name="ViberLink" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Viber Icon</label>
                                    <select name="ViberIcon" class="form-control custom-select">
                                        <option selected disabled="disabled" style="color: #38eba1!important;"><h2>Icon</h2></option>
                                        <option value="fa fa-facebook">Facebook</option>
                                        <option value="fa fa-instagram">Instagram</option>
                                        <option value="2">WhatsApp</option>
                                        <option value="3">Viber</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >CopyRight</label>
                                    <input name="copyright" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Contact NameAM</label>
                                    <input name="contactNameAM" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Contact NameRU</label>
                                    <input name="contactNameRU" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Contact NameEN</label>
                                    <input name="contactNameEN" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Footer TextAM</label>
                                    <input name="footerTextAM" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Footer TextRU</label>
                                    <input name="footerTextRU" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Footer TextEN</label>
                                    <input name="footerTextEN" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Link</label>
                                    <input name="link" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader" >Link Name</label>
                                    <input name="linkName" type="text" class="form-control filestyle" data-buttonName="btn-primary"
                                           id="product-posters" multiple >
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 button-contollet-bottom">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary btn-first-back">Վերադառնալ</a>
                        <input type="submit" value="Պահպանել (save)" class="btn btn-success float-right">
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
