

let input = document.getElementById('formUsername')
let hasil = document.getElementById('hasilUsername')

input.addEventListener('input', function () {
    hasil.innerHTML = input.value
})


let submitForm = document.getElementById('submitForm')

// input
let username = document.getElementById('username')
let nama = document.getElementById('nama')
let alamat = document.getElementById('alamat')

// text
let usernameText = document.getElementById('usernameText')
let namaText = document.getElementById('namaText')
let alamatText = document.getElementById('alamatText')

// username.addEventListener('input', function(e) {
//     e.preventDefault()
//     let errorUsername = document.getElementById('errorUsername')
//     // validasi username
//     if (username.value == '' || username.value == null) {
//         errorUsername.innerHTML = 'Username tidak boleh kosong'
//         valid = false
//     }
//     else if (username.value.length < 3) {
//         errorUsername.innerHTML = 'Username minimal 3 karakter'
//         valid = false
//     }
//     else if (username.value.length > 30) {
//         errorUsername.innerHTML = 'Username maksimal 30 karakter'
//         valid = false
//     }
//     else {
//         errorUsername.innerHTML = ''
//     }

// })

submitForm.addEventListener('submit', function(event) {
    // validasi
    // username : harus diisi, minimal 3 huruf, dan maksimal 30 huruf
    // nama : harus diisi, minimal 3 huruf
    // alamat : harus diisi, minimal 10 huruf

    let errorUsername = document.getElementById('errorUsername')
    let errorNama = document.getElementById('errorNama')
    let errorAlamat = document.getElementById('errorAlamat')

    event.preventDefault()
    let valid = true

    // validasi username
    if (username.value == '' || username.value == null) {
        errorUsername.innerHTML = 'Username tidak boleh kosong'
        valid = false
    }
    else if (username.value.length < 3) {
        errorUsername.innerHTML = 'Username minimal 3 karakter'
        valid = false
    }
    else if (username.value.length > 30) {
        errorUsername.innerHTML = 'Username maksimal 30 karakter'
        valid = false
    }
    else {
        errorUsername.innerHTML = ''
    }

    // validasi nama
    if (nama.value == '' || nama.value == null) {
        errorNama.innerHTML = 'Nama tidak boleh kosong'
        valid = false
    }
    else if (nama.value.length < 3) {
        errorNama.innerHTML = 'Nama minimal 3 karakter'
        valid = false
    }
    else {
        errorNama.innerHTML = ''
    }

    // alamat
    if (alamat.value == '' || alamat.value == null) {
        errorAlamat.innerHTML = 'ALamat tidak boleh kosong'
        valid = false
    }
    else if (alamat.value.length < 10) {
        errorAlamat.innerHTML = 'ALamat minimal 10 karakter'
        valid = false
    }
    else {
        errorAlamat.innerHTML = ''
    }

    // jika berhasil/tidak submit form
    if (valid) {
        usernameText.innerHTML = 'Username : ' + username.value
        namaText.innerHTML = 'Nama : ' + nama.value
        alamatText.innerHTML = 'Alamat : ' + alamat.value
    }
    else {
        usernameText.innerHTML = 'Username :'
        namaText.innerHTML = 'Nama :'
        alamatText.innerHTML = 'Alamat :'
    }


})