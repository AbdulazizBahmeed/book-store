@props(['book'])
<!-- start card content -->
<div class="card p-0 col-lg-3 col-md-3 col-sm-10">
    <div class="bg-image hover-overlay ripple" data-mdb-ripple-init data-mdb-ripple-color="light">
        <img src="{{$book->getCoverImageUrl()}}" class="card-img-top" />
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    </div>
    <div class="card-body p-3">
        <div class="d-flex justify-content-between">
            <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                {{$book->rating}}
            </div>
            <div>{{$book->reviews}}</div>
        </div>
        <div class="mt-2 fw-bold">price: <span class="text-success">{{$book->borrow_rate}} </span>SR/day</div>
        <div class="mt-2 fw-bold">category: {{$book->category->name}}</div>
        <button type="button" class="btn btn-primary btn-rounded mt-3 w-100"
            data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#modal{{$book->id}}">
            borrow
        </button>
    </div>
    <!-- end card content -->

    <x-borrow-modal :book="$book"/>
</div>