@include('admin.menu.menu')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Salut, bon retour!</h4>
                    <p class="mb-0">Les inscriptions en attente de validation</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                     <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol>
            </div>
           <!-- row -->
        </div>


        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom file input</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form custom_file_input">

                                    <form method="POST" action="{{ route('ajoutcategorie') }}">
                                        @csrf

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="nom">nom
                                                <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom..">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="photo">image
                                                <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control" id="photo" name="photo" placeholder="Entrer le photo..">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                    </form>
                                </div>
                            </div>
                        </div>        
    </div>
</div>


@include('admin.menu.menuf')