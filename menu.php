<?php
//include_once('menu_db.php');
//create a page menus.php pass data parent,menus to that page
$parent = $_POST['menu']['parent'];
if(isset($menus[$parent])) {
	foreach ($menus[$parent] as $key => $menu) {
		if(isset($menus[$menu['id']])){ ?>
			<div class="dropdown">
		    <button class="dropbtn"><?php print $menu['label'];?>
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
					<?php
					$_POST['menu']['parent']= $menu['id']; 
					include('menu.php'); 
					?>
				</div>
			</div>	
		<? }
		else{ ?>
			<a href="#"><?php echo $menu['label']; ?></a>
		<?php }
	}
}						
?>