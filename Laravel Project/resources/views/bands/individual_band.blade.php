@extends('layouts.master')

@section('content')

    <div class="container-fluid col-6 mx-auto mt-5 mb-5">
        <form  method="POST" action="{{ route('band.update')}}">
            @csrf
            <input type="hidden" name="id" value="{{ $band->id }}">
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init>
                        <label class="form-label" for="form3Example1" >Nome da Banda</label>
                        <input type="text" name="nome" id="form3Example1" class="form-control" value="{{ $band ->nome }}" />
                        @error('name')
                        erro nome
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init>
                        <label class="form-label" for="form3Example1">Numero de Albuns</label>
                        <input type="number" name="numero_albuns" id="form3Example1" class="form-control" value="{{$band->numero_albuns}}" />
                        @error('name')
                        erro image
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init>
                        <label class="form-label" for="form3Example1">Foto</label>
                        <input type="file" name='foto' accept="image/*" id="form3Example1"  />
                        @error('foto')
                        erro foto
                        @enderror
                    </div>
                </div>

            </div>

            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Atualizar</button>
        </form>
@endsection

