@extends('layouts.admin')
@section('page_title')
    Course Category
@endsection

@section('page_content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                <div class="mb-3 mb-md-0">
                    <h1 class="mb-1 h2 fw-bold">Category Management</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#">Category Management</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="#" class="btn btn-primary add_course">Add Category</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card rounded-3">
                <div class="table-responsive border-0 overflow-y-hidden">
                    <table class="table mb-0 text-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="border-0 text-uppercase">
                                    Category
                                </th>
                                <th scope="col" class="border-0 text-uppercase">
                                    Topics
                                </th>
                                <th scope="col" class="border-0 text-uppercase"></th>
                            </tr>
                        </thead>
                        <tbody id="category_body" >

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="newCatgoryLabel">
                        Create New Category
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body shadow">
                    <form id="addCategoryForm">
                        <div class="mb-3">
                            <label class="form-label">Course Category</label>
                            <input type="text" class="form-control" name="course_category"
                                placeholder="Course category here" required>
                        </div>
                        <div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary ">Add New Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="newCatgoryLabel">
                        Edit Category
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body shadow">
                    <form id="editCategoryForm">
                        <div class="mb-3">
                            <label class="form-label">Course Category</label>
                            <input type="text" class="form-control" name="course_category"
                                placeholder="Course category here" required>

                            <input type="hidden" name="id">
                        </div>
                        <div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary ">Update Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $('.add_course').on('click', function() {
                $('#addCategoryModal').modal('show');
            })

            $('body').on('click', '.edit_category', function() {
                data = $(this).data('data');
                modal = $('#editCategoryModal')
                modal.modal('show');

                $(modal).find('.modal-title').html(`Edit Category (${data.name}) `);
                $(modal).find('input[name="course_category"]').val(data.name);
                $(modal).find('input[name="id"]').val(data.id);
            })


            $('#editCategoryForm').on('submit', function(e) {
                e.preventDefault(); form = $(this)
                name = $(form).find('input[name="course_category"]').val();
                id = $(form).find('input[name="id"]').val();
                bt = $(form).find('button');
                $.ajax({
                    method: 'post',
                    url: api_url+'admin/category/'+id,
                    data: { name: name, id: id },
                    beforeSend:() => {
                        btn(bt, '', 'before');
                    }
                }).done(function (res) {
                    salat(res.message);
                    fetchCategory(); $('#editCategoryModal').modal('hide');
                    btn(bt, 'Update Category', 'after');
                }).fail(function (res) {
                    concatError(res.responseJSON);
                    console.log(res)
                    btn(bt, 'Update Category', 'after');
                })
            })


            function fetchCategory() {
                $.ajax({
                    method: 'get',
                    url: api_url+'admin/category',
                }).done(function (res) {
                    body = $('#category_body')
                    body.html('')
                    res.data.map( cat => {
                        body.append(`
                            <tr>
                                <td class="border-top-0">
                                    <a href="#" class="text-inherit">
                                        <h4 class="mb-1 text-primary-hover">
                                            ${cat.name}
                                        </h4>
                                        <span class="text-inherit">${ formatDate(cat.created_at) }</span>
                                    </a>
                                </td>
                                <td class="align-middle border-top-0">
                                    ${cat.total_topics}
                                </td>
                                <td class="align-middle border-top-0">
                                    <span class="dropdown dropstart">
                                        <a class="text-decoration-none text-muted" href="#" role="button"
                                            id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                            aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                            <span class="dropdown-header">Edit</span>
                                            <a class="dropdown-item edit_category" href="javascript:;" data-data='${JSON.stringify(cat)}' ><i
                                                    class="fe fe-edit dropdown-item-icon"></i>Edit Category</a>
                                        </span>
                                    </span>
                                </td>
                            </tr>
                        `)
                    })
                }).fail(function (res) {
                    console.log(res)
                    salat('An error occured while fetch your data', 1);
                })
            }

            fetchCategory();

            $('#addCategoryForm').on('submit', function (e) {
                e.preventDefault();
                form = $(this);
                name = $(form).find('input[name="course_category"]').val();
                bt = $(form).find('button');
                $.ajax({
                    method: 'post',
                    url: api_url+'admin/add_category',
                    data: { name: name },
                    beforeSend:() => {
                        btn(bt, '', 'before');
                    }
                }).done(function (res) {
                    salat(res.message);
                    fetchCategory();$('#addCategoryModal').modal('hide');$('#addCategoryForm')[0].reset();
                    btn(bt, 'Add New Category', 'after');
                }).fail(function (res) {
                    concatError(res.responseJSON);
                    console.log(res)
                    btn(bt, 'Add New Category', 'after');
                })
            })
        })
    </script>
@endsection
