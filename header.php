<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hautakchurch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hautakchurch' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$hautakchurch_description = get_bloginfo( 'description', 'display' );
			if ( $hautakchurch_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $hautakchurch_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hautakchurch' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


<div class="sticky-top">
<nav class="navbar navbar-expand-lg navbar-light border-bottom py-1" style="background-color : #FFFFFF; padding : 10px">
    <div class="container header-container" id="container">
    <a href="index.php"><img class="navbar-brand d-lg-none" src="img/moNavNEW2.png" style="height : 40px; margin : 4px; padding : 0px"></a>
    <a href="index.php"><img class="navbar-brand d-none d-lg-block" src="img/superLongNav.png" style="height : 75px; margin-top : 3px; margin :0px "></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" ="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border : none">
        <span class="navbar-toggler-icon">

        </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        
			<!--
            <li class="nav-item mx-2 d-lg-none">
                <a class="nav-link" href="index.php">首頁</a>
            </li> 
            -->
            
            <li class="nav-item dropdown mx-0">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                本堂介紹
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="intro1.php">本會歷史</a>
                    <a class="dropdown-item" href="cma.php">宣道會信仰</a>
                    <a class="dropdown-item" href="timetable.php">聚會時間</a>
                </div>     
            </li>

            <li class="nav-item mx-0">
                <a class="nav-link" href="self.php">牧者心聲</a>
            </li>

            <li class="nav-item dropdown mx-0">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    教會聚會
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">崇拜</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">主日崇拜</a></li>
                            <li><a class="dropdown-item" href="#">親子崇拜</a></li>
                            <li><a class="dropdown-item" href="#">週六崇拜</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">主日學</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">成青主日學</a></li>
                            <li><a class="dropdown-item" href="#">兒童主日學</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">分齡牧區</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">成人牧區</a></li>
                            <li><a class="dropdown-item" href="#">青年牧區</a></li>
                            <li><a class="dropdown-item" href="#">兒童牧區</a></li>
                        </ul>
                    </li>
                </ul>     
            </li>

            <li class="nav-item dropdown mx-0">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    各部事工
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="sixpart.php">六部</a>
                </div>     
            </li>

            <li class="nav-item dropdown mx-0">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    講道信息
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="record2020.php">講道錄音</a>
                </div>     
            </li>

            <li class="nav-item dropdown mx-0">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    屬靈追求
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php $sql = "SELECT * FROM img WHERE type = 'fiveyear' ORDER BY date DESC LIMIT 1";
                            $result = mysqli_query($conn,$sql);

                            while ($row = mysqli_fetch_array($result)) {
                                echo 
                                "<a class='dropdown-item' href= " .$row["file"]. " target='_blank'>五年計劃</a>";
                            }

                    ?>
                    <a class="dropdown-item" href="grow.php">成長流程</a>
                    <?php $sql = "SELECT * FROM img WHERE type = 'readbible' ORDER BY date DESC LIMIT 1";
                            $result = mysqli_query($conn,$sql);

                            while ($row = mysqli_fetch_array($result)) {
                                echo 
                                "<a class='dropdown-item' href= " .$row["file"]. " target='_blank'>讀經指引</a>";
                            }

                    ?>
                    <a class="dropdown-item" href="verse.php">本週金句</a>
                </div>     
            </li>

            <li class="nav-item mx-0">
                <a class="nav-link" href="contact2.php">聯絡我們</a>  
            </li>

            <div class="dropdown-divider"></div>

            <?php
            session_start();
            if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == 'admin'){
                echo '<li class="nav-item mx-2 d-lg-none">
                <a class="nav-link" href="upload.php">上載中心</a>  
            </li><li class="nav-item mx-2 d-lg-none">
            <a class="nav-link" href="rundown.php">崇拜程序表</a>  
        </li><li class="nav-item mx-2 d-lg-none">
        <a class="nav-link" href="serve.php">崇拜事奉表</a>  
    </li><li class="nav-item mx-2 d-lg-none">
        <a class="nav-link" href="guestDownload.php">下載中心</a>  
    </li><li class="nav-item mx-2 d-lg-none">
            <a class="nav-link" href="logout.php">登出</a>  
        </li>';
            }else if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == 'guest'){
                echo '<li class="nav-item mx-2 d-lg-none">
                <a class="nav-link" href="rundown.php">崇拜程序表</a>  
            </li><li class="nav-item mx-2 d-lg-none">
            <a class="nav-link" href="serve.php">崇拜事奉表</a>  
        </li><li class="nav-item mx-2 d-lg-none">
            <a class="nav-link" href="http://203.80.119.90/photo" target="_blank">照片簿</a>  
        </li><li class="nav-item mx-2 d-lg-none">
    <a class="nav-link" href="guestDownload.php">下載中心</a>  
</li><li class="nav-item mx-2 d-lg-none">
            <a class="nav-link" href="logout.php">登出</a>  
        </li>';
            }else{
                echo '<li class="nav-item mx-2 d-lg-none">
                <a class="nav-link" href="login.php">登入</a>  
            </li>';
            }
            ?>
            </li>
      </ul>
    </div>
    </div>
</nav>
</div>
