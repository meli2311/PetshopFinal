@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Agregar categoría de publicación</h5>
    <div class="card-body">
      <form method="post" action="{{route('post-category.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Titulo</label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Estado</label>
          <select name="status" class="form-control">
              <option value="active">Activo</option>
              <option value="inactive">Inactivo</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button class="btn btn-warning" type="reset" aria-label="Limpiar">Limpiar</button>
           <button class="btn btn-success" type="submit" aria-label="Crear">Crear</button>
        </div>
      </form>
    </div>
</div>

@endsection
