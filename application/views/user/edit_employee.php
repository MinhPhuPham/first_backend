<div class="container-fluid">
    <div class="row">
        <div class="col-2 collapse d-md-flex bg-light pt-2 min-vh-100 bd-sidebar " id="sidebar">
            <ul class="nav flex-column flex-nowrap">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('User/sell_page') ?>">Overview</a></li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Reports</a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="sell-page.html">Orders</a></li>
                            <li class="nav-item">
                                <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1">Customers</a>
                                <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-clock-o"></i> Daily
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="Edit.html">
                                                <i class="fa fa-fw fa-dashboard"></i> Edit Information
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-bar-chart"></i> Charts
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="#">
                                                <i class="fa fa-fw fa-compass"></i> Areas
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Analytics</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Export</a></li>
            </ul>
        </div>
        <div class="col pt-4" style="margin-left: 270px;">
            <h3><i class="fas fa-edit"></i><b>Edit Customer</b></h3>
            <b>Ward Bell</b><a href="#">(View Order)</a>
            <br><br>
            <form action="action_page.php">
                <div class="row">
                    <div class="col-3">
                        <label for="fname">First Name:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" name="firstname"  class="form-control" id="fname" placeholder="Enter ur first name">
                    </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-3">
                            <label for="lname">Last Name:</label>
                        </div>
                        <div class="col-6">
                            <input type="text"  class="form-control" name="Lastname" id="lname" placeholder="Enter ur Last name">
                        </div>
                </div>
                <br>
                <div class="row">
                    
                        <div class="col-3">
                            <label for="sex">Gender</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox"   name="sex" id="gender"> Male
                            <br>
                            <input type="checkbox"   name="sex" id="gender"> FeMale
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-3">
                            <label for="sex">Email:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-3">
                            <label for="aress">Address:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="aress" id="address" class="form-control" placeholder="Address your home">
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-3">
                            <label for="city">City:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="city" id="address" class="form-control" placeholder="City u live">
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-3">
                          <label for="state">state</label>
                        </div>
                        <div class="col-6">
                                <select name="state" class="custom-select">
                                    <option selected>Where u live</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                </select>
                        </div>
                      </div>
                <br>
                <div class="row">
                        <div class="col-3">
                            <label for="zip">Zip:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" name="zip" id="address" class="form-control" placeholder="Your Email">
                        </div>
                </div>
                <div class="button-t">
            <button type="update" class="btn btn-warning" style="float: left; margin-left: 30px">Update</button>
            <button type="submit" class="btn btn-success" style="margin-left: -120px">Submit</button>
            </div>
            </form>
</div>