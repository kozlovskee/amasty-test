<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATM</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <div class="wrapper">
      <div class="atm">
        <h1 class="title">Банкомат</h1>
        <form class="form" id="form" method="POST" action="script.php">
          <label class="label" for="denomination">
            <span >Номинал в наличии</span>
            <input type="text" name="denomination" id="denomination" placeholder="5, 10, 20, 50, 100, 200, 500" readonly="readonly">
          </label>
          <label class="label" for="sum">
            <span>Ваша сумма</span>
            <input type="text" name="sum" id="sum" pattern="^[0-9]+$" title="Введите положительное целое число без пробелов!">
          </label>
          <button class="btn" type="submit">Отправить</button>
        </form>
        <div class="response">
            <p>Ответ:</p>
            <table class="table" id="table">
            </table>
        </div>
      </div>
    </div>
  </main>

  <script src="script.js"></script>
</body>
</html>