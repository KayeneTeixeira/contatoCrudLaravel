const button = document.querySelectorAll('.deleteCont')

var id

button.forEach((btn) => {
  btn.addEventListener('click', function () {
    id = btn.getAttribute('data-id')

  })
})

async function delete_contato() {
  await fetch('/delete/' + id).then(location.reload())
}
