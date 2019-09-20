 <!-- Begin Li's Breadcrumb Area -->
 <?php $this->load->view("view_tamu/konten/keranjang_detail/_partials/breadcrumb.php") ?>
 <!-- Li's Breadcrumb Area End Here -->

 <!--Shopping Cart Area Strat-->
 <div class="Shopping-cart-area pt-60 pb-60">
     <div class="container">
         <div class="row">
             <div class="col-12">

                 <form action="#">
                     <div class="table-content table-responsive">
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th class="li-product-remove">Hapus</th>
                                     <th class="li-product-thumbnail">Gambar</th>
                                     <th class="cart-product-name">Produk</th>
                                     <th class="li-product-price">Harga Satuan</th>
                                     <th class="li-product-quantity">Quantity</th>
                                     <th class="li-product-subtotal">Total</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                     <td class="li-product-thumbnail"><a href="#"><img src="<?= base_url() ?>assets/limupa/images/product/small-size/5.jpg" alt="Li's Product Image"></a></td>
                                     <td class="li-product-name"><a href="#">Nama Produk Kami 1</a></td>
                                     <td class="li-product-price"><span class="amount">Rp 1.000.000,00</span></td>
                                     <td class="quantity">
                                         <label>Quantity</label>
                                         <div class="cart-plus-minus">
                                             <input class="cart-plus-minus-box" value="1" type="text">
                                             <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                             <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                         </div>
                                     </td>
                                     <td class="product-subtotal"><span class="amount">Rp 1.000.000,00</span></td>
                                 </tr>
                                 <tr>
                                     <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                     <td class="li-product-thumbnail"><a href="#"><img src="<?= base_url() ?>assets/limupa/images/product/small-size/6.jpg" alt="Li's Product Image"></a></td>
                                     <td class="li-product-name"><a href="#">Nama Produk Kami 2</a></td>
                                     <td class="li-product-price"><span class="amount">Rp 1.500.000,00</span></td>
                                     <td class="quantity">
                                         <label>Quantity</label>
                                         <div class="cart-plus-minus">
                                             <input class="cart-plus-minus-box" value="1" type="text">
                                             <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                             <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                         </div>
                                     </td>
                                     <td class="product-subtotal"><span class="amount">Rp 1.500.000,00</span></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                     <div class="row">
                         <div class="col-12">
                             <div class="coupon-all">
                                 <div class="coupon2">
                                     <input class="button" name="update_cart" value="Update Keranjang" type="submit">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-5 ml-auto">
                             <div class="cart-page-total">
                                 <h2>Hasil Keranjang :</h2>
                                 <ul>
                                     <li>Subtotal <span>Rp 2.500.000,00</span></li>
                                     <li>Total <span>Rp 2.500.000,00</span></li>
                                 </ul>
                                 <a href="#">Proses Checkout</a>
                             </div>
                         </div>
                     </div>
                 </form>

             </div>
         </div>
     </div>
 </div>
 <!--Shopping Cart Area End-->