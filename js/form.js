formSubmit(){
    var form = document.getElementById("form");
    name: form.name.value,
    console.log(form.name.value);
    form.submit();
    console.log("form submitted");
}