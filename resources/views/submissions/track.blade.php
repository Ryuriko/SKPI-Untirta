@extends('layouts.main')

@section('content')
    <div class="row px-4 py-2">
        <div class="col">
            <ul class="list-unstyled fw-bold">
                <li><i class="bi bi-x-circle"></i> Disetujui pihak prodi</li>
                <li><i class="bi bi-x-circle"></i> Disetujui pihak Universitas</li>
                <li><i class="bi bi-x-circle"></i> Dicetak</li>
            </ul>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <a href="/submissions" class="btn btn-dark"><i class="bi bi-arrow-left-square-fill"></i> Back</a>
        </div>
    </div>
@endsection

{{-- 

    --Additional--
    1. <i class="bi bi-check-circle-fill"></i>

--}}