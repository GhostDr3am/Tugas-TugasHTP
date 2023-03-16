// Salam pembuka
let nama = prompt('Masukkan Nama anda :');
alert('Selamat Datang di kalkulator javaScript ' + nama);
var x = document.getElementById("a").innerHTML = "Selamat Datang Di kalkulator JavaScript " + nama;

var y = document.getElementById("b").innerHTML = "Mari Berhitung Sampai Ajal menjemput....🤣🤣🤣"

var z = document.getElementById("c").innerHTML = "Jangan Lupa Mampir Lagi ya kak " + nama;

// kalkulator tambah
function tambah() {
  let frm = document.getElementById('kalkulator');
  let a1 = parseFloat(frm.angka.value);
  let a2 = parseFloat(frm.angka2.value);


  let input = a1 + a2;
  let no_input = 'Maaf angka belum terisi';
  let total = (a1 && a2 != '') ? input : no_input;

  frm.hasil.value = total;
}

// kalkulator kurang
function kurang() {
  let frm = document.getElementById('kalkulator');
  let a1 = parseFloat(frm.angka.value);
  let a2 = parseFloat(frm.angka2.value);

  let input = a1 - a2;
  let no_input = 'Maaf angka belum terisi';
  let total = (a1 && a2 != '') ? input : no_input;

  frm.hasil.value = total;
}

//kalkulator kali
function kali() {
  let frm = document.getElementById('kalkulator');
  let a1 = parseFloat(frm.angka.value);
  let a2 = parseFloat(frm.angka2.value);
  let input = a1 * a2;
  let no_input = 'Maaf angka belum terisi';
  let total = (a1 && a2 != '') ? input : no_input;

  frm.hasil.value = total;
}

//kalkulator bagi
function bagi() {
  let frm = document.getElementById('kalkulator');
  let a1 = parseFloat(frm.angka.value);
  let a2 = parseFloat(frm.angka2.value);
  let input = a1 / a2;
  let no_input = 'Maaf angka belum terisi';
  let total = (a1 && a2 != '') ? input : no_input;

  frm.hasil.value = total;
}

// kalkulator pangkat
function pangkat() {
  let frm = document.getElementById('kalkulator');
  let a1 = parseFloat(frm.angka.value);
  let a2 = parseFloat(frm.angka2.value);
  let input = a1 ** a2;
  let no_input = 'Maaf angka belum terisi';
  let total = (a1 && a2 != '') ? input : no_input;

  frm.hasil.value = total;
}