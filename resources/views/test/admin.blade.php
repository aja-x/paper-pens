@extends('layouts.users')
@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h4>hubla</h4>
                </div>
            </div>
            <!-- divider -->
            <div class="row">
                <div class="span12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
            <!-- end divider -->
            <div class="row">
                <div class="span12">
                    <h4>Very satisfied <strong>clients</strong></h4>
                    <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client1.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client2.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client3.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client4.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client5.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client6.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client1.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client2.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client3.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client4.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client5.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/dummies/clients/client6.png') }}" class="client-logo" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection