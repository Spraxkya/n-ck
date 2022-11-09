<?php

require_once '../inc/db.inc.php';
require_once '../tpl/store.tpl.php';


    function productInfo($conn, $productId, $yeit) {
    $sql = "SELECT * FROM products WHERE product_id=?";
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("s", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $trick = $row['product_number'];
        $type = $row['product_type'];
        $size = $row['product_size'];
        $skill1 = $row['skill1'];
        $skill2 = $row['skill2'];
        $stat1 = $row['stat1'];
        $stat2 = $row['stat2'];
        $stat3 = $row['stat3'];
        $gimg1 = $row['product_gallery_img1'];
        $gimg2 = $row['product_gallery_img2'];
        $gimg3 = $row['product_gallery_img3'];
        $img = $row['product_img'];
        $cart_add = $row['product_add'];
        $cart_data_item_id = $row['product_id'];
        $cart_price = $row['product_price'];
        $cart_url = $row['product_url'];
        $cart_description = $row['product_description'];
        $cart_cart_img = $row['product_cart_img'];
        $cart_name = $row['product_name'];
        $cart_quantity = $row['product_quantity'];
    };
    ?>               
    <div onmouseleave="hideInfo<?php echo $yeit; ?>();" class="product-info<?php echo $yeit;?> info">
        <h3 class="gallery-hide<?php echo $yeit; ?> desc-hide<?php echo $yeit; ?>">Documentation</h3>
        <div class="stats gallery-hide<?php echo $yeit; ?> desc-hide<?php echo $yeit; ?>">
            <div class="type">
                <h4>Type</h4>
                <span><?php echo $type; ?></span>
            </div>
            <div class="skills">
                <h4>Skills</h4>
                <ul>
                    <li><?php echo $skill1; ?></li>
                    <li><?php echo $skill2; ?></li>
                </ul>
            </div>
        </div>
        <div class="stats-graph gallery-hide<?php echo $yeit; ?> desc-hide<?php echo $yeit; ?>">
            <div class="stats-div"><span>Shtick</span><div class="stats-bar1"><span class="hidden-values stat1"><?php echo $stat1; ?></span></div>
            </div>
            <div class="stats-div"><span>Sex appeal</span><div class="stats-bar2"><span class="hidden-values stat2"><?php echo $stat2; ?></span></div>
            </div>
            <div class="stats-div"><span>Unnecessaryness</span><div class="stats-bar3"><span class="hidden-values stat3"><?php echo $stat3; ?></span></div>
            </div>
            <div class="scale-div">
                <div></div>
                <p>1</p> <p>2</p> <p>3</p> <p>4</p> <p>5</p> <p>6</p> <p>7</p> <p>8</p> <p>9</p> <p>10</p>
            </div>
        </div>
        <div class="info-mSektion">
            <div class="first-mSektion gallery-hide<?php echo $yeit; ?> desc-hide<?php echo $yeit; ?>">
                <h3>Gallery</h3>
                <div style="
                background: url('../tpl/images/store/products/<?php echo $gimg3;?>');
                width: auto;
                height: 70%;
                background-size: contain;
                background-repeat: no-repeat;
                background-position-x: center;
                "
                class="gallery-img<?php echo $yeit;?>"> </div>
            </div>
            <div class="second-mSektion">
                <img class="hide-img" src="<?php echo $img; ?>">
            </div>
            <div class="third-mSektion gallery-hide<?php echo $yeit; ?> desc-hide<?php echo $yeit; ?>">
                <div class="price-section">
                    <h4>Price</h4>
                    <span><?php echo $cart_price; ?></span>
                </div>
                <form>
                    <select id="size_custom" name = "size_custom">
                        <option value="<?php echo $size?>"><?php echo $size?></option>
                    </select>
                    <div class="counter">
                        <span id="qUp<?php echo $yeit;?>"> < </span>
                        <input disabled="disabled" id="quantity<?php echo $yeit;?>" type="number" min="1" value="1">
                        <span id="qDown<?php echo $yeit;?>"> > </span>
                    </div>      
                </form>
                <script data-seller="10111" data-artnr="<?php echo $cart_data_item_id;?>" src="https://client.kwikk.se/kwikk-client.js"></script>
                <button id="cart-btn<?php echo $yeit;?>" class="cart-btn"> add to cart </button>
            </div>
        </div>
        <div class="description<?php echo $yeit;?> gallery-hide<?php echo $yeit;?>">
            <h2><?php echo $cart_name; ?></h2>
            <p> <?php echo $cart_description; ?> </p>
            <button onclick="descr<?php echo $yeit;?>();" class="see-more<?php echo $yeit;?> gallery-hide<?php echo $yeit;?>">See More</button>
        </div>
        <div class="left-arrow<?php echo $yeit;?>"></div> 
        <div class="right-arrow<?php echo $yeit;?>"></div>
        <div class="exitGallery<?php echo $yeit;?>"> <h2>Exit Gallery</h2></div>
    </div>
    <img onclick="gallery<?php echo $yeit;?>();" onmouseenter="showInfo<?php echo $yeit; ?>();" class="prod-img<?php echo $yeit;?>" src="<?php echo $img; ?>">
    <script>

        const quantity<?php echo $yeit;?> = document.querySelector('#quantity<?php echo $yeit;?>');
        const downB<?php echo $yeit;?> = document.querySelector('#qUp<?php echo $yeit;?>');
        const upB<?php echo $yeit;?> = document.querySelector('#qDown<?php echo $yeit;?>');

        upB<?php echo $yeit;?>.onclick = function() {
            quantity<?php echo $yeit;?>.setAttribute('value', parseInt(quantity<?php echo $yeit;?>.value) +1);
        }

        downB<?php echo $yeit;?>.onclick = function() {
            if(quantity<?php echo $yeit;?>.value >1) {
            quantity<?php echo $yeit;?>.setAttribute('value', parseInt(quantity<?php echo $yeit;?>.value) -1);
            }
        }

        const addBtn<?php echo $yeit;?> = document.querySelector('#cart-btn<?php echo $yeit;?>');
        
        addBtn<?php echo $yeit;?>.onclick = function() {
            for(var i = 0; i < parseInt(quantity<?php echo $yeit;?>.value); ++i) {
                document.querySelector("kwikk[data-artnr='<?php echo $cart_data_item_id;?>'] .comet__btn").click();
                console.log('hej');
            } 
        } 

        const showGallery<?php echo $yeit;?> = document.querySelector('.gallery-img<?php echo $yeit;?>');
        const prodImg<?php echo $yeit;?> = document.querySelector('.prod-img<?php echo $yeit;?>');
        const leftArrow<?php echo $yeit;?> = document.querySelector('.left-arrow<?php echo $yeit;?>');
        const rightArrow<?php echo $yeit;?> = document.querySelector('.right-arrow<?php echo $yeit;?>');
        const exitGallery<?php echo $yeit;?> = document.querySelector('.exitGallery<?php echo $yeit;?>');
        const prodInfo<?php echo $yeit;?> = document.querySelector('.product-info<?php echo $yeit;?>');
        const product<?php echo $yeit;?> = document.querySelector('#product<?php echo $yeit;?>');
        const descMore<?php echo $yeit;?> = document.querySelector('.see-more<?php echo $yeit;?>');
        const desc<?php echo $yeit;?> = document.querySelector('.description<?php echo $yeit;?>');

        galleryOF<?php echo $yeit;?> = "0";
        window.sessionStorage.setItem("galleryOF<?php echo $yeit;?>", galleryOF<?php echo $yeit;?>);

        showGallery<?php echo $yeit;?>.onclick = function() {
            setTimeout(() => {  
                document.querySelectorAll('.gallery-hide<?php echo $yeit;?>').forEach(el => {
                    el.style.opacity = "0";
                });
                prodImg<?php echo $yeit;?>.style.height = "60%";
                leftArrow<?php echo $yeit;?>.style.opacity = "1";
                rightArrow<?php echo $yeit;?>.style.opacity = "1";
                galleryImg<?php echo $yeit;?> = "1";
                window.sessionStorage.setItem("galleryImg<?php echo $yeit;?>", galleryImg<?php echo $yeit;?>);
                exitGallery<?php echo $yeit;?>.style.opacity = "1";
                galleryOF<?php echo $yeit;?> = "1";
                window.sessionStorage.setItem("galleryOF<?php echo $yeit;?>", galleryOF<?php echo $yeit;?>);
            }, 250);
            exitGallery<?php echo $yeit;?>.style.display = "block";
        }

        function gallery<?php echo $yeit;?>() {
            if(galleryOF<?php echo $yeit;?> === "0") {
                setTimeout(() => {
                    document.querySelectorAll('.gallery-hide<?php echo $yeit;?>').forEach(el => {
                        el.style.opacity = "0";
                    });
                    prodImg<?php echo $yeit;?>.style.height = "60%";
                    leftArrow<?php echo $yeit;?>.style.opacity = "1";
                    rightArrow<?php echo $yeit;?>.style.opacity = "1";
                    galleryImg<?php echo $yeit;?> = "1";
                    window.sessionStorage.setItem("galleryImg<?php echo $yeit;?>", galleryImg<?php echo $yeit;?>);
                    exitGallery<?php echo $yeit;?>.style.opacity = "1";
                    galleryOF<?php echo $yeit;?> = "1";
                    window.sessionStorage.setItem("galleryOF<?php echo $yeit;?>", galleryOF<?php echo $yeit;?>);
                }, 250);
                exitGallery<?php echo $yeit;?>.style.display = "block";
                }  else {
                prodImg<?php echo $yeit;?>.style.height = '70%';
                product<?php echo $yeit;?>.style.left = '0';
                product<?php echo $yeit;?>.style.top = '0';
                product<?php echo $yeit;?>.style.height = '100%';
                product<?php echo $yeit;?>.style.width = '100%';
                prodInfo<?php echo $yeit;?>.style.borderRadius = '0';
                galleryOF<?php echo $yeit;?> = "2";
                window.sessionStorage.setItem("galleryOF<?php echo $yeit;?>", galleryOF<?php echo $yeit;?>);
            }
        }


        leftArrow<?php echo $yeit;?>.onclick = function() {
            switch(sessionStorage.getItem('galleryImg<?php echo $yeit;?>')) {
                case '1':
                    prodImg<?php echo $yeit;?>.setAttribute('src', '../tpl/images/store/products/<?php echo $gimg3; ?>');
                    galleryImg<?php echo $yeit;?> = "3";
                    window.sessionStorage.setItem("galleryImg<?php echo $yeit;?>", galleryImg<?php echo $yeit;?>);
                    showGallery<?php echo $yeit;?>.style.background = "url('../tpl/images/store/products/<?php echo $gimg2;?>')"
                    showGallery<?php echo $yeit;?>.style.backgroundSize = "contain";
                    showGallery<?php echo $yeit;?>.style.backgroundRepeat = "no-repeat";
                    showGallery<?php echo $yeit;?>.style.backgroundPositionX = "center";
                break;
                case '2':
                    prodImg<?php echo $yeit;?>.setAttribute('src', '../tpl/images/store/products/<?php echo $gimg1; ?>');
                    galleryImg<?php echo $yeit;?> = "1";
                    window.sessionStorage.setItem("galleryImg<?php echo $yeit;?>", galleryImg<?php echo $yeit;?>);
                    showGallery<?php echo $yeit;?>.style.background = "url('../tpl/images/store/products/<?php echo $gimg3;?>')"
                    showGallery<?php echo $yeit;?>.style.backgroundSize = "contain";
                    showGallery<?php echo $yeit;?>.style.backgroundRepeat = "no-repeat";
                    showGallery<?php echo $yeit;?>.style.backgroundPositionX = "center";
                    break;
                case '3':
                    prodImg<?php echo $yeit;?>.setAttribute('src', '../tpl/images/store/products/<?php echo $gimg2; ?>');
                    galleryImg<?php echo $yeit;?> = "2";
                    window.sessionStorage.setItem("galleryImg<?php echo $yeit;?>", galleryImg<?php echo $yeit;?>); 
                    showGallery<?php echo $yeit;?>.style.background = "url('../tpl/images/store/products/<?php echo $gimg1;?>')"
                    showGallery<?php echo $yeit;?>.style.backgroundSize = "contain";
                    showGallery<?php echo $yeit;?>.style.backgroundRepeat = "no-repeat";
                    showGallery<?php echo $yeit;?>.style.backgroundPositionX = "center";
                break;
            }
        }

        rightArrow<?php echo $yeit;?>.onclick = function() {
            switch(sessionStorage.getItem('galleryImg<?php echo $yeit;?>')) {
                case '1':
                    prodImg<?php echo $yeit;?>.setAttribute('src', '../tpl/images/store/products/<?php echo $gimg2; ?>');
                    galleryImg<?php echo $yeit;?> = "2";
                    window.sessionStorage.setItem("galleryImg<?php echo $yeit;?>", galleryImg<?php echo $yeit;?>);
                    showGallery<?php echo $yeit;?>.style.background = "url('../tpl/images/store/products/<?php echo $gimg1;?>')"
                    showGallery<?php echo $yeit;?>.style.backgroundSize = "contain";
                    showGallery<?php echo $yeit;?>.style.backgroundRepeat = "no-repeat";
                    showGallery<?php echo $yeit;?>.style.backgroundPositionX = "center";
                break;
                case '2':
                    prodImg<?php echo $yeit;?>.setAttribute('src', '../tpl/images/store/products/<?php echo $gimg3; ?>');
                    galleryImg<?php echo $yeit;?> = "3";
                    window.sessionStorage.setItem("galleryImg<?php echo $yeit;?>", galleryImg<?php echo $yeit;?>);
                    showGallery<?php echo $yeit;?>.style.background = "url('../tpl/images/store/products/<?php echo $gimg2;?>')"
                    showGallery<?php echo $yeit;?>.style.backgroundSize = "contain";
                    showGallery<?php echo $yeit;?>.style.backgroundRepeat = "no-repeat";
                    showGallery<?php echo $yeit;?>.style.backgroundPositionX = "center";
                break;
                case '3':
                    prodImg<?php echo $yeit;?>.setAttribute('src', '../tpl/images/store/products/<?php echo $gimg1; ?>');
                    galleryImg<?php echo $yeit;?> = "1";
                    window.sessionStorage.setItem("galleryImg<?php echo $yeit;?>", galleryImg<?php echo $yeit;?>);
                    showGallery<?php echo $yeit;?>.style.background = "url('../tpl/images/store/products/<?php echo $gimg3;?>')"
                    showGallery<?php echo $yeit;?>.style.backgroundSize = "contain";
                    showGallery<?php echo $yeit;?>.style.backgroundRepeat = "no-repeat";
                    showGallery<?php echo $yeit;?>.style.backgroundPositionX = "center";
                break;
            }
        }

        exitGallery<?php echo $yeit;?>.onclick = function() {  
            if(galleryOF<?php echo $yeit;?> === "1") {
                document.querySelectorAll('.gallery-hide<?php echo $yeit;?>').forEach(el => {
                        el.style.opacity = "1";
                });
                prodImg<?php echo $yeit;?>.style.height = "215px";
                leftArrow<?php echo $yeit;?>.style.opacity = "0";
                rightArrow<?php echo $yeit;?>.style.opacity = "0";
                galleryImg<?php echo $yeit;?> = "1";
                window.sessionStorage.setItem("galleryImg<?php echo $yeit;?>", galleryImg<?php echo $yeit;?>);
                exitGallery<?php echo $yeit;?>.style.opacity = "0";
                galleryOF<?php echo $yeit;?> = "0";
                window.sessionStorage.setItem("galleryOF<?php echo $yeit;?>", galleryOF<?php echo $yeit;?>);
                product<?php echo $yeit;?>.style.left = '';
                product<?php echo $yeit;?>.style.top = '';
                product<?php echo $yeit;?>.style.height = '700px';
                product<?php echo $yeit;?>.style.width = '710px';
                prodInfo<?php echo $yeit;?>.style.borderRadius = '';
                exitGallery<?php echo $yeit;?>.style.display = "none";
            } if(galleryOF<?php echo $yeit;?> === "2") {
                prodImg<?php echo $yeit;?>.style.height = "60%";
                galleryOF<?php echo $yeit;?> = "1";
                window.sessionStorage.setItem("galleryOF<?php echo $yeit;?>", galleryOF<?php echo $yeit;?>);
                product<?php echo $yeit;?>.style.left = '';
                product<?php echo $yeit;?>.style.top = '';
                product<?php echo $yeit;?>.style.height = '700px';
                product<?php echo $yeit;?>.style.width = '710px';
                prodInfo<?php echo $yeit;?>.style.borderRadius = '';
            }
        }

        function descr<?php echo $yeit;?>() {
            if(descMore<?php echo $yeit;?>.innerHTML === 'See More') {
                document.querySelectorAll('.desc-hide<?php echo $yeit;?>').forEach(al => {
                    al.style.opacity = "0";
                    prodImg<?php echo $yeit;?>.style.height = '0';
                });
                desc<?php echo $yeit;?>.style.top = '68%';
                setTimeout(() => {  
                desc<?php echo $yeit;?>.style.position = 'absolute';
                desc<?php echo $yeit;?>.style.top = '5%';
                desc<?php echo $yeit;?>.style.left = '22.503%';
                }, 500);
                desc<?php echo $yeit;?>.style.textAlign = 'center';
                descMore<?php echo $yeit;?>.innerHTML = 'See Less';
            } else if(descMore<?php echo $yeit;?>.innerHTML === 'See Less') {
                    desc<?php echo $yeit;?>.style.top = '68%';
                    setTimeout(() => {  
                        desc<?php echo $yeit;?>.style.left = '';
                        desc<?php echo $yeit;?>.style.position = '';
                        desc<?php echo $yeit;?>.style.textAlign = '';
                        document.querySelectorAll('.desc-hide<?php echo $yeit;?>').forEach(al => {
                            al.style.opacity = "1";
                            prodImg<?php echo $yeit;?>.style.height = '215px';
                        });
                        descMore<?php echo $yeit;?>.innerHTML = 'See More';
                    }, 4000);
            }
        }

        showInfo<?php echo $yeit;?> = function() {
            var productInfo<?php echo $yeit;?> = document.querySelector('.product-info<?php echo $yeit;?>');
            var prodImg<?php echo $yeit;?> = document.querySelector('.prod-img<?php echo $yeit;?>');

            prodImg<?php echo $yeit;?>.style.zIndex = '5';
            productInfo<?php echo $yeit;?>.style.opacity = '1';
            productInfo<?php echo $yeit;?>.style.zIndex = '5';
        }

        hideInfo<?php echo $yeit;?> = function() {
            var productInfo<?php echo $yeit;?> = document.querySelector('.product-info<?php echo $yeit;?>');
            var prodImg<?php echo $yeit;?> = document.querySelector('.prod-img<?php echo $yeit;?>');

            if(galleryOF<?php echo $yeit;?> === "0") {
                prodImg<?php echo $yeit;?>.style.zIndex = '4';
                productInfo<?php echo $yeit;?>.style.opacity = '0';
                productInfo<?php echo $yeit;?>.style.zIndex = '0';
            }
        }

    </script>
    <?php
}
?>