<?php
if (!defined('ABSPATH')) {
  exit;
} 
if (isset($_POST['SocialSub'])) {
  SossMedia();
}
if(isset($_POST['footer_content_submit'])){
  page_function();
}

global $facebook;
global $instagram;
global $twitter;

global $Page;
global $Cart;
global $Account;
global $Categorie;

global $Contact;
global $Numero;
global $Adresse;
global $Emaill;


function page_function(){
  $Mypage = $_POST['page'];
  $Mycart = $_POST['cart'];
  $Myaccount = $_POST['account'];
  $Mycategorie = $_POST['categorie'];

  $Mycontact = $_POST['contact'];
  $Mynumero = $_POST['numero'];
  $Myadresse = $_POST['adresse'];
  $Myemai = $_POST['emaill'];


  global $Page;
  global $Cart;
  global $Account;
  global $Categorie;

  global $Contact;
  global $Numero;
  global $Adresse;
  global $Emaill;


  if (get_option('page') != trim($Mypage)) {
    $Page = update_option('page', trim($Mypage));
  }
  if (get_option('cart') != trim($Mycart)) {
    $Cart = update_option('cart', trim($Mycart));
  }
  if (get_option('account') != trim($Myaccount)) {
    $Account = update_option('account', trim($Myaccount));
  }
  if (get_option('categorie') != trim($Mycategorie)) {
    $Categorie = update_option('categorie', trim($Mycategorie));
  }

  if (get_option('contact') != trim($Mycontact)) {
    $Contact = update_option('contact', trim($Mycontact));
  }
  if (get_option('numero') != trim($Mynumero)) {
    $Numero = update_option('numero', trim($Mynumero));
  }
  if (get_option('adresse') != trim($Myadresse)) {
    $Adresse = update_option('adresse', trim($Myadresse));
  }
  if (get_option('emaill') != trim($Myemaill)) {
    $Emaill = update_option('emaill', trim($Myemaill));
  }
}





function SossMedia()
{
  $MyFacebook = $_POST['fb'];
  $MyInsta = $_POST['insta'];
  $MyTwitter = $_POST['twitt'];

  global $facebook;
  global $instagram;
  global $twitter;

  if (get_option('fb') != trim($MyFacebook)) {
    $facebook = update_option('fb', trim($MyFacebook));
  }
  if (get_option('insta') != trim($MyInsta)) {
    $instagram = update_option('insta', trim($MyInsta));
  }
  if (get_option('twitt') != trim($MyTwitter)) {
    $twitter = update_option('twitt', trim($MyTwitter));
  }

}
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Footer Settings</h2>
  <?php if (isset($_POST['SocialSub']) && ($facebook || $instagram || $twitter )) : ?>
  <div id="message" class="updated below-h2">
    <p>Link of social media updated successfully</p>
  </div>
  <?php endif; ?>
  <?php if (isset($_POST['footer_content_submit']) && ( $Page || $Cart || $Account || $Categorie || $Contact || $Numero || $Adresse || $Emaill)) : ?>
  <div id="message" class="updated below-h2">
    <p>pages updated successfully </p>
  </div>
  <?php endif; ?>
  

  <div>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Entre the Link of Social Media</strong></h3>
      <hr>
      <form method="post" action="">
        <table class="form-table">

          <tr>
          <th scope="row" style="padding-left: 12px;">Facebook Link :</th>
            <td><input type="text" name="fb" value="<?php echo get_option('fb'); ?>"
                style="width:350px;" /></td>
          </tr>

          <tr>
            <th scope="row" style="padding-left: 12px;">Instagram Link :</th>
            <td><input type="text" name="insta" value="<?php echo get_option('insta'); ?>"
                style="width:350px;" /></td>
          </tr>

          <tr>
            <th scope="row" style="padding-left: 12px;">Twitter Link :</th>
            <td><input type="text" name="twitt" value="<?php echo get_option('twitt'); ?>"
                style="width:350px;" /></td>
          </tr>

          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
              <input type="submit" name="SocialSub" value="Save changes" class="button-primary" />
            </td>
          </tr>
        </table>
      </form>
    </div>






    <div class="postbox">
    <h3><strong>Entre What You have in Your Pages</strong></h3>
    <hr>
      <form method="post" action="">
        <table class="form-table">

          <tr>
            <th scope="row" style="padding-left: 12px;">Page</th>
            <td><input type="text" name="page" value="<?php echo get_option('page'); ?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row" style="padding-left: 12px;">Cart</th>
            <td><input type="text" name="cart" value="<?php echo get_option('cart'); ?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row" style="padding-left: 12px;">My account</th>
            <td><input type="text" name="account" value="<?php echo get_option('account'); ?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row" style="padding-left: 12px;">Categorie</th>
            <td><input type="text" name="categorie" value="<?php echo get_option('categorie'); ?>" style="width:350px;" />
            </td>
          </tr>


          <tr>
            <th scope="row" style="padding-left: 12px;">Contact</th>
            <td><input type="text" name="contact" value="<?php echo get_option('contact'); ?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row" style="padding-left: 12px;">Numero</th>
            <td><input type="text" name="numero" value="<?php echo get_option('numero'); ?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row" style="padding-left: 12px;">Adresse</th>
            <td><input type="text" name="adresse" value="<?php echo get_option('adresse'); ?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row" style="padding-left: 12px;">Email</th>
            <td><input type="text" name="emaill" value="<?php echo get_option('emaill'); ?>" style="width:350px;" /></td>
          </tr>

          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
              <input type="submit" name="footer_content_submit" value="Save changes" class="button-primary" />
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>