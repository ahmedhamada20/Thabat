<!-- Modal -->
<div class="modal fade" id="delete{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف الفئه</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('category.destroy','test')}}" method="post">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="id" value="{{$row->id}}">

                    <div class="row">
                        <div class="col">
                            <label>هل انت متأكد من عمليه الحذف ؟</label>
                            <input type="text" value="{{$row->name}}" readonly class="form-control">
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">حذف</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
