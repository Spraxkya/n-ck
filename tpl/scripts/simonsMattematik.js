const titles = ["SNÖKLOCKA", "FÖRGÄTMIGEJ", "VALLMO", "DINMAMMA", "VÅRTGÅRD", "TUSSILAGO", "FLÄDER", "REKTUM"];

document.getElementById('vernisage-title').innerHTML = titles[Math.floor(Date.now()/86400000) % titles.length];
