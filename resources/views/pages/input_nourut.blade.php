@extends('layouts.main');
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
@csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="judul">
                <h1>Halaman Kepuasan Pengguna</h1>
                </div>
            <div class="card">
                
                <div class="card-body">
                    <form method="POST" action="/fbproses">
                        @csrf
                        <div class="form-group row">
                            <label class="kepuasan">{{ __('Masukkan No. Antrian') }}</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="no-antrian" type="text" class="form-control" name="no_urut" autofocus required>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <div>
                                <button type="submit" class="login">
                                    {{ __('OK') }}
                                </button>
                            </div>
                        </div><br> --}}
                        {{-- <div class="form-group row">
                            <label class="kepuasan">{{ __('Layanan yang Anda ambil :') }}</label>
                        </div> --}}
                        {{-- <div class="card bg-dark text-white">
                            <img class="layanan">
                            <div class="layanan-text">
                                <h2>Iki mengko diisi layanan sik dipilih.</h2>
                                <h5>Nama Layanan yang anda Akses terakhir kali</h5>
                            </div>
                        </div><br> --}}
                        <div class="form-group row">
                            <label class="kepuasan">{{ __('Apakah anda puas dengan Layanan Kami?') }}</label>
                        </div><br>
                        <div class="form-group row">
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan" value="Sangat Puas">
                                <div>
                                    <h1 style="font-size: 70px">&#128525;</h1>
                                    <h3 style="font-size: 12px">Sangat Puas</h3>
                                </div>
                            </label>
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan" value=" Puas">
                                <div>
                                    <h1 style="font-size: 70px">&#128514;</h1>
                                    <h3 style="font-size: 12px">Puas</h3>
                                </div>
                            </label>
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan" value="Kurang Puas">
                                <div>
                                    <h1 style="font-size: 70px">&#128512;</h1>
                                    <h3 style="font-size: 12px">Kurang Puas</h3>
                                </div>
                            </label>
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan" value="Tidak Puas">
                                <div>
                                    <h1 style="font-size: 70px">&#128561;</h1>
                                    <h3 style="font-size: 12px">Tidak Puas</h3>
                                </div>
                            </label>
                            <label class="kpsntlsn">
                                <input type="radio" name="kepuasan" id="kepuasan" value="Sangat Tidak Puas">
                                <div>
                                    <h1 style="font-size: 70px">&#129324;</h1>
                                    <h3 style="font-size: 12px">Sangat Tidak Puas</h3>
                                </div>
                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="kepuasan" >Kritik / Saran</label>
                        </div>
                        <div>
                            <textarea name="kritik" class="form-control" cols="30" rows="10">{{ old('kritik') }}</textarea>
                        </div>
                        <div class="form-group row">
                            <div><br>
                                <button type="submit" class="login">
                                    {{ __('SIMPAN') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>