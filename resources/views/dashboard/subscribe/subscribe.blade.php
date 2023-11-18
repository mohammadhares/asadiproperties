@extends('layout.dashboard')
@section('dashboard')
<div class="dashboard__main pl0-md">
    <div class="dashboard__content bgc-f7 content_section">
        <div class="row align-items-center pb40">
            <div class="col-xxl-3">
                <div class="dashboard_title_area">
                    <h2>Subscribe List</h2>
                    <p class="text">This is the list of subscribe.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @include('component.messages.success')
                    @include('component.messages.errors')
                </div>
                <div class="col-xl-12">
                    <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                        <div class="packages_table table-responsive">
                            @if (count($result) > 0)
                            <table class="table-style3 table at-savesearch">
                                <thead class="t-head">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" style="width: 200px">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="t-body">
                                    @foreach ($result as $item)
                                    <tr>
                                        <td class="vam">{{ $item->id }}</td>
                                        <td class="vam">{{ $item->email}}</td>
                                        <td class="vam">{{ $item->updated_at->format('d/m/Y')}}</td>
                                        <td class="vam">
                                            <div class="d-flex">
                                                <a
                                                    href="{{ route('subscribe.delete', ['id' => $item->id]) }}"
                                                    onclick="deleteMessage('Are you sure to delete email')"
                                                    class="icon" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Delete">
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
                                <p><i>There is no subscriber.</i></p>
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
