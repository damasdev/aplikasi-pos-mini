@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <x-card>
            <x-slot name="header">
                Tambah Produk
            </x-slot>
            <x-form action="{{ route('produk.store') }}">
                <x-form-input name="nama" label="Nama" />
                <x-form-select name="kategori_id" label="Kategori" id="select2">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" @if ($item->id == old('kategori_id')) selected @endif>
                            {{ $item->nama }}
                        </option>
                    @endforeach
                </x-form-select>
                <x-form-textarea name="deskripsi" label="Deskrikpsi" />
                <x-form-input name="harga" label="Harga" type="number"/>
                <x-form-submit id="form-submit" hidden />
            </x-form>

            <x-slot name="footer">
                <a class="btn btn-primary" href="#"
                    onclick="event.preventDefault(); document.getElementById('form-submit').click();">
                    Simpan
                </a>
            </x-slot>
        </x-card>

    </div>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Produk</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection
