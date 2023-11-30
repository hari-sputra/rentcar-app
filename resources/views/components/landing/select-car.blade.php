<section id="rental" class="position-relative">
    <div class="container my-5 py-5">
        <h3 class=" text-center my-5">cars for <span class="text-primary"> rental </span> </h3>

        <div class="swiper-button-next rental-swiper-next  rental-arrow position-absolute"></div>
        <div class="swiper-button-prev rental-swiper-prev rental-arrow position-absolute"></div>

        <div class="swiper rental-swiper mb-5">
            <div class="swiper-wrapper">
                @forelse ($cars as $car)
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="javascript:void(0);"><img src="{{ asset("/storage/{$car->image_url}") }}"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body p-4">
                                <a href="javascript:void(0);">
                                    <h4 class="card-title">{{ $car->brand . ' ' . $car->model }}</h4>
                                </a>
                                <div class="card-text ">
                                    <ul class="d-flex list-unstyled" style="font-size: 12px">
                                        <li class="rental-list">
                                            Sports
                                        </li>
                                        <li class="rental-list"> <img src="{{ asset('images/dot.png') }}" class="px-3"
                                                alt="image">
                                        </li>
                                        <li class="rental-list"> Auto</li>
                                        <li class="rental-list"> <img src="{{ asset('images/dot.png') }}" class="px-3"
                                                alt="image">
                                        </li>
                                        <li class="rental-list"> 4 Passengers </li>
                                        <li class="rental-list"> <img src="{{ asset('images/dot.png') }}" class="px-3"
                                                alt="image">
                                        </li>
                                        <li class="rental-list display-small"> Diesel </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h4 class="pt-2">Rp{{ $car->price }} <span class="rental-price"
                                            style="font-size: 13px">/day</span>
                                    </h4>
                                    <a href="javascript:void(0);" class="btn btn-primary" style="font-size: 12px">rent
                                        now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <p class="fs-3 text-center">Data Empty</p>
                @endforelse


            </div>

        </div>
    </div>
</section>
