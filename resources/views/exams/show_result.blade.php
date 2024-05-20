@extends('layout')

@section('content')
    <style>
        .alert-success-custom {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-info-custom {
            background-color: #d1ecf1;
            color: #0c5460;
        }
        .alert-primary-custom {
            background-color: #cce5ff;
            color: #004085;
        }
        .alert-secondary-custom {
            background-color: #e2e3e5;
            color: #383d41;
        }
        .alert-light-custom {
            background-color: #fefefe;
            color: #818182;
        }
        .alert-dark-custom {
            background-color: #d6d8d9;
            color: #1b1e21;
        }
        .alert-warning-custom {
            background-color: #fff3cd;
            color: #856404;
        }
        .alert-danger-custom {
            background-color: #f8d7da;
            color: #721c24;
        }
        .text-success-custom {
            color: #28a745;
        }
        .text-danger-custom {
            color: #dc3545;
        }
        .table-bordered-custom {
            border: 1px solid #dee2e6;
        }
        .table-bordered-custom th, .table-bordered-custom td {
            border: 1px solid #dee2e6;
        }
    </style>

    <div class="row">
        <div class="col-md-10 mx-auto mt-5">
            <h1 class="mb-3">Les résultats des examens</h1>
            <a href="{{ route('exams.index') }}" class="btn btn-info">Retour</a>

            <table class="table table-striped table-bordered-custom">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Étudiant</th>
                        <th>Examen</th>
                        <th>Mention</th>
                        <th>Décision</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                        <tr class="
                            @if ($result->note >= 18 && $result->note <= 20)
                                alert-success-custom
                            @elseif ($result->note >= 16 && $result->note < 18)
                                alert-info-custom
                            @elseif ($result->note >= 14 && $result->note < 16)
                                alert-primary-custom
                            @elseif ($result->note >= 12 && $result->note < 14)
                                alert-secondary-custom
                            @elseif ($result->note >= 10 && $result->note < 12)
                                alert-light-custom
                            @elseif ($result->note >= 8 && $result->note < 10)
                                alert-dark-custom
                            @elseif ($result->note >= 5 && $result->note < 8)
                                alert-warning-custom
                            @else
                                alert-danger-custom
                            @endif
                        ">
                            <td>{{ $result->id }}</td>
                            <td>{{ $result->student->firstname . ' ' . $result->student->lastname }}</td>
                            <td>{{ $result->exam->title }}</td>
                            <td>{{ $result->grade }}</td>
                            <td>
                                @if ($result->note >= 10)
                                    <span class="text-success-custom bg-light py-2 text-center rounded shadow d-block" style="width: 100px;">Validé</span>
                                @else
                                    <span class="text-danger-custom bg-light py-2 text-center rounded shadow d-block" style="width: 100px;">Invalidé</span>
                                @endif
                                {{-- <a class="btn text-info" href="{{ route('results.edit', $result->id) }}">Edit</a>
                                <form action="{{ route('results.destroy', $result->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn text-danger d-inline" href="#">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
