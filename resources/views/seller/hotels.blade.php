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
                                            <div
                                                class="item carousel-item active"
                                            >
                                                <div class="img-box">
                                                    <img
                                                        src="{{URL::asset('images/rooms/room1.jpg')}}"
                                                        alt=""
                                                    />
                                                </div>
                                                <p class="testimonial">
                                                    Our spacious room is
                                                    designed to provide you with
                                                    the perfect blend of comfort
                                                    and style, featuring a plush
                                                    queen-size bed with crisp
                                                    linens and fluffy pillows
                                                    that will ensure a restful
                                                    night's sleep.
                                                </p>
                                                <p class="overview">
                                                    <b>XYZ Hotel</b>
                                                    Muhammad Hamza Founder
                                                </p>
                                                <a
                                                    href="{{URL::to('singleHotel')}}"
                                                    class="btn btn-primary mx-auto"
                                                >
                                                    View More
                                                </a>
                                            </div>
                                            <div class="item carousel-item">
                                                <div class="img-box">
                                                    <img
                                                        src="{{URL::asset('images/rooms/ala rab.jpg')}}"
                                                        alt=""
                                                    />
                                                </div>
                                                <p class="testimonial">
                                                    Our spacious room is
                                                    designed to provide you with
                                                    the perfect blend of comfort
                                                    and style, featuring a plush
                                                    queen-size bed with crisp
                                                    linens and fluffy pillows
                                                    that will ensure a restful
                                                    night's sleep.
                                                </p>
                                                <p class="overview">
                                                    <b>Burj ALArab Hotel</b>
                                                    Faisal Qayoom
                                                </p>
                                                <a
                                                    href="{{URL::to('singleHotel')}}"
                                                    class="btn btn-primary mx-auto"
                                                >
                                                    View More
                                                </a>
                                            </div>
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
