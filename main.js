document.querySelectorAll('#short-url').forEach(shortUrl => { //выбираются все селекторы по идентификаторку short-url
  $shortUrlTarget = shortUrl.querySelector('#short-url-target').getAttribute('href'); //в short-url-target полуаем атрибут href(где будут ссылки). хранитс в переменную shorturltarget

  $shortUrlCopyButton = shortUrl.querySelector('#short-url-copy'); //выбираем селектор по идентиф. shorurlcopy (кнопка)

  $shortUrlCopyButton.addEventListener('click', () => { //обработчик событий
    navigator.clipboard.writeText($shortUrlTarget); //копирует текст из shorturltaregt
  });
})

//выполняет функцию для копирования ссылок в буфер обмена