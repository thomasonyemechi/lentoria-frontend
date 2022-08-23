@props(['id', 'type' => 'add'])

<div class="card mb-4 bg-light-secondary d-none addseccard" id={{ $id }} type={{ $type }}>
    <div class="my-4 mx-2">
        <form>
            <div class="row mb-3">
                <div class="col-lg-2 mt-3 col-md-4 col-12">
                    <h5 class="text-bold fw-bolder">New Section:</h5>
                </div>
                <div class="col-lg-10 col-md-8 col-12">
                    <input type="text" name="title" class="form-control mb-1" placeholder="Enter a title">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-lg-2 col-md-4 col-12">
                </div>
                <div class="col-lg-10 col-md-8 col-12">
                    <label for="" class="text-bold fw-semi-bold text-dark">What will
                        Students Learn in this course</label>
                    <input type="text" name="purpose" class="form-control mb-2"
                        placeholder="Enter a learning objective">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <p class="pt-3 me-3 fw-semi-bold text-bold closecard"><a href="javascript:void(0)">Cancel</a></p>
                <button type="submit" class="btn btn-primary btn-block btn-xs">Add
                    Section</button>
            </div>
        </form>
    </div>
</div>
