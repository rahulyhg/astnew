@extends('layouts.app')

@section('content')


    <!--Main layout-->
    <div class="container  pb-5 page-content">
        <!--Section: Cards-->
            <section class="text-center ">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="d-none d-md-block col-lg-3 col-md-3 mb-4">

                        <!--Card one-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/Career.webp" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/career" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body  px-1 py-0">
                                <!--Title-->
                                <a href="/services/career">
                                <div style="font-size: 18px;" class="card-title">Career Report</div>
                                <!--Text-->
                                <p class="card-text"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->


                        <!--Card two-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/marriage3.jpg" style="width: 40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/marriage" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-1 py-0">
                                <!--Title-->
                                <a href="/services/marriage">
                                    <div style="font-size: 18px;" class="card-title">Marriage Report</div>
                                    <!--Text-->
                                    <p class="card-text"> Get your marriage predictions and appropriate time for marriage according to your horoscope.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card three-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/child.webp" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/child" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-0 py-1">
                                <!--Title-->
                                <a href="/services/child">
                                    <div style="font-size: 18px;" class="card-title">Child Report</div>
                                    <!--Text-->
                                    <p class="card-text  px-1 py-0"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-3 mb-4 serviceform">

                        <!--Horoscope Form-->
                        <form class="card" action="/horoscope" enctype="multipart/form-data" method="post" style="width: 100%;">
                            @csrf
                            <h5 class="my-3  py-2 text-uppercase text-white" style="background-color:#038c01;"> Raja Yoga Report</h5>
                            <input type="hidden" name="reptype" value="Rajayoga">
                            <div class="p-3 text-left">
                                <p>According to vedic astrology if their is a combination or relation between THE lord of the Kendra House and the lord of the Trikon House then its called raja yoga.</p>

                                <p>Some of the  most popular yogas : Gaj Kesri Yoga, Panch Maha Purush Yoga, Adhi Yoga, Budha aditya yoga.</p>

                                <p>Raja yoga report provides you with the indepth analysis of the yoga s present in a  horoscope and the time when it commences in a horoscope.</p>
                            </div>
                            @include('services/servicesform')

                                <div class="col-sm-12 mt-4 text-center formbutton">
                                    <p class="  my-2"> Detailed Report :  1200/-</p>

                                    <button type="submit"  name="submit" data-amount="1000"  class="btn mt-3 text-white btn-md">Submit Details</button>
                                </div>
                            </div>
                        </form>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-3 mb-4">

                        <!--Card one-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/kalasarpa.png" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/kalasarpadosha" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-1 py-0">
                                <!--Title-->
                                <a href="/services/kalasarpadosha">
                                    <div style="font-size: 18px;" class="card-title">Kalasarpa Dosha Report</div>
                                    <!--Text-->
                                    <p class="card-text">  Know whether there is a Kala Sarpa Dosh in your birth chart or not ,Don't know or unsure</p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card two-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/manglik.webp" style="width:55%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/matchmaker" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-0 py-1">
                                <!--Title-->
                                <a href="/services/matchmaker">
                                    <div style="font-size: 18px;" class="card-title">Compatibility Report</div>
                                    <!--Text-->
                                    <p class="card-text"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card three-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/child.webp" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/sadesati" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-0 py-1">
                                <!--Title-->
                                <a href="/services/sadesati">
                                    <div style="font-size: 18px;" class="card-title">SadeSati Report</div>
                                    <!--Text-->
                                    <p class="card-text"> The SadeSati Report Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->


                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Cards-->

        </div>
    <!--Main layout-->

    <!--/.Footer-->
@endsection
@section('footer_scripts')

    @include('scripts.datetime')

@endsection