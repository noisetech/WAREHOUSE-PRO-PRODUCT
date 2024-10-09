@extends('layouts.be') @section('title', 'Profile') @section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Edit Profile</p>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">User Information</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label
                                    for="example-text-input"
                                    class="form-control-label"
                                    >Username</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    value="lucky.jesse"
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label
                                    for="example-text-input"
                                    class="form-control-label"
                                    >Email address</label
                                >
                                <input
                                    class="form-control"
                                    type="email"
                                    value="jesse@example.com"
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label
                                    for="example-text-input"
                                    class="form-control-label"
                                    >Password</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    value="Jesse"
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label
                                    for="example-text-input"
                                    class="form-control-label"
                                    >Confirm Password</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    value="Lucky"
                                />
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark" />
                    <p class="text-uppercase text-sm">Detail Information</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label
                                    for="example-text-input"
                                    class="form-control-label"
                                    >Role</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label
                                    for="example-text-input"
                                    class="form-control-label"
                                    >Created</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    value="New York"
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label
                                    for="example-text-input"
                                    class="form-control-label"
                                    >Last Updated</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    value="United States"
                                />
                            </div>
                        </div>

                    </div>
                    <hr class="horizontal dark" />
                    <center>
                        <button class="btn btn-primary btn-sm ms-auto">
                            Updated
                        </button>
                    </center>
                </div>
            </div>
        </div>
        @endsection
    </div>
</div>
