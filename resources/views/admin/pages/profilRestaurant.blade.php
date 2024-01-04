@include('admin.menu.menu')


<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Salut, bon retour!</h4>
                    <p class="mb-0">Profil restaurant</p>
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

                        <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                        <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary">{{ $user->nom }} {{ $user->prenom }}</h4>
                                                        <p>Restaurant</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted">{{ $user->email }}</h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center mt-4 border-bottom-1 pb-3">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0">0</h3><span>Commande</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">0</h3><span>Place Stay</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">0</h3><span>Reviews</span>
                                            </div>
                                        </div>
                                        <div class="mt-4">


                                            <a href="javascript:void()" class="btn btn-dark pl-5 pr-5 mb-4">Envoyer un mail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Commentaire</a>
                                            </li>
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">A propos de lui</a>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">
                                                    <div class="post-input">
                                                        <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea> <a href="javascript:void()"><i class="ti-clip"></i> </a>
                                                        <a
                                                            href="javascript:void()"><i class="ti-camera"></i> </a><a href="javascript:void()" class="btn btn-primary">Post</a>
                                                    </div>
                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="javascript:void()">
                                                            <h4>Collection of textile samples lay spread</h4>
                                                        </a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-3"><span class="mr-3"><i
                                                                    class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"><span class="mr-3"><i
                                                                    class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                    <div class="text-center mb-2"><a href="javascript:void()" class="btn btn-primary">Load More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="about-me" class="tab-pane fade">
                                                <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                                    <h4 class="text-primary mb-4">Catégorie(s)</h4>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10">Admin</a>
                                                    <a href="javascript:void()" class="btn btn-outline-dark btn-rounded pl-4 my-3 my-sm-0 pr-4 mr-3 m-b-10">Dashboard</a>
                                                </div>
                                                <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                                    <h4 class="text-primary mb-4">Type de paiment</h4><a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                            class="flag-icon flag-icon-us"></i> English</a> <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                            class="flag-icon flag-icon-fr"></i> French</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                            class="flag-icon flag-icon-bd"></i> Bangla</a>
                                                </div>
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Information</h4>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nom de l'entreprise <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $user->nom_entreprise }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Addresse email <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $user->email }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Etat de commpte <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9">
                                                            <span>
                                                            @if($user->etat_compte == 2)
                                                                Compte inactif
                                                            @else
                                                                Compte actif
                                                            @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Adresse <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $user->adresse }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Date de creations de compte <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $user->created_at }}</span>
                                                        </div>
                                                    </div>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success"hidden data-toggle="modal" data-target="#basicModal">Valider l'inscription</button><br><br>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="basicModal">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="">
                                                                    <div class="alert alert-success notification">
                                                                        <p class="notificaiton-title"><strong>Valider </strong> ce compte
                                                                        </p>
                                                                        <p>Voulez-vous vraiment valider ce compte ? </p>
                                                                        <form method="POST" action="{{ route('update_etat_compte') }}">
                                                                            @csrf
                                                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                                            <button type="submit" class="btn btn-success btn-sm rounded-0">Confirmer</button>
                                                                        </form>
                                                                        <button class="btn btn-link btn-sm"data-dismiss="modal">Annuler</button>
                                                                    </div>
                                                                </dv>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <form method="POST" action="{{ route('update_etat_compte') }}">
                                                                            @csrf
                                                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                                            <button type="submit" class="btn btn-success btn-sm rounded-0">Confirmer</button>
                                                                        </form><br>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#basicModal">Annuler</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="basicModal">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="">
                                                                <div class="col-xl-6">
                                                                    <div class="alert alert-danger notification">
                                                                        <p class="notificaiton-title"><strong>Annuler </strong> ce compte
                                                                        </p>
                                                                        <p>Voulez-vous vraiment bloquer ce compte ? </p>
                                                                        <button class="btn btn-danger btn-sm rounded-0">Confirmer</button>
                                                                        <button class="btn btn-link btn-sm"data-dismiss="modal">Annuler</button>
                                                                    </div>
                                                                </dv>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                            
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
    </div>
</div>
@include('admin.menu.menuf')