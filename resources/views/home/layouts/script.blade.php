<script src="https://kit.fontawesome.com/79e1832a3e.js" crossorigin="anonymous"></script>
  <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
    var loader = document.querySelector('.loader')
    var content = document.querySelector('.content')
    window.addEventListener('load', function() {
      loader.style.display = "none"
      content.style.display = "block"
    })
    
    //loading
    $(document).ready(function() {
      $('.your-class').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false
      });
    });
  </script>
  <script>
     var imagehover = document.querySelector('#slideLeft')
        var image2hover = document.querySelector('#slideRight')

        function bigimg(x) {
            imagehover.style.display = "block"
            imagehover.style.transition = "2s"
            imagehover.style.marginLeft = "0px"
            image2hover.style.display = "block"
            image2hover.style.transition = "2s"
            image2hover.style.marginRight = "0px"
        }

        function normalImg(x) {
            imagehover.style.display = "none"
            imagehover.style.transition = "2s"
            imagehover.style.marginLeft = "-100px"
            image2hover.style.display = "none"
            image2hover.style.transition = "2s"
            image2hover.style.marginRight = "-100px"
        }
 //navimage
 let thumbnails = document.getElementsByClassName('thumbnail')

 let activeImages = document.getElementsByClassName('active')

 for (var i = 0; i < thumbnails.length; i++) {

     thumbnails[i].addEventListener('click', function () {
         console.log(activeImages)
         if (activeImages.length > 0) {
             activeImages[0].classList.remove('active')
         }


         this.classList.add('active')
         document.getElementById('featured').src = this.src
     })
 }


 let buttonRight = document.getElementById('slideRight');
 let buttonLeft = document.getElementById('slideLeft');

 buttonLeft.addEventListener('click', function () {
     document.getElementById('slider').scrollLeft -= 180
 })

 buttonRight.addEventListener('click', function () {
     document.getElementById('slider').scrollLeft += 180
 })

 const cover = document.querySelector(".screen-image__cover");
 cover.addEventListener("mousemove", function (e) {
     const screenImage = document.querySelector(".screen-image");
     const image = document.querySelector(".screen-image__img");
     image.style = "width: auto;height:auto;max-height:unset";

     let imageWidth = image.offsetWidth;
     let imageHeight = image.offsetHeight;
     const screenWidth = screenImage.offsetWidth;
     const screenHeight = screenImage.offsetHeight;
     const spaceX = (imageWidth / 2 - screenWidth) * 2;
     const spaceY = (imageHeight / 2 - screenHeight) * 2;
     imageWidth = imageWidth + spaceX;
     imageHeight = imageHeight + spaceY;

     let x =
         e.pageX - screenImage.offsetParent?.offsetLeft - screenImage.offsetLeft;
     let y = e.pageY - screenImage.offsetParent?.offsetTop - screenImage.offsetTop;

     const positionX = (imageWidth / screenWidth / 2) * x;
     const positionY = (imageHeight / screenHeight / 2) * y;

     image.style = `left: ${-positionX}px;top: ${-positionY}px;width: auto;height:auto;max-height:unset;transform:none;`;
 });

 cover.addEventListener("mouseleave", function (e) {
     const image = document.querySelector(".screen-image__img");
     image.style = ``;
 });
</script>