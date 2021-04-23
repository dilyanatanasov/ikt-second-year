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
<input type='text' id='message' placeholder='I love this movie...'>
<button id='addComment'>Comment</button>

<script type='application/javascript'>
async function postData(url, data) {
    const response = await fetch(url, {
       method: 'POST', // GET, POST, PATCH, PUT, DELETE ... 
       headers: {
           'Content-Type': 'application/json'
       },
       body: JSON.stringify(data) // 'dasadsa'
    });

    return response.json()
}

document.getElementById('addComment').onclick = async () => {
    const message = document.getElementById('message').value;
    
    await postData('http://localhost/ikt-second-year/api/Api.php', {
        token: '123abc',
        action: 'comment',
        data: {
            comment: message,
            movie_id: " . $data->id . ",
            user_id: ";
if (!empty($_SESSION["uid"])) echo $_SESSION["uid"];
echo "
        }
    })
    
    document.getElementById('message').value = '';
}
</script>
";