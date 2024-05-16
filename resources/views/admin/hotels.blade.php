<x-adminHeader />
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Hotels</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>All Hotels</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="dark_bg full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Hotels</h2>
                        </div>
                    </div>
                    <div class="full graph_revenue">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content testimonial">
                                    <div
                                        id="testimonial_slider"
                                        class="carousel slide"
                                        data-ride="carousel"
                                    >
                                        <!-- Wrapper for carousel items -->
                                        <div class="carousel-inner">
                                            @php
                                                $i=0;
                                            @endphp
                                            
                                            @foreach ($hotels as $item)

                                                
                                            @if($i==0)
                                           
                                            <div
                                                class="item carousel-item active"
                                            >
                                            @else
                                            <div
                                            class="item carousel-item "
                                        >
                                            @endif
                                                <div class="img-box">
                                                    <img
                                                        src="{{URL::asset('uploads/hotels/'.$item->picture)}}"
                                                        alt=""
                                                    />
                                                </div>
                                                <p class="testimonial">
                                                   {{$item->description}}
                                                </p>
                                                <p class="overview">
                                                    <b>{{$item->title}}</b>
                                                    {{$item->fullname}} :Founder
                                                </p>
                                                <a
                                                    href="{{URL::to('singleHotel/'.$item->id)}}"
                                                    class="btn btn-primary mx-auto"
                                                >
                                                    View More
                                                </a>
                                            </div>
                                            @php
                                            $i++;
                                        @endphp
                                            @endforeach
                                            
                                        </div>

                                        <!-- Carousel controls -->
                                        <a
                                            class="carousel-control left carousel-control-prev"
                                            href="#testimonial_slider"
                                            data-slide="prev"
                                        >
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a
                                            class="carousel-control right carousel-control-next"
                                            href="#testimonial_slider"
                                            data-slide="next"
                                        >
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-adminFooter />
</div>
