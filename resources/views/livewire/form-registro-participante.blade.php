<!-- Modal -->
<div wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrarme</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md col-12 m-2">
                        <input type="text" class="form-control" id="nombre" placeholder="Tu nombre"
                            wire:model="nombre">
                        @error('nombre')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md col-12 m-2">
                        <input type="password" class="form-control" id="clave" placeholder="Tu clave"
                            wire:model="clave">
                        @error('clave')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <hr class="text-primary my-2">
                <h6 class="text-primary">Lista de deseos</h6>
                <div class="col-md col-12 m-2 d-flex align-items-center">
                    <i class="bi bi-gift mr-0 me-1 text-primary"></i> <!-- Añade una clase para margen derecho -->
                    <input type="text" class="form-control" placeholder="Primer regalo" wire:model="regalos.0">
                </div>
                <div class="col-md col-12 m-2 d-flex align-items-center">
                    <i class="bi bi-gift mr-0 me-1 text-primary"></i> <!-- Añade una clase para margen derecho -->
                    <input type="text" class="form-control" placeholder="Segundo regalo" wire:model="regalos.1">
                </div>
                <div class="col-md col-12 m-2 d-flex align-items-center">
                    <i class="bi bi-gift mr-0 me-1 text-primary"></i> <!-- Añade una clase para margen derecho -->
                    <input type="text" class="form-control" placeholder="Tercer regalo" wire:model="regalos.2">
                </div>
                @error('regalos')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <hr>
                <p for="formFileMultiple" class="form-label mt-2">Sube fotos de tus regalos</p>
                <div class="col-md col-12 m-2 d-flex align-items-center">
                    <i class="bi bi-image mr-0 me-1 text-primary"></i> <!-- Añade una clase para margen derecho -->
                    <input class="form-control" type="file" wire:model="fotos" id="formFileMultiple" multiple><br>
                    <div wire:loading wire:target="fotos" class="text-secondary text-sm">Subiendo archivos...</div>
                    @error('fotos.*')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" wire:click='registrarParticipante' wire:loading.class="hidden">Registrarme</button>
            </div>
        </div>
    </div>
</div>
