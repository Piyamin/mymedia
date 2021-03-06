<div class="row">
    <div class="col-md-12">
         <?php if($this->session->flashdata('success-msg')){ ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Indicates a successful or positive action.
            </div>
        <?php } ?>
        <div class="well well-sm">
            <form class="form-horizontal" method="post" action="<?php echo base_url('Contact/save'); ?>">
                <fieldset>
                    <legend class="text-center header">Contact us</legend>
                        
                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                        <div class="col-md-8">
                            <input id="fname" name="FirstName" type="text" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                        <div class="col-md-8">
                            <input id="lname" name="LastName" type="text" placeholder="Last Name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
                        <div class="col-md-8">
                            <input id="email" name="Email" type="text" placeholder="Email Address" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                        <div class="col-md-8">
                            <input id="phone" name="Phone" type="text" placeholder="Phone" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-sticky-note"></i></span>
                        <div class="col-md-8">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg btnsend">SEND</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<style>
    .header {
        color: #f50f0f;
        font-size: 4rem;
        /* padding: 10px; */
    }

    .bigicon {
        font-size: 3rem;
        color: #a30b0b;
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #151515;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }

    .form-horizontal .form-group {
    margin-right: -1rem;
    margin-left: -20rem;
    margin-top: 2rem;
}

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #ffffff;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-color: red;
        background-color: #6d0606;
        border: 1px solid #ff2b2b;
        padding: .375rem .75rem;
        font-size: 1.6rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        
    }
    .btn.btnsend{
        margin-left: 20rem;
    }

    .btn:hover {
        color: #fff;
        background-color: #f03820;
        border-color: #5c0202;
    }
</style>
</div>