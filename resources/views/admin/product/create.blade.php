@extends('admin.admin_master')

@section('admin')

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">New Product ADD</h6>
        <p class="mg-b-20 mg-sm-b-30">New Product Add Form</p>

        <form method="POST" action="" enctype="multipart/form-data">
            @csrf

            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_name" placeholder="Enter Product Name">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_code" placeholder="Enter Product Code">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_quantity"
                                placeholder="Enter Product Quantity">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                <option label="Choose Category"></option>
                                <option value="USA">United States of America</option>
                                <option value="UK">United Kingdom</option>
                                <option value="China">China</option>
                                <option value="Japan">Japan</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" data-placeholder="Choose Category" name="subcategory_id">

                            </select>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" data-placeholder="Choose Category" name="brand_id">
                                <option label="Choose Brand"></option>
                                <option value="USA">United States of America</option>
                                <option value="UK">United Kingdom</option>
                                <option value="China">China</option>
                                <option value="Japan">Japan</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput"
                                placeholder="Enter Product Size">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_color" id="color" data-role="tagsinput"
                                placeholder="Enter Product Color">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="selling_price" placeholder="Enter Product Price">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="	product_details" id="summernote">
                        </div>
                    </div><!-- col-4 -->

                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Submit Form</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
    </div><!-- card -->
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
@endsection
