document.querySelectorAll('#short-url').forEach(shortUrl => {
  $shortUrlTarget = shortUrl.querySelector('#short-url-target').getAttribute('href');

  $shortUrlCopyButton = shortUrl.querySelector('#short-url-copy');

  $shortUrlCopyButton.addEventListener('click', () => {
    navigator.clipboard.writeText($shortUrlTarget);
  });
})

//выполняет функцию для копирования ссылок в буфер обмена