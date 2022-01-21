// - sidebar

var isOpened = false;

function checkIfNavIsOpened() {
    !isOpened ? openNav() : closeNav()
}

function openNav() {  
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("header").style.marginLeft = "250px";
    isOpened = true;
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("header").style.marginLeft = "0";
    isOpened = false;
  }

// - sidebar

// - background