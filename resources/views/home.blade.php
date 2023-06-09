@extends('layouts.front-layout')
@section('content')
<section>
    <div class="bannerSection">
        <div class="container">
            <div class="bannerContent">
                <h1>{{__('messages.Find the perfect company for a dinner or an event')}}.</h1>
                <div class="bannerSearch">
                    <div class="searchCol">
                        <form action="{{route('hostess-search-result')}}">
                            <input type="text" class="form-control" placeholder="{{__('messages.Search')}}">
                            <span class="searchIcon"><img src="{{URL::asset('images/search-icon.svg')}}" alt="..."></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="sectionSpace">
        <div class="container">
            <div class="titleCol text-center">
                <h3 class="lgTitle">{{__('messages.Wing Hostesses and Independent Models')}} </h3>
                <p>{{__('messages.Direct contacts and maximum')}}</p>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 g-2 g-lg-3 g-xl-4 justify-content-center">
                <div class="col">
                    <div class="cardStyle2">
                        <div class="cs2IconCol">
                            <img src="{{ URL::asset('images/icon-1.png') }}" alt="...">
                        </div>
                        <div class="cs2ContentCol">
                            <p>{{ __('messages.Company for lunches and dinners')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle2">
                        <div class="cs2IconCol">
                            <img src="{{ URL::asset('images/icon-2.png') }}" alt="...">
                        </div>
                        <div class="cs2ContentCol">
                            <p>{{__('messages.Company for evenings in clubs')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle2">
                        <div class="cs2IconCol">
                            <img src="{{ URL::asset('images/icon-3.png') }}" alt="...">
                        </div>
                        <div class="cs2ContentCol">
                            <p>{{__('messages.Company for Aperitifs')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle2">
                        <div class="cs2IconCol">
                            <img src="{{ URL::asset('images/icon-4.png') }}" alt="...">
                        </div>
                        <div class="cs2ContentCol">
                            <p>{{__('messages.Company for weekends and trips')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardStyle2">
                        <div class="cs2IconCol">
                            <img src="{{ URL::asset('images/icon-5.png') }}" alt="...">
                        </div>
                        <div class="cs2ContentCol">
                            <p>{{__('messages.Modelle per shooting')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="sectionSpace lightBg">
        <div class="container">
            <div class="titleCol text-center">
                <h3 class="lgTitle">{{__('messages.How does it work? Simple and fast.')}}</h3>
            </div>
            <div class="placeholderConent"></div>
        </div>
    </div>
</section>

<section>
    <div class="sectionSpace hmSection">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-auto">
                    <div class="imgColMain">
                        <img src="{{ URL::asset('images/img-001.jpg') }}" alt="...">
                    </div>
                </div>
                <div class="col-md">
                    <div class="titleCol">
                        <h3 class="lgTitle">{{__('messages.Hostess or Model?')}}</h3>
                        <h5>{{__('messages.Earn with your time.')}}</h5>
                    </div>
                    <div class="contentCol">
                        <p>{{__('messages.Work independently and whenever you want, accompanying clients to dinners, events or trips.')}}</p>
                        <p>{{__('messages.Wostess is not an agency and does not take any commission or percentage.')}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="sectionSpace lightBg">
        <div class="container">
            <div class="titleCol">
                <h3 class="lgTitle">{{__('messages.Requests?')}}</h3>
            </div>

            <div class="accordionStyle">
                <div class="accordionItem actAccordion">
                    <div class="accordionHeader">Proin fringilla arcu a orci commodo iaculis.</div>
                    <div class="accordionBody" style="display: block;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus ut diam vitae
                            auctor. Cras lacinia consequat nunc, vitae egestas sem porttitor sed. Duis nibh
                            orci, ultrices vitae porta a, tempus vel nunc. Integer tempus risus non lacinia
                            rhoncus. Phasellus dui lorem, lobortis sit amet magna at, dignissim elementum augue.
                        </p>
                    </div>
                </div>
                <div class="accordionItem">
                    <div class="accordionHeader">Integer ac quam et lectus vehicula finibus.</div>
                    <div class="accordionBody">
                        <p>Sed ac facilisis arcu. Etiam cursus, odio vel mattis ultricies, ipsum lectus
                            fringilla velit, eget malesuada quam nulla ac justo. Integer urna nunc, interdum et
                            mauris vel, efficitur viverra lacus. Cras non nulla et erat sollicitudin convallis.
                            Donec interdum justo quis iaculis viverra. Maecenas dapibus, nulla quis vulputate
                            elementum, nunc leo convallis odio, sed facilisis ex ex elementum ante. Ut hendrerit
                            neque ut aliquam suscipit. Nam elementum dolor ultricies, tempor dui quis, tincidunt
                            ex. </p>
                    </div>
                </div>
                <div class="accordionItem">
                    <div class="accordionHeader">Proin fringilla arcu a orci commodo iaculis.</div>
                    <div class="accordionBody">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus ut diam vitae
                            auctor. Cras lacinia consequat nunc, vitae egestas sem porttitor sed. Duis nibh
                            orci, ultrices vitae porta a, tempus vel nunc. Integer tempus risus non lacinia
                            rhoncus. Phasellus dui lorem, lobortis sit amet magna at, dignissim elementum augue.
                        </p>
                    </div>
                </div>
                <div class="accordionItem">
                    <div class="accordionHeader">Integer ac quam et lectus vehicula finibus.</div>
                    <div class="accordionBody">
                        <p>Sed ac facilisis arcu. Etiam cursus, odio vel mattis ultricies, ipsum lectus
                            fringilla velit, eget malesuada quam nulla ac justo. Integer urna nunc, interdum et
                            mauris vel, efficitur viverra lacus. Cras non nulla et erat sollicitudin convallis.
                            Donec interdum justo quis iaculis viverra. Maecenas dapibus, nulla quis vulputate
                            elementum, nunc leo convallis odio, sed facilisis ex ex elementum ante. Ut hendrerit
                            neque ut aliquam suscipit. Nam elementum dolor ultricies, tempor dui quis, tincidunt
                            ex. </p>
                    </div>
                </div>
                <div class="accordionItem">
                    <div class="accordionHeader">Integer id ex facilisis, dapibus metus id, ornare mi.</div>
                    <div class="accordionBody">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus ut diam vitae
                            auctor. Cras lacinia consequat nunc, vitae egestas sem porttitor sed. Duis nibh
                            orci, ultrices vitae porta a, tempus vel nunc. Integer tempus risus non lacinia
                            rhoncus. Phasellus dui lorem, lobortis sit amet magna at, dignissim elementum augue.
                        </p>
                    </div>
                </div>
                <div class="accordionItem">
                    <div class="accordionHeader">Integer ac quam et lectus vehicula finibus.</div>
                    <div class="accordionBody">
                        <p>Sed ac facilisis arcu. Etiam cursus, odio vel mattis ultricies, ipsum lectus
                            fringilla velit, eget malesuada quam nulla ac justo. Integer urna nunc, interdum et
                            mauris vel, efficitur viverra lacus. Cras non nulla et erat sollicitudin convallis.
                            Donec interdum justo quis iaculis viverra. Maecenas dapibus, nulla quis vulputate
                            elementum, nunc leo convallis odio, sed facilisis ex ex elementum ante. Ut hendrerit
                            neque ut aliquam suscipit. Nam elementum dolor ultricies, tempor dui quis, tincidunt
                            ex. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection