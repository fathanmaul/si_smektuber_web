function nav() {
  if (document.getElementById("navbar").style.marginLeft == "-287px") {
    document.getElementById("navbar").style.marginLeft = "0px";
    return; 
  }else{
    document.getElementById("navbar").style.marginLeft = "-287px";
    return;
  }
}