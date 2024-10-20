<div>

     <!-- About Start -->
     <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <h4 class="lh-base mb-0">Tu amigo(a) secreto(a) es: </h4>
                        <h3 class="lh-base mb-0 text-primary">&nbsp; {{ $amigo->nombre }}</h3>
                    </div>
                    <p class="mb-4">
                        ¡Es momento de compartir la alegría! Tu amigo secreto ha sido revelado.
                        Sorpréndelo con los regalos que harán su día inolvidable.
                    </p>

                    @foreach ($regalos as $regalo)
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>{{ $regalo }}</p>
                    @endforeach
                    <button class="btn btn-primary py-3 px-5 mt-3" wire:click="regresar">Regresar</button>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">

                        @foreach ($fotos as $foto)
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="{{ Storage::url($foto) }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
