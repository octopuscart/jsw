<?php
$this->load->view('layout/header_1');
?>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../shop/shop.html"><?php echo $product['tag']; ?></a></li>
                   </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">


        <!-- Single Product Body -->
        <div class="mb-xl-14 mb-6">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                         data-infinite="true"
                         data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                         data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                         data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                         data-nav-for="#sliderSyncingThumb">
                             <?php
                             foreach ($product['img'] as $ikey => $ivalue) {
                                 ?>
                            <div class="js-slide">
                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/theme2/images/testproduct/<?php echo $ivalue; ?>" alt="Image Description">
                            </div>
                            <div class="js-slide">
                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/theme2/images/testproduct/<?php echo $ivalue; ?>" alt="Image Description">
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                    <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                         data-infinite="true"
                         data-slides-show="5"
                         data-is-thumbs="true"
                         data-nav-for="#sliderSyncingNav">
                             <?php
                             foreach ($product['img'] as $ikey => $ivalue) {
                                 ?>
                            <div class="js-slide" style="cursor: pointer;">
                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/theme2/images/testproduct/<?php echo $ivalue; ?>" alt="Image Description">
                            </div>
                            <div class="js-slide" style="cursor: pointer;">
                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/theme2/images/testproduct/<?php echo $ivalue; ?>" alt="Image Description">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-7 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                            <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block"><?php echo $product['tag']; ?></a>
                            <h2 class="font-size-25 text-lh-1dot2"><?php echo $product['title']; ?></h2>
                            <div class="mb-2">
                                <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#">
                                    <div class="text-warning mr-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>

                                </a>
                            </div>
                            <div class="d-md-flex align-items-center">
                                <div class="ml-md-3 text-gray-9 font-size-14">Availability: <span class="text-green font-weight-bold">In stock</span></div>
                            </div>
                        </div>
                        <div class="flex-horizontal-center flex-wrap mb-4">
                            <a href="#" class="text-gray-6 font-size-13 mr-2"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                            <a href="#" class="text-gray-6 font-size-13 ml-2"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        </div>
                        <div class="mb-2">
                            <ul class="font-size-14 pl-3 ml-1 text-gray-110">
                                <?php
                                foreach ($product['spacs'] as $skey => $svalue) {
                                    ?>
                                    <li><?php echo $svalue;?></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <p><strong>SKU</strong>: <?php echo $product['sku']; ?></p>
                       
                        <div class="border-top border-bottom py-3 mb-4">
                            <div class="d-flex align-items-center">
                                <h6 class="font-size-14 mb-0">Select</h6>
                                <!-- Select -->
                                <select class="js-select selectpicker dropdown-select ml-3"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border">
                                    <?php
                                foreach ($product['attr'] as $skey => $svalue) {
                                    ?>
                                    <option value="one" selected><?php echo $svalue;?></option>
                                    <?php
                                }
                                ?>
                                </select>
                                <!-- End Select -->
                            </div>
                        </div>
                        <div class="d-md-flex align-items-end mb-3">
                            <div class="max-width-150 mb-4 mb-md-0">
                                <h6 class="font-size-14">MOQ</h6>
                                <!-- Quantity -->
                                <div class="border rounded-pill py-2 px-3 border-color-1">
                                    <div class="js-quantity row align-items-center">
                                        <div class="col">
                                            <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="number" value="<?php echo $product['moq'];?>" min='<?php echo $product['moq'];?>'>
                                        </div>
                                        <div class="col-auto pr-1">
                                            <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                <small class="fas fa-minus btn-icon__inner"></small>
                                            </a>
                                            <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                <small class="fas fa-plus btn-icon__inner"></small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Quantity -->
                            </div>
                            <div class="ml-md-3">
                                <a href="#" class="btn px-5 btn-primary-dark transition-3d-hover"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Inquire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product Body -->



    </div>



</main>
<!-- ========== END MAIN CONTENT ========== -->

<?php
$this->load->view('layout/footer');
?>
