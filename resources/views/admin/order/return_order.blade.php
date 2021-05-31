@extends('layouts.app')

@section('content')

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="user_profile_info">
                        <div class="card">
                            <img class="card-img-top"
                                src="{{ !empty($user->profile_photo_path) ? url('upload/user_images/' . $user->profile_photo_path) : url('upload/no_image.jpg') }}">
                            <div class="card-body">
                                <h5 class="card-title">User Name: {{ $user->name }}</h5>
                                <p class="card-text">User Email: {{ $user->email }}</p>
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                                <a href="{{ route('user.password.edit') }}" class="btn btn-primary">Change Password</a>
                                <br><br>
                                <a href="{{ route('success.order') }}" class="btn btn-primary">Return Order</a>
                                <a href="{{ route('user.logout') }}" class="btn btn-primary">LogOut</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 card">
                    <table class="table table-response">
                        <thead>
                            <tr>
                                <th scope="col">Payment Type</th>
                                <th scope="col">Payment ID</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $row)
                                <tr>
                                    <td scope="col">{{ $row->payment_type }}</td>
                                    <td scope="col">{{ $row->payment_id }}</td>
                                    <td scope="col">${{ $row->total }}</td>
                                    <td scope="col">{{ $row->date }}</td>
                                    <td scope="col">
                                        @if ($row->status == 3)
                                            <span class="badge badge-success">Delivered</span>
                                        @endif
                                    </td>
                                    <td scope="col">
                                        <a href="" class="btn btn-sm btn-danger">Return</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>

        </div>


    </div>



@endsection
