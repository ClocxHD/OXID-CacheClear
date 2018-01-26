function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function wait() {
    document.getElementById("ft_tmp_clear").style.color = "red";
    document.getElementById("ft_tmp_clear").style.cursor = "wait";
    await sleep(2000);
    document.getElementById("ft_tmp_clear").style.color = "";
    document.getElementById("ft_tmp_clear").style.cursor = "default";
}

function ft_cachebtnclear(url) {
    wait();
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url, true);
    xhttp.send();
}