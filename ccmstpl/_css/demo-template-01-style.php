<?php
  header("Content-Type: text/css; charset=UTF-8");
  // Expires in
  //header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60)));
  header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + ($CFG["CACHE_EXPIRE"] * 60)));
?>:root {
				--body-color: #666;
				--body-font: 100 1.4rem/2rem "Open Sans", sans-serif;
				--header-div-a-img-height: 64px;
				--header-div-a-img-height-scroll: 48px;
				--header-z-index: 1;
				--nav-a-color: #fff
			}

			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box
			}

			@viewport {width: device-width}
			@-ms-viewport {width: device-width}

			body {
				color: var(--body-color);
				font: var(--body-font);
				-webkit-font-smoothing: antialiased;/* Fix for webkit rendering */
				-webkit-text-size-adjust: 100%
			}

			#loading_svg {
				opacity: 1;
				width: 50%;
				height: 50%;
				margin: auto;
				position: absolute;
				top: 0;
				left: 0;
				bottom: 0;
				right: 0;
				-webkit-transition: opacity 2s;
				-moz-transition: opacity 2s;
				-o-transition: opacity 2s;
				-ms-transition: opacity 2s;
				transition: opacity 2s
			}

			#loading_svg rect {fill: #FF6700}

			#wrapper {
				opacity: 0;
				-webkit-transition: opacity 2s;
				-moz-transition: opacity 2s;
				-o-transition: opacity 2s;
				-ms-transition: opacity 2s;
				transition: opacity 2s
			}

			#wrapper.fadeIn {opacity: 1}

			header {
				background: none;
				left: 0;
				position: fixed;
				right: 0;
				top: 0;
				z-index: var(--header-z-index);
				-webkit-transition: all 1.0s ease-in-out;
				-moz-transition: all 1.0s ease-in-out;
				-o-transition: all 1.0s ease-in-out;
				transition: all 1.0s ease-in-out
			}

			.header-scroll {height: 60px}

			header img {
				height: var(--header-div-a-img-height);
				margin: 10px;
				-webkit-filter: drop-shadow({CCMS_LIB:modusinternet.php;FUNC:shadow_direction_x}4px 4px 4px rgba(0,0,0,.2));
				-moz-filter: drop-shadow({CCMS_LIB:modusinternet.php;FUNC:shadow_direction_x}4px 4px 4px rgba(0,0,0,.2));
				-ms-filter: drop-shadow({CCMS_LIB:modusinternet.php;FUNC:shadow_direction_x}4px 4px 4px rgba(0,0,0,.2));
				-o-filter: drop-shadow({CCMS_LIB:modusinternet.php;FUNC:shadow_direction_x}4px 4px 4px rgba(0,0,0,.2));
				filter: drop-shadow({CCMS_LIB:modusinternet.php;FUNC:shadow_direction_x}4px 4px 4px rgba(0,0,0,.2));
				-webkit-transition: all 1.0s ease-in-out;
				-moz-transition: all 1.0s ease-in-out;
				-o-transition: all 1.0s ease-in-out;
				transition: all 1.0s ease-in-out
			}

			.header-div-a-img-scroll {height: var(--header-div-a-img-height-scroll)}

			nav {
				background: #ccc;
				bottom: 0;
				box-shadow: {CCMS_LIB:modusinternet.php;FUNC:shadow_direction_x}4px 4px 4px rgba(0,0,0,0.2);
				display: none;
				{CCMS_LIB:modusinternet.php;FUNC:lng_dir_right_go_left_left_go_right}: 0;
				line-height: 3.5rem;
				overflow-x: hidden;
				overflow-y: auto;
				position: fixed;
				top: 80px
			}

			nav ul {
				background: #ccc;
				list-style-type: none;
				margin: 0;
				padding: 0
			}

			nav>ul>li ul {border-top: 1px solid #fff}

			nav>ul>li li {
				border-right: 1px solid #fff;
				border-bottom: 1px solid #fff;
				border-left: 1px solid #fff
			}

			nav li {
				min-width: 250px;
				white-space: nowrap
			}

			nav li.nav-active, nav li:hover {border-{CCMS_LIB:modusinternet.php;FUNC:lng_dir_right_go_left_left_go_right}: 3px solid #808080}

			nav a, nav a:active, nav a:hover, nav a:visited {
				color: var(--nav-a-color);
				display: block;
				padding: 0 10px;
				position: relative;
				text-decoration: none
			}

			nav .submenu>ul {margin-{CCMS_LIB:modusinternet.php;FUNC:lng_dir_right_go_left_left_go_right}: 15px}

			nav .submenu>a {padding-{CCMS_LIB:modusinternet.php;FUNC:lng_dir_left_go_right_right_go_left}: 30px !important}

			nav .submenu>a:after {
				content: " \25bc ";/* down-pointing triangle/arrow */
				display: block;
				font-size: 1rem;
				position: absolute;
				{CCMS_LIB:modusinternet.php;FUNC:lng_dir_left_go_right_right_go_left}: 10px;
				top: 1px
			}

			nav .active {background: #a9a9a9}

			.nav-icon {
				/* https://www.iconfinder.com/iconsets/linecons-free-vector-icons-pack */
				border: none;
				cursor: pointer;
				display: initial;
				position: relative;
				top: 8px
			}

			.nav-icon path {fill: var(--nav-a-color)}

			.toggle {
				background: transparent;
				border: none;
				cursor: pointer;
				display: block;
				font-size: 2rem;
				position: fixed;
				{CCMS_LIB:modusinternet.php;FUNC:lng_dir_left_go_right_right_go_left}: 15px;
				top: 5px
			}

			.toggle:before {content: "\2261"/* Hamburger Icon */}



			main {
				padding: 10px;
				position: absolute;
				top: 100px
			}

			.cssgrid .head {grid-area: head}
			.cssgrid .sidebar1 {grid-area: sidebar1}
			.cssgrid .content {grid-area: content}
			.cssgrid .sidebar2 {grid-area: sidebar2}
			.cssgrid .foot {grid-area: foot}

			.cssgrid {
				color: #444;
				background-color: #fff
			}

			.cssgrid {
				display: grid;
				grid-gap: 1em;
				grid-template-areas:
					"head"
					"sidebar1"
					"content"
					"sidebar2"
					"foot"
			}

			.cssgrid .box {
				background-color: #444;
				color: #fff;
				border-radius: 5px;
				padding: 10px;
				overflow: hidden
			}

			.cssgrid .head, .cssgrid .foot {background-color: #808080}

			.cssgrid .sidebar2 {
				background-color: #ccc;
				color: #444
			}

			h1, h2, h3, h4, h5, h6 {
				color: #4F9F43;
				font-weight: 100;
				margin-bottom: 1.2em;
				text-align: center
			}

			p {margin-bottom: 1em}














			/* 400px or larger. */
			@media only screen and (min-width: 400px) {
				.cssgrid {
					grid-template-columns: 20% auto;
					grid-template-areas:
						"head head"
						"sidebar1 content"
						"sidebar2 sidebar2"
						"foot foot"
				}
			}















			/* 769px or larger. */
			@media only screen and (min-width: 769px) {
				nav {
					display: block;
					position: absolute;
					bottom: auto;
					overflow: visible;
					top: 0;
					{CCMS_LIB:modusinternet.php;FUNC:lng_dir_left_go_right_right_go_left}: 0;
					{CCMS_LIB:modusinternet.php;FUNC:lng_dir_right_go_left_left_go_right}: unset;
					width: unset
				}

				nav ul ul {
					display: none;
					position: absolute;
					top: 100%;
					{CCMS_LIB:modusinternet.php;FUNC:lng_dir_right_go_left_left_go_right}: 0;
					z-index: 901
				}

				nav ul ul ul {
					top: 5px;
					{CCMS_LIB:modusinternet.php;FUNC:lng_dir_right_go_left_left_go_right}: 95%;
					z-index: 902
				}

				nav ul ul ul li:first-child {border-top: none}

				nav ul ul ul ul {z-index: 903}

				nav ul ul ul ul ul {z-index: 904}

				nav ul li.nav-oppsite>ul {
					{CCMS_LIB:modusinternet.php;FUNC:lng_dir_right_go_left_left_go_right}: auto;
					{CCMS_LIB:modusinternet.php;FUNC:lng_dir_left_go_right_right_go_left}: 95%
				}

				nav ul ul li.nav-oppsite>ul {
					{CCMS_LIB:modusinternet.php;FUNC:lng_dir_right_go_left_left_go_right}: auto;
					{CCMS_LIB:modusinternet.php;FUNC:lng_dir_left_go_right_right_go_left}: 95%
				}

				nav>ul {border-bottom: 1px solid #fff}

				nav>ul>.submenu>a:after {
					content: " \25bc ";/* down-pointing triangle/arrow */
					font-size: 1rem
				}

				nav>ul>li {
					border-top: none;
					display: table-cell
				}

				nav li {
					min-width: unset;
					position: relative
				}

				nav li:hover>ul {display: block}

				nav li>ul {box-shadow: {CCMS_LIB:modusinternet.php;FUNC:shadow_direction_x}4px 4px 4px rgba(0,0,0,.2)}

				nav .submenu>ul {margin: 0}

				nav .submenu>a:after {
					content: " \25ba ";/* right-pointing triangle/arrow */
					font-size: 1rem
				}

				.nav-lang-submenu {
					max-height: 550px;
					overflow-y: scroll;
					overflow-x: hidden;
					{CCMS_LIB:modusinternet.php;FUNC:lng_dir_left_go_right_right_go_left}: 0 !important
				}

				.toggle {display: none}






				.cssgrid {
					grid-gap: 20px;
					grid-template-columns: 120px auto 120px;
					grid-template-areas:
						"head head head"
						"sidebar1 content sidebar2"
						"foot foot foot"
				}
			}






			/* latin */
			@font-face {
				font-family: 'Open Sans';
				font-display: swap;
				font-style: normal;
				font-weight: 300;
				src: local('Open Sans Light'), local('OpenSans-Light'), url(data:font/woff2;base64,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) format('woff2');
				unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
			}
			/* latin-ext */
			@font-face {
				font-family: 'Open Sans';
				font-display: swap;
				font-style: normal;
				font-weight: 300;
				src: local('Open Sans Light'), local('OpenSans-Light'), url(data:font/woff2;base64,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) format('woff2');
				unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
			}
