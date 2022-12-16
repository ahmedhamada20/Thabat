@extends('admin.layouts.master')
@section('title')
اضافه مننج جديد
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('content')
<!-- Start page title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">اضافه مننج جديد</h4>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title-box -->
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col">
        <div class="card">

            <div class="card-body">
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <label>اسم المنتج</label>
                            <input type="text" name="name" required class="form-control">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                       <div class="col">
                            <label>سعر المنتج</label>
                            <input type="number" name="price" required class="form-control">
                            @error('price')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="col">
                            <label>كميه المنتج</label>
                            <input type="number" name="quantity" required class="form-control">
                            @error('quantity')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="row">

                        <div class="col">
                            <label>نسبه الخصم</label>
                            <input type="number" name="discount" required class="form-control">

                        </div>
                        <div class="col">
                            <label>اسم الفئه</label>
                            <select class="js-example-basic-multiple form-control" required name="category_id[]" multiple>

                                @foreach(App\Models\Category::all() as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>نوع المنتج</label>
                            <select name="type_product" id="" class="form-control p-1" required>
                                <option value="" disabled selected>-- اختر من القائمه --</option>
                                <option value="0">منتج عادي</option>
                                <option value="1">منتج جديد</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Notes</label>
                            <textarea class="form-control" name="notes" rows="5"></textarea>
                        </div>
                    </div>


                    <br>

                    <div class="row">
                        <div class="col">
                            <p class="text-danger">يجب ان يكون مقاس الصوره 300 * 300</p>
                            <label>صوره المنتج</label>
                            <input type="file" name="photo" required accept="image/*">
                        </div>
                    </div>


                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success btn-block">حفظ البيانات</button>
                        </div>
                        <div class="col">
                            <a href="{{route('home')}}" class="btn btn-info btn-block">رجوع الي الصفحه الرئسيه</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
@endsection
