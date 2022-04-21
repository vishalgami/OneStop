var imgIndex = 0;
var imagesArray = [];

var productPic = productImg.split(",");

// alert(productBrand);

var productBrand = productBrand.replace(/\s/g, "%20");
//Image array initialization
// for (var i = 0; i < productPic.length; i++) {
//     // imagesArray[i - 1] = "puma-" + i + ".jpg";
//     imagesArray[i - 1] = productPic[i];
// }
//To display the image list
var imageList = document.getElementById("image-list");
for (var i = 0; i < productPic.length - 1; i++) {
    imageList.innerHTML +=
        "<img src='../images/product/" +
        productBrand +
        "/" +
        productPic[i] +
        "' class='imgList' alt='Image not found' onclick='setImgSource(this.src)'>";
}
//To set the main image on selecting the image from image list
function setImgSource(source) {
    var url = window.location.href;
    var arr = url.split("/");
    var result = arr[0] + "//" + arr[2];

    for (var i = 0; i < productPic.length - 1; i++) {
        var checkImg =
            result + "/OneStop/images/product/" + productBrand + "/" + productPic[i];
        if (checkImg == source) {
            imgIndex = i;
        }
    }
    setImage();
}
//Set the main image
function setImage() {
    mainImg.innerHTML =
        "<img src='../images/product/" +
        productBrand +
        "/" +
        productPic[imgIndex] +
        "' class='mainImg' alt='Image not found'>";
}
//To preview the selected image
var mainImg = document.getElementById("main-img");
mainImg.innerHTML =
    "<img src='../images/product/" +
    productBrand +
    "/" +
    productPic[imgIndex] +
    "' class='mainImg' onclick='setImgSource(this.src) alt='Image not found'>";
//select the previous image
function left() {
    if (imgIndex == 0) {
        imgIndex = productPic.length - 2;
    } else {
        imgIndex -= 1;
    }
    setImage();
}
//select the next image
function right() {
    if (imgIndex == productPic.length - 2) {
        imgIndex = 0;
    } else {
        imgIndex += 1;
    }
    setImage();
}


function addList() {
    alert("Product successfully added to the wishlist.");
}
//Jquery to animate the main image using click event
$(".leftBtn").click(function() {
    console.log("animate the main image");
    $(".mainImg").hide().fadeIn(1000);
});
$(".rightBtn").click(function() {
    $(".mainImg").hide().fadeIn(1000);
});
$(".imgList").click(function() {
    $(".mainImg").hide().fadeIn(1000);
});