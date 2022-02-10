@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <x-card class="bg-primary text-white mb-4">
            <div class="pb-0 d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-value-lg">{{ $penjualan ?? 0 }}</div>
                    <div>Total Penjualan</div>
                </div>
                <div class="btn-group">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="cil-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('penjualan.index') }}">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </x-card>
        <x-card>
            <x-slot name="header">Penjualan Per Produk</x-slot>
            <div>
                <div class="row">
                    @foreach ($produk as $item)
                        <div class="col-sm-4 mb-2">
                            <div class="c-callout c-callout-info"><small class="text-muted">{{ $item->produk }}</small>
                                <div class="text-value-lg">{{ $item->total }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-card>
    </div>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Laporan Penjualan</li>
    </ol>
@endsection
