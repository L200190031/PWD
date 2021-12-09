//Mengambil elemen2 yang ada dalam html
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombolcari');
var container = document.getElementById('container');

//Menambahkan suatu event di dalam field keyword
keyword.addEventListener('keyup', function(){
	//Membuat objek ajax
	var xhr = new XMLHttpRequest();

	//Cek Keseiapan Ajax
	xhr.onreadystatechange = function(){
		if (xhr.readyState == 4 && xhr.status == 200) {
			container.innerHTML = xhr.responseText;
		}
	}

	//Membuat ajax
	xhr.open('GET', 'ajax/mahasiswa.php?keyword='+keyword.value,true);
	xhr.send();
});