@props(['id'])
<!-- start card content -->
<div class="card p-0 col-lg-3 col-md-3 col-sm-10">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-init data-mdb-ripple-color="light">
        <img src="{{ URL::asset('images/why-we-sleep.jpg') }}" class="card-img-top" />
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    </div>
    <div class="card-body p-3">
        <div class="d-flex justify-content-between">
            <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                4.3
            </div>
            <div>653 reviews</div>
        </div>
        <div class="mt-2 fw-bold">price: <span class="text-success">5SR</span>/day</div>
        <div class="mt-2 fw-bold">category: science</div>
        <button type="button" class="btn btn-primary btn-rounded mt-3 w-100"
            data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal{{$id}}">
            borrow
        </button>
    </div>
    <!-- end card content -->

    <!-- start modal -->
    <div class="modal fade" id="exampleModal{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered w-50">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel{{$id}}">borrow a book</h5>
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
                    <p class="mt-2 fw-bold ">total fees: <span class="text-success">5SR</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
</div>