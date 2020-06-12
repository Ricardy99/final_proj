function lettersOnly(input) {
    var ipt = /[^a-z ]/gi;
    input.value = input.value.replace(ipt, "");
}

function numbersOnly(input) {
    var ipt = /[^0-9, -]/g;
    input.value = input.value.replace(ipt, "");
}

//avoiding characters like * & $ etc
function noSpecialChars(input) {
    var ipt = /[^a-z ^0-9 @._]/g;
    input.value = input.value.replace(ipt, "");
}

function myFunction() {
	alert("Thanks! ttyl");
	location.replace("index.php");
}
