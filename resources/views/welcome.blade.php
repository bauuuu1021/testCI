@extends('base')
@section('header')
    <section id="banner">
        <div class="container">
            <!--Carousel Wrapper-->
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>

        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-4 feature">
                        <div class="icon-container">
                            <img src="{{asset('images/icons/shipping.png')}}"/>
                        </div>
                        <div class="text-container">
                        <span class="desc">
                            提供宅配與店取服務
                        </span>
                        </div>
                    </div>
                    <div class="col-4 feature">
                        <div class="icon-container">
                            <img src="{{asset('images/icons/payment.png')}}"/>
                        </div>
                        <div class="text-container">
                        <span class="desc">
                            簡易又安全的付款方式
                        </span>
                        </div>
                    </div>
                    <div class="col-4 feature">
                        <div class="icon-container">
                            <img src="{{asset('images/icons/protect.png')}}"/>
                        </div>
                        <div class="text-container">
                            <span class="desc">
                                買家保障&amp;購物無憂
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
        @section('content')

        @endsection
        @section('eofScript')
            <script>
                window.Pages.Index.init();
            </script>
@endsection