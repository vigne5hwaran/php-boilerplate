<?php 
$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/',$uri);
$uri = end($uri);
// echo $pg_slug.'<br>'.$uri;

?>

<div class="error-page module text-center">

    <div class="grid-container grid-x grid-padding-x">
        <h2>404! Page is not found!</h2>
        <p>The page "<?php echo $uri; ?>" is not found,We are sorry but there is nothing matched to your criteria. Please use Different keyword.
        </p>
    </div><!-- Grid Container /-->

</div>
<!-- 404 Page /-->