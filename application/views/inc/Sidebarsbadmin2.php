<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
      <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->

                        <li class="sidebar-item">
                            <?php echo form_open_multipart('Productos/empleado');?>
                <button type="submit" class="btn btn-success">Ver lista de Productos</button>
                <?php echo form_close();?><br>
                            </a>
                        </li> 

                        <li class="sidebar-item">
                             <?php echo form_open_multipart('Venta/empleado');?>
                <button type="submit" class="btn btn-success">Realizar venta</button>
                <?php echo form_close();?><br>
                            </a>
                        </li> 

                        <li class="sidebar-item">
                            <?php echo form_open_multipart('Usuarios/logout');?>
                <button type="submit" class="btn btn-danger">Cerrar sesion</button>
                <?php echo form_close();?>
                            </a>
                        </li>  

                    </ul>

                    </nav>
      </div>
    </div>
    <div class="main-panel" id="main-panel">