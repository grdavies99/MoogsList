
// $jsonfile = file_get_contents("isbn.json");
// $array = json_decode($jsonfile, true);
// var_dump($array['title']);
<!doctype html>
        <html>
        <body>
            <form action="http://127.0.0.1:8080/test.js" method="post">
                <input type="text" name="isbn" /><br />
                <button>Save</button>
            </form>
        </body>
        </html>