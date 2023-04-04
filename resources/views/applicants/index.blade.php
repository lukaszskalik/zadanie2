@extends('layouts.app')

@section('content')
    <!-- Portfolio Section-->
    <section class="masthead page-section portfolio" id="portfolio">
        <div class="container">

            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista kandydatów</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imię</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Data urodzenia</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Wykształcenie</th>
                        <th scope="col">Pliki</th>
                        <th scope="col">Staż Firma</th>
                        <th scope="col">Rozpoczęcie</th>
                        <th scope="col">Zakończenie</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($applicants as $applicant)
                        <tr>
                            <th scope="row">{{ $applicant->id }}</th>
                            <td>{{ $applicant->fname }}</td>
                            <td>{{ $applicant->lname }}</td>
                            <td>{{ $applicant->date_of_birth }}</td>
                            <td>{{ $applicant->email }}</td>
                            <td>{{ $applicant->education }}</td>
                            <td>
                                @foreach ($applicant->files as $key =>$value)
                                    {{ $value->filename }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ($applicant->interships as $key =>$value)
                                    {{ $value->company_name }}<br>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($applicant->interships as $key =>$value)
                                    {{ $value->start_date }}<br>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($applicant->interships as $key =>$value)
                                    {{ $value->end_date }}<br>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </section>
@endsection        
