//This file controls the gallery on the index page
slideIndex = 0;

//next and previous button functionality
function plusSlides(x)
{
  showSlides(slideIndex += x);
}

//Shows the desired slide to the user
function showSlides(x)
{
  var i;
  var slideArr = document.getElementsByClassName("slides");
  var captionText = document.getElementById("caption");
  if (x > slideArr.length - 1)
  {
    slideIndex = 0;
  }
  if (x < 0)
  {
    slideIndex = slideArr.length-1;
  }
  for (i = 0; i < slideArr.length; i++)
  {//Hides all slide class divs from user
    slideArr[i].style.display = "none";
  }
  //slideArr[slideIndex-1].style.display = "block";
  slideArr[slideIndex].style.display = "block";
}
