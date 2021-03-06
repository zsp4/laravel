@extends('template')

@section('title', 'Добавить товар')

@section('content')
    <h1>Добавить товар</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="post" action="{{ route('admin-products-add') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="code">Код</label>
            <input type="text" class="form-control" name="code" value="{{ $product->code }}">
        </div>
        <div class="form-group">
            <label for="quantity">Количество</label>
            <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}">
        </div>
        <div class="form-group">
            <label for="quantity">Цена</label>
            <input type="number" class="form-control" name="price" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label for="active">Активность</label>
        </div>

        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
    <a href="{{ route('admin-products-index') }}">Назад</a>
@endsection