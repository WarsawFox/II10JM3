<!DOCTYPE html>
<html>
<title>Dane z formularza</title>
<meta charset='UTF-8'>

<body>
e-mail <b><?= trim($_POST["email"]).'<br>'; ?></b>
haslo <b><?= trim($_POST["haslo"]).'<br>'; ?></b>
dorosłość: <b><?= trim($_POST["czy18"]).'<br>'; ?></b>
</body>

</html>