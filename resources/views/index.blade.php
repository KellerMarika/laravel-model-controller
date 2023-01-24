@extends('layout.public')

@section('main')
    <section class="card-container container pb-5">
        <div class="row row-cols-5">

            @foreach ($movies as $movie)
                <div class="col   px-3 py-4">
                    <div class="card rounded-4 h-100 position-relative  " data-tilt data-tilt-glare data-tilt-max-glare="0.8">

                        <div class="content text-center p-3">
                            <hgroup class="top-card">

                                <h2 class="id position-absolute">{{ str_pad($movie['id'], 2, '0', STR_PAD_LEFT) }}</h2>

                                <h3 class="title text-uppercase">{{ $movie['title'] }} </h3>

                                <h5 class="original-title subtitle">
                                    {{ $movie['original_title'] === $movie['title'] ? '' : $movie['original_title'] }}
                                </h5>
                            </hgroup>

                            <div class="card-body text-start">
                                <div class="nationality pb-3 text-center"> ( {{ $movie['nationality'] }} )

                                </div>
                                <div class="date p-2"> <div class="small"> relese:</div> {{ $movie['date'] }}

                                </div>
                                <div class="vote p-2 small"><div class="small"> vote:</div>( {{ $movie['vote'] }} )</div>
                                



                                <div>
                                    <div class="rating-container position-relative  w-100">
                                        <div class="d-flex"> 
                                            <div class="rating-solid-star"<?php echo ' style= width:' . $movie['vote'] * 10 . '%'; ?>>
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                            </div>
                                            <div class="rating-regular-star" <?php echo ' style= width:' . 100 - $movie['vote'] * 10 . '%'; ?>>
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fa-regular fa-star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        


                                    </div>
                                </div>

                                {{--    <div>
                                    <div class="rating-container position-relative  w-100">
                                        <div class="d-flex"> 
                                            <div class="rating-solid-star"<?php echo ' style= width:' . $movie['vote'] * 10 . '%'; ?>>
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                            </div>
                                            <div class="rating-regular-star" <?php echo ' style= width:' . 100 - $movie['vote'] * 10 . '%'; ?>>
                                                @for ($i = 0; $i < 5; $i++)
                                                    <i class="fa-regular fa-star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                        


                                    </div>
                                </div> --}}







                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
