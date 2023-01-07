<!-- Modal -->
<div class="modal fade" dir="rtl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" >تأكيد عمليه الدفع</h5>
                <button type="button" class="close" dir="rtl" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('order_paymaents')}}" method="post">
                    @csrf

                    <label>هل انت متأكد من علميه الشراء ؟</label>
                    <input type="text" readonly class="form-control" value="AED {{Cart::subtotal()}} ">


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" dir="rtl" data-dismiss="modal">اغلاق</button>
                        <button type="submit" dir="rtl" class="btn btn-primary">دفع</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
