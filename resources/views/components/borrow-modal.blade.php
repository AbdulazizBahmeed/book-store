@props(['book'])
<!-- start modal -->
<div class="modal fade" id="modal{{$book->id}}" tabindex="-1" aria-labelledby="modalLabel{{$book->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered w-50">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel{{$book->id}}">borrow a book</h5>
                    <button type="button" class="btn-close"
                        data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label class="form-label" for="from">from:</label>
                        <input type="date" id="from" class="form-control" value="{{now()->format('Y-m-d')}}" />
                        <br>
                        <label class="form-label" for="to">to:</label>
                        <input type="date" id="to" class="form-control" value="{{now()->format('Y-m-d')}}" />
                        <br>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-primary" data-mdb-ripple-init>Save changes</button>
                    <p class="mt-2 fw-bold ">total fees: <span class="text-success">{{$book->borrow_rate}} </span>SR</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->