window.onload = function(){
    var muutuja = document.getElementsByClassName("bead");
    for (var i = 0; i < muutuja.length; i++){
        muutuja[i].onclick = function () {
            var beadPos = getComputedStyle(this,null).getPropertyValue("float");
            if (beadPos == "left"){
                this.style.cssFloat = "right";
            }
            else if (beadPos == "right"){
                this.style.cssFloat = "left";
            }

        }
    }
}