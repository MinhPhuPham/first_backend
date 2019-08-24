<div class="container-fluid">
    <div class="row">
        <div class="col-2 collapse d-md-flex bg-light pt-2 min-vh-100 bd-sidebar " id="sidebar">
            <ul class="nav flex-column flex-nowrap">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('User/sell_page') ?>">Overview</a></li>
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
             <button type="button" class="btn tablinks" data-toggle="modal" data-target="#myModal-3"><i class="fa far fa-plus-square">Add Categories</i></button>
             <button type="button"  class="btn tablinks"><i class=" fa fas fa-th-square  "><a href="<?= base_url('User/sell_page2') ?>">Preview new version</a></i></button>
             <!-- The Modal -->
  <div class="modal" id="myModal-3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Categories</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="/action_page.php">
    <div class="form-group">
      <label for="namepro">Name Product: </label>
      <input type="text" class="form-control" id="namepro" placeholder="Enter namepro" name="namepro">
    </div>
    <div class="form-group">
      <label for="cost">Price:</label>
      <input type="number" class="form-control" id="cost" placeholder="Enter Cost of product" name="cost">
    </div>
    <div class="form-group">
      <label for="cost">Choose image from your computer: </label><br>
      <input type='file'>
    </div>
    <script>
      window.addEventListener('load', function() {
  document.querySelector('input[type="file"]').addEventListener('change', function() {
      if (this.files && this.files[0]) {
          var img = document.querySelector('img');  // $('img')[0]
          img.src = URL.createObjectURL(this.files[0]); // set src to file url
          img.onload = imageIsLoaded; // optional onload event listener
      }
  });
});

function imageIsLoaded(e) { alert(e); }
    </script>
    <div class="form-group form-check">
      <label class="form-check-label">  
        <input class="form-check-input" type="checkbox" name="remember"> Checked all information
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
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
            <div class="product">
                <div id="column1">
                  <div id="Card" class="Card">
                    <div class="row">
                        <div class="col-md-6">
                          <img src="./image2.jpg" class="img">

                          <button type="button" class="add-to-cart btn btn-danger" style="margin-top: 8px;">More details</button>
                        </div>
                        <div class="col-md-6">
                          <h4><a href="#">Product 1</a></h4>
                          <h5>Cost:</h5>
                          <p>4.000.000d</p>
                          <button class="add-to-cart btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                  </div>
                  <div id="Card2" class="Card">
                    <div class="row">
                        <div class="col-md-6">
                          <img src="./image3.jpg" class="img">

                          <button type="button" class="add-to-cart btn btn-danger" style="margin-top: 8px;">More details</button>
                        </div>
                        <div class="col-md-6">
                          <h4><a href="#">Product 2</a></h4>
                          <h5>Cost:</h5>
                          <p>4.000.000d</p>
                          <button class="add-to-cart btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                  </div>
                  <div id="Card3" class="Card">
                    <div class="row">
                        <div class="col-md-6">
                          <img src="./image4.jpg" class="img">

                          <button type="button" class="add-to-cart btn btn-danger" style="margin-top: 8px;">More details</button>
                        </div>
                        <div class="col-md-6">
                          <h4><a href="#">Product 3</a></h4>
                          <h5>Cost:</h5>
                          <p>4.000.000d</p>
                          <button class="add-to-cart btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                  </div>
                  <div id="Card4" class="Card">
                    <div class="row">
                        <div class="col-md-6">
                          <img src="./image2.jpg" class="img">

                          <button type="button" class="add-to-cart btn btn-danger" style="margin-top: 8px;">More details</button>
                        </div>
                        <div class="col-md-6">
                          <h4><a href="#">Product 4</a></h4>
                          <h5>Cost:</h5>
                          <p>4.000.000d</p>
                          <button class="add-to-cart btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                  </div>
                  <div id="Card5" class="Card">
                    <div class="row">
                        <div class="col-md-6">
                          <img src="./image3.jpg" class="img">

                          <button type="button" class="add-to-cart btn btn-danger" style="margin-top: 8px;">More details</button>
                        </div>
                        <div class="col-md-6">
                          <h4><a href="#">Product 5</a></h4>
                          <h5>Cost:</h5>
                          <p>4.000.000d</p>
                          <button class="add-to-cart btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                  </div>
                  <div id="Card6" class="Card">
                    <div class="row">
                        <div class="col-md-6">
                          <img src="./image4.jpg" class="img">

                          <button type="button" class="add-to-cart btn btn-danger" style="margin-top: 8px;">More details</button>
                        </div>
                        <div class="col-md-6">
                          <h4><a href="#">Product 6</a></h4>
                          <h5>Cost:</h5>
                          <p>4.000.000d</p>
                          <button class="add-to-cart btn btn-primary">Add to cart</button>
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