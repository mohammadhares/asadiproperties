@extends('layout.dashboard')
@section('dashboard')
<div class="dashboard__main pl0-md">
    <div class="dashboard__content bgc-f7 content_section">
        <div class="row align-items-center pb40">
            <div class="col-xxl-3">
                <div class="dashboard_title_area">
                    <h2>Project List</h2>
                    <p class="text">This is the list of project.</p>
                </div>
            </div>
            <div class="col-xxl-9">
                <div class="dashboard_search_meta d-md-flex align-items-center justify-content-xxl-end">
                    <div class="item1 mb15-sm">
                        <a href="{{ route('project.add') }}" class="ud-btn btn-thm"><i
                                class="fal fa-arrow-right-long"></i>
                            Add New Project
                        </a>
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
                            @if (count($result) > 0)
                            <table class="table-style3 table at-savesearch">
                                <thead class="t-head">
                                    <tr>
                                        <th scope="col">Project</th>
                                        <th scope="col">Developer</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Type</th>
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
                                                    <img class="w-100" src="{{ asset($item->thumbnail   ) }}" alt="">
                                                </div>
                                                <div class="list-content py-0 p-0 mt-2 mt-xxl-0 ps-xxl-4">
                                                    <div class="h6 list-title">
                                                        <a href="return false">{{ $item->title }}</a>
                                                    </div>
                                                    <p class="list-text mb-0">{{ $item->city}}, {{ $item->country }}</p>
                                                    <div class="list-price">
                                                        <a href="#">$ {{ $item->price }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="vam">{{ $item->developer}}</td>
                                        <td class="vam">
                                            <span class="pending-style style2">{{ $item->status}}</span>
                                        </td>
                                        <td class="vam">{{ $item->project_type}}</td>
                                        <td class="vam">
                                            <div class="d-flex">
                                                <a href="{{ route('project.edit', ['id' => $item->id ]) }}" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <span class="fas fa-pen fa"></span>
                                                </a>
                                                <a href="{{ route('project.delete', ['id' => $item->id]) }}"
                                                    onclick="deleteMessage('Are you sure to delete project?')"
                                                    class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <span class="flaticon-bin"></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="col-lg-12 text-center">
                                <p><i>There is no project yet.</i></p>
                            </div>
                            @endif
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
