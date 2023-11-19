@extends('layout.dashboard')
@section('dashboard')
<div class="dashboard__main pl0-md">
    <div class="dashboard__content bgc-f7 content_section">
        <div class="row align-items-center pb40">
            <div class="col-xxl-3">
                <div class="dashboard_title_area">
                    <h2>User List</h2>
                    <p class="text">This is the list of users.</p>
                </div>
            </div>
            <div class="col-xxl-9">
                <div class="dashboard_search_meta d-md-flex align-items-center justify-content-xxl-end">
                    <div class="item1 mb15-sm">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="ud-btn btn-thm"><i
                                class="fal fa-arrow-right-long"></i>
                            Add New User
                        </button>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Create New User</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row align-items-center pb10">
                                            <div
                                                class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                                <form method="POST" action="{{ route('user.create') }}"
                                                    enctype="multipart/form-data" class="form-style1">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xl-6">
                                                            <div class="mb20">
                                                                <label
                                                                    class="heading-color ff-heading fw600 mb10">Name</label>
                                                                <input type="text" required name="name"
                                                                    class="form-control" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xl-6">
                                                            <div class="mb20">
                                                                <label
                                                                    class="heading-color ff-heading fw600 mb10">Username</label>
                                                                <input type="text" name="username" required
                                                                    class="form-control" placeholder="Username">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xl-6">
                                                            <div class="mb20">
                                                                <label
                                                                    class="heading-color ff-heading fw600 mb10">Email</label>
                                                                <input type="email" required name="email"
                                                                    class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xl-6">
                                                            <div class="mb20">
                                                                <label
                                                                    class="heading-color ff-heading fw600 mb10">Role</label>
                                                                <select name="role" id="role" class="form-control">
                                                                    <option value="ADMIN">Administrator</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xl-6">
                                                            <div class="mb20">
                                                                <label
                                                                    class="heading-color ff-heading fw600 mb10">Password</label>
                                                                <input type="password" required name="password"
                                                                    class="form-control" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xl-6">
                                                            <div class="mb20">
                                                                <label
                                                                    class="heading-color ff-heading fw600 mb10">Confirm
                                                                    Passowrd</label>
                                                                <input type="password" required class="form-control"
                                                                    placeholder="Confirm Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xl-6">
                                                            <div class="mb20">
                                                                <label
                                                                    class="heading-color ff-heading fw600 mb10">Profile</label>
                                                                <input type="file" required name="image"
                                                                    class="form-control" placeholder="Image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="d-sm-flex text-right"
                                                            style="!important; justify-content: right;">
                                                            <button type="submit" style="margin-left: 20px"
                                                                class="ud-btn btn-dark">Create User</button>
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
            <div class="row">
                <div class="col-lg-12">
                    @include('component.messages.success')
                    @include('component.messages.errors')
                </div>
                <div class="col-xl-12">
                    <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                        <div class="packages_table table-responsive">
                            <table class="table-style3 table at-savesearch">
                                <thead class="t-head">
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col" style="width: 200px">Last Update</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="t-body">
                                    @foreach ($result as $item)
                                    <tr>
                                        <th scope="row">
                                            <div
                                                class="listing-style1 dashboard-style d-xxl-flex align-items-center mb-0">
                                                <div class="list-thumb">
                                                    <img class="w-100" src="{{ asset($item->image) }}" alt="">
                                                </div>
                                                <div class="list-content py-0 p-0 mt-2 mt-xxl-0 ps-xxl-4">
                                                    <div class="h6 list-title">
                                                        <a href="return false">{{ $item->name }}</a>
                                                    </div>
                                                    <p class="list-text mb-0">{{ $item->username}}</p>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="vam">{{ $item->email }}</td>
                                        <td class="vam">{{ $item->role}}</td>
                                        <td class="vam">{{ $item->updated_at->format('d/m/Y')}}</td>
                                        <td class="vam">
                                            <div class="d-flex">
                                                <a href="" onclick="return event.preventDefault();"
                                                    data-bs-toggle="modal" data-bs-target="#user-modal-{{ $item->id}}"
                                                    class="icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit"><span class="fas fa-pen fa"></span>
                                                </a>

                                                <div class="modal" id="user-modal-{{ $item->id}}">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Update User</h4>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row align-items-center pb10">
                                                                    <div
                                                                        class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                                                        <form method="POST"
                                                                            action="{{ route('user.update', ['id' => $item->id]) }}"
                                                                            enctype="multipart/form-data"
                                                                            class="form-style1">
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xl-6">
                                                                                    <div class="mb20">
                                                                                        <label
                                                                                            class="heading-color ff-heading fw600 mb10">Name</label>
                                                                                        <input type="text"
                                                                                            value="{{ $item->name }}"
                                                                                            required name="name"
                                                                                            class="form-control"
                                                                                            placeholder="Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-xl-6">
                                                                                    <div class="mb20">
                                                                                        <label
                                                                                            class="heading-color ff-heading fw600 mb10">Username</label>
                                                                                        <input type="text"
                                                                                            value="{{ $item->username }}"
                                                                                            name="username" required
                                                                                            class="form-control"
                                                                                            placeholder="Username">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xl-6">
                                                                                    <div class="mb20">
                                                                                        <label
                                                                                            class="heading-color ff-heading fw600 mb10">Email</label>
                                                                                        <input type="email"
                                                                                            value="{{ $item->email }}"
                                                                                            required name="email"
                                                                                            class="form-control"
                                                                                            placeholder="Email">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-xl-6">
                                                                                    <div class="mb20">
                                                                                        <label
                                                                                            class="heading-color ff-heading fw600 mb10">Role</label>
                                                                                        <select name="role" id="role"
                                                                                            class="form-control">
                                                                                            <option @if($item->role ===
                                                                                                'ADMIN') selected @endif
                                                                                                value="ADMIN">Administrator
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
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
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xl-6">
                                                                                    <div class="mb20">
                                                                                        <label
                                                                                            class="heading-color ff-heading fw600 mb10">Profile</label>
                                                                                        <input type="file" name="image"
                                                                                            class="form-control"
                                                                                            placeholder="Image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="d-sm-flex text-right"
                                                                                    style="!important; justify-content: right;">
                                                                                    <button type="submit"
                                                                                        style="margin-left: 20px"
                                                                                        class="ud-btn btn-dark">Save
                                                                                        Changes</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if(count($result) > 1)
                                                <a href="{{ route('user.delete', ['id' => $item->id]) }}"
                                                    onclick="deleteMessage('Are you sure to delete user')" class="icon"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete"><span class="flaticon-bin"></span>
                                                </a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if (count($result) > 12)
                        @include('pagination', ['paginator' => $result])
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
