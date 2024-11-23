<div class="toast-container position-fixed top-5 start-5 p-3 ">
    <div id="toast" class="toast align-items-center text-bg-success border-0 w-100"  data-bs-delay=3000 role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body fw-bold fs-5">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>