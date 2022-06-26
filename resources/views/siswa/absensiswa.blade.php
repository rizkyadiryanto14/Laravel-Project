@extends('template_backend.home')
@section('heading', 'Absen Harian siswa')
@section('page')
<li class="breadcrumb-item active">Absen Harian siswa</li>
@endsection
@section('content')
@php
$no = 1;
@endphp
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Ket.</th>
                        <th width="80px">Jam Absen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absensiswa as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->siswa->nama_siswa }}</td>
                        <td>{{ $data->kehadiran->ket }}</td>
                        <td>{{ $data->created_at->format('H:i:s') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Absen Harian Siswa</h3>
        </div>
        <form action="{{ route('siswa.simpan') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="no_induk">Nomor induk</label>
                    <input type="text" id="no_induk" name="no_induk" maxlength="5" onkeypress="return inputAngka(event)" class="form-control @error('no_induk') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="kehadiran_id">Keterangan Kehadiran</label>
                    <select id="kehadiran_id" type="text" class="form-control @error('kehadiran_id') is-invalid @enderror select2bs4" name="kehadiran_id">
                        <option value="">-- Pilih Keterangan Kehadiran --</option>
                        @foreach ($kehadiransiswa as $data)
                        <option value="{{ $data->id }}">{{ $data->ket }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Absen</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
    $("#AbsenSiswa").addClass("active");
</script>
@endsection