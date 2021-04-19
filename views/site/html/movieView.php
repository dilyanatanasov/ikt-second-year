<?php

echo "
<h1>$data->title</h1>
<p>$data->description</p>
<p>$data->main_actor</p>
<p>$data->duration</p>
<p>$data->rating</p>
<p><img width='300px' src='$data->thumbnail'></p>
<form action='" . APPLICATION_PATH . "index.php?controller=movies&action=update&movie_id=$data->id' method='post'>
    <button type='submit' name='update' value='true'>Update</button>
</form>
<h3>Comments:</h3>
<input id='message' type='text' placeholder='I like the movie...'>
<button id='addComment' type='submit'>Comment</button>
<p>Dilyan Atanasov: I like Borat as well 12/04/2021</p>
";

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
    await postData('http://localhost/ikt-second-year/api/Api.php', {
        token: '123abc',
        action: 'comment',
        data: {
            user_id: "; if (!empty($_SESSION["uid"])) echo $_SESSION["uid"];
echo ",
           comment: document.getElementById('message').value,
            movie_id: " . $data->id . "
        }
    });
    
    document.getElementById('message').value = '';
}
</script>
";