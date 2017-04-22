window.onload = function(){
    var m = document.getElementsByClassName("bead");
    for (var i = 0; i < m.length; i++){
        m[i].onclick = function () {
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