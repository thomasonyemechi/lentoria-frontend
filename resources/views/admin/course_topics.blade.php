@extends('layouts.admin')
@section('page_title')
    Course Topics
@endsection

@section('page_content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                <div class="mb-3 mb-md-0">
                    <h1 class="mb-1 h2 fw-bold">Topics Management</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#">Course Topics</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="#" class="btn btn-primary add_topic">Add Topics</a>
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
                                    Topic
                                </th>
                                <th scope="col" class="border-0 text-uppercase">
                                    Category
                                </th>
                                <th scope="col" class="border-0 text-uppercase">
                                    Description
                                </th>
                                <th scope="col" class="border-0 text-uppercase">
                                    Courses
                                </th>
                                <th scope="col" class="border-0 text-uppercase"></th>
                            </tr>
                        </thead>
                        <tbody id="topic_body">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addTopicModal" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="newCatgoryLabel">
                        Create New Topic
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body shadow">
                    <form id="addTopicForm">
                        <div class="mb-3">
                            <label class="form-label">Topic</label>
                            <input type="text" class="form-control" name="topic" placeholder="Topic here" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-control course_category" name="category">
                                <option selected Disabled>Select Topic Category</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Topic Description</label>
                            <textarea class="form-control" row=2 name="description"></textarea>
                        </div>
                        <div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary ">Add Topic</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editTopicModal" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel"
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
                    <form id="editTopicForm">
                        <div class="mb-3">
                            <label class="form-label">Topic</label>
                            <input type="text" class="form-control" name="topic" placeholder="Topic here" required>
                            <input type="hidden" name="id">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-control course_category course_category_edit" name="category">
                                <option selected Disabled>Select Topic Category</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Topic Description</label>
                            <textarea class="form-control" row=2 name="description"></textarea>
                        </div>
                        <div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary ">Update Topic</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $('.add_topic').on('click', function() {
                $('#addTopicModal').modal('show');
            })

            $('body').on('click', '.edit_topic', function() {
                data = $(this).data('data');
                modal = $('#editTopicModal')
                modal.modal('show');

                $(modal).find('.modal-title').html(`Edit Topic (${data.name}) `);
                $(modal).find('input[name="topic"]').val(data.name);
                $(modal).find('input[name="id"]').val(data.id);
                $(modal).find(`.course_category_edit option[value=${data.category_id}] `).prop('selected', true)
                $(modal).find('textarea[name="description"]').val(data.description);
            })


            $('#editTopicForm').on('submit', function(e) {
                e.preventDefault();
                form = $(this);
                name = $(form).find('input[name="topic"]').val();
                category_id = $(form).find('select[name="category"]').val();
                id = $(form).find('input[name="id"]').val();
                des = $(form).find('textarea[name="description"]').val();
                bt = $(form).find('button');

                $.ajax({
                    method: 'post',
                    url: api_url + 'admin/update_topic/'+id,
                    data: {
                        name: name, category_id: category_id, description: des, id: id
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    }
                }).done(function(res) {
                    salat(res.message);
                    fetchTopic();
                    $('#editTopicModal').modal('hide');
                    btn(bt, 'Update Topic', 'after');
                    form[0].reset()
                }).fail(function(res) {
                    concatError(res.responseJSON);
                    console.log(res)
                    btn(bt, 'Update Topic', 'after');
                })
            })


            function fetchTopic()
            {
                $.ajax({
                    method: 'get',
                    url: api_url + 'admin/topics',
                }).done(function(res) {
                    body = $('#topic_body')
                    body.html('')
                    res.data.map(topic => {
                        body.append(`
                            <tr>
                                <td class="border-top-0">
                                    <a href="#" class="text-inherit">
                                        <h4 class="mb-1 text-primary-hover">
                                            ${topic.name}
                                        </h4>
                                        <span class="text-inherit">${ formatDate(topic.created_at) }</span>
                                    </a>
                                </td>
                                <td class="align-middle border-top-0">${topic.category.name}</td>
                                <td class="align-middle border-top-0">${topic.description}</td>
                                <td class="align-middle border-top-0">${topic.total_courses}</td>
                                <td class="align-middle border-top-0">
                                    <span class="dropdown dropstart">
                                        <a class="text-decoration-none text-muted" href="#" role="button"
                                            id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                            aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                            <span class="dropdown-header">Edit</span>
                                            <a class="dropdown-item edit_topic" href="javascript:;" data-data='${JSON.stringify(topic)}' ><i
                                                    class="fe fe-edit dropdown-item-icon"></i>Edit Topic</a>
                                        </span>
                                    </span>
                                </td>
                            </tr>
                        `)
                    })
                }).fail(function(res) {
                    console.log(res)
                    salat('An error occured while fetching your data', 1);
                })
            }

            fetchTopic()

            function fetchCategory() {
                $.ajax({
                    method: 'get',
                    url: api_url + 'admin/category',
                }).done(function(res) {
                    body = $('.course_category')
                    body.html('<option selected disabled>Select Category</option>')
                    res.data.map(cat => {
                        body.append(`<option value="${cat.id}" >${cat.name}</option>`)
                    })
                }).fail(function(res) {
                    console.log(res)
                    salat('An error occured while fetch your data', 1);
                })
            }

            fetchCategory();

            

            $('#addTopicForm').on('submit', function(e) {
                e.preventDefault();
                form = $(this);
                name = $(form).find('input[name="topic"]').val();
                category_id = $(form).find('select[name="category"]').val();
                des = $(form).find('textarea[name="description"]').val();
                bt = $(form).find('button');

                $.ajax({
                    method: 'post',
                    url: api_url + `admin/add_topic`,
                    data: {
                        name: name, category_id: category_id, description: des
                    },
                    beforeSend: () => {
                        btn(bt, '', 'before');
                    }
                }).done(function(res) {
                    salat(res.message);
                    fetchTopic();
                    $('#addTopicModal').modal('hide');
                    btn(bt, 'Add Topic', 'after');
                    form[0].reset()
                }).fail(function(res) {
                    concatError(res.responseJSON);
                    console.log(res)
                    btn(bt, 'Add Topic', 'after');
                })
            })
        })
    </script>
@endsection
