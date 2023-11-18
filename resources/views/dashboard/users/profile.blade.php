@extends('layout.dashboard')
@section('dashboard')
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-f7">
            <div class="row align-items-center pb40">
                <div class="col-xxl-3">
                    <div class="dashboard_title_area">
                        <h2>My Profile</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div
                            class="ps-widget bgc-white bdrs12 default-box-shadow2 pt30 mb30 overflow-hidden position-relative">
                            <div class="navtab-style1">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                        <button class="nav-link active fw600 ms-3" id="nav-item1-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-item1" type="button" role="tab"
                                            aria-controls="nav-item1" aria-selected="true">Description</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                                        aria-labelledby="nav-item1-tab">
                                        <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                            <form class="form-style1" method="POST"
                                                action="{{ route('user.update', ['id' => $user->id]) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12 col-lg-12">
                                                        <div class="profile-box position-relative d-md-flex align-items-end mb50"
                                                            style="top: 25px">
                                                            <div
                                                                class="profile-img position-relative overflow-hidden bdrs12 mb20-sm">
                                                                <img style="width: 200px !important;" class="w-100"
                                                                    src="{{ asset($user->image) }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label class="heading-color ff-heading fw600 mb10">Name</label>
                                                            <input value="{{ $user->name }}" type="text" name="name"
                                                                required class="form-control" placeholder="Ex. John due">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label
                                                                class="heading-color ff-heading fw600 mb10">Username</label>
                                                            <input value="{{ $user->username }}" type="text"
                                                                name="username" required class="form-control"
                                                                placeholder="Ex. John">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label class="heading-color ff-heading fw600 mb10">Email</label>
                                                            <input value="{{ $user->email }}" type="email" name="email"
                                                                required class="form-control"
                                                                placeholder="Ex. example@gmail.com">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <label class="heading-color ff-heading fw600 mb10">Role</label>
                                                        <select name="role" id="role" class="form-control">
                                                            <option @if ($user->role === 'ADMIN') selected @endif
                                                                value="ADMIN">Administrator
                                                            </option>
                                                            <option @if ($user->role === 'EDITOR') selected @endif
                                                                value="EDITOR">Editor
                                                            </option>
                                                            <option @if ($user->role === 'VIEWER') selected @endif
                                                                value="VIEWER">Viewer
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 col-xl-6">
                                                        <div class="mb20">
                                                            <label
                                                                class="heading-color ff-heading fw600 mb10">New
                                                                Password</label>
                                                            <input type="password"
                                                                name="password"
                                                                class="form-control"
                                                                placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-6">
                                                        <div class="mb20">
                                                            <label
                                                                class="heading-color ff-heading fw600 mb10">Confirm
                                                                New Passowrd</label>
                                                            <input type="password"
                                                                class="form-control"
                                                                placeholder="Confirm Password">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="d-sm-flex text-right"
                                                            style="!important; justify-content: right;">
                                                            <button type="submit" style="margin-left: 20px"
                                                                class="ud-btn btn-dark">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
