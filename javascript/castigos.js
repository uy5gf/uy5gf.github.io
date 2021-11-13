var num = 0;

numTotal = 36; //numero total de castigos

function showAll() {
    num++;

    for(i=1; i<=numTotal; i++) {
        document.getElementById("imagen"+i).style.display = "inline-block";
        document.getElementById("imagen"+i).style.marginLeft = "0px";
    }

    if (num%2!=0) {
        document.getElementById("castigos").style.display = "block";
    } else {
        document.getElementById("castigos").style.display = "none";
    }
}

function rollOne() {
    res = Math.floor((Math.random() * numTotal) + 1);
    num = 0;
    console.log('rollOne', num);
    for(i=1; i<=numTotal; i++) {
        if (i!= res) {
            document.getElementById("imagen"+i).style.display = "none";
        } else {
            document.getElementById("imagen"+res).style.display = "block";
            document.getElementById("imagen"+res).style.marginLeft = "40%";
        }
    }
    document.getElementById("castigos").style.display = "block";
}
