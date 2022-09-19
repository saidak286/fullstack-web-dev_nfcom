function hitung(x){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    // var total = frm.hasil.value;

    switch (x){
        case 'btn_tambah':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 + a2; //rumus
                frm.hasil.value = total; //penempatan hasil
            } 
            break;
        case 'btn_kurang':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 - a2; //rumus
                frm.hasil.value = total; //penempatan hasil
            } 
            break;
        case 'btn_kali':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 * a2; //rumus
                frm.hasil.value = total; //penempatan hasil
            } 
            break;
        case 'btn_bagi':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 / a2; //rumus
                frm.hasil.value = total; //penempatan hasil
            } 
            break;
        case 'btn_pangkat':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 ** a2; //rumus
                frm.hasil.value = total; //penempatan hasil
            } 
            break;
        default:
            break;
    }

    // if(total == 'btn_tambah'){
    //     var x = a1 + a2; //rumus
    //     frm.hasil.value = x; //penempatan hasil
    // }
    // else if(total == 'btn_kurang'){
    //     var x = a1 - a2; //rumus
    //     frm.hasil.value = x; //penempatan hasil
    // }
    // else if(total == 'btn_kali'){
    //     var x = a1 * a2; //rumus
    //     frm.hasil.value = x; //penempatan hasil
    // }
    // else if(total == 'btn_bagi'){
    //     var x = a1 / a2; //rumus
    //     frm.hasil.value = x; //penempatan hasil
    // }
    // else if(total == 'btn_pangkat'){
    //     var x = Math.pow(a1,a2); //rumus
    //     frm.hasil.value = x; //penempatan hasil
    // }
    // else{
    //     alert("Harap masukkan angka!!");
    // }
}


function tambah(){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 + a2; //rumus
    frm.hasil.value = total; //penempatan hasil
}

function kurang(){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    /*
    var tombol = frm.tombol.value;
    switch (tombol) {
        case 'btn_tambah':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 + a2; //rumus
                frm.hasil.value = total; //penempatan hasil 
            } 
            break;
        case 'btn_kurang':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 - a2; //rumus
                frm.hasil.value = total; //penempatan hasil 
            } 
            break;
    
        default:
            break;
    }
    */
    if (isNaN(a1) || isNaN(a2)) {
        alert("Harap masukkan angka!!");
    }    
    else {
       var total = a1 - a2; //rumus
       frm.hasil.value = total; //penempatan hasil 
    } 
    
}

function pangkat(){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = Math.pow(a1,a2); //rumus
    frm.hasil.value = total; //penempatan hasil
}
