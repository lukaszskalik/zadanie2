@extends('layouts.app')

@section('content')
    <!-- Contact Section-->
    <section class="masthead page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj kandydata</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form action="{{ route('applicants.store') }}" method="POST" id="applicants" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <!-- Firts name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="fname" id="fname" value="{{ old('fname') }}" type="text" placeholder="Wpisz imię"  required="required"/>
                            <label for="fname">Imię</label>
                        </div>
                        <!-- Last name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="lname" id="lname" value="{{ old('lname') }}" type="text" placeholder="Wpisz nazwisko"  required="required"/>
                            <label for="lname">Nazwisko</label>
                        </div>
                        <!-- Date input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="date" id="date_of_birth" value="{{ old('date_of_birth') }}" type="text" placeholder="Wpisz datę urodzenia YYYY-MM-DD"  autocomplete="off" required="required"/>
                            <label class="requiredField" for="date_of_birth">Data urodzenia</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" id="email" value="{{ old('email') }}" type="email" placeholder="name@example.com"  required="required"/>
                            <label for="email">E-mail</label>
                        </div>
                        <!-- Education input-->
                        <div class="form-floating mb-3">
                            <select class="form-select" name="education" id="education" value="{{ old('education') }}" aria-label="Default select example" required="required">
                                <option selected>Wybierz wykształcenie</option>
                                <option value="podstawowe">podstawowe</option>
                                <option value="średnie">średnie</option>
                                <option value="wyższe">wyższe</option>
                            </select>
                        </div>

                        <div id="files" class="mb-3">
                            
                            <input type="file" name="file[]" class="form-control form-control-lg upload" required="required"/>
                        </div>
                        <div class="mb-3 text-end">
                            <button class="btn btn-primary " type="button" onclick="addElement('files');" >załącz kolejny plik</button>
                        </div>
                        
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>   
                        </div>
                        <h3 class="text-center text-uppercase text-secondary mb-0">Staż</h3>
                        <!-- Icon Divider-->
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>   
                        </div>
                        <div class="target">
                            <div class="internship">
                                <!-- Company name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="company_name[]" id="company_name" value="" type="text" placeholder="Nazwa fimy"  required="required"/>
                                    <label for="company_name">Nazwa firmy</label>
                                </div>
                                <!-- Start date input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="start_date[]" id="start_date" value="" type="text" placeholder="Wpisz datę rozpoczęcia stażu"  autocomplete="off" required="required"/>
                                    <label class="requiredField" for="start_date">Data rozpoczęcia stażu YYYY-MM-YY</label>
                                </div>
                                <!-- End date input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="end_date[]" id="end_date" value="" type="text" placeholder="Wpisz datę zakończenia stażu"  autocomplete="off" required="required"/>
                                    <label class="requiredField" for="end_date">Data zakończenia stażu YYYY-MM-YY</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 text-end">
                                <button class="btn btn-primary add" type="button"  >dodaj kolejny staż</button>
                        </div>
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Wyślij</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection        
