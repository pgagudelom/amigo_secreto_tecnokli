<div>
    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">{{ $grupo->nombre }}</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <button type="button" class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Registrarme
                    </button>
                    <button type="button" class="btn btn-outline-primary py-2 px-3" id="copiarUrlGrupo"
                        data-clipboard-text="{{ $urlLink }}">
                        <i class="bi bi-clipboard"></i> Copiar link grupo
                    </button>
                </div>
            </div>
            <div class="row g-4">
                <h5 class="text-primary">Participantes</h5>
                @foreach ($grupo->participantes as $participante)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                            <div class="bg-icon flex-shrink-0 mb-3">
                                <i class="fa fa-crop-alt fa-2x text-dark"></i>
                            </div>
                            <div class="ms-sm-4">
                                <h4 class="mb-3"> {{ $participante->nombre }}</h4>
                                <p class="mb-3">
                                    @if ($participante->amigo_secreto)
                                        <button class="btn btn-sm btn-primary"
                                            onclick="confirmarClaveParticipante('{{ $participante->clave }}', '{{ $participante->id }}')">
                                            Ver mi amigo secreto
                                        </button>
                                    @else
                                        <span>Aún no se ha realizado el sorteo</span>
                                    @endif
                                    @if ($participante->is_admin === 1)
                                        <button class="btn btn-sm btn-secondary m-1"
                                            onclick="confirmarClaveAdmin('{{ $participante->clave }}')">Realizar
                                            Sorteo</button>
                                    @endif
                                    @if (!$participante->is_admin)
                                        <button class="btn btn-sm btn-danger"
                                            onclick="confirmarClaveParticipanteEliminar('{{ $participante->clave }}', '{{ $participante->id }}')">
                                            Eliminarme
                                        </button>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
    @include('livewire.form-registro-participante')
</div>

<script>
    async function confirmarClaveAdmin(clave) {
        const {
            value: password
        } = await Swal.fire({
            title: "Ingrese su clave",
            input: "password",
            inputLabel: "Tu clave admin",
            inputPlaceholder: "Clave",
            inputAttributes: {
                maxlength: "10",
                autocapitalize: "off",
                autocorrect: "off"
            },
            inputValidator: (value) => {
                return new Promise((resolve) => {
                    if (value === clave) {
                        Livewire.dispatch('realizarSorteo');
                        resolve();
                    } else {
                        resolve("Clave incorrecta!");
                    }
                })
            }
        });
    }

    async function confirmarClaveParticipante(clave, participanteId) {
        const {
            value: password
        } = await Swal.fire({
            title: "Ingrese su clave",
            input: "password",
            inputLabel: "Tu clave",
            inputPlaceholder: "Clave",
            inputAttributes: {
                maxlength: "10",
                autocapitalize: "off",
                autocorrect: "off"
            },
            inputValidator: (value) => {
                return new Promise((resolve) => {
                    if (value === clave) {
                        Livewire.dispatch('verAmigoSecreto', [participanteId]);
                        resolve();
                    } else {
                        resolve("Clave incorrecta!");
                    }
                })
            }
        });
    }


    async function confirmarClaveParticipanteEliminar(clave, participanteId) {
        const {
            value: password
        } = await Swal.fire({
            title: "Ingrese su clave",
            input: "password",
            inputLabel: "Tu clave",
            inputPlaceholder: "Clave",
            inputAttributes: {
                maxlength: "10",
                autocapitalize: "off",
                autocorrect: "off"
            },
            inputValidator: (value) => {
                return new Promise((resolve) => {
                    if (value === clave) {
                        Livewire.dispatch('eliminarParticipante', [participanteId]);
                        resolve();
                    } else {
                        resolve("Clave incorrecta!");
                    }
                })
            }
        });
    }

    var clipboard = new ClipboardJS('#copiarUrlGrupo');

    clipboard.on('success', function(e) {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "Link copiado!"
        });

        e.clearSelection();
    });

    clipboard.on('error', function(e) {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "error",
            title: e.action
        });
    });

</script>
@script
<script>
    $wire.on('success', msg => {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: msg
        });
    });
</script>
@endscript
