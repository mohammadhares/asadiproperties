@extends('layout.dashboard')
@section('dashboard')
<div class="dashboard__main pl0-md">
    <div class="dashboard__content bgc-f7">
        <div class="row align-items-center pb40">
            <div class="col-xxl-3">
                <div class="dashboard_title_area">
                    <h2>Blog List</h2>
                    <p class="text">This is the list of blogs.</p>
                </div>
            </div>
            <div class="col-xxl-9">
                <div class="dashboard_search_meta d-md-flex align-items-center justify-content-xxl-end">
                    <div class="item1 mb15-sm">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="ud-btn btn-thm"><i
                                class="fal fa-arrow-right-long"></i>
                            Add New Blog
                        </button>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Create New Blog</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row align-items-center pb10">
                                            <div
                                                class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                                <form
                                                    method="POST"
                                                    action="{{ route('blog.create') }}"
                                                    enctype="multipart/form-data"
                                                    class="form-style1">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xl-4">
                                                            <div class="mb20">
                                                                <label
                                                                    class="heading-color ff-heading fw600 mb10">Title</label>
                                                                <input type="text" required name="title" class="form-control"
                                                                    placeholder="Title">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xl-4">
                                                            <div class="mb20">
                                                                <label
                                                                    class="heading-color ff-heading fw600 mb10">Thumbnail</label>
                                                                <input type="file" name="image" required class="form-control"
                                                                    placeholder="Your Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="mb20">
                                                                <label class="heading-color ff-heading fw600 mb10">Description</label>
                                                                <textarea name="content" cols="30" rows="5"
                                                                    placeholder="There are many variations of passages."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="d-sm-flex text-right" style="!important; justify-content: right;">
                                                          <button type="submit" style="margin-left: 20px" class="ud-btn btn-dark">Save Changes</button>
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
                <div class="col-xl-12">
                    <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                        <div class="packages_table table-responsive">
                            <table class="table-style3 table at-savesearch">
                                <thead class="t-head">
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col" style="width: 200px">Last Update</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="t-body">
                                    @foreach ($result as $item)
                                    <tr>
                                        <th scope="vam">
                                            <div
                                                class="listing-style1 dashboard-style d-xxl-flex align-items-center mb-0">
                                                <div class="list-thumb">
                                                    <img class="w-100" src="{{ asset($item->image) }}" alt="">
                                                </div>
                                            </div>
                                        </th>
                                        <td class="vam">{{ $item->title }}</td>
                                        <td class="vam">{{ $item->content}}</td>
                                        <td class="vam">{{ $item->updated_at->format('d/m/Y')}}</td>
                                        <td class="vam">
                                            <div class="d-flex">
                                                <a href="" onclick="return event.preventDefault();"  data-bs-toggle="modal" data-bs-target="#blog-modal-{{ $item->id}}" class="icon" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit"><span
                                                        class="fas fa-pen fa"></span>
                                                </a>

                                                <div class="modal" id="blog-modal-{{ $item->id}}">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Update Blog</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row align-items-center pb10">
                                                                    <div
                                                                        class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                                                        <form
                                                                            method="POST"
                                                                            action="{{ route('blog.update', ['id' => $item->id]) }}"
                                                                            enctype="multipart/form-data"
                                                                            class="form-style1">
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xl-4">
                                                                                    <div class="mb20">
                                                                                        <label
                                                                                            class="heading-color ff-heading fw600 mb10">Title</label>
                                                                                        <input type="text" value="{{ $item->title }}" required name="title" class="form-control"
                                                                                            placeholder="Title">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-xl-4">
                                                                                    <div class="mb20">
                                                                                        <label
                                                                                            class="heading-color ff-heading fw600 mb10">Thumbnail</label>
                                                                                        <input type="file" name="image"  class="form-control"
                                                                                            placeholder="Image">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="mb20">
                                                                                        <label class="heading-color ff-heading fw600 mb10">Description</label>
                                                                                        <textarea name="content" cols="30" rows="5"
                                                                                            placeholder="There are many variations of passages.">{{ $item->content }}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="d-sm-flex text-right" style="!important; justify-content: right;">
                                                                                  <button type="submit" style="margin-left: 20px" class="ud-btn btn-dark">Save Changes</button>
                                                                                </div>
                                                                              </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="{{ route('blog.delete', ['id' => $item->id]) }}" onclick="deleteMessage('Are you sure to delete blog')" class="icon" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete"><span
                                                        class="flaticon-bin"></span></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if (count($result) > 0)
                        @include('pagination', ['paginator' => $result])
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
