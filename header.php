<nav id="nav">
  <div class="container">
    <div class="header">
      <div class="logo">
        <img src="image/logotest.png" alt="" />
      </div>
      <ul class="icon-nav">
        <li class="search-box">
          <div class="contain-box-input">
            <input type="text" placeholder="Tìm kiếm..." id="input-search" name="input-search" />
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
        </li>
        <li class="quit-and-user">
          <div class="box-username">
            <div class="circle-user" onclick="displayInfo()">
              <img src="image/user/263488869_443529827145028_2047190494803940337_n.jpg">
            </div>
            <div class="box-content-user">
              <div class="content-user" id="content-user">
                <div onclick="redirectInfor()"><i class="fa-solid
                                                fa-circle-user"></i><span>Thông
                    tin cá nhân</span></div>
                <div onclick="redirectDashboard()"><i class="fa-solid
                                                fa-table-columns"></i><span>quản
                    lý</span></div>
                <div onclick="redirectCart()"><i class="fa-solid
                                                fa-cart-shopping"></i><span>Giỏ
                    hàng</span></div>
                <div onclick="redirectLogin()"><i class="fa-solid
                                                fa-right-from-bracket"></i><span>Thoát</span></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="sticky">
      <div class="navigation">
        <ul>
          <li class="glow nav-content" id="glow" onclick="redirectHome()">Trang
            chủ</li>
          <div class="th">
            <li class="th-hover abc">Thương hiệu</li>
            <div class="list-th">
              <a href="view.php#nike" style="text-decoration:none;">
                <li class="abc-one" onclick="load_nike()">Nike</li>
              </a>
              <a href="view.php#adidas" style="text-decoration:none;">
                <li class="abc-two">Adidas</li>
              </a>
            </div>
          </div>
          <li class="nav-content male" onclick="redirectNam()">Nam</li>
          <li class="nav-content female" onclick="redirectNu()">Nữ</li>
          <li class="nav-content list-love">Danh sách yêu
            thích</li>
          <li class="nav-content news">Tin tức</li>
        </ul>
      </div>
    </div>
    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div>
    <div class="women">
      <ul></ul>
    </div>
  </div>
</nav>