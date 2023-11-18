@extends('layout.dashboard')
@section('dashboard')
<div class="dashboard__main pl0-md">
    <div class="dashboard__content bgc-f7">
        <div class="row align-items-center pb40">
            <div class="col-xxl-3">
                <div class="dashboard_title_area">
                    <h2>Contact List</h2>
                    <p class="text">This is the list of contacts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                        <div class="packages_table table-responsive">
                            <table class="table-style3 table at-savesearch">
                                <thead class="t-head">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Description</th>
                                        <th scope="col" style="width: 200px">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="t-body">
                                    @foreach ($result as $item)
                                    <tr>
                                        <td class="vam">{{ $item->name }}</td>
                                        <td class="vam">{{ $item->email}}</td>
                                        <td class="vam">{{ $item->subject}}</td>
                                        <td class="vam">{{ $item->description}}</td>
                                        <td class="vam">{{ $item->updated_at->format('d/m/Y')}}</td>
                                        <td class="vam">
                                            <div class="d-flex">
                                                <a
                                                    href="{{ route('contact.delete', ['id' => $item->id]) }}"
                                                    onclick="deleteMessage('Are you sure to delete contact')"
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
