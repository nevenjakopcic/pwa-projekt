<?php
$title=$_POST['title'];
$category=$_POST['category'];
$image = file_get_contents($_FILES['photo']['tmp_name']);
$about=$_POST['about'];
$content=$_POST['content'];
?>

<section role="main">
	<div class="row">
		<p class="category">
			<?php echo $category;?>
		</p>

		<h1 class="title">
			<?php echo $title;?>
		</h1>

		<p>AUTOR:</p>
		<p>OBJAVLJENO:</p>
	</div>

	<section class="slika">
		<?php echo sprintf('<img src="data:image/png;base64,%s" />', base64_encode($image));?>
	</section>

	<section class="about">
		<p>
			<?php echo $about;?>
		</p>
	</section>

	<section class="sadrzaj">
		<p>
			<?php echo $content;?>
		</p>
	</section>
</section>
