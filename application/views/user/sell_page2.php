<div class="container-fluid">
    <div class="row">
        <div class="col-2 collapse d-md-flex bg-light pt-2 min-vh-100 bd-sidebar " id="sidebar">
            <ul class="nav flex-column flex-nowrap">
                <li class="nav-item"><a class="nav-link" href="#">Overview</a></li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Reports</a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="#">Orders</a></li>
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
                                            <a class="nav-link p-1" href="<?= base_url('User/edit_em') ?>">
                                                <i class="fa fa-fw fa-dashboard"></i> Edit information
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
                                        
                                        <li class="nav-item">
                                            <a class="nav-link p-1" href="<?= base_url('User/tb_users') ?>">
                                            <i class="fas fa-bars"></i> Table user
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

        <div class="col pt-4" style="margin-left: 260px;">
            <div class="tools">
              <div class="row" style="border-bottom:1px solid #6E6E6E ">
                    <div class="col-md-8" id="tools-1">
                       <button type="button"  class="btn tablinks" onclick="card()"><i class=" fa fas fa-th-large  "> Card View</i></button>
                      <button type="button" class="btn tablinks" onclick="list()"><i class= "fa fas fa-list "> List View</i></button>
             <button type="button" class="btn tablinks" data-toggle="modal" data-target="#myModal"><i class="fa far fa-plus-square">Add Categories</i></button>
             <button type="button"  class="btn tablinks" ><i class="fas fa-shopping-cart">Your Cart</i></button>

          </div>
                    <div class="col-md-4" style="float: left; padding: 5px;">
                      <input class="form-control" id="myInput" type="text" title="Search information product" placeholder="Search.." style="overflow: hidden; " onkeyup="mysearch()">
                    </div>
                    <script>
                      function mysearch() {
                        var input, filter, h4,a,i,txtValue;
                        input=document.getElementById("myInput");
                        filter=input.value.toUpperCase();
                        h4 = getElementsByTagName("h4");
                        for (i = 0; i < h4.length; i++) {
                        a = h4[i].getElementsByTagName("a")[0];
                        txtValue = a.textContent || a.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            h4[i].style.display = "";
                        } else {
                            h4[i].style.display = "none";
                        }
                    }
                                      } 
                    </script>
            </div>
        </div>
        <style>
         
    h3.h3{text-align:center;margin:1em;text-transform:capitalize;font-size:1.7em;}

.product-grid4,.product-grid4 .product-image4{position:relative}
.product-grid4{font-family:Poppins,sans-serif;text-align:center;border-radius:5px;overflow:hidden;transition:all .3s ease 0s;margin-bottom:20px}
.product-grid4:hover{box-shadow:0 0 10px rgba(0,0,0,.2)}
.product-grid4 .product-image4 a{display:block}
.product-grid4 .product-image4 img{width:100%;height:auto}
.product-grid4 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid4:hover .pic-1{opacity:0}
.product-grid4 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
.product-grid4:hover .pic-2{opacity:1}
.product-grid4 .social{width:180px;padding:0;margin:0 auto;list-style:none;position:absolute;right:0;left:0;top:50%;transform:translateY(-50%);transition:all .3s ease 0s}
.product-grid4 .social li{display:inline-block;opacity:0;transition:all .7s}
.product-grid4 .social li:nth-child(1){transition-delay:.15s}
.product-grid4 .social li:nth-child(2){transition-delay:.3s}
.product-grid4 .social li:nth-child(3){transition-delay:.45s}
.product-grid4:hover .social li{opacity:1}
.product-grid4 .social li a{color:#222;background:#fff;font-size:17px;line-height:36px;width:40px;height:36px;border-radius:2px;margin:0 5px;display:block;transition:all .3s ease 0s}
.product-grid4 .social li a:hover{color:#fff;background:#16a085}
.product-grid4 .social li a:after,.product-grid4 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:20px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid4 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
.product-grid4 .social li a:hover:after,.product-grid4 .social li a:hover:before{opacity:1}
.product-grid4 .product-discount-label,.product-grid4 .product-new-label{color:#fff;background-color:#16a085;font-size:13px;font-weight:800;text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;left:10px;top:15px;transition:all .3s}
.product-grid4 .product-discount-label{left:auto;right:10px;background-color:#d7292a}
.product-grid4:hover .product-new-label{opacity:0}
.product-grid4 .product-content{padding:25px}
.product-grid4 .title{font-size:15px;font-weight:400;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
.product-grid4 .title a{color:#222}
.product-grid4 .title a:hover{color:#16a085}
.product-grid4 .price{color:#16a085;font-size:17px;font-weight:700;margin:0 2px 15px 0;display:block}
.product-grid4 .price span{color:#909090;font-size:13px;font-weight:400;letter-spacing:0;text-decoration:line-through;text-align:left;vertical-align:middle;display:inline-block}
.product-grid4 .add-to-cart{border:1px solid #e5e5e5;display:inline-block;padding:10px 20px;color:#888;font-weight:600;font-size:14px;border-radius:4px;transition:all .3s}
.product-grid4:hover .add-to-cart{border:1px solid transparent;background:#16a085;color:#fff}
.product-grid4 .add-to-cart:hover{background-color:#505050;box-shadow:0 0 10px rgba(0,0,0,.5)}
@media only screen and (max-width:990px){.product-grid4{margin-bottom:30px}
}
        </style>
            <div class="product">
            <div class="container">
            <br>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4" data-name="Product 1" data-price="14.40">
                        <div class="product-image4" >
                            <a href="#">
                                <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image3.jpg">
                                <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image4.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="<?= base_url('Product/Information')?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 1</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image1.jpg">
                                <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image2.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-discount-label">-12%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 2</a></h3>
                            <div class="price">
                                $17.60
                                <span>$20.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                            <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image6.jpg">
                            <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image5.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 3</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                            <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image7.jpg">
                            <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image8.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 4</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image3.jpg">
                                <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image4.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 1</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image1.jpg">
                                <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image2.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-discount-label">-12%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 2</a></h3>
                            <div class="price">
                                $17.60
                                <span>$20.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                            <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image6.jpg">
                            <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image5.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 3</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                            <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image7.jpg">
                            <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image8.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 4</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image3.jpg">
                                <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image4.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 1</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image1.jpg">
                                <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image2.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-discount-label">-12%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 2</a></h3>
                            <div class="price">
                                $17.60
                                <span>$20.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                            <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image6.jpg">
                            <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image5.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 3</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                            <img class="pic-1" src="<?php echo base_url(); ?>assets/image/image7.jpg">
                            <img class="pic-2" src="<?php echo base_url(); ?>assets/image/image8.jpg">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>
                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">Product 4</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      <script >
        function card(){
          document.getElementById("Card").style.width="400px";
          document.getElementById("Card2").style.width="400px";
          document.getElementById("Card3").style.width="400px";
          document.getElementById("Card4").style.width="400px";
          document.getElementById("Card5").style.width="400px";
          document.getElementById("Card6").style.width="400px";
        }
        function list(){
          document.getElementById("Card").style.width="1000px";
          document.getElementById("Card2").style.width="1000px";
          document.getElementById("Card3").style.width="1000px";
          document.getElementById("Card4").style.width="1000px";
          document.getElementById("Card5").style.width="1000px";
          document.getElementById("Card6").style.width="1000px";
        }
      </script>