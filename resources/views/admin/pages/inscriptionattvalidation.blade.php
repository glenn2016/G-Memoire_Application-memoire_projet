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


        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tableau</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Non de l'entreprise</th>
                                                <th scope="col">Adresse email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($users as $User)
                                        <tbody>
                                            <tr>
                                                <td>{{$User->nom_entreprise}}</td>
                                                <td>{{$User->email}}</td>
                                                </td>
                                                <td><a href="admin.pages.profilRestaurant/{{$User->id}}"><span class="badge badge-primary">...</span></a></td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</div>


@include('admin.menu.menuf')