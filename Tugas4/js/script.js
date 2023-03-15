
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