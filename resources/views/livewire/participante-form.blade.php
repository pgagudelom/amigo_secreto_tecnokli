<div>
    <!-- Service Start -->
    <div class="container-fluid bg-rose py-6" id="service">
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
                    data-clipboard-target="#inputUrl">
                        <i class="bi bi-clipboard"></i> Copiar link grupo
                    </button><br>
                    <input type="text" class="form-control form-control-sm m-1" id="inputUrl" readonly value="">
                </div>

            </div>
            <div class="row g-4">
                <h5 class="text-primary">Participantes</h5>
                @foreach ($grupo->participantes as $participante)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                            <div class="bg-icon flex-shrink-0 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                  </svg>
                            </div>
                            <div class="ms-sm-4">
                                <h4 class="mb-3"> {{ $participante->nombre }}</h4>
                                <p class="mb-3">
                                    <button class="btn btn-sm btn-outline-primary m-1"
                                    onclick="confirmarClaveParticipante('{{ $participante->clave }}', '{{ $participante->id }}', 'cambiar') ">
                                    <i class="bi bi-pencil"></i> Cambiar mis regalos
                                </button>
                                    @if ($participante->amigo_secreto)
                                        <button class="btn btn-sm btn-primary m-1"
                                            onclick="confirmarClaveParticipante('{{ $participante->clave }}', '{{ $participante->id }}', 'veramigo' )">
                                            <i class="bi bi-eye"></i> Ver mi amigo secreto
                                        </button>
                                    @endif
                                    @if ($participante->is_admin === 1)
                                        <button class="btn btn-sm btn-secondary m-1"
                                            onclick="confirmarClaveAdmin('{{ $participante->clave }}')">Realizar
                                            Sorteo</button>
                                    @endif
                                    @if (!$participante->is_admin && !$participante->amigo_secreto)
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

    async function confirmarClaveParticipante(clave, participanteId, accion) {
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
                        console.log(accion)
                        if(accion == 'veramigo'){
                            Livewire.dispatch('verAmigoSecreto', [participanteId]);
                        }

                        if(accion == 'cambiar'){
                            Livewire.dispatch('verRegalos', [participanteId]);
                        }

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

    document.addEventListener('DOMContentLoaded', function() {

        let elemento = document.getElementById('inputUrl');
        elemento.value = window.location.href;
    });
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
            position: "top-center",
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

    $wire.on('verModal', msg => {
        console.log('test modal');
        $('#staticBackdrop').modal('show');
    })
</script>
@endscript
