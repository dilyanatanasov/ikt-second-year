<?php

echo "
<h1>" . $data['movieData']->title . "</h1>
<p>" . $data['movieData']->description . "</p>
<p>" . $data['movieData']->main_actor . "</p>
<p>" . $data['movieData']->duration . "</p>
<p>" . $data['movieData']->rating . "</p>
<p><img width='300px' src='" . IMG_PATH . $data['movieData']->thumbnail . "'></p>
<form action='" . APPLICATION_PATH . "index.php?controller=movies&action=update&movie_id=" . $data['movieData']->id . "' method='post'>
    <button type='submit' name='update' value='true'>Update</button>
</form>

<h3>Comments:</h3>
<input type='text' id='message' placeholder='I love this movie...'>
<button id='addComment'>Comment</button>";
foreach ($data['comments'] as $cmnt) {
    echo "<p>" . $cmnt->username . ": " . $cmnt->comment . " " . $cmnt->created_at . "</p>";
}
echo "
<script type='application/javascript'>
async function postData(url, data) {
    // Default options are marked with *
    const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data) // body data type must match 
    });
    
    return response.json(); // parses JSON response into native JavaScript objects
}

document.getElementById('addComment').onclick = async () => {
    const message = document.getElementById('message').value;
    await postData('http://localhost/ikt-second-year/api/Api.php', {
        token: '123abc',
        action: 'comment',
        data: {
            user_id: ";
if (!empty($_SESSION["uid"])) echo $_SESSION["uid"];
echo ",
            comment: message,
            movie_id: " . $data['movieData']->id . "
        }
    });
    
    document.getElementById('message').value = '';
}
</script>
";