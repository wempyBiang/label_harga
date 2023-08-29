const jmlSatuan1 = document.getElementById("jml-satuan-1");
const harga1 = document.getElementById("harga-1");
const hargaSatuan1 = document.getElementById("harga-satuan-1");
const satuan1 = document.getElementById("satuan-1");

const jmlSatuan2 = document.getElementById("jml-satuan-2");
const harga2 = document.getElementById("harga-2");
const hargaSatuan2 = document.getElementById("harga-satuan-2");
const satuan2 = document.getElementById("satuan-2");

const jmlSatuan3 = document.getElementById("jml-satuan-3");
const harga3 = document.getElementById("harga-3");
const hargaSatuan3 = document.getElementById("harga-satuan-3");
const satuan3 = document.getElementById("satuan-3");


jmlSatuan1.addEventListener("blur", function () { 
    console.log(harga1.value);
    if (harga1.value=="") {
        alert("Mohon isi Harga terlebih dahulu!!");
    } else if (satuan1.value=="") {
        alert("Mohon isi Satuan terlebih dahulu!!");
    }
     else if (jmlSatuan1.value=="") {
        alert("Mohon isi Jumlah Barang dahulu!!")
    } else {
        var hargaPcs = harga1.value/jmlSatuan1.value;
        hargaSatuan1.textContent = hargaPcs;
    }
 });

 jmlSatuan2.addEventListener("blur", function () { 

    if (harga2.value=="") {
        alert("Mohon isi Harga terlebih dahulu!!");
    } else if (satuan2.value=="") {
        alert("Mohon isi Satuan terlebih dahulu!!");
    }
     else if (jmlSatuan2.value=="") {
        alert("Mohon isi Jumlah Barang dahulu!!")
    } else {
        var hargaPcs = harga2.value/jmlSatuan2.value;
        hargaSatuan2.textContent = hargaPcs;
    }
 });

 jmlSatuan3.addEventListener("blur", function () { 
    console.log(harga3.value);
    if (harga3.value=="") {
        alert("Mohon isi Harga terlebih dahulu!!");
    } else if (satuan3.value=="") {
        alert("Mohon isi Satuan terlebih dahulu!!");
    }
     else if (jmlSatuan3.value=="") {
        alert("Mohon isi Jumlah Barang dahulu!!")
    } else {
        var hargaPcs = harga3.value/jmlSatuan3.value;
        hargaSatuan3.textContent = hargaPcs;
    }
 });

