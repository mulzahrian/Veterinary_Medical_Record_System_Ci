<!-- Sidebar -->

    <hr class="sidebar-divider" >

    <!-- query menu -->
    <?php 
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `db_user_menu`.`id`, `menu`
                            FROM `db_user_menu` JOIN `db_user_access_menu`
                              ON `db_user_menu`.`id` = `db_user_access_menu`.`menu_id`
                           WHERE `db_user_access_menu`.`role_id` = $role_id
                        ORDER BY `db_user_access_menu`.`menu_id` ASC
                        ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>


    <!-- end query menu -->
    <ul class="sidebar navbar-nav">

    <!-- Lopping -->
    <?php foreach ($menu as $m) : ?>
            <div class="nav-item" >
            <!--b><font color='#fff'><?= $m['menu']; ?></font></b-->
            </div>
            

          <!-- sub menu -->

            <?php 
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                            FROM `db_user_sub_menu` JOIN `db_user_menu`
                              ON `db_user_sub_menu`.`menu_id` = `db_user_menu`.`id`
                           WHERE `db_user_sub_menu`.`menu_id` = $menuId
                            AND `db_user_sub_menu`.`is_active` = 1 
                        ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

    <!-- end of submenu -->

    <?php foreach ($subMenu as $sm) : ?>
            <?php if ($title == $sm['title']) : ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif; ?>
        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
          <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span>
        </a>
      </li>

    <?php endforeach; ?>
    <?php endforeach; ?>


    <!-- end of Lopping -->
    
    
    

      

       

      
      
    </ul>
    <!-- end of sidebar -->