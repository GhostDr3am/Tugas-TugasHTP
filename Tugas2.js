// memasukkkan data pegawai
let pegawai = 'Dedi Supriadi';
let jabatan = 'Staff';
let status = 'Menikah'; // Status bisa berupa 'Menikah' atau 'Selainnya'
let gajiPokok = '';


// Menghitung Gaji Pokok Pegawai
switch (jabatan) {
  case 'Manager': gajiPokok = 10000000; break;
  case 'Asisten Manager': gajiPokok = 8000000; break;
  case 'Staff': gajiPokok = 5000000; break;
  default: gajiPokok = 0;
}


// Rumus Tunjangan Jabatan
let tunjanganJabatan = 0.1; // 10%
let tjgnbgJabatan = gajiPokok * tunjanganJabatan;

// Rumus BPJS
let bpjs = gajiPokok * 0.1; // 10% 



// Tunjangan Menikah
let tjgnbgMenikah = '';
// menghitung tunjangan menikah
if (status == 'Menikah') {
  tjgnbgMenikah = 0.1 * gajiPokok;
} else {
  tjgnbgMenikah = 0;
}

let totalPendapatan = gajiPokok + tjgnbgJabatan + tjgnbgMenikah + bpjs;

document.write('Mencetak Data pegawai dan gaji' + '<br>'
  + 'Nama Pegawai : ' + pegawai + '<br>'
  + 'Jabatan : ' + jabatan + '<br>'
  + 'Status : ' + status + '<br>'
  + 'Gaji Pokok : ' + 'Rp. ' + gajiPokok + '<br>'
  + 'Tunjangan Jabatan : ' + 'Rp. ' + tjgnbgJabatan + '<br>'
  + 'Tunjangan Menikah : ' + 'Rp. ' + tjgnbgMenikah + '<br>'
  + 'BPJS : ' + 'Rp. ' + bpjs + '<br>'
  + '<h3>Jadi Total Pendapatannya senilai :</h3> ' + 'Rp. ' + totalPendapatan

);
