<?php require_once("../resources/config.php") ?>
    <?php include(TEMPLATE_FRONT . DS . "header.php") ?>
     
     
     
        <!-- Page Content -->
    <div class="container">
     
           <!-- Side Navigation -->
     
           <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>
     
     
           <?php 
           
           $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
           confirm($query);
       
           while ($row = fetch_array($query)):
               
               
            ?>
           
     
     
    <div class="col-md-9"> 
    <!--Row For Image and Short Description--> 
        <div class="row">
            <div class="col-md-7">          <!-- |PHP| Echo Product Image -->
            <img class="img-responsive" src="<?= $row['product_image']; ?>" alt="">
            </div>
            <div class="col-md-5">  
                <div class="thumbnail">
                    <div class="caption-full">
                            <!-- |PHP| Echo Product Title -->
                        <h4> <?= $row['product_title']; ?></h4>
                        <hr>
                                                    <!-- |PHP| Echo Product Price -->
                        <h4 class="">&euro;&nbsp;   <?php echo $row['product_price']; ?>    </h4>
                            <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    4.0 stars
                                </p>
                            </div>
                            <!-- |PHP| Echo Product Short Description -->
                        <p> <?= $row['short_desc']; ?> </p>
        
                        <form action="">
                            <div class="form-group">

                                <a href="cart.php?add=<?= $row['product_id']; ?>" class="btn btn-primary">Add to cart</a>
                                        
                            </div>
                        </form>   
                    </div>  <!-- |X| caption-full |X| -->
                </div>  <!-- |X| thumbnail |X| -->   
            </div>  <!-- |X| col-md-5 |X| -->
        </div>  <!-- |X| row |X| -->
        <hr>
     
     
    <!--Row for Tab Panel-->
     
    <div class="row">
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>           
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="home">
                        <!-- |PHP| Echo Full Product Description -->    
                    <p> <?= $row['product_description']; ?> </p>
                </div>   <!-- |X| tab-pane |X| -->

                <div role="tabpanel" class="tab-pane" id="profile">
     
                    <div class="col-md-6">
                        <h3>2 Reviews From </h3>               
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">10 days ago</span>
                                <p>This product was great in terms of quality. I would definitely buy another!</p>
                            </div>  <!-- |X| col-md-12 |X| -->
                        </div>    <!-- |X| row |X| -->
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">12 days ago</span>
                                <p>I've alredy ordered another one!</p>
                            </div>  <!-- |X| col-md-12 |X| -->
                        </div>  <!-- |X| row |X| -->
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                Anonymous
                                <span class="pull-right">15 days ago</span>
                                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                            </div>  <!-- |X| col-md-12 |X| -->
                        </div>  <!-- |X| row |X| -->
                    </div>   <!-- |X| col-md-6 |X| -->
     
                    <div class="col-md-6">
                        <h3>Add A review</h3>
                        <form action="" class="form-inline">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" >
                            </div>  <!-- |X| form-group |X| -->
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="test" class="form-control">
                            </div>  <!-- |X| form-group |X| -->
                            <div>
                                <h3>Your Rating</h3>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </div>  <!-- |X| ... |X| -->
                    
                                <br>
                                
                                <div class="form-group">
                                <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
                                </div>
                    
                                <br>
                                <br>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="SUBMIT">
                                </div>
                            </form>
                
                    </div>
     
     </div>
     
     </div>
     
    </div>
     
     
    </div><!--Row for Tab Panel-->
     
    </div> <!--col-md-9 ends here -->
   
    <?php endwhile; ?>
     
    </div>
        <!-- /.container -->
     
    <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>