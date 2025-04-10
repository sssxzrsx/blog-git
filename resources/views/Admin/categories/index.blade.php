@extends('admin.layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Категори</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Главная</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Список категорий</h3>
                        </div>
                        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Добавить категорию</a>
                @if (count($categories))
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Наименование</th>
                      <th>slug</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->title }}</td>
                      <td>{{ $category->slug }}</td>
                      <td>
                        <a href="{{ route('categories.edit', ['category' => $category->if]) }}" class="btn bnt-info btn-am float-left mr-1">
                            <i class="fas fa-encil-alt"></i>
                        </a>

                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post" class="float-left">
                            @csrf
                            @method ('DELETE')
                            <button type="submit" class="btn btn-danger btn-am" onclick="return confirm('Подтвердите удаление')">
                                <i class="fas fa-trash-allt"></i>
                            </button>
                        </form>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            @else
            <p>Категорий пока нет...</p>
            @endif
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection