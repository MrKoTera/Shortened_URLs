function copyTextFromInput() {
    var copyText = document.getElementById("main_input");
    copyText.select();
    document.execCommand("copy");
    alert('Успешно скопировано');
}