
  
         <!-- Dropdown Structure -->
         <!--ul id="dropdown1" class="dropdown-content">
          <li><a href="#">Category - 1 -</a></li>
          <li><a href="#">Category - 2 - </a></li>
          <li><a href="#">Category - 3 - </a></li>
        </ul-->
<div class="navbar-fixed"> 
  <nav class="nav-extended #546e7a blue-grey darken-1">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo ">Welcome To Life Blog</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
            <!--li> 
            SEARCH FIELD
             <form>
               <div class="input-field ">
                  <input id="search" type="search" required placeholder="Search">
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
               </div>
             </form>
            </li-->    
      <?php if(!isset($_SESSION['login'])){ ?> 
        <li class="tab"><a  href="login.php" ><i class="material-icons left">edit</i>Sign In</a></li>
        <li class="tab"><a  href="register.php" ><i class="material-icons left">add</i>Sign Up</a> </li>
      <?php } ?>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <?php
          if(isset($_SESSION['login'])){
            if(isset($_SESSION['role'])&&$_SESSION['role']){ ?>
        <li class="tab"><a href="displays.php?type=pub" id="list_pub">articles</a></li>
        <li class="tab"><a href="displays.php?type=cat" id="list_cat">categories</a></li>
        <?php } ?>
        <li class="tab"><a href="bookmarks.php">bookmarks</a></li>
        <li class="tab"><a href="asset/php/private/logout.php">logout</a></li>
        <?php }?>
        <li class="tab"><a class="dropdown-trigger" data-target="dropdown1" href="#">Cateories<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>
</div>