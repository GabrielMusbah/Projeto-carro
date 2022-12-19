var uploadField = document.getElementById("file");

uploadField.onchange = function() {
    if(this.files[0].size > 2200000){
       alert("Arquivo grande de mais");
       this.value = "";
    };
};