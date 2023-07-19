@extends('layouts.master')
@section('title', 'Tambah Device')
@section('header', 'Tambah Device')
@section('content')
    <div class="card">
        <div class="card-header">
            <h6>Tambah Data Device</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('list-pc.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for='name'>Nama Device</label>
                    <input type='text' placeholder="nama device" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror" name='name' id='name' class=''>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for='ip'>IP Address</label>
                    <input type='text' value="{{ old('ip') }}" class="form-control @error('ip') is-invalid @enderror"
                        placeholder="Ip Address" name='ip' id='ip' class=''>
                    @error('ip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
