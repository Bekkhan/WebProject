<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Art-Gallery</title>
</head>
<body>
<div id="block-body">
<!--Header--------->
	<header>
		<!--logotype------------>
		<div class="logo">
			<a href="main.html">
				<span class="use">Art</span>-
				<span class="web">Gallery</span>
			</a>
				<p>All about contemporary art</p>
		</div>
		<!--/logotype------------->

		<div class="top-menu">
			<ul>
				<li><a href="#" class="clickMenu">About Authors
					<span class="down">&#x25BC</span>
					<span class="up">&#x25B2</span>
				</a></li>

				<li><a href="aboutUs.html">About Us</a></li>
				<li><a href="#">Last Works</a></li>
				<li><a href="#">Contact</a></li>
			</ul>

			<div class="visibleMenu">
				<div class="subMenu">
					<p>About Authors</p>
					<ul>
						<li><a href="#">Mehdi Oveisi</a></li>
						<li><a href="#">Aminata</a></li>
						<li><a href="#">Maribel</a></li>
						<li><a href="#">Akihito Izumi</a></li>
						<li><a href="#">Attila Mata</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="block-top-auth">
			<p><a href="login/index.php">Login</a></p>
			<p><a href="login/index.php">Password</a></p>
		</div>	

	</header>
	<div id="contentForGallery">
		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<div id="img">
							<a href="https://contactimages.agora-gallery.com/superlarge/AKC1498F13_9937_4C91_B9E1_31CDF6BF3903.jpg" data-lightbox="mygallery" data-title="Angel no |||" ><img src="https://contactimages.agora-gallery.com/large/AKC1498F13_9937_4C91_B9E1_31CDF6BF3903.jpg"></a>
							</div>
						</td>
						<td>
							<div align="center">
								<h3>
									<br>
									<a href="#" class="moreInfo" >"Mehdi Oveis'i"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										Oveisi’s Angel no. III<br>
										Mehdi Oveisi’s paintings are, as he conceives them, visualizations of philosophical and spiritual questions. Working within a range of media, Oveisi’s works come off as a graduated accretion of materials, which collectively come together to shape a heart, a embodied figure, or something more formalist and abstract. What’s essential is that the overall impression of a work be constructed from many layers. Almost in the manner of developmental stages, this layering process becomes a kind of commentary on a work’s completed design. One can look at each gestural aspect of Oveisi’s works, every determination of color and shadow, as a sort of signature that speaks to the integrity of the whole. <br>

										Oveisi’s Angel no. III demonstrates his painterly range. The outlines of figures—angels—in the picture concretize the spiritual exploration of an emotional world. Coloration is key to this journey. The contrast of yellow-gold against a sky-blue backdrop lends the painting an almost stylized quality. The angels depicted here are not intended to have the visionary reality of a theophany, but to be abstractions—literary symbols, even—mulled over in the subconscious depths of the artist’s mind. 
									</span>
								</h3>
								<h3>
									
									<form method="post" action="favimages.php">
										<input type="submit" name="pic1" value="LIKE" id="picButton">
										<textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea>
									</form>
									</span>
								</h3>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AK19D3EFB2_5913_41A6_A0A0_34438B723240.jpg" data-lightbox="mygallery" data-title="Autumn"><img src="https://contactimages.agora-gallery.com/large/AK19D3EFB2_5913_41A6_A0A0_34438B723240.jpg"></a>
						</td>
						<td>
							<div align="center">
								<a href="#" class="moreInfo" >"EWA"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										A key element in understanding the paintings of Ewa is her occasional use of wrapping-paper. As she puts it, this material “allows [her] access to many different patterns and figures within the folds.” Often painting (at least in a preliminary way) with her eyes closed, the crux of Ewa’s work is the portrayal of human and animal bodies: or, more specifically, the mood of different states of embodiment. With an oeuvre whose modes range from portraits, to landscapes, to forays into minimalist repetition and exploded abstraction, Ewa resolves her paintings in terms of a certain, unmistakable mood—so easy to spot yet difficult to articulate in non-visual means. 
										<br>
										Ewa’s acrylic on canvas piece Bruno is an example of her portraiture. Aspiring to a mode of representation where a single line could in fact serve as a metonym for someone’s face or personality, the quick-drying nature of acrylic seems to have lent itself to some quick decision on the artist’s part. The portrait that has emerged from her efforts is distinguished by the visible economy of brushstrokes used to render it. 

									</span>
								</h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AKDE8F1B83_6A8F_4261_A4CF_BFC5F40E1AC6.jpg" data-lightbox="mygallery" data-title="Diva"><img src="https://contactimages.agora-gallery.com/large/AKDE8F1B83_6A8F_4261_A4CF_BFC5F40E1AC6.jpg"></a>
						</td>
						<td>
							<div align="center">
								<a href="#" class="moreInfo" >"Maribel"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										A key element in understanding the paintings of Ewa is her occasional use of wrapping-paper. As she puts it, this material “allows [her] access to many different patterns and figures within the folds.” Often painting (at least in a preliminary way) with her eyes closed, the crux of Ewa’s work is the portrayal of human and animal bodies: or, more specifically, the mood of different states of embodiment. With an oeuvre whose modes range from portraits, to landscapes, to forays into minimalist repetition and exploded abstraction, Ewa resolves her paintings in terms of a certain, unmistakable mood—so easy to spot yet difficult to articulate in non-visual means. 
										<br>
										Ewa’s acrylic on canvas piece Bruno is an example of her portraiture. Aspiring to a mode of representation where a single line could in fact serve as a metonym for someone’s face or personality, the quick-drying nature of acrylic seems to have lent itself to some quick decision on the artist’s part. The portrait that has emerged from her efforts is distinguished by the visible economy of brushstrokes used to render it. 

									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AK6EBF57F3_A45C_4B93_991D_8E0E926F9B17_2.jpg" data-lightbox="mygallery" data-title="Night Walk-2"><img src="https://contactimages.agora-gallery.com/superlarge/AK6EBF57F3_A45C_4B93_991D_8E0E926F9B17_2.jpg"></a>

						</td>
						<td>
							<div align="center">
								<a href="#" class="moreInfo" >"Attila Mata"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										A key element in understanding the paintings of Ewa is her occasional use of wrapping-paper. As she puts it, this material “allows [her] access to many different patterns and figures within the folds.” Often painting (at least in a preliminary way) with her eyes closed, the crux of Ewa’s work is the portrayal of human and animal bodies: or, more specifically, the mood of different states of embodiment. With an oeuvre whose modes range from portraits, to landscapes, to forays into minimalist repetition and exploded abstraction, Ewa resolves her paintings in terms of a certain, unmistakable mood—so easy to spot yet difficult to articulate in non-visual means. 
										<br>
										Ewa’s acrylic on canvas piece Bruno is an example of her portraiture. Aspiring to a mode of representation where a single line could in fact serve as a metonym for someone’s face or personality, the quick-drying nature of acrylic seems to have lent itself to some quick decision on the artist’s part. The portrait that has emerged from her efforts is distinguished by the visible economy of brushstrokes used to render it. 

									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AK91C50741_2675_4059_8C7C_3E4674480E9C.jpg" data-lightbox="mygallery" data-title="Female Geometry"><img src="https://contactimages.agora-gallery.com/large/AK91C50741_2675_4059_8C7C_3E4674480E9C.jpg"></a>


						</td>
						<td>
							<div align="center">
									<a href="#" class="moreInfo" >"Aminata Mattheus"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										A key element in understanding the paintings of Ewa is her occasional use of wrapping-paper. As she puts it, this material “allows [her] access to many different patterns and figures within the folds.” Often painting (at least in a preliminary way) with her eyes closed, the crux of Ewa’s work is the portrayal of human and animal bodies: or, more specifically, the mood of different states of embodiment. With an oeuvre whose modes range from portraits, to landscapes, to forays into minimalist repetition and exploded abstraction, Ewa resolves her paintings in terms of a certain, unmistakable mood—so easy to spot yet difficult to articulate in non-visual means. 
										<br>
										Ewa’s acrylic on canvas piece Bruno is an example of her portraiture. Aspiring to a mode of representation where a single line could in fact serve as a metonym for someone’s face or personality, the quick-drying nature of acrylic seems to have lent itself to some quick decision on the artist’s part. The portrait that has emerged from her efforts is distinguished by the visible economy of brushstrokes used to render it. 

									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AKDE569CD0_AD76_4B43_B854_EC4872C404F9.jpg" data-lightbox="mygallery" data-title="Being"><img src="https://contactimages.agora-gallery.com/large/AKDE569CD0_AD76_4B43_B854_EC4872C404F9.jpg"></a>

						</td>
						<td>
							<div align="center">
								<h3>
									<a href="#" class="moreInfo" >"Mehdi Oveis'i"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										Oveisi’s Angel no. III<br>
										Mehdi Oveisi’s paintings are, as he conceives them, visualizations of philosophical and spiritual questions. Working within a range of media, Oveisi’s works come off as a graduated accretion of materials, which collectively come together to shape a heart, a embodied figure, or something more formalist and abstract. What’s essential is that the overall impression of a work be constructed from many layers. Almost in the manner of developmental stages, this layering process becomes a kind of commentary on a work’s completed design. One can look at each gestural aspect of Oveisi’s works, every determination of color and shadow, as a sort of signature that speaks to the integrity of the whole. <br>

										Oveisi’s Angel no. III demonstrates his painterly range. The outlines of figures—angels—in the picture concretize the spiritual exploration of an emotional world. Coloration is key to this journey. The contrast of yellow-gold against a sky-blue backdrop lends the painting an almost stylized quality. The angels depicted here are not intended to have the visionary reality of a theophany, but to be abstractions—literary symbols, even—mulled over in the subconscious depths of the artist’s mind. 
									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AKE2AD3D7B_D88E_4071_A5E2_35D203941E6F.jpg" data-lightbox="mygallery" data-title="Auschwitz, Motherless, Fatherless"><img src="https://contactimages.agora-gallery.com/large/AKE2AD3D7B_D88E_4071_A5E2_35D203941E6F.jpg"></a>

						</td>
						<td>
							<div align="center">
								<h3>
									<a href="#" class="moreInfo" >"Yinon Shamshins"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										Israeli artist Yinon Shamshins is known for photographing his subjects’ state of mind. As a trained clinical psychologist and a member of the Jewish faith, Shamshins deals with personal trauma and pain on a constant basis. Internalizing these experiences, the artist uses his camera like an emotional sensor, capturing the moods and feelings of his subjects as they sit, stand, and pose for the artist, at once afraid and eager to put themselves on display. 
										<br>
										In Lotus, we see a young man submerged in a pool of water with an object floating above his neck, dragging him further down the well of depression. In Auschwitz, Motherless, Fatherless, the camera distorts a bare tree, swirling its limbs around as if they were being flushed down the drain. Both his patients and the Jewish community continue to wrestle with the crimes and misfortunes of the past. Using visual images to give us a glimpse into the minds of others, Shamshins shows us the power of common understanding, helping us make sense of emotions and experiences too painful to describe.

 
									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AK205D2082_0466_46DD_AA72_F75ADEF32959_1.jpg" data-lightbox="mygallery" data-title="Bruno"><img src="https://contactimages.agora-gallery.com/large/AK205D2082_0466_46DD_AA72_F75ADEF32959_1.jpg"></a>

						</td>
						<td>
							<div align="center">
								<h3>
									<a href="#" class="moreInfo" >"EWA"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										A key element in understanding the paintings of Ewa is her occasional use of wrapping-paper. As she puts it, this material “allows [her] access to many different patterns and figures within the folds.” Often painting (at least in a preliminary way) with her eyes closed, the crux of Ewa’s work is the portrayal of human and animal bodies: or, more specifically, the mood of different states of embodiment. With an oeuvre whose modes range from portraits, to landscapes, to forays into minimalist repetition and exploded abstraction, Ewa resolves her paintings in terms of a certain, unmistakable mood—so easy to spot yet difficult to articulate in non-visual means. 
										<br>
										Ewa’s acrylic on canvas piece Bruno is an example of her portraiture. Aspiring to a mode of representation where a single line could in fact serve as a metonym for someone’s face or personality, the quick-drying nature of acrylic seems to have lent itself to some quick decision on the artist’s part. The portrait that has emerged from her efforts is distinguished by the visible economy of brushstrokes used to render it. 

									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton"onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>


		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AKD16401A6_8D14_4E17_BC57_1B144717FB3E.jpg" data-lightbox="mygallery" data-title="Explosion of Colours"><img src="https://contactimages.agora-gallery.com/large/AKD16401A6_8D14_4E17_BC57_1B144717FB3E.jpg"></a>
						</td>
						<td>
							<div align="center">
								<h3>
									<a href="#" class="moreInfo" >"EWA"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										A key element in understanding the paintings of Ewa is her occasional use of wrapping-paper. As she puts it, this material “allows [her] access to many different patterns and figures within the folds.” Often painting (at least in a preliminary way) with her eyes closed, the crux of Ewa’s work is the portrayal of human and animal bodies: or, more specifically, the mood of different states of embodiment. With an oeuvre whose modes range from portraits, to landscapes, to forays into minimalist repetition and exploded abstraction, Ewa resolves her paintings in terms of a certain, unmistakable mood—so easy to spot yet difficult to articulate in non-visual means. 

										Ewa’s acrylic on canvas piece Bruno is an example of her portraiture. Aspiring to a mode of representation where a single line could in fact serve as a metonym for someone’s face or personality, the quick-drying nature of acrylic seems to have lent itself to some quick decision on the artist’s part. The portrait that has emerged from her efforts is distinguished by the visible economy of brushstrokes used to render it. 

									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AK8C37E512_277B_41DF_87F2_226F158E4B7E.jpg" data-lightbox="mygallery" data-title="Blue in Green"><img src="https://contactimages.agora-gallery.com/large/AK8C37E512_277B_41DF_87F2_226F158E4B7E.jpg"></a>

						</td>
						<td>
							<div align="center">
								<h3>
									<a href="#" class="moreInfo" >"EWA"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										A key element in understanding the paintings of Ewa is her occasional use of wrapping-paper. As she puts it, this material “allows [her] access to many different patterns and figures within the folds.” Often painting (at least in a preliminary way) with her eyes closed, the crux of Ewa’s work is the portrayal of human and animal bodies: or, more specifically, the mood of different states of embodiment. With an oeuvre whose modes range from portraits, to landscapes, to forays into minimalist repetition and exploded abstraction, Ewa resolves her paintings in terms of a certain, unmistakable mood—so easy to spot yet difficult to articulate in non-visual means. 
										<br>
										Ewa’s acrylic on canvas piece Bruno is an example of her portraiture. Aspiring to a mode of representation where a single line could in fact serve as a metonym for someone’s face or personality, the quick-drying nature of acrylic seems to have lent itself to some quick decision on the artist’s part. The portrait that has emerged from her efforts is distinguished by the visible economy of brushstrokes used to render it. 

									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AKEDEB7469_46C7_4291_9612_8C130145FE72_1.jpg" data-lightbox="mygallery" data-title=""><img src="https://contactimages.agora-gallery.com/large/AKEDEB7469_46C7_4291_9612_8C130145FE72_1.jpg"></a>

						</td>
						<td>
							<div align="center">
								<h3>
									<a href="#" class="moreInfo" >"Mehdi Oveis'i"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										Oveisi’s Angel no. III<br>
										Mehdi Oveisi’s paintings are, as he conceives them, visualizations of philosophical and spiritual questions. Working within a range of media, Oveisi’s works come off as a graduated accretion of materials, which collectively come together to shape a heart, a embodied figure, or something more formalist and abstract. What’s essential is that the overall impression of a work be constructed from many layers. Almost in the manner of developmental stages, this layering process becomes a kind of commentary on a work’s completed design. One can look at each gestural aspect of Oveisi’s works, every determination of color and shadow, as a sort of signature that speaks to the integrity of the whole. <br>

										Oveisi’s Angel no. III demonstrates his painterly range. The outlines of figures—angels—in the picture concretize the spiritual exploration of an emotional world. Coloration is key to this journey. The contrast of yellow-gold against a sky-blue backdrop lends the painting an almost stylized quality. The angels depicted here are not intended to have the visionary reality of a theophany, but to be abstractions—literary symbols, even—mulled over in the subconscious depths of the artist’s mind. 
									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="afisha">
			<table width="1000" height="275">
				<tbody>
					<tr>
						<td align="center">
							<a href="https://contactimages.agora-gallery.com/superlarge/AK36B0056D_773F_4631_8977_40CB809873F6_1.jpg" data-lightbox="mygallery" data-title="Dancing Bunnies"><img src="https://contactimages.agora-gallery.com/large/AK36B0056D_773F_4631_8977_40CB809873F6_1.jpg"></a>

						</td>
						<td>
							<div align="center">
								<h3>
									<a href="#" class="moreInfo" >"EWA"</a>
								</h3>
								<h3>
									<span style="font-size: 10pt; font-weight: normal;">
										A key element in understanding the paintings of Ewa is her occasional use of wrapping-paper. As she puts it, this material “allows [her] access to many different patterns and figures within the folds.” Often painting (at least in a preliminary way) with her eyes closed, the crux of Ewa’s work is the portrayal of human and animal bodies: or, more specifically, the mood of different states of embodiment. With an oeuvre whose modes range from portraits, to landscapes, to forays into minimalist repetition and exploded abstraction, Ewa resolves her paintings in terms of a certain, unmistakable mood—so easy to spot yet difficult to articulate in non-visual means. 

										Ewa’s acrylic on canvas piece Bruno is an example of her portraiture. Aspiring to a mode of representation where a single line could in fact serve as a metonym for someone’s face or personality, the quick-drying nature of acrylic seems to have lent itself to some quick decision on the artist’s part. The portrait that has emerged from her efforts is distinguished by the visible economy of brushstrokes used to render it. 

									</span>
								</h3>
								<h3>
									<input type="submit" name="pic1" value="LIKE" id="picButton" onclick="adding('b')">
									<form action=""><textarea type="text" name="username" id="commentary" placeholder="Comment"></textarea></form>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>



	<footer id="footer-site">
		<a href="https://vk.com/b0121"><i class="fa fa-vk"></i></a>
		<a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
		<a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa fa-telegram"></i></a>
		<a href="ihttps://www.instagram.com/?hl=ru"><i class="fa fa-instagram"></i></a>
		<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
		<div>
			<span>All rights reserved, especially the driver's license:)))&copy; 2018  
			</span>
			<a href="#toppage">&#x25B2 .To.The.Top.</a>
		</div>
	</footer>

</body>
</html>