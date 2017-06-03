var input = document.querySelector("[name=tamanho]");
var output = document.querySelector("[name=tamanho]+output");


input.oninput = function () {
	output.value = input.value;
};
