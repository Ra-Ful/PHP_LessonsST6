<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Запрос 2 с POST параметрами
    <script>
        let data = {
            a: 100,
            b: 2
        };

        fetch('ajax_02.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })

            .then(response => {
                return response.json();
            })

            .then(data => {
                console.dir(data);
                alert(data.c);
            });
    </script>

</body>

</html>