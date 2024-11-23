@props(['book'])
<!-- start modal -->
<div class="modal fade" id="modal{{$book->id}}" tabindex="-1" aria-labelledby="modalLabel{{$book->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered w-50">
        <div class="modal-content">
            <form action={{Route('orders.store')}} method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel{{$book->id}}">borrow a book</h5>
                    <button type="button" class="btn-close"
                        data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name='orderable_id' value={{$book->id}}>
                    <input type="hidden" name='orderable_type' value={{$book::class}}>
                    <label class="form-label" for="from">from:</label>
                    <input type="date"
                        name="from"
                        id="from"
                        class="form-control"
                        min="{{now()->format('Y-m-d')}}"
                        value="{{now()->format('Y-m-d')}}"
                        required />
                    <br>
                    <label class="form-label" for="to">to:</label>
                    <input type="date"
                        name="to"
                        id="to"
                        class="form-control"
                        min="{{now()->format('Y-m-d')}}"
                        value="{{now()->format('Y-m-d')}}"
                        required />
                    <br>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" data-mdb-ripple-init>Save changes</button>
                    <p class="mt-2 fw-bold ">total fees: <span class="text-success">{{$book->borrow_rate}} </span>SR</p>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- end modal -->