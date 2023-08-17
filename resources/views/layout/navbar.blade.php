

<div class="container">
  <ul>
      
      
      
      <li class="menu-item ">
          <a href="/" class='menu-link @if (request()->segment(1) == "")
              active
          @endif'>
              <i class="bi bi-grid-fill"></i>
              <span>Dashboard</span>
          </a>
      </li>
      
      
      
      <li
          class="menu-item  has-sub ">
          <a href="/" class='menu-link @if (request()->segment(1) == "profil")
            active
        @endif'>
              <i class="bi bi-stack"></i>
              <span>Profil</span>
          </a>
          <div
              class="submenu ">
              <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
              <div class="submenu-group-wrapper">
                  
                  
                  <ul class="submenu-group">
                      
                      <li
                          class="submenu-item">
                          <a href="/profil/tugas-pokok-fungsi"
                              class='submenu-link'>Tugas Pokok dan Fungsi</a>
                      </li>
                      <li
                          class="submenu-item  ">
                          <a href="/profil/dasar-hukum"
                              class='submenu-link'>Dasar Hukum</a>
                      </li>
                      <li
                          class="submenu-item  ">
                          <a href="/profil/kode-etik-pegawai"
                              class='submenu-link'>Kode Etik Pegawai</a>
                      </li>
                      <li
                          class="submenu-item  ">
                          <a href="/profil/kewajiban-larangan"
                              class='submenu-link'>Kewajiban dan Larangan Pegawai</a>
                      </li>
                      
                  </ul>
                  
                  
              </div>
          </div>
      </li>
      <li
          class="menu-item  has-sub ">
          <a href="/" class='menu-link @if (request()->segment(1) == "regulasi")
            active
        @endif'>
              <i class="bi bi-layers-half"></i>
              <span>Regulasi</span>
          </a>
          <div
              class="submenu ">
              <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
              <div class="submenu-group-wrapper">
                  
                  
                  <ul class="submenu-group">
                      
                      <li
                          class="submenu-item">
                          <a href="/regulasi/undang-undang"
                              class='submenu-link'>Undang - Undang</a>
                      </li>
                      <li
                          class="submenu-item  ">
                          <a href="/regulasi/peraturan-pemerintah"
                              class='submenu-link'>Peraturan Pemerintah</a>
                      </li>
                      <li
                          class="submenu-item  ">
                          <a href="/regulasi/peraturan-presiden"
                              class='submenu-link'>Peraturan Presiden</a>
                      </li>
                      
                  </ul>
                  
                  
              </div>
          </div>
      </li>

      <li class="menu-item ">
        <a href="/penyimpanan" class='menu-link @if (request()->segment(1) == "penyimpanan")
            active
        @endif'>
            <i class="bi bi-archive-fill"></i>
            <span>Penyimpanan</span>
        </a>
    </li>

      <li class="menu-item ">
        <a href="/data-barang" class='menu-link @if (request()->segment(1) == "data-barang")
            active
        @endif'>
            <i class="bi bi-bookmark-x-fill"></i>
            <span>Data Barang Sitaan</span>
        </a>
    </li>
      
  </ul>
</div>