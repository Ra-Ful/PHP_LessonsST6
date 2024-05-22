<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Запрос с параметрами 
    <script>
        let params = {
            a: 1,
            b: 2
        };
        let url = new URL('ajax_01.php',document.baseURI);
        url.search = new URLSearchParams(params);

        alert(url);

        fetch(url, {
                headers: {
                    'Accept': 'application/json'
                }
            })

            .then(response => {
                return response.json();
            })

            .then(data => {
                alert(data.c);
                console.dir(data);
            });
    </script>

</body>

</html>