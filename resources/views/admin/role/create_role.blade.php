@extends('admin.admin_master')

@section('admin')

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">New Admin ADD
            </h6>
            <p class="mg-b-20 mg-sm-b-30">New Admin Add Form</p>

            <form method="POST" action="{{route('store.admin')}}">
                @csrf

                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required=" "
                                    placeholder="Enter user name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="phone" required=" "
                                    placeholder="Enter phone number">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="email" name="email" required=" "
                                    placeholder="Enter email address">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="password" name="password" required=" "
                                    placeholder="Enter password">
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                    <hr>
                    <br><br>

                    <div class="row">

                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="category" value="1">
                                <span>Category</span>
                            </label>

                        </div> <!-- col-4 -->

                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="coupon" value="1">
                                <span>Coupon</span>
                            </label>

                        </div> <!-- col-4 -->



                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="product" value="1">
                                <span>Product</span>
                            </label>

                        </div> <!-- col-4 -->


                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="blog" value="1">
                                <span>Blog</span>
                            </label>

                        </div> <!-- col-4 -->

                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="order" value="1">
                                <span>Order</span>
                            </label>

                        </div> <!-- col-4 -->

                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="other" value="1">
                                <span>Other</span>
                            </label>

                        </div> <!-- col-4 -->
                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="report" value="1">
                                <span>report</span>
                            </label>

                        </div> <!-- col-4 -->
                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="role" value="1">
                                <span>Role</span>
                            </label>

                        </div> <!-- col-4 -->
                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="retuen" value="1">
                                <span>Return</span>
                            </label>

                        </div> <!-- col-4 -->
                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="contact" value="1">
                                <span>Contact</span>
                            </label>

                        </div> <!-- col-4 -->
                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="comment" value="1">
                                <span>Comment</span>
                            </label>

                        </div> <!-- col-4 -->
                        <div class="col-lg-4">
                            <label class="ckbox">
                                <input type="checkbox" name="setting" value="1">
                                <span>Setting</span>
                            </label>

                        </div> <!-- col-4 -->


                    </div><!-- end row -->
                    <br><br>

                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
        </div><!-- card -->
        </form>
    </div>
@endsection
