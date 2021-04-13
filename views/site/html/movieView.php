<?php

echo "
<h1>$data->title</h1>
<p>$data->description</p>
<p>$data->main_actor</p>
<p>$data->duration</p>
<p>$data->rating</p>
<p><img width='300px' src='$data->thumbnail'></p>
<form action='" . APPLICATION_PATH . "index.php?controller=movies&action=update&movie_id=$data->id' method='post'>
    <button type='submit'>Update</button>
</form>
<h3>Comments:</h3>
<input id='message' type='text' placeholder='I like the movie...'>
<button id='addComment' type='submit'>Comment</button>
<p>Dilyan Atanasov: I like Borat as well 12/04/2021</p>
";

echo "
<script type='application/javascript'>
const buttonForComment = document.getElementById('addComment');
buttonForComment.onclick = () => {
    let message = document.getElementById('message').value;
    document.getElementById('message').value = '';
}
</script>
";