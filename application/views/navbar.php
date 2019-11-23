<!-- ini navbar di halaman selain homepage -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>IMPULSE IMK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- CSS SENDIRI -->
  <link href="img/iflab.gif" rel="shortcut icon" />
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

</head>
<body>
<div class="header--headerHidden--PE8nn header--header--3d0kA">
	<div class="header--leftColumn--3jpUC header--sideColumn--11Nzb header--column--_eCKx"><a class="header--topLeftIcon--3XnCO"><span class=""><svg class="svg" width="12" height="18" viewBox="0 0 12 18" xmlns="http://www.w3.org/2000/svg"><path d="M6 9c0-1.657 1.343-3 3-3 1.657 0 3 1.343 3 3 0 1.657-1.343 3-3 3-1.657 0-3-1.343-3-3z" fill-rule="nonzero" fill-opacity="1" fill="#1abcfe" stroke="none"></path><path d="M0 15c0-1.657 1.343-3 3-3h3v3c0 1.657-1.343 3-3 3-1.657 0-3-1.343-3-3z" fill-rule="nonzero" fill-opacity="1" fill="#0acf83" stroke="none"></path><path d="M6 0v6h3c1.657 0 3-1.343 3-3 0-1.657-1.343-3-3-3H6z" fill-rule="nonzero" fill-opacity="1" fill="#ff7262" stroke="none"></path><path d="M0 3c0 1.657 1.343 3 3 3h3V0H3C1.343 0 0 1.343 0 3z" fill-rule="nonzero" fill-opacity="1" fill="#f24e1e" stroke="none"></path><path d="M0 9c0 1.657 1.343 3 3 3h3V6H3C1.343 6 0 7.343 0 9z" fill-rule="nonzero" fill-opacity="1" fill="#a259ff" stroke="none"></path></svg></span></a><a class="header--commentsButton--12w33 action--root--1ClVW header--commentsButton--12w33 action--root--1ClVW" data-tooltip-text="Add Comment (C)"><span class="svg-container"><svg class="svg" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M1.944 16.75l1.696-2.758.287-.465-.237-.493c-.465-.951-.697-1.91-.69-3.034 0-3.866 3.134-7 7-7 3.866 0 7 3.134 7 7 0 3.866-3.134 7-7 7-1.14.007-2.112-.232-3.074-.709l-.268-.131-.296.037-4.418.552zm4.543.44c1.06.518 2.253.81 3.513.81 4.418 0 8-3.582 8-8 0-4.418-3.582-8-8-8-4.418 0-8 3.582-8 8 0 1.243.283 2.419.789 3.468l-2.117 3.44L0 18l1.272-.159 5.215-.652z" fill-rule="nonzero" fill-opacity="1" fill="#000" stroke="none"></path></svg></span></a></div>
	<div class="header--centerColumn--47wW2 header--column--_eCKx"><span class="header--titleWithCaret--31Npo header--title--4aIq1 ellipsis--ellipsis--1RWY6">Impulse</span>
		<div class="header--settingsDropdownTarget--2FttJ"><span class="svg-container header--dropdownCaret--3a-5I"><svg class="svg" width="6" height="6" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg"><path d="M1.06 1.475L.708 1.12 0 1.828l.354.354.707-.707zM2.829 3.95l-.353.353.353.354.354-.354-.354-.353zm2.475-1.768l.354-.354-.707-.707-.354.354.707.707zm-4.95 0l2.122 2.121.707-.707-2.121-2.121-.707.707zm2.829 2.121l2.121-2.121-.707-.707-2.121 2.121.707.707z" fill-rule="nonzero" fill-opacity="1" fill="#000" stroke="none"></path></svg></span></div>
	</div>
	<div class="header--rightColumn--18A7d header--sideColumn--11Nzb header--column--_eCKx">
		<div class="multiplayer_view--multiplayerView--19Y20">
			<style>
			.multiplayer-animation-svg {
				position: absolute;
				top: 0px;
				left: 0px;
			}
			
			.multiplayer-animation-droplet {
				left: 13px;
				top: 0px;
				height: 2px;
				width: 14px;
				border-radius: 0px;
				position: absolute;
			}
			
			.multiplayer-animation-droplet.selected {
				animation: droplet 0.3s ease-in forwards;
			}
			
			.multiplayer-animation-droplet.deselected {
				animation: droplet-reverse 0.2s ease-out 0.4s forwards;
				left: 16.5px;
				top: 0px;
				height: 0px;
				width: 0px;
				border-radius: 0px;
			}
			
			.multiplayer-animation-circle {
				stroke-dasharray: 400;
				stroke-dashoffset: 400;
				transform-origin: center;
				transform: rotateZ(-90deg);
			}
			
			.multiplayer-animation-circle.selected {
				animation: draw-circle 0.15s ease-in 0.3s forwards;
			}
			
			.multiplayer-animation-circle.deselected {
				animation: draw-circle-reverse 0.4s ease-in forwards;
			}
			
			@keyframes droplet {
				0% {
					left: 13px;
					top: 0px;
					height: 2px;
					width: 14px;
					border-radius: 0px;
				}
				20% {
					left: 16.5px;
					top: -3.5px;
					height: 7px;
					width: 7px;
					border-radius: 100%;
				}
				66% {
					top: -2px;
					height: 7px;
				}
				99% {
					top: 5px;
					left: 18.5px;
					height: 3px;
					width: 3px;
					border-radius: 100%;
				}
				100% {
					top: 5px;
					left: 19.5px;
					height: 1px;
					width: 1px;
					border-radius: 100%;
				}
			}
			
			@keyframes draw-circle {
				0% {
					stroke-dashoffset: 400;
				}
				100% {
					stroke-dashoffset: 300;
				}
			}
			
			@keyframes droplet-reverse {
				0% {
					left: 16.5px;
					top: 0px;
					height: 2px;
					width: 2px;
					border-radius: 0px;
				}
				100% {
					left: 13px;
					top: 0px;
					height: 2px;
					width: 14px;
					border-radius: 0px;
				}
			}
			
			@keyframes draw-circle-reverse {
				0% {
					stroke-dashoffset: 300;
				}
				100% {
					stroke-dashoffset: 400;
				}
			}
			</style><span class="multiplayer_view--users--2LGXC"><div class="multiplayer_view--userIconView--1wivF"><div data-tooltip-text="Ciara Nd (You)" data-tooltip-offset-y="8"><div class="multiplayer_view--userIconImage--1-Y25" style="background-color: rgb(255, 255, 255); color: transparent; background-image: url(&quot;https://www.gravatar.com/avatar/8838db287d4220083be19a3e31fa258a?size=240&amp;default=https%3A%2F%2Fs3-alpha.figma.com%2Fstatic%2Fuser_c_v2.png&quot;);">?</div></div></div></span></div>
		<button class="basic_form--primaryBtn--3NqnQ basic_form--btn--3A-Ju ellipsis--ellipsis--1RWY6 text--fontPos11--RSei3 text--_fontBase--YWDo0 header--rightNavButton--2a8p9">Share Prototype</button>
		<div class="view_menu--viewMenu--23cJ1 dropdown_menu--dropdownMenu----PdH">
			<div class="view_menu--viewMenuButton--x8LPh dropdown_menu--dropdownButton--2wyKA"><span class="svg-container view_menu--eye--WD_S9"><svg class="svg" width="14" height="8" viewBox="0 0 14 8" xmlns="http://www.w3.org/2000/svg"><path d="M13.93 4C12.546 1.609 9.96 0 7 0 4.039 0 1.453 1.609.07 4 1.453 6.391 4.039 8 7 8c2.96 0 5.546-1.609 6.93-4zm-1.185 0C11.48 5.815 9.377 7 7 7 4.622 7 2.52 5.815 1.254 4 2.52 2.185 4.622 1 7 1c2.377 0 4.479 1.185 5.745 3zM9.151 4c0 1.146-.93 2.076-2.076 2.076C5.93 6.076 5 5.146 5 4c0-1.146.93-2.076 2.075-2.076 1.147 0 2.076.93 2.076 2.076z" fill-rule="nonzero" fill-opacity="1" fill="red" stroke="none"></path></svg></span></div>
		</div>
		<div class="scaling_menu--scalingMenu--2sDzD dropdown_menu--dropdownMenu----PdH">
			<div class="scaling_menu--scalingMenuButton--3M5_G dropdown_menu--dropdownButton--2wyKA"><span data-selector="label">Width</span>
				<div class="scaling_menu--buttonChevron--3mwBn"><span class="svg-container"><svg class="svg" width="8" height="7" viewBox="0 0 8 7" xmlns="http://www.w3.org/2000/svg"><path d="M3.646 5.354l-3-3 .708-.708L4 4.293l2.646-2.647.708.708-3 3L4 5.707l-.354-.353z" fill-rule="evenodd" fill-opacity="1" fill="#fff" stroke="none"></path></svg></span></div>
			</div>
		</div><a class="header--fullScreenButton--1CTah header--fullScreenButtonBase--cV4ap action--root--1ClVW" data-tooltip-text="Enter Full Screen (F)"><span class="svg-container"><svg class="svg" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><path d="M14.54 4.168l-3.187 3.186-.708-.708 3.197-3.197.753-.449H11V2h5v5h-1V3.334l-.46.834zM3.46 13.832l3.186-3.186.708.708-3.198 3.197-.752.449H7v1H2v-5h1v3.666l.46-.834z" fill-rule="nonzero" fill-opacity="1" fill="#000" stroke="none"></path></svg></span></a></div>
</div>