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
<input type='text' id='message' placeholder='I love this movie...'>
<button id='addComment'>Comment</button>

<script type='application/javascript'>
async function postData(url, data) {
<<<<<<< HEAD
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
    
=======
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
>>>>>>> origin/api
    await postData('http://localhost/ikt-second-year/api/Api.php', {
        token: '123abc',
        action: 'comment',
        data: {
<<<<<<< HEAD
            comment: message,
            movie_id: " . $data->id . ",
            user_id: ";
if (!empty($_SESSION["uid"])) echo $_SESSION["uid"];
echo "
        }
    })
=======
            user_id: "; if (!empty($_SESSION["uid"])) echo $_SESSION["uid"];
echo ",
           comment: document.getElementById('message').value,
            movie_id: " . $data->id . "
        }
    });
>>>>>>> origin/api
    
    document.getElementById('message').value = '';
}
</script>
";