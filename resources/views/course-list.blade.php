@extends('layouts.instructor')
@section('page_title', 'Lentoria || Course List')

@section('page_content')
    <!-- Page header -->
    <div class="bg-primary py-4 py-lg-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div>
                        <h1 class="mb-0 text-white display-4">Lentoria Courses</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                    <div class="row d-lg-flex justify-content-between align-items-center">
                        <div class="col-md-6 col-lg-8 col-xl-9 ">
                            <h4 class="mb-3 mb-lg-0">Displaying 9 out of 68 courses</h4>
                        </div>
                        <div class="d-inline-flex col-md-6 col-lg-4 col-xl-3 ">
                            <div class="me-2">
                                <!-- Nav -->
                                <div class="nav btn-group flex-nowrap" role="tablist">
                                    <button class="btn btn-outline-white active" data-bs-toggle="tab"
                                            data-bs-target="#tabPaneGrid" role="tab"
                                            aria-controls="tabPaneGrid" aria-selected="true">
                                        <span class="fe fe-grid"></span>
                                    </button>
                                    <button class="btn btn-outline-white" data-bs-toggle="tab"
                                            data-bs-target="#tabPaneList" role="tab"
                                            aria-controls="tabPaneList" aria-selected="false">
                                        <span class="fe fe-list"></span>
                                    </button>
                                </div>
                            </div>
                            <!-- List  -->
                            <select class="selectpicker" data-width="100%">
                                <option value="">Sort by</option>
                                <option value="Newest">Newest</option>
                                <option value="Free">Free</option>
                                <option value="Most Popular">Most Popular</option>
                                <option value="Highest Rated">Highest Rated</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-12 mb-4 mb-lg-0">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h4 class="mb-0">Filter</h4>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <span class="dropdown-header px-0 mb-2"> Category</span>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="reactCheck" checked>
                                <label class="form-check-label" for="reactCheck">React</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="javascriptCheck">
                                <label class="form-check-label" for="javascriptCheck">Javascript</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="angularCheck">
                                <label class="form-check-label" for="angularCheck">Angular</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="nodeCheck">
                                <label class="form-check-label" for="nodeCheck">Node</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="angularJSCheck">
                                <label class="form-check-label" for="angularJSCheck">Angular JS</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="gatsbyCheck">
                                <label class="form-check-label" for="gatsbyCheck">GatsBy</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="graphQlCheck">
                                <label class="form-check-label" for="graphQlCheck">GraphQL</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="vueJsCheck">
                                <label class="form-check-label" for="vueJsCheck">VueJs</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="bootstrapCheck">
                                <label class="form-check-label" for="bootstrapCheck">Bootstrap</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="figmaCheck">
                                <label class="form-check-label" for="figmaCheck">Figma</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="sketchCheck">
                                <label class="form-check-label" for="sketchCheck">Sketch</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="HTML5Check">
                                <label class="form-check-label" for="HTML5Check">HTML5</label>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body border-top">
                            <span class="dropdown-header px-0 mb-2"> Ratings</span>
                            <!-- Custom control -->
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" class="form-check-input" id="starRadio1" name="customRadio">
                                <label class="form-check-label" for="starRadio1">
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star text-warning "></i>
                                    <span class="fs-6">4.5 & UP</span>
                                </label>
                            </div>
                            <!-- Custom control -->
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" class="form-check-input" id="starRadio2" name="customRadio" checked>
                                <label class="form-check-label" for="starRadio2"> <i
                                        class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star text-warning "></i>
                                    <span class="fs-6">4.0 & UP</span></label>
                            </div>
                            <!-- Custom control -->
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" class="form-check-input" id="starRadio3" name="customRadio">
                                <label class="form-check-label" for="starRadio3"> <i
                                        class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star text-warning "></i>
                                    <span class="fs-6">3.5 & UP</span></label>
                            </div>
                            <!-- Custom control -->
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" class="form-check-input" id="starRadio4" name="customRadio">
                                <label class="form-check-label" for="starRadio4"> <i
                                        class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star me-n1 text-warning"></i>
                                    <i class="mdi mdi-star text-warning "></i>
                                    <span class="fs-6">3.0 & UP</span></label>
                            </div>
                        </div>
                        <!-- Card body -->
                        <div class="card-body border-top">
                            <span class="dropdown-header px-0 mb-2"> Skill Level</span>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="allTwoCheck">
                                <label class="form-check-label" for="allTwoCheck">All Level</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="beginnerTwoCheck" checked>
                                <label class="form-check-label" for="beginnerTwoCheck">Beginner</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="intermediateCheck">
                                <label class="form-check-label" for="intermediateCheck">Intermediate</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check mb-1">
                                <input type="checkbox" class="form-check-input" id="AdvancedTwoCheck">
                                <label class="form-check-label" for="AdvancedTwoCheck">Advance</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
                <div class="col-xl-9 col-lg-9 col-md-8 col-12">
                    <div class="tab-content">
                        <!-- Tab pane -->
                        <div class="tab-pane fade show active pb-4 " id="tabPaneGrid" role="tabpanel"
                             aria-labelledby="tabPaneGrid">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card  mb-4 card-hover">
                                        <a href="course-single.html" class="card-img-top"><img
                                                src="../assets/images/course/course-react.jpg" alt=""
                                                class="card-img-top rounded-top-md"></a>
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                                                      class="text-inherit">How to
                                                    easily create a website with React</a>
                                            </h4>
                                            <!-- List inline -->
                                            <ul class="mb-3 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Beginner
                                                </li>
                                            </ul>
                                            <div class="lh-1">
                                                <span>
                                                  <i class="mdi mdi-star text-warning me-n1"></i>
                                                  <i class="mdi mdi-star text-warning me-n1"></i>
                                                  <i class="mdi mdi-star text-warning me-n1"></i>
                                                  <i class="mdi mdi-star text-warning me-n1"></i>
                                                  <i class="mdi mdi-star text-warning"></i>
                                                </span>
                                                <span class="text-warning">4.5</span>
                                                <span class="fs-6 text-muted">(7,700)</span>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer">
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-1.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Morris Mccoy</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card mb-4 card-hover">
                                        <a href="course-single.html" class="card-img-top"><img
                                                src="../assets/images/course/course-graphql.jpg" alt=""
                                                class="card-img-top rounded-top-md"></a>
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                                                      class="text-inherit">GraphQL:
                                                    introduction to graphQL for
                                                    beginners</a></h4>
                                            <!-- List inline -->
                                            <ul class="mb-3 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE">
                                                        </rect>
                                                    </svg>
                                                    Advance
                                                </li>
                                            </ul>
                                            <div class="lh-1">
                                                <span>
                                                  <i class="mdi mdi-star text-warning me-n1"></i>
                                                  <i class="mdi mdi-star text-warning me-n1"></i>
                                                  <i class="mdi mdi-star text-warning me-n1"></i>
                                                  <i class="mdi mdi-star text-warning me-n1"></i>
                                                  <i class="mdi mdi-star text-warning"></i>
                                                </span>
                                                <span class="text-warning">4.5</span>
                                                <span class="fs-6 text-muted">(9,300)</span>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer">
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-2.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Ted Hawkins</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card mb-4 card-hover">
                                        <a href="course-single.html" class="card-img-top"><img
                                                src="../assets/images/course/course-angular.jpg" alt=""
                                                class="card-img-top rounded-top-md"></a>
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                                                      class="text-inherit">Angular -
                                                    the complete guide for beginner</a>
                                            </h4>
                                            <ul class="mb-3  list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Beginner
                                                </li>
                                            </ul>
                                            <div class="lh-1">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                                                <span class="text-warning">4.5</span>
                                                <span class="fs-6 text-muted">(8,890)</span>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer">
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-3.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Juanita Bell</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card  mb-4 card-hover">
                                        <a href="course-single.html" class="card-img-top"><img
                                                src="../assets/images/course/course-python.jpg" alt=""
                                                class="card-img-top rounded-top-md"></a>
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                                                      class="text-inherit">The
                                                    Python Course: build web application</a>
                                            </h4>
                                            <ul class="mb-3  list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Intermediate
                                                </li>
                                            </ul>
                                            <div class="lh-1">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                                                <span class="text-warning">4.5</span>
                                                <span class="fs-6 text-muted">(13,245)</span>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer">
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-4.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Claire Robertson</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card mb-4 card-hover">
                                        <a href="course-single.html" class="card-img-top"><img
                                                src="../assets/images/course/course-gatsby.jpg" alt=""
                                                class="card-img-top rounded-top-md"></a>
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                                                      class="text-inherit">Gatsby
                                                    JS: build blog with GraphQL and
                                                    React</a></h4>
                                            <!-- List inline -->
                                            <ul class="mb-3 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Beginner
                                                </li>
                                            </ul>
                                            <div class="lh-1">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                                                <span class="text-warning">4.5</span>
                                                <span class="fs-6 text-muted">(9,370)</span>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer">
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-5.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Morris Mccoy</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card  mb-4 card-hover">
                                        <a href="course-single.html" class="card-img-top"><img
                                                src="../assets/images/course/course-javascript.jpg" alt=""
                                                class="card-img-top rounded-top-md"></a>
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                                                      class="text-inherit">JavaScript:
                                                    modern javaScript from the
                                                    beginning</a></h4>
                                            <!-- List inline -->
                                            <ul class="mb-3 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE">
                                                        </rect>
                                                    </svg>
                                                    Advance
                                                </li>
                                            </ul>
                                            <div class="lh-1">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                                                <span class="text-warning">4.5</span>
                                                <span class="fs-6 text-muted">(5,245)</span>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer">
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-6.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Ted Hawkins</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card  mb-4 card-hover">
                                        <a href="course-single.html" class="card-img-top"><img
                                                src="../assets/images/course/course-css.jpg" alt=""
                                                class="card-img-top rounded-top-md"></a>
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                                                      class="text-inherit">CSS:
                                                    ultimate CSS course from beginner to
                                                    advanced</a></h4>
                                            <!-- List inline -->
                                            <ul class="mb-3  list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Beginner
                                                </li>
                                            </ul>
                                            <div class="lh-1">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                                                <span class="text-warning">4.5</span>
                                                <span class="fs-6 text-muted">(17,000)</span>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer">
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-7.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Juanita Bell</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card  mb-4 card-hover">
                                        <a href="course-single.html" class="card-img-top"><img
                                                src="../assets/images/course/course-wordpress.jpg" alt=""
                                                class="card-img-top rounded-top-md"></a>
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                                                      class="text-inherit">Wordpress:
                                                    complete WordPress theme &amp;
                                                    plugin development</a></h4>
                                            <!-- List inline -->
                                            <ul class="mb-3 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Intermediate
                                                </li>
                                            </ul>
                                            <div class="lh-1">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                                                <span class="text-warning">4.5</span>
                                                <span class="fs-6 text-muted">(16,500)</span>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer">
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-8.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Claire Robertson</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card  mb-4 card-hover">
                                        <a href="course-single.html" class="card-img-top"><img
                                                src="../assets/images/course/course-node.jpg" alt=""
                                                class="card-img-top rounded-top-md"></a>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <h4 class="mb-2 text-truncate-line-2 "><a href="course-single.html"
                                                                                      class="text-inherit">Node.js
                                                    Tutorials - For beginners and
                                                    professionals</a></h4>
                                            <!-- List inline -->
                                            <ul class="mb-3  list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Beginner
                                                </li>
                                            </ul>
                                            <div class="lh-1">
                        <span>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning me-n1"></i>
                          <i class="mdi mdi-star text-warning"></i>
                        </span>
                                                <span class="text-warning">4.5</span>
                                                <span class="fs-6 text-muted">(12,245)</span>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer">
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-9.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Morris Mccoy</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab pane -->
                        <div class="tab-pane fade pb-4" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
                            <!-- Card -->
                            <div class="card mb-4 card-hover">
                                <div class="row g-0">
                                    <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded"
                                       style="background-image: url(../assets/images/course/course-vue.jpg);" href="#">
                                        <img src="../assets/images/course/course-vue.jpg" alt="..."
                                             class="img-fluid d-lg-none invisible">
                                    </a>
                                    <div class="col-lg-9 col-md-12 col-12">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h3 class="mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">Vue.js
                                                    Components
                                                    Fundamentals</a></h3>
                                            <!-- List inline -->
                                            <ul class="mb-5 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>3h 56m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Beginner
                                                </li>
                                                <li class="list-inline-item"> <span>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning"></i>
                          </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(9,300)</span></li>
                                            </ul>
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-3.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Morris Mccoy</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card mb-4 card-hover">
                                <!-- Row -->
                                <div class="row g-0">
                                    <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded"
                                       style="background-image: url(../assets/images/course/course-bootstrap.jpg);"
                                       href="#">
                                        <img src="../assets/images/course/course-bootstrap.jpg" alt="..."
                                             class="img-fluid d-lg-none invisible">
                                    </a>
                                    <div class="col-lg-9 col-md-12 col-12">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h3 class="mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">Bootstrap
                                                    5 Beginner
                                                    Tutorial</a></h3>
                                            <!-- List inline -->
                                            <ul class="mb-5 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 46m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE">
                                                        </rect>
                                                    </svg>
                                                    Advance
                                                </li>
                                                <li class="list-inline-item"> <span>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning"></i>
                          </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(7,900)</span></li>
                                            </ul>
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-2.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Ted Hawkins</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card mb-4 card-hover">
                                <!-- Row -->
                                <div class="row g-0">
                                    <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded"
                                       style="background-image: url(../assets/images/course/course-graphql.jpg);"
                                       href="#">
                                        <img src="../assets/images/course/course-graphql.jpg" alt="..."
                                             class="img-fluid d-lg-none invisible">
                                    </a>
                                    <div class="col-lg-9 col-md-12 col-12">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h3 class="mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">Getting
                                                    Started
                                                    WithGraphQL.js</a></h3>
                                            <!-- List inline -->
                                            <ul class="mb-5 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Beginner
                                                </li>
                                                <li class="list-inline-item"> <span>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning"></i>
                          </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(8,245)</span></li>
                                            </ul>
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-4.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Juanita Bell</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card mb-4 card-hover">
                                <!-- Row -->
                                <div class="row g-0">
                                    <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded"
                                       style="background-image: url(../assets/images/course/course-react.jpg);"
                                       href="#">
                                        <img src="../assets/images/course/course-react.jpg" alt="..."
                                             class="img-fluid d-lg-none invisible">
                                    </a>
                                    <div class="col-lg-9 col-md-12 col-12">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h3 class="mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">The
                                                    Beginner's Guide to React</a></h3>
                                            <!-- List inline -->
                                            <ul class="mb-5 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>2h 30m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Intermediate
                                                </li>
                                                <li class="list-inline-item"> <span>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning"></i>
                          </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(3,200)</span></li>
                                            </ul>
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-5.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Claire Robertson</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card mb-4 card-hover">
                                <div class="row g-0">
                                    <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded"
                                       style="background-image: url(../assets/images/course/course-javascript.jpg);"
                                       href="#">
                                        <img src="../assets/images/course/course-javascript.jpg" alt="..."
                                             class="img-fluid d-lg-none invisible">
                                    </a>
                                    <div class="col-lg-9 col-md-12 col-12">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h3 class="mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">Applying
                                                    JavaScript and
                                                    using the console.</a>
                                            </h3>
                                            <!-- List inline -->
                                            <ul class="mb-5 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Beginner
                                                </li>
                                                <li class="list-inline-item"> <span>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning"></i>
                          </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(6,600)</span></li>
                                            </ul>
                                            <!-- Row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-10.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Ted Hawkins</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                            <div class="card mb-4 card-hover">
                                <div class="row g-0">
                                    <a class="col-12 col-md-12 col-xl-3 col-lg-3 bg-cover img-left-rounded"
                                       style="background-image: url(../assets/images/course/course-node.jpg);" href="#">
                                        <img src="../assets/images/course/course-node.jpg" alt="..."
                                             class="img-fluid d-lg-none invisible">
                                    </a>
                                    <div class="col-lg-9 col-md-12 col-12">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <h3 class="mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">Node.js
                                                    Tutorials - For
                                                    beginners and
                                                    professionals</a></h3>
                                            <!-- list inline -->
                                            <ul class="mb-5 list-inline">
                                                <li class="list-inline-item"><i class="far fa-clock me-1"></i>1h 30m
                                                </li>
                                                <li class="list-inline-item">
                                                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                                        </rect>
                                                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                                        </rect>
                                                    </svg>
                                                    Beginner
                                                </li>
                                                <li class="list-inline-item"> <span>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning me-n1"></i>
                            <i class="mdi mdi-star text-warning"></i>
                          </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6 text-muted">(2,700)</span></li>
                                            </ul>
                                            <!-- row -->
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <img src="../assets/images/avatar/avatar-6.jpg"
                                                         class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="col ms-2">
                                                    <span>Sumona Khaat</span>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted bookmark">
                                                        <i class="fe fe-bookmark  "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
