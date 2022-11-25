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
    const myForm = document.getElementById('myForm');
    name = document.getElementById('myForm-name').value
    age = document.getElementById('myForm-age').value

    // now do something with those shitty vars.
    // FIXME what the hell why does inverted logic work
    if(age<18){
        closeForm();
    }
    else {
        document.getElementById('myForm').innerHTML = '';
    }
}
