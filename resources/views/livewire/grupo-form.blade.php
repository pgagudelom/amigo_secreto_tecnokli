<div>

    <!-- Header Start -->
    <div class="container-fluid bg-rose my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">Juega</h3>
                    <h1 class="display-3 mb-3">Amigo Secreto!</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Crea tu grupo gratis</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="#contact" class="btn btn-primary py-3 px-4 me-5">Crear grupo de participantes</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Tutorial</h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('img/profile.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade bg-rose" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Tutorial</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="https://youtu.be/LkCiyYx11Lk?si=1-gkYjA1h_q0pr5f" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Crea tu grupo</h1>
                </div>

            </div>
            <div class="row g-5">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Crea un grupo para compartir la diversión del juego de amigo secreto. Simplemente
                        ingresa el nombre de tu grupo y haz clic en "Crear Grupo". Una vez creado, podrás registrar a
                        los participantes y enviarles el enlace para que se unan. ¡Asegúrate de que todos estén listos
                        para el sorteo y que la emoción comience!</a></p>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="grupo"
                                        placeholder="Nombre del grupo" wire:model="nombre">
                                    <label for="grupo">Nombre del grupo</label>
                                </div>
                                @error('nombre')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email_group"
                                        placeholder="Correo del grupo" wire:model="email_group">
                                    <label for="email_group">Tu correo electrónico</label>
                                </div>
                                @error('email_group')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" wire:click="crearGrupo">Crear grupo</button>
                            </div>
                            <div wire:loading>
                                <span class="badge bg-secondary">Creando grupo...</span>
                            </div>
                            <div style="display: none;">
                                <input type="text" name="extra_field_honeypot" wire:model.defer="extra_field_honeypot">
                            </div>
                        </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">WhatsApp:</p>
                    <h4 class="fw-bold">+57 3024135832</h3>
                    <hr class="w-100">
                    <p class="mb-2">Escribeme:</p>
                    <h4 class="fw-bold">soporte@tecnokli.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Siguenos:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/tecnokli"
                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.youtube.com/@tecnokli"
                            target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact End -->


</div>
