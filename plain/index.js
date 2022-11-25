function getTypes(){
    var empty;
    console.log("Here are some types of vars:");
    console.log(typeof(1));
    console.log(typeof("1"));
    console.log(typeof(empty));
    console.log(typeof(null));
}
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function processForm() {
    console.log("processing");
    const myForm = document.getElementById('myForm');
    console.log(document.getElementById('myForm-name').value);
    console.log(document.getElementById('myForm-age').value);

    // now do something with those shitty vars.
    closeForm();
}
