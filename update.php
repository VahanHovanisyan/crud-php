<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>upate</title>
</head>
<body>
<form action="vendor/create.php" method="post" class="form">
    <label class="form__label">
      Title
      <input type="text" name="title" class="input-reset form__input">
    </label>
    <label class="form__label">
      Description
      <textarea name="descr" ></textarea>
    </label>
    <label class="form__label">
      Price
      <input type="number" name="price" class="input-reset form__input">
    </label>
    <button class="btn-reset form__btn">add new product</button>
  </form>
</body>
</html>