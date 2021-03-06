@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm danh mục sản phẩm
            </header>

            <div class="panel-body">

                <div class="position-center">
                    <form role="form" action="{{\Illuminate\Support\Facades\URL::to('/save-category-product')}}" method="post">
                        @csrf
                        <div class="error-message">
                            @if ($errors->any())
                                @foreach($errors->all() as $nameError)
                                    <p style="color:red">{{ $nameError }}</p>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục(*)</label>
                            <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục(*)</label>
                            <textarea style="resize: none" rows="5" name="category_product_desc" class="form-control" id="exampleInputPassword1"
                                      placeholder="Mô tả danh mục"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>

                            </select>
                        </div>

                        <button type="submit" name="add_category_product" class="btn btn-info">Thêm</button>
                    </form>
                </div>

            </div>
        </section>

    </div>

@endsection
